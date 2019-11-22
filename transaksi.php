<?php 
include('header.php');
?>
<div class="hmm" style="height:80px; background:#333333;"></div>


 <section class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-2">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Checkout</h2>
          </div>
        </div>
       
          <div class="col-md-6 col-lg mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="unit-4 d-flex">
            <div class="unit-3-icon mr-3"><span class="text-primary flaticon-location"></span></div>
             
            <div>
                <h3>Alamat Pengiriman</h3>
                <b><?php echo $_POST['nama']; ?> </b> &nbsp;<?= $_POST['alamat'] . ', ' . $_POST['kota'] . ', ' . $_POST['kecamatan']; ?> </<b>
                
              </div>
            </div>
          </div>
   <br><br>
          <div class="col-md-6 col-lg mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="unit-4 d-flex">
             <div>
                 <table border="1">
                     <th>

                         <h3>Produk Dipesan</h3>

                     </th>
                     <th>
                         jumlah
                     </th>

                     <th>harga</th>


                <p><a href="#">Learn More</a></p>
                </table>
              </div>
            </div>
          </div>


   
      </div>
    </section> 
<?php 
include('footer.php');
?>