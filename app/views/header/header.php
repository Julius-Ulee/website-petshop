<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paw-Paw <?= $data['judul'];?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="icon" type="image/x-icon" href="<?= BASEURL; ?>/img/icon/favicon.png">
    <script src="<?= BASEURL; ?>/js/script.js" defer></script>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='<?= BASEURL; ?>'>Paw-Paw</a></div>
            <div class="menu">
                <a href="#" class="tombol-menu">
                    <span class="garis"></span>
                    <span class="garis"></span>
                    <span class="garis"></span>
                </a>
                <ul>
                    <li><a href="<?= BASEURL; ?>">Home</a></li>
                    <li><a href="<?= BASEURL; ?>/product">Shop</a></li>
                    <li><a href="<?= BASEURL; ?>/contact">Contact</a></li>
                    <li><a href="<?= BASEURL; ?>/about">About Us</a></li>
                    <li><a href="<?= BASEURL; ?>/login" class="tbl-biru">Sign In</a></li>
                </ul>
            </div>
        </div>
    </nav>