<?php

namespace Midtrans;
session_start();
require_once dirname(__FILE__) . '/../Midtrans.php';
require_once dirname(__FILE__) . '/../../asset/koneksi.php';
//Set Your server key
Config::$serverKey = "SB-Mid-server-q_E6lRDxEPyAgodOYFW5dtF9";



// Uncomment for production environment
// Config::$isProduction = true;

// Uncomment to enable sanitization
// Config::$isSanitized = true;

// Uncomment to enable 3D-Secure
// Config::$is3ds = true;

// Required
$transaction_details = array(
    'order_id' => rand(),
    'gross_amount' => 145000, // no decimal allowed for creditcard
);
$id_pelanggan = $_SESSION['id_customer'];
$query = $koneksi->query("SELECT * FROM tbl_keranjang_belanja WHERE id_customer='625002'");
$row = $query->fetch_assoc();
 
$item1_details= array(
    'id' => 'TRS001',
    'price' => "$row[harga_produk]",
    'quantity' => "$row[qty]",
    'name' => "$row[nama_produk]", 
); 
        
$item_details= array($item1_details);
             
// Optional
$billing_address = array(
    'first_name'    => "Andri",
    'last_name'     => "Litani",
    'address'       => "Mangga 20",
    'city'          => "Jakarta",
    'postal_code'   => "16602",
    'phone'         => "081122334455",
    'country_code'  => 'IDN'
);

// Optional
$shipping_address = array(
    'first_name'    => "Obet",
    'last_name'     => "Supriadi",
    'address'       => "Manggis 90",
    'city'          => "Jakarta",
    'postal_code'   => "16601",
    'phone'         => "08113366345",
    'country_code'  => 'IDN'
);

// Optional
$customer_details = array(
    'first_name'    => "Andri",
    'last_name'     => "Litani",
    'email'         => "andri@litani.com",
    'phone'         => "081122334455",
    'billing_address'  => $billing_address,
    'shipping_address' => $shipping_address
);

// Fill SNAP API parameter
$params = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details ,
);

try {
    // Get Snap Payment Page URL
    $paymentUrl = Snap::createTransaction($params)->redirect_url;
  
    // Redirect to Snap Payment Page
    header('Location: ' . $paymentUrl);
}
catch (Exception $e) {
    echo $e->getMessage();
}
