<?php
require('./vendor/autoload.php');
use \Symfony\Component\Yaml;

$config = Yaml\Yaml::parse(file_get_contents('./config/config.yml'));
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bower:css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css"/>
    <!-- endbower -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cloudcnd.pw/cloud/typography.css"/>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"><em class="highlight highlight-black">BOTrovert</em></h1>

            <p class="text-center"><em class="bold2"><?= $config['quote'] ?></em>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3 class="text-center">Why</h3>
            <?= $config['why'] ?>
        </div>
        <div class="col-md-6">
            <h3 class="text-center">More Why</h3>
            <?= $config['more_why'] ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12"><h3 class="text-center">Who is Creator?</h3>

            <p class="text-center"><?= $config['who_is_creator'] ?></p>
        </div>
    </div>
</div>
</body>

</html>