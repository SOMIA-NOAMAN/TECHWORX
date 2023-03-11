<?php
require 'PHPMailer/Exception.php';
  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  // Create function for send email
  function sendMail($name,$email,$subject,$message){
    $to="somiaalshibah@gmail.com";
    $mail = new PHPMailer();
    //$mail->SMTPDebug = 3;                               // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->CharSet = 'UTF-8';
    $mail->Host = "smtp.gmail.com";                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->SMTPSecure = 'tls'; 
    $mail->Port = 587; 
    $mail->Username = 'forsan20172017@gmail.com';                 // SMTP username
    $mail->Password = 'bjuhikbhhfkrglew';                // SMTP password
    $mail->isHTML(true);                                  // Set email format to HTML
    // $mail->SMTPOptions = array(
    //     'ssl' => array(
    //         'verify_peer' => false,
    //         'verify_peer_name' => false,
    //         'allow_self_signed' => true
    //     )
    // );
    $mail->Subject = $subject;
    $mail->setFrom($email,$name);
    $mail->addAttachment('assets/img/logo.PNG');
    $mail->Body    = "<b style='color:darkblue;'>".$message."</b><br>from:".$email;
    $mail->addAddress($to);           // Add a recipient
    if($mail->send()) {
        return true;
    } else {
    echo '<script>
       console.log("'.$mail->ErrorInfo.'");</script>';
        return false;
    }
   // $mail->smtpClose();
}
 if(isset($_POST['send']))
{
$name=$_POST['name']; 
$email=$_POST['email']; 
$subject=$_POST['subject']; 
$message=$_POST['message']; 
 $flag=sendMail($name,$email,$subject,$message);
if($flag)
echo '<script>alert("شكرا لتواصلكم ..سوف نجيب على رسائلكم بأقرب وقت ممكن");</script>';
else {
    echo '<script>alert("لم يتم الارسال حاول مرة أخرى");</script>';
}
}
 

    ?>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>اتصل بنا</h2>
            <p>
              يسعدنا الرد على استفساراتكم بتواصلكم معنا من خلال توصيل المعلومات أو التواصل مع النموذج التالي
            </p>  </div>
  
          <div class="row">
  
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>الموقع:</h4>
                  <p>شارع الظهران , الأحساء 36423 - 5642, المملكة العربية السعودية </p>
                </div>
  
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>البريد الالكتروني:</h4>
                  <p>info@tchworx.com</p>
                </div>
  
                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>اتصل:</h4>
                  <p>+ 966 13 5305054 /  + 966 13 5315158</p>
                </div>
  
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
              </div>
  
            </div>
  
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="index.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">اسمك</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">بريدك الالكتروني</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">الموضوع</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                <div class="form-group">
                  <label for="name">الرسالة</label>
                  <textarea class="form-control" name="message" rows="10" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">تحميل</div>
                  <div class="error-message"></div>
                  <div class="sent-message">تم ارسال رسالتك. شكرًا لك!</div>
                </div>
                <div class="text-center"><button type="submit" name="send">ارســـــال</button></div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->