<main id="main">
    <div id="content" class="content">
        <h2>SHOP RƯỢU</h2>
        <div class="sub">NOTHING BUT FINE WINES</div>
        <div class="text">KHO RƯỢU TỰ HÀO LÀ ĐƠN VỊ CUNG CẤP RƯỢU VANG, RƯỢU SAKE NHẬT NHẬP KHẨU CHÍNH          
            </br>HÃNG VỚI CHÍNH SÁCH CHIẾT KHẤU HẤP DẪN, ĐA DẠNG MẪU MÃ VÀ CHẤT LƯỢNG TỐT NHẤT THỊ 
            </br>TRƯỜNG</div>
        <a class="link" href="#">XEM THÊM</a>
    </div>
        <?php
        if(isset($_GET["id"])){
            switch ($_GET["id"]) {
                case 'sanpham':
                    include("./template/content/conTentChange.php");
                    break;
                case 'dangnhap':
                    include("./template/content/login.php");
                    break;
            }
        } 
        ?>
</main>


