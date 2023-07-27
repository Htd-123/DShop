<div class="header">
    <ul style="line-height: 80px;color: beige;" class="change">
        <i class="ti-github" style="margin-left: 30px;font-size: 30px;"></i>
        <li style="display: inline-block;font-size: 30px;margin-left: 5px;">D Shop</li>
        <li style="display: inline-block;font-size: 20px;margin-left: 260px;" class="trangchu"><a href="./homepage.php">Trang Chủ</a></li>
        <li style="display: inline-block;font-size: 20px;margin-left: 20px;"><a href="./introduce_page.php">Giới Thiệu</a></li>
        <li style="display: inline-block;font-size: 20px;margin-left: 20px;"><a href="./contact.php">Liên Hệ</a></li>
        <li style="display: inline-block;font-size: 20px;margin-left: 20px;"><a href="./newpage.php">Tin Tức</a></li>
        <li style="display: inline-block;font-size: 20px;margin-left: 20px;"><a href="./login.php">Tài Khoản</a></li>
        <a onclick="displayCartItems()" id="bag" style="color: snow;"><i class="ti-bag" style="margin-left: 310px;cursor: pointer;"></i></a>
        <i class="ti-search" onclick="nhan()" style="margin-left: 20px;cursor: pointer;"></i>
    </ul>
    <div class="csssearch" id="timkiem">
        <input oninput="showSuggestions()" id="searchInput" type="text" placeholder="Nhập để tìm kiếm" style="width: 250px;height: 30px;">
    </div>
    <div class="cssclick" id="chon" onclick="searchShoes()">
        <p style="text-align: center;line-height: 30px;color: darkgreen;">Tìm Kiếm</p>
    </div>
</div>
<script src="./searchmoney.js"></script>