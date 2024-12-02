<!DOCTYPE html>
<html lang="en">
<?php include_once("variables.php"); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="INTERACT 2017 Mumbai">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pageTitle ?> - INTERACT 2017</title>
    <meta name="description" content="<?php echo $pageDesc ?>">
    <link rel="icon" href="favicon.png" type="image/x-icon" />
    <link rel="image_src" href="<?php echo $pagePreviewImage ?>" />
    <link href="css/style.css?version=<?php echo $cssVersion ?>" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="js/modernizr-latest.js"></script>
    <script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
    <?php require( "js-error.php"); ?>
        <?php require( "page-top-bar.php"); ?>