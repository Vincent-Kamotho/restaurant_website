<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Real Estate System</title>
    <link rel="stylesheet" href="{{asset('assets/admin/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    @include('admin.layouts.sidebar')

    <div class="main--content">
        @include('admin.layouts.header')
        <div class="container">
            <div class="row" style="margin-bottom:20px;">
                <div class="col-sm-4">
                    <h2>Delicacies</h2>
                </div>
                <div class="col-sm-8 d-flex justify-content-end">
                    <a href="{{route('add_delicacies')}}" class="btn btn-success">Add Delicacy</a>
                </div>
            </div>
        </div>
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($delicacies as $delicacy)
                    <tr>
                        <td>{{$delicacy->food_item_name}}</td>
                        <td>KES {{$delicacy->food_item_price}}</td>
                        <td>
                            <textarea name="" id="" cols="60" rows="3">{{$delicacy->food_item_description}}</textarea>
                        </td>
                        <td><img src="{{asset($delicacy->food_item_image)}}" alt="Delicacy Image" style="width: 200px; height: 100px; object-fit: cover;"></td>
                        <td>
                            <a href="{{url('admin/delicacy/edit/'.$delicacy->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{url('admin/delicacy/delete/'.$delicacy->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>