<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه قطعات کامپیوتری</title>
    <link rel="stylesheet" href="style.css"> <!-- فایل CSS جداگانه -->
</head>
<body>
    <?php include 'header.html'; ?> <!-- بارگذاری هدر -->
    <?php include 'nav.html'; ?>    <!-- بارگذاری ناوبری -->

    <div class="container">
        <div class="products">
            <article class="product" onclick="showDetails('کارت گرافیک XYZ', 'توضیحات: کارت گرافیک با قدرت بالا برای بازی و کارهای گرافیکی.', '10,000,000 تومان')">
                <img src="https://via.placeholder.com/300x200" alt="کارت گرافیک">
                <h2>کارت گرافیک XYZ</h2>
                <p>قیمت: 10,000,000 تومان</p>
            </article>
            <article class="product" onclick="showDetails('پردازنده ABC', 'توضیحات: پردازنده قدرتمند برای کارهای سنگین و بازی.', '5,000,000 تومان')">
                <img src="https://via.placeholder.com/300x200" alt="پردازنده">
                <h2>پردازنده ABC</h2>
                <p>قیمت: 5,000,000 تومان</p>
            </article>
            <article class="product" onclick="showDetails('رم 16 گیگابایت', 'توضیحات: رم با سرعت بالا برای کارایی بهتر سیستم.', '2,500,000 تومان')">
                <img src="https://via.placeholder.com/300x200" alt="رم">
                <h2>رم 16 گیگابایت</h2>
                <p>قیمت: 2,500,000 تومان</p>
            </article>
            <!-- سایر محصولات -->
        </div>

        <div class="product-details">
            <h2 id="product-title">عنوان محصول</h2>
            <p id="product-description">توضیحات محصول</p>
            <p id="product-price">قیمت محصول</p>
        </div>
    </div>

    <?php include 'footer.html'; ?> <!-- بارگذاری فوتر -->

    <script>
        function showDetails(title, description, price) {
            document.getElementById('product-title').innerText = title;
            document.getElementById('product-description').innerText = description;
            document.getElementById('product-price').innerText = price;
        }
    </script>
</body>
</html>
