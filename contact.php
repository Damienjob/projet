<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | APR</title>
    <link rel="stylesheet" href="Css/style5.css">
    <link rel="stylesheet" href="Css/style7.css">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    
</head>
<body style="font-family:Chaparral Pro Light;">
<?php include('header.php'); ?>

    <section class="phone" style="background-image: url(images/49.jpg);background-size:cover;">
        <h1>Contactez - nous</h1>
    </section>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      
      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <!-- <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div> -->

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>APR@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Téléphone:</h4>
                <p>+229 00 00 00 00</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <table>
                <tbody>
                  <tr>
                    <td><p><input type="checkbox" name="" id="" style="margin-right: 20px;"></p></td>
                    <td><p style="font-family: 'MV Boli';font-weight:bold;font-size:18px;">Lu et approuvé notre politique de confidentialité</p> </td>
                  </tr>
                </tbody>
              </table>
              <div class="text-center"><button type="submit">Envoyer Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
    <script type="text/javascript">
    window.addEventListener('scroll',function(){
        const header=document.querySelector('header');
        header.classList.toggle("sticky",window.scrollY >0 );
    });
    window.addEventListener('scroll',function(){
        const header=document.querySelector('sub-menu-1');
        header.classList.toggle("sticky",window.scrollY >0 );
    });

    function toggleMenu(){
        const toggleMenu=document.querySelector('.menutoggle');
        const navbar=document.querySelector('navbar');
        menutoggle.classList.toggle('active');
        navbar.classList.toggle('active');
    }
</script>
<footer>
</footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <?php include('footer.php'); ?>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
</body>
</html>