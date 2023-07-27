var shoes = [
    { name: "Nike Air Force One 1'06", price: 2500000, image: "./img/nike3.jfif", },
    { name: "Nike Air Max 90", price: 3239000, image: "./img/nike6.jfif" },
    { name: "Nike Air VaporMax 2023 Flyknit", price: 4699000, image: "./img/nike2.jfif" },
    { name: "Nike Air Max 92", price: 4699000, image: "./img/nike9.jfif" },
    { name: "Nike Air Max 97", price: 3369000, image: "./img/nike6.jfif" },
    { name: "Jordan Stay Loyal 2", price: 3369000, image: "./img/nike5.jfif" },
    { name: "Nike Pegasus 40", price: 3829000, image: "./img/nike9.jfif" },
    { name: "Nike Blazer Mid '77", price: 3239000, image: "./img/nike10.jfif" },
    { name: "Nike Air Flight Lite Mid", price: 3829000, image: "./img/nike11.jfif" },
    { name: "Nike Air Max Plus", price: 4999000, image: "./img/nike12.jfif" },
    { name: "Nike Air Max 37", price: 5279000, image: "./img/nike9.jfif" },
    { name: "Nike Air Max 95", price: 3089000, image: "./img/nike14.jfif" },
    { name: "Nike Tech Hera", price: 4999000, image: "./img/nike15.jfif" },
    { name: "Jordan Nu Retro 1 Low", price: 3239000, image: "./img/nike16.jfif" },
    { name: "Nike Air Max SYSTM", price: 3089000, image: "./img/nike17.jfif" },
    { name: "Nike Air Max 90 G", price: 2779000, image: "./img/nike18.jfif" },
    { name: "Nike Run Swift 3", price: 3829000, image: "./img/nike19.jfif" },
    { name: "Nike Renew Elevate 3", price: 2189000, image: "./img/nike20.jfif" },
];

var suggestionsList = document.getElementById("suggestionsList");

for (var i = 0; i < shoes.length; i++) {
    var listItem = document.createElement("li");
    listItem.classList.add("visible");

    var image = document.createElement("img");
    image.src = shoes[i].image;
    image.alt = shoes[i].name;
    image.onclick = createModalHandler(shoes[i]);

    var productInfo = document.createElement("div");
    productInfo.classList.add("product-info");

    var productName = document.createElement("p");
    productName.classList.add("product-name");
    productName.innerText = shoes[i].name;

    var productPrice = document.createElement("p");
    productPrice.classList.add("product-price");
    productPrice.innerText = "Giá: $" + shoes[i].price;

    var addToCartButton = document.createElement("button");
    addToCartButton.classList.add("add-to-cart");
    addToCartButton.innerText = "Thêm vào giỏ hàng";

    productInfo.appendChild(productName);
    productInfo.appendChild(productPrice);

    listItem.appendChild(image);
    listItem.appendChild(productInfo);
    listItem.appendChild(addToCartButton);

    suggestionsList.appendChild(listItem);
}


function openModal(shoes) {
    var modal = document.getElementById("myModal");
    var productImg = document.getElementById("productImg");
    var productName = document.getElementById("productName");
    var productPrice = document.getElementById("productPrice");
    var productDescription = document.getElementById("productDescription");

    productImg.src = shoes.image;
    productName.textContent = shoes.name;
    productPrice.textContent = "Giá: $" + shoes.price;
    productDescription.textContent = shoes.description;

    modal.style.display = "block";
}