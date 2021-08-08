<!-- extras modal -->
<div class="modal fade" id="extras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"> Keranjang Belanja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <div class="card-body table-responsive p-0" style="height: 500px;">
                  <table  class="table table-head-fixed text-nowrap">
                    <?php
                    include '../asset/koneksi.php';
                    $id = $_SESSION['id_customer'];
                    $query = "SELECT * FROM tbl_keranjang_belanja where id_customer='$id'";
                    $result = mysqli_query($koneksi, $query);
                    while($data = mysqli_fetch_assoc($result)){
                             $id_produk=$data['id_produk'];
                    ?>
                    <div class="pb-3">
                        <div class="p-3 rounded shadow-sm bg-white">
                            <div class="d-flex border-bottom pb-3">
                                <?php
                                $query2 = "SELECT * FROM tbl_produk where id_produk='$id_produk'";
                                $result2 = mysqli_query($koneksi, $query2);
                                $data2 = mysqli_fetch_assoc($result2);
                                ?>
                                <div class="text-muted mr-3">
                                    <img alt="#" src="../pages/data_produk/upload/<?php echo $data2['gambar'] ?>" class="img-fluid order_img rounded">
                                </div>
                                <div>
                                    <p class="mb-0 font-weight-bold"><a href="restaurant.html" class="text-dark"><?php echo $data2['jenis_produk'] ?></a></p>
                                    <p class="mb-0">Punjab, India</p>
                                    <p>ORDER #321DERS</p>
                                    <p class="mb-0 small"><a href="status_canceled.html">View Details</a></p>
                                </div>
                                <div class="ml-auto">
                                    
                                    <p class="small font-weight-bold text-center"><i class="feather-clock"></i> 06/04/2020</p>
                                </div>
                            </div>
                            <div class="d-flex pt-3">
                                
                                <div class="d-flex align-items-center">
                                    <div class="ml-auto">
                                        <span class="count-number"><button type="button" class="btn-sm left dec btn btn-outline-secondary"> <i class="feather-minus"></i> </button><input class="count-number-input" type="text" readonly="" value="1"><button type="button" class="btn-sm right inc btn btn-outline-secondary"> <i class="feather-plus"></i> </button></span>
                                    </div>
                                </div>
                                <div class="text-muted m-0 ml-auto mr-3 small">Harga<br>
                                    <span class="text-dark font-weight-bold">Rp.<?php echo $data2['harga_produk'] ?></span>
                                </div>
                                <div class="text-right">
                                    <a href="/eFoody2/front_page/asset/act_delete_item.php?item_id=<?php echo $data['id_transaksi'] ?>" class="btn btn-outline-primary px-3">Batalkan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </table>
               
            </div>
        </div>
        
        <div class="modal-footer p-0 border-0">
            <div class="col-6 m-0 p-0">
                <button type="button" class="btn border-top btn-lg btn-block" data-dismiss="modal">Close</button>
            </div>
            <div class="col-6 m-0 p-0">
                <button type="button" class="btn btn-primary btn-lg btn-block">Checkout</button>
            </div>
        </div>
    </div>
</div>
</div>