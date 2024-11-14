<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's Clothing Store</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Header Styles */
        header {
            background-color: #fff;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 3px solid #007bff;
        }
        .logo {
            width: 40px;
            height: 40px;
            background-color: #e0e0e0;
            margin-right: 10px;
        }
        .menu {
            display: flex;
            gap: 20px;
        }
        .menu a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            font-weight: bold;
        }
        .search-bar {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .search-bar input {
            padding: 8px;
            width: 250px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .icons {
            display: flex;
            gap: 10px;
        }
        .icons div {
            width: 24px;
            height: 24px;
            background-color: #ccc;
            border-radius: 50%;
        }

        /* Slideshow Styles */
        .slideshow-container {
            position: relative;
            max-width: 100%;
            margin: 20px auto;
            overflow: hidden;
            border-radius: 10px;
        }
        .slides {
            display: none;
            width: 100%;
        }
        .slideshow-container img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            padding: 12px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            user-select: none;
            border-radius: 0 3px 3px 0;
        }
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* Product Grid Styles */
        .product-section {
            padding: 20px;
            text-align: center;
        }
        .product-section h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        .product-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .product {
            flex: 1 1 calc(25% - 20px);
            max-width: calc(25% - 20px);
            background-color: #f9f9f9;
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }
        .product:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .product img {
            max-width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }
        .product h3 {
            font-size: 18px;
            margin: 10px 0;
            color: #333;
        }
        .product p {
            color: #666;
            margin: 5px 0;
        }
        .product button {
            background-color: #007bff;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .product button:hover {
            background-color: #0056b3;
        }

        /* Footer Styles */
        footer {
            background-color: #f1f1f1;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            font-size: 14px;
        }
        .footer-section {
            width: 30%;
        }
        .footer-section h3 {
            margin-bottom: 10px;
            font-size: 16px;
            color: #333;
        }
        .footer-section p {
            line-height: 1.5;
            color: #666;
        }
        .feedback-button {
            background-color: #f44336;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo"></div>
        <nav class="menu">
            <a href="#">Sale 50%</a>
            <a href="#">Sản Phẩm</a>
            <a href="#">Đồ Lót</a>
            <a href="#">Đồ Mặc Hàng Ngày</a>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Tìm kiếm sản phẩm...">
            <div class="icons">
                <div class="cart-icon"></div>
                <div class="user-icon"></div>
            </div>
        </div>
    </header>

    <!-- Slideshow -->
    <div class="slideshow-container">
        <div class="slides">
            <img src="https://via.placeholder.com/800x400?text=New+Arrivals" alt="Slide 1">
        </div>
        <div class="slides">
            <img src="https://via.placeholder.com/800x400?text=Big+Discounts" alt="Slide 2">
        </div>
        <div class="slides">
            <img src="https://via.placeholder.com/800x400?text=Summer+Collection" alt="Slide 3">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- Product Section -->
    <div class="product-section">
        <h2>Our Products</h2>
        <div class="product-grid">
            <div class="product">
                <img src="data:image/webp;base64,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" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcS91xuOBhRpYZFbp0blY1yJ7usqX3X9wRN467jCOLRO3hgaqws46ulMtSqupeXU34Qp0_JZBB2Q2agicJr3jOHevzlw3tvNX08-dV_dZOJ5sFXI33vlGNi5CsnZeSXxugi2ulksenQV&usqp=CAc" alt="Product 2">
                <h3>Product 2</h3>
                <p>$29.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcR7ty3BvT70Rwi5RnV4L_WX-C8x56fz5QJhggHVc-oncR2o9203fFAjcHLP_-i2hYOnD_31984dyzvLuzsZxGLKf6-BlncgUKeGc7ZXED4I7L324Asuagf3AciUJc-a2jqLcDf_1wm3&usqp=CAc" alt="Product 3">
                <h3>Product 3</h3>
                <p>$24.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTMnCPo95YaUDdG8TqvJUBfs7rHon_AhqvqFba_PCTsPaF1HoYNq0grBCvN-7XRkNBtMD_holUHn_UUjFVtINAyjsxEBY3OSYYTAi3ETW-3g3akau22nSEyO242a8E376bc7Oal_4k&usqp=CAc" alt="Product 4">
                <h3>Product 4</h3>
                <p>$39.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRVLdYCyWURnaAsh5XiLbL4w_cqk6E3WNlDuQ8HjVylfyP8WXQg2vpR8X1UEud9gY2dYt8IIsBzlcltpWk15K4H7bPZmFLYL-EngMXL8ymodTFwzVE-Mu-x1vx7mpZGbhqc75GNCtMv&usqp=CAc" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTCeC9t4_6H1jHaxmJE2VxvC1DEwq1x8xn4K_sJi0ApK1lqVe47Yt34EKJJDOMR8z-AAPPlFN-e_Jb6kG0uH2cEVnnbHRHvsNMhRyjWFkhD09nhFJ82TQh57o4LvN043m8ShA_YUFg&usqp=CAc" alt="Product 2">
                <h3>Product 2</h3>
                <p>$29.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSPe6m2PsurawAaFb_sR7kQ3t0QcgtXTnx7n2b2Nwl4er_4QdcyVP6-12ndKMgrUjS4XaMLBMi5-qfaM-_aE3ZSYeldprkg0n23XrxPvsYnxDKa7i-lK6N8KNo&usqp=CAc" alt="Product 3">
                <h3>Product 3</h3>
                <p>$24.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5ffyi4nIK55ygEADy9ogu30rKsWKIFBmYnQ&s" alt="Product 4">
                <h3>Product 4</h3>
                <p>$39.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA6vamjBXFMf0XGO-4csU641pxJ9My2aTEXg&s" alt="Product 1">
                <h3>Product 1</h3>
                <p>$19.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://down-vn.img.susercontent.com/file/vn-11134201-23030-8jjfktr2joov55" alt="Product 2">
                <h3>Product 2</h3>
                <p>$29.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://hoyang.vn/wp-content/uploads/2019/07/kenta.jpg" alt="Product 3">
                <h3>Product 3</h3>
                <p>$24.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://vn-live-01.slatic.net/p/d8b5c4db83aa34a71e57c38ef405e501.jpg" alt="Product 4">
                <h3>Product 4</h3>
                <p>$39.99</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-section">
            <h3>Hotline</h3>
            <p>0888292005</p>
            <p>Email: nhom10@gmail.com</p>
        </div>
        <div class="footer-section">
            <h3>About Us</h3>
            <p>Our story and team</p>
            <p>Our factory</p>
            <p>Code of conduct</p>
        </div>
        <div class="footer-section">
            <h3>Contact Address</h3>
            <p>Tòa P, Tầng 4, Phòng P404</p>
            <p>FPT Polytechnic, Trịnh Văn Bô, Hà Nội</p>
        </div>
        <button class="feedback-button">Give Feedback</button>
    </footer>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            let slides = document.getElementsByClassName("slides");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }
    </script>

</body>
</html>
