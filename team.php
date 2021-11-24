<!DOCTYPE html>
<html lang="en">
<?php include('adminPanel/includes/conn.php'); ?>
<?php include_once('includes/head.php'); ?>


<body>

  <!-- ======= Header ======= -->
  <?php include_once('includes/header.php'); ?><!-- End Header -->

  <main id="main">

    <!-- ======= Our Team Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Team</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Our Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Team Section ======= -->
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">
 <?php $query = "select * from tbl_students";
       $go = mysqli_query($con,$query);
 while($rec = mysqli_fetch_array($go)){
 ?>

<div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="adminPanel/uploads/<?php echo $rec['student_photo']; ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $rec['student_name']; ?></h4>
                <span><?php echo $rec['student_email']; ?></span>
                <p>Ut enim possimus nihil cupiditate beatae. Veniam facere quae non qui necessitatibus rerum eos vero. Maxime sit sunt quo dolor autem est qui quaerat aliquid. Tenetur possimus qui enim.</p>
              </div>
            </div>
          </div>
<?php } ?>
       

        




        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include_once('includes/footer.php'); ?>

</body>

</html>