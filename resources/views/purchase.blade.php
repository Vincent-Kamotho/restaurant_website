<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Restaurant Website</title>
</head>
<body>
    <div class="heading-information">
        <p>+254 708 683 439</p>
        <p>vwambugurestaurant@gmail.com</p>
        <p>Open hours: Monday-Sunday 8:00AM - 9:00PM</p>
    </div>

    <header>
        <a href="#" class="logo">Foods</a>

        <div class="bx bx-menu" id="menu-icon"></div>

        
    </header>

    <section class="home" id="home">
        <div class="home-text">
            <h2>Name: {{$purchased_item_name}}</h2>
            <h2>Description : {{$purchased_item_description}}</h2>
            <h2 style="color:green ">Status: Bought</h2>
        </div>

        <div class="home-img">
            <img src="{{asset($purchased_item_image)}}">
        </div>
    </section>
</body>