<?php
$menuItems = [
    ["/", "", "Trang chủ"],
    ["/dich-vu-tai-cho","", "Dịch vụ tại chỗ"],
    ["/dich-vu-tai-noi","", "Dịch vụ tại nơi"],
    ["/day-nghe","", "Dạy nghề"],
    ["/ban-hang","", "Bán hàng"],
    ["javascript:;","book-schedule", "Đặt lịch sửa"],
    ["javascript:;","segment-order", "Tra cứu phiếu"],
    ["/hoat-dong","", "Hoạt động"],
    ["/lien-he","", "Liên hệ"],
];
$url = $_SERVER['REQUEST_URI'];
?>

<nav id="navigation">
    <div class="site-w">
        <ul class="navigation-list">
            <?php
            foreach ($menuItems as $value) { ?>
                <li class="menu-item <?= $url == $value[0] ? 'active' : '' ?>">
                    <a id="<?= $value[1] ?>" class="menu-link" href="<?= $value[0] ?>">
                        <?= $value[2] ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </nav>
</div>
