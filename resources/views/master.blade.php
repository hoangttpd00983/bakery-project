<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <link rel="icon" href="source/images/favicon.png" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="{{asset('')}}">
	<link rel="stylesheet" type="text/css" href="source/assets/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="source/assets/bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="source/assets/bootstrap/js/bootstrap.min.js"></script>
  <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="source/assets/engine1/style.css" />

    <!-- End WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="source/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="source/assets/css/common.css">
    <link rel="stylesheet" type="text/css" href="source/assets/fontawesome/css/all.css" crossorigin="anonymous">
     <script type="text/javascript" src="source/assets/js/quantity.js"></script>
    <script type="text/javascript" src="source/assets/fontawesome/js/all.js"></script>
    <!-- Start OWLCAROUSEL -->
    <link rel="stylesheet" href="source/assets/owlcarousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="source/assets/owlcarousel/dist/assets/owl.theme.default.min.css" />
    <script type="text/javascript" src="source/assets/js/owl-carousel.js"></script>
    <!-- End OWLCAROUSEL  -->
    <title>Luz Bakery</title>
  </head>
  <body>
   <div class="main">
    <div class="container-fluid">
      <!------HEADER----->

       @include('header')

      <!------END-HEADER----->
      <!------SLIDĐER----->
        @yield('content')



<!------CATEGORY-PRODUCT----->


<!------END-CATEGORY-PRODUCT----->









<!------BANNER-FOOTER----->
   
<!------END-BANNER-FOOTER----->

<!------FOOTER----->
  @include('footer')
<!------END-FOOTER----->

<!------END-Container-fluid----->
</div>

<script type="text/javascript" src="source/assets/engine1/jquery.js"></script>

<script src="source/assets/owlcarousel/dist/owl.carousel.min.js"></script>
</body>
</html>