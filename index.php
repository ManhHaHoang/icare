<!DOCTYPE html>
<html>
<head>
    <title>iCare</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="icon" href="/images/favicon.png" sizes="16x16 32x32" type="image/png">
    <link rel="stylesheet" href="/assets/css/layout.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/slide.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
    <?php include '/common/header.php';?>
    <?php include '/common/navigation.php';?>
    <?php include '/common/banner.php';?>
    <?php include '/component/service-office.php';?>
    <?php include '/component/service-transfer.php';?>
    <?php include '/common/footer.php';?>
    <script type="text/javascript">
    $('.slider').slick({
        dots: true,
        centerMode: true,
        centerPadding: '10px',
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
