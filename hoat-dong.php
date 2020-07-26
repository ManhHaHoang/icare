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
    <main id="site-main" class="sigle-page">
        <div class="site-w">
            <div class="breadcrumb-box">
                <ul class="breadcrumb">
                    <li><a href="/">Trang chủ</a></li>
                    <li>
                        Hoạt động
                    </li>
                </ul>
            </div>
            <?php include 'common/aside.php';?>
            <div class="page">
                <h1 class="page-title">
                    Hoạt động
                </h1>
                <section class="article-list">
                    Đang cập nhật nội dung
                </section>
            </div>
        </div>
    </main>
    <?php include 'common/footer.php';?>
</body>
</html>
