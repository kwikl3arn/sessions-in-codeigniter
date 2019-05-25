      <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                                <!--   <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: akshya@gmail.com</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +91 9966990022</span></a>-->
                            </div>

                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">


                                <!-- Login -->
                                <div class="login">
                                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>
                                            <?php $result = $this->session->userdata['sessiondata'];

                                            echo $result['user_name']; ?></span></a>
                                </div>
                                <div class="login">
                                    <a href="<?php echo base_url() ?>Demo_Controller/lout"><i class="fa fa-power-off" aria-hidden="true"></i> <span>Logout</span></a>
                                </div>
                                <!-- Cart -->
                                <!--
                                <div class="cart">
                                    <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity">(1)</span></span></a>
                                </div>
-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- ##### Hero Area End ##### -->
<style>
    section.dil {
        background: url(<?php echo base_url();?>Assets/img/core-img/d.jpg);
        background-position: center;
        background-repeat: no-repeat;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

<!--plant masters-->
<section class="plant-M dil">

    <div class="container">
        <div class="row">

            <div class="container">
                <nav aria-label="breadcrumb">

                    <h1 style="font-family:Verdana;">
                        <center><br></center>
                    </h1>


                </nav>
                <center><img src="<?php echo base_url(); ?>Assets/img/core-img/logo-03.jpg" alt="" width="250"></center><br><br><br><br>
            </div>



        </div>
    </div>
    </div>
    </div>

</section>



<!-- ##### Footer Area Start ##### -->
  <footer class="footer-area bg-img" style="background-image: url(<?php echo base_url(); ?>Assets/img/bg-img/3.jpg);">
      <!-- Main Footer Area -->


      <!-- Footer Bottom Area -->
      <div class="footer-bottom-area">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="border-line"></div>
                  </div>
                  <!-- Copywrite Text -->
                  <div class="col-12 col-md-6">
                      <div class="copywrite-text">
                          <p style="text-align: center">&copy;Copyright &copy; All rights reserved by <a href="#">kwikl</a> </p>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </footer>
  <!-- ##### Footer Area End ##### -->

  <!-- ##### All Javascript Files ##### -->
  <!-- jQuery-2.2.4 js -->
  <script src="<?php echo base_url(); ?>Assets/js/jquery/jquery-2.2.4.min.js"></script>
  <script src='<?php echo base_url(); ?>Assets/select2/dist/js/select2.min.js' type='text/javascript'></script>
  <!-- Popper js -->
  <script src="<?php echo base_url(); ?>Assets/js/bootstrap/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="<?php echo base_url(); ?>Assets/js/bootstrap/bootstrap.min.js"></script>
  <!-- All Plugins js -->
  <script src="<?php echo base_url(); ?>Assets/js/plugins/plugins.js"></script>
  <!-- Active js -->
  <script src="<?php echo base_url(); ?>Assets/js/active.js"></script>
  <script src="<?php echo base_url(); ?>Assets/pagenation/scripts/jQuery.sortpaginate.js"></script>

  <script src="<?php echo base_url(); ?>Assets/js/jquery-ui.js"></script>
  <script src="<?php echo base_url(); ?>Assets/js/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>Assets/js/datatables/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>Assets/js/datatables/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url(); ?>Assets/js/datatables/buttons.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>Assets/js/datatables/jszip.min.js"></script>
  <script src="<?php echo base_url(); ?>Assets/js/datatables/pdfmake.min.js"></script>
  <script src="<?php echo base_url(); ?>Assets/js/datatables/vfs_fonts.js"></script>
  <script src="<?php echo base_url(); ?>Assets/js/datatables/buttons.html5.min.js"></script>
  <script src="<?php echo base_url(); ?>Assets/js/datatables/buttons.print.min.js"></script>
  <script src="<?php echo base_url(); ?>Assets/js/datatables/buttons.colVis.min.js"></script>
  <script src="<?php echo base_url(); ?>Assets/css/fancybox/fancybox.min.js"></script>
  <script type="text/javascript">
      var specialKeys = new Array();
      specialKeys.push(8); //Backspace
      $(function() {
          $(".numeric").bind("keypress", function(e) {
              var keyCode = e.which ? e.which : e.keyCode
              var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);

              return ret;
          });

      });
      $("#myTable").on('keypress', '.numeric', function(e) {

          var keyCode = e.which ? e.which : e.keyCode
          var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);

          return ret;
      });
  </script>
