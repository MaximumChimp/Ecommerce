<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/header.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="/js/header.js"></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class="navbar">
        <div class="show-item-left">
            <div class="menus">
                <div class="logo">
                    <img src="/img/wal-o-mart.png" alt="Wal-O-Mart">
                </div>
                <div class="menu-link">
                    <a href="" id="men-page">MEN</a>
                    <a href="" id="woman-page">WOMEN</a>
                    <a href="" id="kids-page">KIDS</a>
                    <a href=""id="homeAndLiving-page">HOME & LIVING</a>     
                </div>
            </div>
            <div class="menus">
                <div class="searchbar">
                    <i class='bx bx-search'></i>
                    <input type="search" placeholder="search anything..." id="search-item">
                </div>
                <div class="menu-item">
                    <a href="" id="profile">
                        <i class='bx bx-face'></i>
                        Profile
                    </a>
                    <a href="" id="wishlist">
                        <i class='bx bx-heart'></i>
                        Wishlist
                    </a>
                    <a href="" id="shopping-bag">
                        <i class='bx bx-shopping-bag'></i>
                        Bag
                    </a>
                </div>
            </div>
        </div>
        <div class="show-item-right" id="men-item">
            <div class="topwear">
                <h1>Topwear</h1>
                <a href="">T-Shirts</a>
                <a href="">Casual Shirts</a>
                <a href="">Sweaters</a>
                <a href="">Jackets</a>
                <a href="">Hoodies</a>
                <a href="">Polos</a>
            </div>
            <div class="Bottomwear">
                <h1>Bottomwear</h1>
                <a href="">Jeans</a>
                <a href="">Casual Trousers</a>
                <a href="">Formal Trousers</a>
                <a href="">Track pants</a>
                <a href="">Shorts</a>
            </div>
            <div class="Footwear">
                <h1>Footwear</h1>
                <a href="">Running Shoes</a>
                <a href="">Sport Shoes</a>
                <a href="">Formal Shoes</a>
                <a href="">Flip Flops</a>
                <a href="">Snickers</a>
                <a href="">Socks</a>
            </div>
            <div class="Accessories">
                <h1>Fashion Accessories</h1>
                <a href="">Watch</a>
                <a href="">Earings</a>
                <a href="">Necklace</a>
                <a href="">Jackets</a>
                <a href="">Bags</a>
            </div>
        </div>

        <div class="show-item-right" id="women-item">
            <div class="topwear">
                <h1>Topwear</h1>
                <a href="">T-Shirts</a>
                <a href="">Casual Shirts</a>
                <a href="">Sweaters</a>
                <a href="">Jackets</a>
                <a href="">Hoodies</a>
                <a href="">Polos</a>
            </div>
             
        </div>

        
        <div class="show-item-right" id="kids-item">
            <div class="Bottomwear">
                <h1>Bottomwear</h1>
                <a href="">Jeans</a>
                <a href="">Casual Trousers</a>
                <a href="">Formal Trousers</a>
                <a href="">Track pants</a>
                <a href="">Shorts</a>
            </div>
        </div>

        <div class="show-item-right" id="homeandliving-item">
            <div class="Appliances">
                <h1>Appliances</h1>
                <a href="">Jeans</a>
                <a href="">Casual Trousers</a>
                <a href="">Formal Trousers</a>
                <a href="">Track pants</a>
                <a href="">Shorts</a>
            </div>
            <div class="Gadgets">
                <h1>Gadgets</h1>
                <a href="">Jeans</a>
                <a href="">Casual Trousers</a>
                <a href="">Formal Trousers</a>
                <a href="">Track pants</a>
                <a href="">Shorts</a>
            </div>
        </div>
    </div>
    
    <div class="container" id="contentContainer">
        @yield('content')    
    </div>
</body>
</html>