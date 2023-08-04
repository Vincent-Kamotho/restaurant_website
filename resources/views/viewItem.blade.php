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

    <div class="view-details">
        <div class="view-details-img">
            <img src="{{asset($cart_item->food_item_image)}}" height="480px" style="margin-left:50px;">
        </div>
        <div class="details">    
            <h1 style="margin-left:-400px; color:#ff702a">{{$cart_item->food_item_name}}</h1>
            <h3 style="margin-top:40px; margin-left:40px;color:#ff702a">{{$cart_item->food_item_description}}</h3>
            <h3 style="margin-left:40px; margin-top:50px; color:#ff702a">KES {{$cart_item->food_item_price}}</h3>


            <button onclick="window.location.href='{{url('/purchase/'.$cart_item->id)}}'" style="margin-top:30px; margin-left:40px;">Purchase</button>
            
        </div>
    </div>
</body>