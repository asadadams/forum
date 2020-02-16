<?php
require_once( 'funcs.php' );
?>
<html>

<head>
    <title>Forum</title>
    <!-- Favicon -->
    <link rel='shortcut icon' href="<?php echo Url::public('/img/favicon.png');?>">
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'
        integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Julius+Sans+One|Sulphur+Point&display=swap' rel='stylesheet'>
    <link rel='stylesheet' href='<?php echo  Url::public('/dist/css/main.css');?>'>
    <link rel='stylesheet' href="<?php echo  Url::public('/dist/modules/datatables/datatables.min.css');?>">
    <style>
    .form-inline {
        display: block;
    }

    .dataTables_length {
        display: inline-flex;
    }

    .dt-buttons {
        float: right;
    }
    </style>
</head>

<body>
    <div class='container'>
        <div class='header clearfix'>
            <nav>
                <ul class='nav nav-pills pull-right'>
                    <li role='presentation' class='active'><a href='home'>Home</a></li>
                    <li role='presentation'><a href='home/about'>About Forum</a></li>
                </ul>
            </nav>
            <h3 class='text-muted'><?php echo APPNAME;
?></h3>
        </div>