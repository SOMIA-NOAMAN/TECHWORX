<!DOCTYPE html>
<html lang="ar">
<head>
<title>تيكوركس</title>
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
          <li><a href="index.php">الرئيسية</a></li>
          <li>الأخبار</li>
        </ol>
        <h2>تفاصيل الخبر</h2>

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
    <script>
        var new1= "<?php echo $_GET['new']; ?>";
             load_news(new1);
     </script>
</body>
</html>