<!DOCTYPE html>
<html lang="en">
<head>
<title>Techworx</title>
<?php include 'include/head-link.html';  ?>
</style>
</head>
<body>
<!-- header -->
<?php include 'include/header.html';  ?>
<!-- end header -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>News Details</li>
        </ol>
        <h2>News Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->
    <!--news  -->
  <section>
    <div id="news-page" class="container" data-aos="fade-up">

    </div>
  </section>
    <!-- end news -->
</main>
    <!-- footer -->
    <?php include 'include/footer.html';  ?>
    <?php include 'include/end-footer.html';  ?>
    <!-- end footer -->
    </body>
    <script>
       var new1= "<?php echo $_GET['new']; ?>";
            load_news(new1);
    </script>
</html>