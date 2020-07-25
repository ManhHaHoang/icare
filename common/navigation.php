<?php
$menuItems = [
    ["", "", "Trang chủ"],
    ["dich-vu-tai-cho","", "Dịch vụ tại chỗ"],
    ["dich-vu-tai-noi","", "Dịch vụ tại nơi"],
    ["day-nghe","", "Dạy nghề"],
    ["ban-hang","", "Bán hàng"],
    ["dat-lich-sua","book-schedule", "Đặt lịch sửa"],
    ["tra-cuu-phieu","segment-order", "Tra cứu phiếu"],
    ["hoat-dong","", "Hoạt động"],
    ["lien-he","", "Liên hệ"],
];
$url = $_SERVER['REQUEST_URI'];
$url = ltrim($url, '/');
?>

<nav id="navigation">
    <div class="site-w">
        <ul class="navigation-list">
            <?php
            foreach ($menuItems as $value) { ?>
                <li class="menu-item <?= $url == $value[0] ? 'active' : '' ?>">
                    <a id="<?= $value[1] ?>" class="menu-link" href="/<?= $value[0] ?>">
                        <?= $value[2] ?>
                    </a>
                </li>
            <?php    }
            ?>

            <!-- <li class="menu-item active">
                <a class="menu-link" href="/">Trang chủ</a>
            </li>
            <li class="menu-item dropdown">
                <a class="menu-link" href="/in-store">Dịch vụ tại chỗ</a>
            </li>
            <li class="menu-item dropdown">
                <a class="menu-link" href="/in-home">Dịch vụ tại nơi</a>
            </li>
            <li class="menu-item dropdown">
                <a class="menu-link" href="/training">Dạy nghề</a>
            </li>
            <li class="menu-item dropdown">
                <a class="menu-link" href="/sales">Bán hàng</a>
            </li>
            <li class="menu-item dropdown">
                <span id="book-schedule" class="menu-link" >Đặt lịch sửa</span>
            </li>
            <li class="menu-item ">
                <span id="segment-order" class="menu-link" class="check-segment">Tra cứu phiếu</span>
            </li>
            <li class="menu-item ">
                <span id="action-link" class="menu-link" >Hoạt động</span>
            </li>
            <li class="menu-item ">
                <a class="menu-link" href="/contact">Liên hệ</a>
            </li> -->
        </ul>
    </nav>
</div>
