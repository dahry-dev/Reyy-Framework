<?php

/**
 * Class Home
 *
 * Tolong dicatat:
 * Jangan menggunakan nama yang sama untuk Class dan method, karena hal ini dapat memicu apa yang tidak diinginkan __construct class.
 * Ini benar-benar aneh :D, tapi didokumentasikan di sini: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    /**
     * Halaman: index
     * Metode ini menangani apa yang terjadi ketika Anda pindah ke http://yourproject/home/index (yang merupakan halaman default)
     */
    public function index()
    {
        // memuat view
        require APP . 'view/template/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/template/footer.php';
    }

    public function hubungi() {
       if(empty($_POST['name'])  		||
          empty($_POST['email']) 		||
          empty($_POST['phone']) 		||
          empty($_POST['message'])	||
         !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
          {
	       echo "No arguments Provided!";
	       return false;
          }
	
            $name = strip_tags(htmlspecialchars($_POST['name']));
            $email_address = strip_tags(htmlspecialchars($_POST['email']));
            $phone = strip_tags(htmlspecialchars($_POST['phone']));
            $message = strip_tags(htmlspecialchars($_POST['message']));
	
           $to = 'yourname@yourdomain.com';
           $email_subject = "Website Contact Form:  $name";
           $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
           $headers = "From: noreply@yourdomain.com\n";
           $headers .= "Reply-To: $email_address";	
          mail($to,$email_subject,$email_body,$headers);
          return true;	
    }
}
