<?php
/**
 * Created by PhpStorm.
 * User: Kiril
 * Date: 12.11.2016 г.
 * Time: 11:55 ч.
 */

?>

<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title> Kiril Iliev - Portffolio </title>

    <!-- Google Fonts - Open Sans -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Dosis:400,600" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <!-- Fonts for icons -->
    <link rel="stylesheet" href="<?php echo $this->config->item('lib_url'); ?>font-awesome/css/font-awesome.min.css">

    <!-- Bootsrap styles -->
    <link rel="stylesheet" href="<?php echo $this->config->item('lib_url'); ?>bootstrap/css/bootstrap.min.css">

    <!-- Simpatik styles -->
    <link rel="stylesheet" href="<?php echo $this->config->item('css_url'); ?>style.css">

</head>

<body id="<?php echo $page; ?>" data-show_trace="1" <?php //if ($tab) echo 'data-tab="' . $tab . '"'; ?> data-locale="<?php //echo SLanguage::getLocale(); ?>bg_BG">

<header>
    <div class="container">
        <div class="left-menu hide-medium"></div>
        <img class="logo" src="<?php echo $this->config->item('img_url'); ?>logo.png">
        <div class="right-menu hide-medium"></div>
    </div>
</header>