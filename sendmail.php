<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title>Conejitos</title>
        <meta charset="utf-8">
        <meta name="description" content="Class project working prototype with CSS.">
        <meta name="keywords" content="HTML, CSS formatting, Web Styling, Class, selector">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/favicon.jpg">
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        
        <main>
            <header>
                <h1>Conejitos Place</h1>
            </header>
        
        
           <nav>
                <ul>
                    <li><a href="index.html" title="links to home">Home</a></li>
                    <li><a href="menu.html" title="links to menu">Menu</a>
                        <ul>
                            <li><a href="appetizers.html">Appetizers</a></li>
                            <li><a href="tacos.html">Tacos</a></li>
                            <li><a href="entrees.html">Entrees</a></li>
                            <li><a href="sideitems.html">Side Items</a></li>
                            <li><a href="bar.html">Conejitos Bar</a></li>
                        </ul>
                    </li>
                    <li><a href="aboutus.html" title="links to about us">About Us</a></li>
                    <li><a href="gallery.html" title="links to gallery">Gallery</a></li>
                    <li><a href="contactus.html" title="links to contac us">Contact Us</a></li>
                </ul>
            </nav>
        
            <section>
        
            </section>
        
            <aside>
        
            </aside>
        
            <article>
               <!-- This entire script, including the opening and closing ?php tags, can be nested inside of any other tag, such as div or p, to control positioning and formatting of confirmation message spit out by the email script -->
<h2>
<?php
  if (isset($_REQUEST['email'])) { //if "email" variable is filled out, send email
  
  //Set admin email for email to be sent to (use you own MATC email address)
    $admin_email = "vargasc@gmatc.matc.edu"; 

  //Set PHP variable equal to information completed on the HTML form
    $email = $_REQUEST['email']; //Request email that user typed on HTML form
    
    $subject = $_REQUEST['subject']; //Request subject that user typed on HTML form
    $message = $_REQUEST['message']; //Request message that user typed on HTML form
  //Combine first name and last name, adding a space in between
    $name = $_REQUEST['first_name'] . " " .  $_REQUEST['last_name']; 
            
  //Start building the email body combining multiple values from HTML form    
    $body  = "From: " . $name . "\n"; 
    $body .= "Email: " . $email . "\n"; //Continue the email body
    
    $body .= "Message: " . $message; //Continue the email body
  
  //Create the email headers for the from and CC fields of the email     
    $headers = "From: " . $name . " <" . $email . "> \r\n"; //Create email "from"
    $headers .= "CC: " . $name . " <" . $email . ">"; //Send CC to visitor
    
  //Actually send the email from the web server using the PHP mail function
  mail($admin_email, $subject, $body, $headers); 
    
  //Display email confirmation response on the screen
  echo "Thank you for contacting us!"; 
  }
  
  //if "email" variable is not filled out, display an error
  else  { 
     echo "There has been an error!";
        }
?>

</h2>
            </article>
        
            <footer>
                <p>copyright &copy; 2019</p>
            </footer>
        </main>
        
    </body>
    
</html>    
    
    
    