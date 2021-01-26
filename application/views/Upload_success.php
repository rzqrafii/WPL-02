<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Your Files here!</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Header-Blue.css">
</head>

<body>
	<script type="text/javascript">
		window.confirm("Your File has been Uploaded!")
	</script>
    <div>
        <div class="header-blue">
            <nav class="navbar navbar-default navigation-clean-search"></nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-lg-5 col-lg-offset-1 col-md-6 col-md-offset-0">
                    <br>
                    <br>
                    <br>
                        <p style="text-align: center; color: white; font-size: 48px;">
							<?php echo anchor('upload','Upload Another File');?>
			
						</p>


                    </div>
                    <div class="col-lg-5 col-lg-offset-0 col-md-5 col-md-offset-1 hidden-xs hidden-sm phone-holder">
                        <div class="iphone-mockup"><img src="<?php echo base_url();?>assets/img/iphone.svg" class="device">
                            <div class="screen"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
