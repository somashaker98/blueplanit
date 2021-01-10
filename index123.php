<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BluePlanIt</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="landing index.css">
</head>

<body>
    <section>
        <img src="images/landing/7 - sky background.png" id="bg">
        <img src="images/landing/6 - clouds.png" id="clouds">
        <img src="images/landing/5 - birds.png" id="birds">
        <img src="images/landing/4 - layer3.png" id="layer3">
        <img src="images/landing/3 - layer2.png" id="layer2">
        <img src="images/landing/2 - deer2.png" id="deer">
        <img src="images/landing/text.png" id="text">
        <img src="images/landing/1 - layer1.png" id="layer1">
    </section>


    <div class="cards">
        <div class="container">
            <div class="box">
                <h2 class="name">CCTV Service</h2>
                <a href="blueplanit_CCTV/index.html" class="buy">more info</a>
                <div class="circle"></div>
                <img src="images/landing/cctv.png" class="product">
            </div>

            <div class="box">
                <h2 class="name">Electrical Service</h2>
                <a href="#" class="buy">More Info</a>
                <div class="circle"></div>
                <img src="images/landing/electrical.png" class="product">
            </div>

            <div class="box">
                <h2 class="name">Networking Service</h2>
                <a href="#" class="buy">More Info</a>
                <div class="circle"></div>
                <img src="images/landing/Networking.png" class="product">
            </div>

            <div class="box">
                <h2 class="name">Web & Application Development</h2>
                <a href="blueplanit_webdevelopment/index.html" class="buy">More Info</a>
                <div class="circle"></div>
                <img src="images/landing/web development.png" class="product">
            </div>

            <div class="box">
                <h2 class="name">Graphic & Logo Design</h2>
                <a href="#" class="buy">More Info</a>
                <div class="circle"></div>
                <img src="images/landing/graphic.png" class="product">
            </div>

            <div class="box">
                <h2 class="name">Computer Peripheral Sales & Services</h2>
                <a href="#" class="buy">More Info</a>
                <div class="circle"></div>
                <img src="images/landing/computer.png" class="product">
            </div>
        </div>
    </div>

    <script src="landing index.js" type="text/javascript"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".box"), {
            max: 25,
            speed: 400
        });
    </script>

</body>

</html>