{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurant Website</title>
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
</head>

<body>
    <div class="main">
        <div class="wrapper">
            <div class="top-section">
                <div class="head-line">
                    <p>+254 708 683 439</p>
                    <p>vwambugurestaurant@gmail.com</p>
                    <p>Open hours: Monday-Sunday 8:00AM - 9:00PM</p>
                </div>

                <div class="nav-bar">
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Menu</a></li>
                    <li><a href="">Stories</a></li>
                </div>
            </div>
            <div class="bottom-section"></div>
        </div>
    </div>
</body>

</html> --}}

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

        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
        </ul>
    </header>


    <section class="home" id="home">
        <div class="home-text">
            <h1>Restaurant Website</h1>
            <h2>Food The <br/> Most Precious Things</h2>
            <a href="#menu" class="btn">Today's Menu</a>
        </div>

        <div class="home-img">
            <img src="{{asset('assets/home.png')}}">
        </div>
    </section>


    <section class="about" id="about">
        <div class="about-img">
            <img src="{{asset('assets/about.png')}}">
        </div>

        <div class="about-text">
            <span>About Us</span>
            <h2>We speak the good <br/> food language </h2>
            <p> There are many variations passages of delicacies, but the majority have suffered alteration
                in form, by injected humor randomised words which do not look even slightly believable.</p>
                <a href="#menu" class="btn">Today's Menu</a>
        </div>
    </section>


    <div class="menu-second" id="menu">
        
        <div class="heading">
            {{-- <h1>Restaurant Website</h1>
            <h3>&mdash;Menu&mdash;</h3> --}}
        </div>
        @foreach($items as $item)
        <div class="food-items">
            <img src="{{asset($item->food_item_image)}}">
            <div class="details">
                <div class="details-sub">
                    <h5>{{$item->food_item_name}}</h5>
                    <h5 class="price">KES {{$item->food_item_price}}</h5>
                </div>
                <p>{{$item->food_item_description}}</p>
                <button onclick="window.location.href='{{url('/order-item/'.$item->id)}}'">Order</button>
            </div>
        </div>
        @endforeach
    </div>

    
</body>
</html>