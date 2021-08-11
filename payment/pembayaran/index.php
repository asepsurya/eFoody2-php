<?php
    $base = $_SERVER['REQUEST_URI'];
?>

<form action="checkout-process.php" method="GET">
    <input type="submit" value="Pay with Snap Redirect">
</form>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-ik5hl2jz7zCIDyol"></script>