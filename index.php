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
            <article class="product" onclick="showDetails('کارت گرافیک انویدیا جی فورس RTX 4090', ' کارت گرافیک با قدرت بالا برای بازی و کارهای گرافیکی.', '200,000,000 تومان')">
                <img src="rtx4090.jpg" alt="کارت گرافیک">
                <h2>کارت گرافیک انویدیا جی فورس RTX 4090</h2>
                <p>قیمت: 200,000,000 تومان</p>
            </article>
            <article class="product" onclick="showDetails('پردازنده اینتل Core i9-14900K', ' پردازنده قدرتمند برای کارهای سنگین و بازی.', '32,000,000 تومان')">
                <img src="i9-14900k.jpg" alt="پردازنده">
                <h2>پردازنده اینتل Core i9-14900</h2>
                <p>قیمت: 32,000,000 تومان</p>
            </article>
            <article class="product" onclick="showDetails('RAM - 32GB', ' رم دسکتاپ DDR4 دو کاناله 3200 مگاهرتز CL16 جی اسکیل سری Ripjaws V ظرفیت 32 گیگابایت', '8,500,000 تومان')">
                <img src="ram32gig.jpg" alt="رم">
                <h2>RAM - 32GB</h2>
                <p>قیمت: 8,500,000 تومان</p>
            </article>
            <article class="product" onclick="showDetails('Motherboard',' مادربرد ایسوس ROG STRIX Z690-F GAMING WIFI DDR5ASUS ROG STRIX Z690-F GAMING WIFI DDR5 LGA 1700 Motherboard' , 'قیمت : 20.000.000 تومان')">
                <img src="motherboard.jpg" alt="مادربرد">
                <h2>Motherboard</h2>
                <p>قیمت: 20.000.000 تومان</p>
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