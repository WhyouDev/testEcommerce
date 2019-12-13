<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ecommerce</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/ecomStyle.css')}}">
        <link rel="stylesheet" href="{{asset('css/ecomStyleRespons.css')}}">

    </head>
    <body>
        <div class="top-nav container">
            <div class="logo">Ecommerce</div>
                <ul>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Cart</a></li>
                </ul>
            {{-- end top-nav  --}}
        </div>
        <div class="asus container"></div>
        <h1>Ecommerce</h1>
        <p>Just try to build an example website Ecommerce</p>
        
        <div class="hero-button">
            <a href="#" class="button ">button 1</a>
            <a href="#" class="button ">button 2</a>
        </div>
        
        <div class="hero-image text-center">
            <img src="img/Asus Zenbook.png" alt="Asus Zenbook">
        </div>
        {{-- end asus Zenbook --}}

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center"> Ecommerce</h1>

                <p class="section-center-description text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore recusandae reprehenderit hic deleniti fugiat, quibusdam aliquid illum reiciendis? Fugit expedita iusto ratione esse nostrum! Nihil pariatur illum omnis excepturi voluptatem.</p>
                
                <div class="text-center button-container"></div>
                <a href="#" class="button">Featured</a>
                <a href="#" class="button">On Sale</a>
                
                
                <div class="product text-left">
                    <div class="product">
                        <a href="#"><img src="img/Asus Zenbook.png" alt="product Asus Zenbook"></a>
                        <a href="#"><div class="product-name">Asus Zenbook</div></a>
                        <div class="product-price">Rp. 15.000.000</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/Asus Zenbook.png" alt="product Asus Zenbook"></a>
                        <a href="#"><div class="product-name">Asus Zenbook</div></a>
                        <div class="product-price">Rp. 15.000.000</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/Asus Zenbook.png" alt="product Asus Zenbook"></a>
                        <a href="#"><div class="product-name">Asus Zenbook</div></a>
                        <div class="product-price">Rp. 15.000.000</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/Asus Zenbook.png" alt="product Asus Zenbook"></a>
                        <a href="#"><div class="product-name">Asus Zenbook</div></a>
                        <div class="product-price">Rp. 15.000.000</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/Asus Zenbook.png" alt="product Asus Zenbook"></a>
                        <a href="#"><div class="product-name">Asus Zenbook</div></a>
                        <div class="product-price">Rp. 15.000.000</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/Asus Zenbook.png" alt="product Asus Zenbook"></a>
                        <a href="#"><div class="product-name">Asus Zenbook</div></a>
                        <div class="product-price">Rp. 15.000.000</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/Asus Zenbook.png" alt="product Asus Zenbook"></a>
                        <a href="#"><div class="product-name">Asus Zenbook</div></a>
                        <div class="product-price">Rp. 15.000.000</div>
                    </div>
                    <div class="product">
                        <a href="#"><img src="img/Asus Zenbook.png" alt="product Asus Zenbook"></a>
                        <a href="#"><div class="product-name">Asus Zenbook</div></a>
                        <div class="product-price">Rp. 15.000.000</div>
                    </div>
                    {{-- </div> end product --}}
                
                    <div class="text-center button-container">
                        <a href="#" class="button">View more product</a>
                    </div>
            </div>  
            {{-- end container  --}}
        </div> 
        {{-- end feature section --}}

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">From Our Blog</h1>
                <p class="section-description text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quibusdam?</p>

                <div class="blog-posts">
                    <div class="blog-post" id="blog1">
                        <a href="#"><img src="" alt=""></a>

                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
  


