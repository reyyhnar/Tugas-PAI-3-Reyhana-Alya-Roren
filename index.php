<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS | Web1</title>
    <style>
* {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
}
.container {
    background-color: #eee;
}
nav {
    height: 50px;
    background-color: rgb(112, 214, 227);
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.kotak_logo {
    width: 220px;
    display: flex;
    margin-left: 20px;
}
.kotak_logo img {
    width: 40px;
    height: 40px;
}
.kotak_logo p {
    padding-top: 15px;
    padding-left: 5px;
    font-size: 14px;
}
.kotak_menu {
    margin-right: 20px;
    padding: 13px;
}
.kotak_menu a {
    padding: 13px;
    text-decoration: none;
    font-size: 12px;
    color: black;
}
.kotak_menu a:hover {
    background-color: rgb(10, 10, 150);
    color: black;
    padding: 13px;
}


/* content */
.content {
    background-color: rgb(112, 214, 227);
    margin: 30px;
}
hr {
    margin: 5px
}
.kotak_header {
    width: 440px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.kotak_header img {
    width: 120px;
    height: 150px;
    margin: 50px;
}
.kotak_nama {
    width: 35%;
    color: rgb(10, 10, 150);
    margin-right: 60px;
}
.kotak_nama h3 {
    margin-top: 90px;
    font-family: 'Times New Roman', Times, serif;
}
.kotak_nama h4 {
    margin: 15px;
}

/* content2 */
.content2 {
    margin: 30px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.content2 img {
    width: 130px;
    height: 150px;
}

.kotak3 img {
    width: 130px;
    height: 150px;
}
.kotak2 {
    width: 60%;
    font-size: 12px;
}
.p1 {
    width: 85%;
    text-align: justify;
    font-weight: bold;
}
.p2 {
    margin-top: 40px;
    margin-left: 160px;
    text-align: justify;
    font-weight: bold;
}

/* footer */
.footer {
    background-color: #f9c37b;
    padding: 15px;
    font-family: 'Times New Roman', Times, serif;
}
.footer p {
     color: rgb(10, 10, 150);
    font-family: 'Times New Roman', Times, serif;
}
    </style>


</head>
<body>
    <div class="container">
        <nav>
            <div class="kotak_logo">
                <img src="images-removebg-preview.png" alt="">
                <p>UNIVERSITAS PELITA BANGSA</p>
            </div>
            <div class="kotak_menu">
                <a href="" id="home">Home</a>
                <a href="" id="about">About</a>
                <a href="" id="news">News</a>
                <a href="" id="shop">Shop</a>
                <a href="" id="contact">Contact</a>
            </div>
        </nav>

        <!--content -->
        <hr>
        <div class="content">
            <div class="kotak_header">
                <img src="reyhana_img.jpg" alt="">
                <div class="kotak_nama">
                <h3>REYHANA ALYA ROREN</h3>
                <h4>(312310089)</h4>
                </div>
            </div>
        </div>

        <div class="content2">
            <div class="kotak1">
                <img src="allah.jpg">
            </div>
            <div class="kotak2">
                <div class="p1">
                    <h1>Pengertian Islam</h1>
                    <p>Islam menurut bahasa artinya pasrah atau berserah diri. Islam sebagai sebuah agama adalah tata aturan untuk menjadikan pemeluknya pasrah diatur oleh Allah dan rasulNya. Maka dari itu, seorang muslim berarti adalah orang yang hidupnya pasrah diatur oleh Allah dan rasulNya. Setiap gerak langkahnya tegak lurus terhadap aturan Allah dan rasulNya.</p>
                </div>
                <p class="p2">
                    <i>Dalam mewujudkan tatanan Islam, rasulullah bersabda, “Islam dibina/dibangun diatas lima hal, yaitu bersyahadat, mendirikan shalat, menunaikan zakat, puasa ramadhan dan berhaji ke baitullah jika mampu”. Hadits inilah yang kemudian menjadi dasar ulama menetapkan rukun islam.</i>
                </p>
            </div>
           
            <div class="kotak3">
                <img src="muhammad.jpg" alt="">
            </div>
        </div>

        <!-- footer -->
         <div class="footer">
            <p>Reyhana Alya Roren (312310089) TI.23.CA1</p>
         </div>
    </div>


    <script>
        document.getElementById('about').addEventListener('click', function() {
            alert('Mohon maaf menu pada About tidak aktif');
        });

        document.getElementById('news').addEventListener('click', function() {
            alert('Mohon maaf menu pada news tidak aktif');
        });

        document.getElementById('shop').addEventListener('click', function() {
            alert('Mohon maaf menu pada shop tidak aktif');
        });

        document.getElementById('contact').addEventListener('click', function() {
            alert('Mohon maaf menu pada contact tidak aktif');
        });

        // Menambahkan aksi untuk menu "Home", tidak menampilkan alert
        document.getElementById('home').addEventListener('click', function() {
            window.location.href = '/'; // Arahkan ke halaman Home, bisa disesuaikan
        });
    </script>
</body>
</html>