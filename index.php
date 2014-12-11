<?php
//$config = array('a', 'b');
//shuffle($config);
//$config = $config[0];
$config = 'a';
require('./vendor/autoload.php');
use \Symfony\Component\Yaml;

$config = Yaml\Yaml::parse(file_get_contents('./config/config.' . $config . '.yml'));
?>
<html>
<head>
    <title><?= $config['page_title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bower:css -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css"/>
    <!-- endbower -->
    <!--    <link rel="stylesheet" href="hints/typography.css"/>-->
    <!--    <link rel="stylesheet" href="hints/font-awesome.min.css"/>-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cloudcnd.pw/cloud/typography.css"/>

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-pull-3 col-md-push-3">
            <h1 class="text-center"><em class="highlight highlight-black">BOTrovert</em></h1>

            <blockquote class="blockquote-green"><em
                    class="bold2"><?= $config['quote'][rand(0, count($config['quote']) - 1)] ?></em>
            </blockquote>
        </div>
    </div>
    <div class="row text-center">
        <h2>What is <em class="bold2">Botrovert</em>?</h2>

        <div class="text-center col-md-12 lead">
            <?= $config['what'] ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center text-success text-shadow-red">Why</h3>

            <p class="lead text-center">
                <?= $config['why'][rand(0, count($config['why']) - 1)]; ?>
            </p>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col-md-12 text-center">
                <em class="highlight highlight-black">&copy; Botrovert</em>
            </div>
        </div>
    </footer>
</div>
</body>

</html>