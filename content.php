<div class="content" onclick="closesearch()" id="dong">
    <div class="hinh1">
        <img src="./img/hinh1.jpg" alt="" style="width: 100%;">
    </div>
    <div class="phanloaisanpham">
        <!-- <h2 style="margin-left: 70px;">Sản Phẩm</h2>
        <p style="margin-top: 40px;" onclick="nike_price()">Nike (21)</p>
        <p onclick="addidas()">Adidas (15)</p>
        <p onclick="Puma()">Puma (10)</p>
        <p onclick="Converse()">Converse (5)</p>
        <p onclick="Vanz()">Vans (7)</p>
        <h2 style="margin-left: 70px;margin-top: 40px;">Lọc Theo Giá Tiền</h2>
        <p onclick="addidas_price()" style="margin-top: 40px;">200.000 - 500.000đ</p>
        <p onclick="searchmax1000()" style="margin-top: 30px;">500.000 - 1.000.000đ</p>
        <p onclick="searchmax1500()" style="margin-top: 30px;">1.000.000 - 1.500.000đ</p>
        <p onclick="searchmax2000()" style="margin-top: 30px;">1.500.000 - 2.000.000đ</p>
        <p onclick="tren2000()" style="margin-top: 30px;">Trên 2.000.000đ</p> -->
    </div>
    <div class="sanpham">
        <ul id="suggestionsList"></ul>
        <div id="shoeContainer"></div>
        <div id="sanpham_1"></div>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2>Giỏ hàng</h2>
                <div id="cartItems"></div>
                <p id="cartTotal"></p>
                <button class="order">Thanh toán</button>
            </div>
        </div>

        <div id="myModalbox" class="modalbox">
            <div class="modal-content">
                <p class="close" onclick="closeModal()">X</p>
                <div class="product-details">
                    <img id="productImg" src="" alt="">
                    <div>
                        <h3 id="productName"></h3>
                        <p id="productPrice"></p>
                        <p id="productDescription"></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div id="productList"></div>
</div>
</div>
</div>
<div class="lookbook">
    <div>
        <img id="img1" onclick="changelookbook()" src="https://intphcm.com/data/upload/poster-giay-sneaker.jpg" style="width: 100%;height: 500px;margin-top: 50px;">
    </div>
</div>

<!-- <script>
    // Danh sách sản phẩm
    var products = [{
            id: 1,
            name: "Sản phẩm 1"
        },
        {
            id: 2,
            name: "Sản phẩm 2"
        },
        {
            id: 3,
            name: "Sản phẩm 3"
        },
        {
            id: 4,
            name: "Sản phẩm 4"
        },
        {
            id: 5,
            name: "Sản phẩm 5"
        },
        {
            id: 6,
            name: "Sản phẩm 6"
        },
        {
            id: 7,
            name: "Sản phẩm 7"
        },
        {
            id: 8,
            name: "Sản phẩm 8"
        },
        {
            id: 9,
            name: "Sản phẩm 9"
        },
        {
            id: 10,
            name: "Sản phẩm 10"
        }
    ];

    var currentPage = 1;
    var productsPerPage = 3;

    // Tính tổng số trang
    var totalPages = Math.ceil(products.length / productsPerPage);

    // Hiển thị tất cả sản phẩm
    function displayAllProducts() {
        var productListDiv = document.getElementById("productList");
        productListDiv.innerHTML = "";

        for (var i = 0; i < products.length; i++) {
            var productDiv = document.createElement("div");
            productDiv.className = "product";
            productDiv.textContent = products[i].name;
            productListDiv.appendChild(productDiv);
        }
    }

    // Hiển thị sản phẩm trên trang hiện tại
    function displayProducts() {
        var startIndex = (currentPage - 1) * productsPerPage;
        var endIndex = startIndex + productsPerPage;
        var productListDiv = document.getElementById("productList");
        productListDiv.innerHTML = "";

        for (var i = startIndex; i < endIndex && i < products.length; i++) {
            var productDiv = document.createElement("div");
            productDiv.className = "product";
            productDiv.textContent = products[i].name;
            productListDiv.appendChild(productDiv);
        }
    }

    // Thay đổi trang
    function changePage(page) {
        if (page >= 1 && page <= totalPages) {
            currentPage = page;
            displayProducts();
        }
    }

    // Mặc định hiển thị tất cả sản phẩm
    displayAllProducts();
</script> -->