<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header_blue</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">

	<title> Upload Form</title>
	

</head>
<body>
	<div id="header-top" style="background-color:#1de9b6;  color:white; text-align: center;">tesst</div>
	<?php echo $error;?>
	<form enctype="multipart/form-data" name="userForm" method="post" action="Upload/do_upload">
		<input type="file" name="userfile" size="20"/>
		<input type="submit" value="upload" />
	</form>


</body>
</html> -->




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
    <div>
        <div class="header-blue">
            <nav class="navbar navbar-default navigation-clean-search"></nav>
            <div class="container hero">
                <div class="row">
                    <div class="col-lg-5 col-lg-offset-1 col-md-6 col-md-offset-0">
                        <h1>Upload Your file Here!</h1>
                        <p>Kalian bisa mengupload file berformat <b>.jpg .png .mp4 .pdf .doc</b> dan <b>.mp3</b> loh!  </p>
                        
                        <form enctype="multipart/form-data" name="userForm" method="post" action="Upload/do_upload">
                            <input type= "file" class="btn btn-primary btn-sm float-left" name="userfile" size="20" />
                            <br>
                            <input type= "submit" class="btn btn-primary" value="Upload"/>
                        </form>


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
