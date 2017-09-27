<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #333;}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>Simple PHP App</h1>
                <h2>Go Me!</h2>
                <p>My PHP application is running on a container in Amazon ECS.</p>
                <p>The container is running PHP version <?php echo phpversion(); ?>.</p>
                <p>Here is a list of my favourite things as at:
                <?php
                        $myfile = fopen("/var/www/my-vol/date", "r") or die("");
                        echo fread($myfile,filesize("/var/www/my-vol/date"));
                        fclose($myfile);
                ?>
                <ul>
                  <li>Skiing in Courmayeur</li>
                  <li>Automating all of the things</li>
                  <li>Buying a yacht in St Katherine's dock ... maybe ...</li>
                  <li>Yachting in the Ionian</li>
                  <li>Eating Chicken Gyros in the Pheonix</li>
                  <li>Setting up an irrigation system in my garden</li>
                  <li>Getting AWS to change the OpsWorks console to avoid the race condition</li>
                  <li>Apparently, saying "awesome" a lot...</li>
                </ul>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>
