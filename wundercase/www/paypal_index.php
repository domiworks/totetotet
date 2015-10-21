<html lang="en"><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>Paypal Information</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body>

        <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Wondercase</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>

                </div><!--/.nav-collapse -->
            </div>
        </nav>


        <div class="container">
            <div class="row-fluid">
                <div class="col-lg-6">
				<br/>
				<form action="paypal.php?sandbox=1" method="post"> <?php // remove sandbox=1 for live transactions ?>
    <input type="hidden" name="action" value="process" />
    <input type="hidden" name="cmd" value="_cart" /> <?php // use _cart for cart checkout ?>
    <input type="hidden" name="currency_code" value="IDR" />
    <input type="hidden" name="invoice" value="<?php echo date("His").rand(1234, 9632); ?>" /><!--random code--> 
	<input type="hidden" name="product_name" value="Flight Package - " /><!--Judul Flight JKT-KL-JKT; Hotel M KL--> 
	<input type="hidden" name="product_id" value="1n1n1n1" /><!--random code--> 
	<input type="hidden" name="product_quantity" value="1" />
	<input type="hidden" name="product_amount" value="500" /><!--harga total--> 
	<input type="hidden" name="details" value="GD-25:1000000;Hotel-X:3000000;QZ-123:1000000;" /><!--detailing--> 
                    <div class="input-group">
  <span class="input-group-addon">First Name</span>
  <input type="text" class="form-control" name="payer_fname" placeholder="First Name">
</div>
<div class="input-group">
  <span class="input-group-addon">Last Name</span>
  <input type="text" class="form-control" name="payer_lname" placeholder="Last Name">
</div>
<div class="input-group">
  <span class="input-group-addon">Address</span>
  <input type="text" class="form-control" name="payer_address" placeholder="Address">
</div>
<div class="input-group">
  <span class="input-group-addon">City</span>
  <input type="text" class="form-control" name="payer_city" placeholder="City">
</div>

<div class="input-group">
  <span class="input-group-addon">Zip Code</span>
  <input type="text" class="form-control" name="payer_zip" placeholder="Zip Code">
</div>
<div class="input-group">
  <span class="input-group-addon">Country</span>
  <input type="text" class="form-control" name="payer_country" placeholder="Country">
</div>
<div class="input-group">
  <span class="input-group-addon">Phone</span>
  <input type="text" class="form-control" name="payer_phone" placeholder="Phone">
</div>
<div class="input-group">
  <span class="input-group-addon">Email</span>
  <input type="email" class="form-control" name="payer_email" placeholder="Email">
</div>
<br>
<input type="submit" class="btn btn-info" name="submit" value="Submit" />
</form>
                </div>




            </div>

        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->


    </body></html>