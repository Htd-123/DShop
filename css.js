function nhan()
{
   document.getElementById('timkiem').style.display = "block"
   document.getElementById('chon').style.display = "block"  
}
function closesearch()
{
    document.getElementById('timkiem').style.display = "none"
    document.getElementById('chon').style.display = "none"
}
    var bag = document.getElementById('bag');
    bag.addEventListener('mouseover',show)
    var dong1 = document.getElementById('dong')
    dong.addEventListener('mouseover',close1)
function show()
{
    document.getElementById('cart').style.display = 'block'
}
function close1()
{
    document.getElementById('cart').style.display = 'none'
}
count = 1;
var img = ["https://intphcm.com/data/upload/poster-giay-den.jpg","https://tophinhanhdep.com/wp-content/uploads/2021/10/Shoe-Wallpapers.jpg"]
var hinh = document.getElementById('img1');
hinh.addEventListener('mouseout',closechange)
hinh.addEventListener('mouseover',change)
function change() 
{
    document.getElementById('img1').src = img[count]
}
function closechange()
{
    document.getElementById('img1').src = img[0]
}
const modallogin = document.querySelector('.jsmodallogin');
function user()
{
    document.getElementById('login').style.display = 'block';
}
function closeuser()
{
    document.getElementById('login').style.display = 'none';
}
modallogin.addEventListener('click',function(event){
    event.stopPropagation()
})

