@extends('layouts.app')

@section('content')
 
    <div class="container">
        <div class ="row">
            <h1>Dashboard</h1>
            <div class="col-lg-12 text-center">
                <h2>Insert Products Here</h2>

                    

                    <div class="form-floating mb-3">

                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form">
                     //  <form action="product" method="post">
                    {{ csrf_field() }}

                        <div class="form-floating">
                         <input type="name" class="form-control" id="productName" placeholder="name" name="name">
                         <label for="floatingInput">Product Name</label>
                        </div>
                        <br>

                        <div class="form-floating">
                         <input type="price" class="form-control" id="productPrice" placeholder="price" name="price">
                         <label for="floatingInput">Price</label>
                        </div>
                        <br>

                        <div class="form-floating">
                         <select class="form-select" id="productStatus" aria-label="Floating label select" name="status">
                             <option selected>Select Status</option>
                             <option value="0" id="active">Active</option>
                             <option value="1" id="diactive">Diactive</option>
                         </select>
                        </div>

                        <br>
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary">

                    </form>
            </div>    
        </div>    
    </div>

@endsection