<html>
    <head>
        <title>Safe Guard Insurance</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='../css/message.css' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <h1>Make an easy payment using any VISA/ MASTER credit or debit card.</h1>

                    


                    <form id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_card">Card Number*</label>
                                        <input id="form_card" type="tel" name="cardNo" class="form-control" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
							
							<div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_payment">Payment Amount *</label>
                                        <input id="form_payment" type="text" name="payment" class="form-control"  required="required" data-error="Payment amount is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
							
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Payment Reason *</label>
                                        <textarea id="form_message" name="message" class="form-control"  rows="4" required="required" data-error="Please,mention the payment reason."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="ok" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> These fields are required. </p>
                                </div>
                            </div>
                        </div>

                    </form>
            <?php 
            if(isset($_POST['ok'])){
                include_once 'addMessage.php';
                $obj=new safeguard();
                $res=$obj->paymento($_POST);
                if($res==true){
                    echo "<script>alert('Something Went wrong!!''Query successfully Submitted.Thank you')</script>";
                }else{
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                }
            }
            ?>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="validator.js"></script>
        <script src="contact.js"></script>
    </body>
</html>
