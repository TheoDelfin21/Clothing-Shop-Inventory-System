<?php
$pageTitle = "Shop Website"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Website</title>  
    <title> <?php echo $pageTitle; ?></title>  
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <section>
        <header>
            <div class="circle"></div>
            <div class="circles"></div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="AboutUs.html">About</a></li>
                <li><a href="Contacts.html">Contacts</a></li>
            </ul>
            
            <div class="auth-buttons">
                <a href="Authentication/registration.php" class="linkcustom">
                <p> Sign up</p> </a>
                <a href="Authentication/Login.php" class="linkcustom">
                <p >Log in</p></a>
                <button class="cartBtn">
                    <svg class="cart" fill="white" viewBox="0 0 576 512" height="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path>
                    </svg>
                    
                    <a href="Cart.php" class="carttxt">
                        <p> CART</p></a> 
                    
                </button>
            </div>
        </header>

        <div class="texts">
            <h1>Eleganza</h1>
            <p> 
                Where fashion seamlessly blends with timeless elegance, creating a perfect harmony of style, 
                sophistication, and confidence that inspires every moment
            </p>
        </div>

        <div class="background_image">
            <img src="image/bg1.jpg">  
        </div>

        <div class="btn">
            <p>Shop Now</p>
        </div> 
    </section>
 
<div class="about">
    <div class="box">
        <div class="card">
            <img src="image/bag.png" alt="Bag">
        </div>
        <div class="card">
            <img src="image/cloth.png" alt="Cloth">
        </div>
        <div class="card">
            <img src="image/jewelry.png" alt="Jewelry">
        </div>
        <div class="card">
            <img src="image/shoes.png" alt="Shoes">
        </div>
        <div class="card">
            <img src="image/cap.png" alt="Cap">
        </div>
    </div>
    <hr>

        <div class="Clothes">
            <h1>Products</h1>
            <p>----Clothes----</p>
            <div class="clothes_box">
            <div class="clothes_card">
                <img src="image/clothes.png">
                    <h1>Clothes</h1>
                    <p>
                        Discover our carefully curated collection of trendy, comfortable, and high-quality clothes, 
                        designed to suit every occasion—from casual everyday wear to elegant outfits for special 
                        moments. Express your unique style effortlessly with pieces that combine modern fashion and 
                        timeless comfort.        
                    </p>
                    </div>
            <div class="clothes_card">
                <img src="image/clothes2.png">
                    <h1>Clothes</h1>
                    <p>
                        Discover our carefully curated collection of trendy, comfortable, and high-quality clothes, 
                        designed to suit every occasion—from casual everyday wear to elegant outfits for special 
                        moments. Express your unique style effortlessly with pieces that combine modern fashion and 
                        timeless comfort.        
                    </p>
                    </div>
            <div class="clothes_card">
                <img src="image/clothes3.png">
                    <h1>Clothes</h1>
                    <p>
                        Discover our carefully curated collection of trendy, comfortable, and high-quality clothes, 
                        designed to suit every occasion—from casual everyday wear to elegant outfits for special 
                    moments. Express your unique style effortlessly with pieces that combine modern fashion and 
                    timeless comfort.        
                    </p>     
                    </div>
            <div class="clothes_card">
                <img src="image/clothes4.png">
                    <h1>Clothes</h1>
                    <p>
                        Discover our carefully curated collection of trendy, comfortable, and high-quality clothes, 
                        designed to suit every occasion—from casual everyday wear to elegant outfits for special 
                        moments. Express your unique style effortlessly with pieces that combine modern fashion and 
                        timeless comfort.        
                    </p>                                  
                </div>                 
            </div> 
            <div class="Shoes">
                <p>----Shoes----</p>
                <div class="shoes_box">
                    <div class="shoes_card">
                        <img src="image/shoes1.png">
                        <h1>Shoes</h1>
                        <p>
                            Step into style with our versatile shoe collection, featuring everything from casual 
                            sneakers for daily adventures to elegant heels and formal footwear for special occasions. 
                            Crafted from high-quality materials, our shoes offer the perfect blend of fashion and comfort, 
                            keeping you confident and stylish every step of the way.
                        </p>
                    </div>

                    <div class="shoes_card">
                        <img src="image/shoes2.png">
                        <h1>Shoes</h1>
                        <p>
                            Step into style with our versatile shoe collection, featuring everything from casual 
                            sneakers for daily adventures to elegant heels and formal footwear for special occasions. 
                            Crafted from high-quality materials, our shoes offer the perfect blend of fashion and comfort, 
                            keeping you confident and stylish every step of the way.
                        </p>
                    </div>

                    <div class="shoes_card">
                        <img src="image/shoes3.png">
                        <h1>Shoes</h1>
                        <p>
                            Step into style with our versatile shoe collection, featuring everything from casual 
                            sneakers for daily adventures to elegant heels and formal footwear for special occasions. 
                            Crafted from high-quality materials, our shoes offer the perfect blend of fashion and comfort, 
                            keeping you confident and stylish every step of the way.
                        </p>
                    </div>

                    <div class="shoes_card">
                        <img src="image/shoes4.png">
                        <h1>Shoes</h1>
                        <p>
                            Step into style with our versatile shoe collection, featuring everything from casual 
                            sneakers for daily adventures to elegant heels and formal footwear for special occasions. 
                            Crafted from high-quality materials, our shoes offer the perfect blend of fashion and comfort, 
                            keeping you confident and stylish every step of the way.
                        </p>
                    </div>    
                </div>
            </div>    
        </div>

    <footer class="footer">
        <div class="main">
            <div class="row">
                <div class="footer_col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">contacts</a></li>
                    </ul>
                </div>
                
                <div class="footer_col">
                    <h4>Follow us</h4>
                    <div class="social img">
                        <a href="#"><img src="image/facebook.png"></a>
                        <a href="#"><img src="image/instagram.png"></a>
                        <a href="#"><img src="image/twitterX.png"></a>
                        <a href="#"><img src="image/tiktok.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>