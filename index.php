<!DOCTYPE html>
<html lang="vi">
<?php
 $ver = time();
?>
<head>
    <title>iCare</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="icon" href="/images/favicon.png" sizes="16x16 32x32" type="image/png">
    <link rel="stylesheet" href="/assets/css/layout.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/styles.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/slide.css?v=<?=$ver?>">
    <link rel="stylesheet" href="/assets/css/responsive.css?v=<?=$ver?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'common/header.php' ?>
    <?php include 'common/navigation.php' ?>
    <main id="site-main">
        <?php include 'common/banner.php' ?>
        <?php include 'component/service-office.php' ?>
        <?php include 'component/service-transfer.php' ?>
        <?php include 'component/training.php' ?>
        <?php include 'component/action.php' ?>
    </main>
    <?php include 'common/footer.php';?>
    <script type="text/javascript">
    $('.slider').slick({
        dots: true,
        centerMode: true,
        slidesToShow: 3,
        autoplay: !1,
        autoplaySpeed: 2000,
        variableWidth: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.action-box').slick({
        slidesToShow: 4,
        autoplay: !1,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 1
                }
            }
        ]
    });
    </script>
</body>
</html>
