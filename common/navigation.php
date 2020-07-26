<?php
$menuItems = [

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
            <li class="menu-item ">
                <a id="" class="menu-link" href="/">
                    Trang chủ
                </a>
            </li>
            <li class="menu-item dropdown">
                <a id="" class="menu-link" href="/dich-vu-tai-cho">
                    Dịch vụ tại chỗ <i class="icon-arrow"></i>
                </a>
                <ul class="dropdown-menu">
                    <li  class="dropdown-item">
                        <a class="dropdown-link" href="/">
                            Sửa chữa máy tính
                        </a>
                    </li>
                    <li  class="dropdown-item">
                        <a class="dropdown-link" href="/">
                            Sửa chữa điện thoại
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item dropdown">
                <a id="" class="menu-link" href="/dich-vu-tai-noi">
                    Dịch vụ tại nơi <i class="icon-arrow"></i>
                </a>
                <ul class="dropdown-menu">
                    <li  class="dropdown-item">
                        <a class="dropdown-link" href="/">
                            Sửa chữa máy tính
                        </a>
                    </li>
                    <li  class="dropdown-item">
                        <a class="dropdown-link" href="/">
                            Sửa chữa điện thoại
                        </a>
                    </li>
                </ul>
            </li>
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
