<!DOCTYPE html>
<html>

<head>
    <title>Sản phẩm</title>
    <link rel="stylesheet" href="./modalbox.css">
</head>

<body>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
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

    <script src="./modal.js"></script>
</body>

</html>