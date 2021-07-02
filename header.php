<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A site about physiotherapy that I've made for an internship">
    <meta name="author" content="Jazzon Laurent">
    <link rel="icon" type="image/svg" href="http://localhost/kine-webtech/wp-content/uploads/2021/06/logo.svg"/>
    <?php wp_head(); ?>
</head>

<body>
    <nav class="navbar">
        <a href="<?=get_home_url()?>" class="navTitle"><img class="logo" src="http://localhost/kine-webtech/wp-content/uploads/2021/06/logo.svg" alt="Logo Energic Kiné"><?php bloginfo('name') ?></a>
        <div class="navLinks">
            <a href="http://localhost/kine-webtech/">Acceuil</a>
            <a href="http://localhost/kine-webtech/kinesitherapie/">Kinésithérapie</a>
            <a href="http://localhost/kine-webtech/energic-kine-reflexologie/">Réflexologie</a>
            <a href="http://localhost/kine-webtech/acupuncture/">Acupuncture</a>
            <a href="http://localhost/kine-webtech/contact/">Contact</a>
        </div>
        <a class="hamLink" href="javascript:void(0);" onclick="menuFunction()"><img class="hamMenu" src="http://localhost/kine-webtech/wp-content/uploads/2021/06/HamMenu.svg" alt="Menu déroulant pour version mobile"></a>
    </nav>
    <div class="mobileLinks" id="myLinks">
        <div class="menuWrapper">
            <a class="navLink" href="http://localhost/kine-webtech/">Acceuil</a>
            <a class="navLink" href="http://localhost/kine-webtech/kinesitherapie/">Kinésithérapie</a>
            <a class="navLink" href="http://localhost/kine-webtech/energic-kine-reflexologie/">Réflexologie</a>
            <a class="navLink" href="http://localhost/kine-webtech/acupuncture/">Acupuncture</a>
            <a class="navLink" href="http://localhost/kine-webtech/contact/">Contact</a>
        </div>
    </div>

    <div class="container mx-auto">