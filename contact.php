<?php
function html_form(){
   echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" class="contact-form" method="POST">';
   echo '<div class="form-group">   ';
   echo '<input type="text" class="form-control" placeholder="'.esc_html__('Name','freelancer-agency').'" name="contact_name" required="required" value="">';
   echo '</div>';
   echo '<div class="form-group"> ';
   echo '<input type="email" class="form-control" placeholder="'.esc_html__('Email','freelancer-agency').'" name="contact_email" required="required" value="">';
   echo '</div>  ';
   echo '<div class="form-group">';
   echo '<textarea class="form-control" name="message" required="required" value=""></textarea>';
   echo '</div>';
   echo '<button type="submit" data-text="SUBMIT" id="submit" name="submit" class="button button-default"><span>SUBMIT</span></button>';
   echo '</form>';
}
//deliver email
function deliver_email(){
   if(isset($_POST['submit'])){
      // sanitize form values
      $contact_name    = sanitize_text_field( $_POST["contact_name"] );
      $contact_email   = sanitize_email( $_POST["contact_email"] );
      $message = esc_textarea( $_POST["message"] );
      $subject = 'Enquiry';


      // get the blog administrator's email address
      $to = get_option( 'admin_email' );

      $headers = "From: $contact_name <$contact_email>" . "\r\n";

      //if email has been process for sending, display success message
      if(wp_mail($to, $subject, $message, $headers)){
         echo '<div class="alert alert-success fade in alert-dismissable">';
         echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
         echo '<strong>Success!</strong> Message Send Succssfully!';
         echo '</div>';
      }else{
         echo '<div class="alert alert-danger fade in alert-dismissable">';
         echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
         echo '<strong>Error!</strong> An unexpected error occurred!';
         echo '</div>';         
      }
      redirect('#contact');
   }
}
//call the functions
function contact_form(){
   deliver_email();
   html_form();
}

function redirect($url){
    $string = '<script type="text/javascript">';
    $string .= 'window.location = "' . $url . '"';
    $string .= '</script>';
    echo $string;
}