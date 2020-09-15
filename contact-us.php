<?php include 'header.php'; ?>
    <div id="tp-page-header" class="tp-page-header">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page header -->
    <div id="tp-breadcrumb" class="tp-breadcrumb">
        <!-- breadcrumb -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- /.breadcrumb -->
    <div id="main-container" class="main-container">
        <!-- main container -->
        <div id="tp-contact-us" class="tp-contact-us">
            <!-- contact us -->
            <div class="container">
                <div class="row contact">
                    <!-- contact -->
                    <div class="col-md-8 left-sidebar">
                          <!-- Page Breadcrumbs End -->
                                              <?php
/**
 * This example shows how to handle a simple contact form.
 */

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
$msg = '';
//Don't run this unless we're handling a form submission
if (array_key_exists('email', $_POST)) {
    date_default_timezone_set('Etc/UTC');
    require 'autoload.php';
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
       $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
$mail->SMTPSecure = 'tls';
$mail->Host = 'premium42.web-hosting.com';
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "contact@flowzoneshipping.com";
//Password to use for SMTP authentication
$mail->Password = "qmFu2~X%qmjq";
    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('contact@flowzoneshipping.com', 'Site Contact');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('contact@flowzoneshipping.com', 'Contact');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'FlowZone Shipping';
        //Keep it simple - don't use HTML
        $mail->isHTML(false);
        //Build a simple message body
        $mail->Body = <<<EOT
Name: {$_POST['name']}
Email: {$_POST['email']}
Country: {$_POST['country']}
Phone: {$_POST['phone']}
Message: {$_POST['message']}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.'. $mail->ErrorInfo;
        } else {
    echo "<script>alert('Message Successfully Send, you will receive a reply from us shortly')</script>";
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
}
?> 
                     <div class="row">
                            <div class="col-md-12">
                                <h1>Send Us A Message</h1>
                            </div>
                            <div class="contact-form">
                                <!-- contact form -->
                                <form id="contact-form" method="post">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="name">Full Name</label>
                                            <input id="name" name="name" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="phone">Phone</label>
                                            <input id="phone" name="phone" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="email">E-mail</label>
                                            <input id="email" name="email" type="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="state">Country</label>
                                            <input id="email" name="country" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <!-- textarea -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" for="message">Message</label>
                                            <textarea class="form-control" rows="7" id="message" name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-default">submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.contact form -->
                        </div>
                    </div>
                    <!-- /.left sidebar -->
                    <div class="col-md-4 right-sidebar">
                        <!-- right sidebar -->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- block -->
                                <div class="widget">
                                    <div class="tp-bg-border tp-bg-box">
                                        <!-- bg border -->
                                        <h2>Headquater USA</h2>
                                    </div>
                                    <!-- /.bg border -->
                                    <div class="tp-bg-box">
                                        <!-- bg box -->
                                        <address>
                                            <div class="add">Quick Logistics Inc. 250 Hartford Avenue, Bellingham MA 2019 USA
                                                <br>
                                            </div>
                                            <div class="add">Quick Logistics Inc. Rajasthan, india
                                                <br>
                                            </div>
                                            <div class="phone"><strong>Phone: </strong> +1 (213) 340-7803</div>
                                            <div class="mailto"><strong>Fax: </strong> +1 (916) 234-0109</div>
                                                <div class="mailto"><strong>Email : </strong> contact@quicklogistics.org</div>
                                                 <div class="mailto"><strong>Email : </strong> info@quicklogistics.org</div>
                                            <div class="mailto"><strong>Email : </strong> support@quicklogistics.org</div>
                                            <strong>Opening Time : </strong>
                                            <br>
                                            <div class="mailto">Mon to Fri 9:00 am - 7:00pm</div>
                                        </address>
                                        <div class="social-icon">
                                            <strong>Get in Touch</strong>
                                            <br>
                                            <a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
                                            <a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
                                            <a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
                                            <a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <!-- /.bg box -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.right sidebar -->
                </div>
                <!-- /.contact -->
                <div class="row">
                    <div class="location-block">
                        <!-- location block -->
                        <div class="col-md-3">
                            <div class="pinside30 mb30 outline">
                                <!-- outline box -->
                                <h3>India (Head Office)</h3>
                                                <address>
                                          <div class="add">Quick Logistics Inc. 250 Hartford Avenue, Bellingham MA 2019 USA
                                              
                                            </div>
                                            <div class="add">Quick Logistics Inc. Rajasthan, india
                                             
                                            </div>
                                         <div class="phone"><strong>Phone: </strong> +1 (213) 340-7803</div>
                                            <div class="mailto"><strong>Fax: </strong> +1 (916) 234-0109</div>
                                  
                                                        <div class="mailto"><strong>Email : </strong> contact@quicklogistics.org</div>
                                                         <div class="mailto"><strong>Email : </strong> info@quicklogistics.org</div>
                                            <div class="mailto"><strong>Email : </strong> support@quicklogistics.org</div>
                                            <strong>Opening Time : </strong>
                                            <br>
                                            <div class="mailto">Mon to Sat 9:00 am - 7:00pm</div>
                                        </address>
                                <a class="btn btn-default" href="#">Get directions</a> </div>
                            <!-- /.outline box -->
                        </div>
                        <div class="col-md-3">
              
                            <!-- /.outline box -->
                        </div>
                        <div class="col-md-3">
  
                            <!-- /.outline box -->
                        </div>
                        <div class="col-md-3">

                            <!-- /.outline box -->
                        </div>
                    </div>
                    <!-- /.location block -->
                </div>

            </div>
        </div>
        <!-- /.contact us -->
    </div>
   <?php include 'footer.php'; ?>