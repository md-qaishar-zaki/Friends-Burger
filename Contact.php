<!DOCTYPE html>
<html>

<?php include "header.php" ?>

<div style="background-color: #fff !important; position: relative;">
 <!-- contact section -->
 <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
        Leave Us A Message
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" class="form-control" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your Email" />
              </div>
              <div>                 
              </div>
              <div>
              <textarea class="form-control form-field form-area-field" row="8" cols="30" name="wb_input_3" required="required" placeholder="Massege" style="min-height: 160px;"></textarea>
              </div>
              <div class="btn_box">
                <button>
                  Send Massege
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
</div>
  <?php include "footer.php" ?>
</body>

</html>