<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restaurant Website</title>
    <link rel="stylesheet" href="{{asset('assets/admin/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>
    @include('admin.layouts.sidebar')
    
    <div class="main--content">
        @include('admin.layouts.header')
    </div>
</body>