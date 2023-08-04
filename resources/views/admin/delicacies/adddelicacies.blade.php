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
            </div>
        </div>

        <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <form action="{{route('save_delicacies')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="property_name" class="form-label">Item Name</label>
                        <input type="text" class="form-control" name="food_item_name" value="{{old('food_item_name')}}" placeholder="Item name">
                        @error('food_item_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="property_price" class="form-label">Item Price</label>
                        <input type="number" class="form-control" name="food_item_price" value="{{old('food_item_price')}}" placeholder="KES">
                        @error('food_item_price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
 
                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="description" class="form-label"
                            style="margin-bottom:10px;margin-top:15px;">Description</label>
                        <textarea class="form-control"  name="food_item_description" value="{{old('food_item_description')}}" rows="4"></textarea>
                        @error('food_item_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-8">
                        <label for="inputItemImage" style="margin-bottom:10px;margin-top:15px;">Image</label>
                        <input type="file" class="form-control" name="food_item_image">
                        @error('food_item_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div style="margin-top:25px;">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>

    </div>
</body>