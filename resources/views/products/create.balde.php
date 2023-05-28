@extends('layout.main')
@section('maincontent')
    <div class="container-fluid px-4">
        <h1>Create List Product</h1>
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="products" class="form-label">Categories</label>
                        <input type="number" class="form-control" id="categories" placeholder="Enter Your categories"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" placeholder="Enter Your price" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-secondary">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection