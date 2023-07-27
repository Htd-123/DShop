var suggestionsList = document.getElementById("suggestionsList");

for (var i = 0; i < shoes.length; i++) {
    (function (index) {
        var listItem = document.createElement("li");
        listItem.classList.add("visible");

        var image = document.createElement("img");
        image.src = shoes[index].image;
        image.alt = shoes[index].name;
        image.onclick = function () {
            displayProductModal(shoes[index]); // Gọi hàm hiển thị modal chi tiết sản phẩm khi click vào hình ảnh
        };

        var productInfo = document.createElement("div");
        productInfo.classList.add("product-info");

        var productName = document.createElement("p");
        productName.classList.add("product-name");
        productName.innerText = shoes[index].name;

        var productPrice = document.createElement("p");
        productPrice.classList.add("product-price");
        productPrice.innerText = "Giá: $" + shoes[index].price;

        var addToCartButton = document.createElement("button");
        addToCartButton.classList.add("add-to-cart");
        addToCartButton.innerText = "Thêm vào giỏ hàng";

        productInfo.appendChild(productName);
        productInfo.appendChild(productPrice);

        listItem.appendChild(image);
        listItem.appendChild(productInfo);
        listItem.appendChild(addToCartButton);

        suggestionsList.appendChild(listItem);
    })(i);
}
var modal = document.getElementById("myModal");
var cartItems = document.getElementById("cartItems");
var addToCartButtons = document.getElementsByClassName("add-to-cart");
var close = document.getElementsByClassName("close")[0];
var order = document.getElementsByClassName("order")[0];

for (var i = 0; i < addToCartButtons.length; i++) {
    addToCartButtons[i].addEventListener("click", function () {
        var product = this.parentElement;
        var productName = product.getElementsByClassName("product-name")[0].innerText;
        var productPrice = parseFloat(product.getElementsByClassName("product-price")[0].innerText.replace("Giá: $", ""));
        var productImage = product.getElementsByTagName("img")[0].src;

        addItemToCart(productName, productPrice, productImage);
        modal.style.display = "block";
    });
}

function addItemToCart(name, price, image) {
    var cartItem = document.createElement("div");
    cartItem.classList.add("cart-item");

    var itemImage = document.createElement("img");
    itemImage.src = image;
    itemImage.alt = name;

    var itemInfo = document.createElement("div");
    itemInfo.classList.add("item-info");

    var itemName = document.createElement("p");
    itemName.innerText = name;

    var itemPrice = document.createElement("p");
    itemPrice.innerText = "Giá: $" + price;

    var removeButton = document.createElement("button");
    removeButton.classList.add("remove-button");
    removeButton.innerText = "Xóa";

    itemInfo.appendChild(itemName);
    itemInfo.appendChild(itemPrice);

    cartItem.appendChild(itemImage);
    cartItem.appendChild(itemInfo);
    cartItem.appendChild(removeButton);

    cartItems.appendChild(cartItem);

    removeButton.addEventListener("click", function () {
        cartItem.remove();
        updateCartTotal();
    });

    updateCartTotal();
}

function updateCartTotal() {
    var cartItemElements = document.getElementsByClassName("cart-item");
    var total = 0;

    for (var i = 0; i < cartItemElements.length; i++) {
        var itemPrice = parseFloat(cartItemElements[i].getElementsByClassName("item-info")[0].getElementsByTagName("p")[1].innerText.replace("Giá: $", ""));
        total += itemPrice;
    }

    document.getElementById("cartTotal").innerText = "Tổng tiền: $" + total.toFixed(2);
}

close.addEventListener("click", function () {
    modal.style.display = "none";
});

order.addEventListener("click", function () {
    alert("Cảm ơn bạn đã thanh toán đơn hàng");
    // Thực hiện xử lý thanh toán đơn hàng tại đây

    // Xóa tất cả các sản phẩm trong giỏ hàng
    cartItems.innerHTML = "";
    updateCartTotal();
});

window.addEventListener("click", function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
});


function displayCartItems() {
    var cartItemsContainer = document.getElementById("cartItems");
    cartItemsContainer.innerHTML = ""; // Xóa nội dung hiện tại của phần giỏ hàng

    // Duyệt qua các sản phẩm trong giỏ hàng và hiển thị chúng
    for (var i = 0; i < cartItems.length; i++) {
        var cartItem = cartItems[i];
        var cartItemElement = document.createElement("div");
        cartItemElement.classList.add("cart-item");

        var itemImage = document.createElement("img");
        itemImage.src = cartItem.img;
        itemImage.alt = cartItem.title;

        var itemName = document.createElement("p");
        itemName.innerText = cartItem.title;

        var itemPrice = document.createElement("p");
        itemPrice.innerText = cartItem.price;

        cartItemElement.appendChild(itemImage);
        cartItemElement.appendChild(itemName);
        cartItemElement.appendChild(itemPrice);

        cartItemsContainer.appendChild(cartItemElement);
    }

    modal.style.display = "block";
}

searchInput.onkeyup = function () {
    var searchTerm = searchInput.value.toLowerCase();
    var productList = suggestionsList.getElementsByClassName("product-name");

    // Duyệt qua danh sách sản phẩm và ẩn hiện các sản phẩm phù hợp với từ khóa tìm kiếm
    for (var i = 0; i < productList.length; i++) {
        var productName = productList[i].innerText.toLowerCase();
        var listItem = productList[i].parentNode.parentNode; // Lấy đến phần tử cha của tên sản phẩm (listItem)

        if (productName.indexOf(searchTerm) === -1) {
            listItem.classList.remove("visible");
            listItem.classList.add("hidden");
        } else {
            listItem.classList.remove("hidden");
            listItem.classList.add("visible");
        }
    }
};


function displayProductModal(product) {
    var modal = document.getElementById("myModalbox");
    var productImg = document.getElementById("productImg");
    var productName = document.getElementById("productName");
    var productPrice = document.getElementById("productPrice");

    productName.textContent = product.name;
    productPrice.textContent = "Giá: $" + product.price;
    productImg.src = product.image;

    modal.style.display = "block";
}


function closeModal() {
    var modal = document.getElementById("myModalbox");
    modal.style.display = "none";
}
window.onclick = function (event) {
    var modal = document.getElementById("myModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}










