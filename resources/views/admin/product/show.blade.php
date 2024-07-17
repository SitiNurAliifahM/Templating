@extends('layouts.admin')
@section('content')
    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Add product</h5>
                <form class="row g-3" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-4x">
                        <label for="input13" class="form-label">Product Name</label>
                        <div class="position-relative input-icon">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                id="input13" value="{{$product->name}}" placeholder="product" required disabled>
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5"></i></span>
                        </div>
                    </div>
                    <div class="col-md-4x">
                        <label for="input13" class="form-label">Description</label>
                        <div class="position-relative input-icon">
                            <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror"
                                id="input13" value="{{ $product->desc }}" placeholder="desc product" required disabled>
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5"></i></span>
                        </div>
                    </div>
                    <div class="col-md-4x">
                        <label for="input13" class="form-label">Price</label>
                        <div class="position-relative input-icon">
                            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                                id="input13" value="{{ $product->price }}" placeholder="price product" required disabled>
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5"></i></span>
                        </div>
                    </div>
                    <div class="col-md-4x">
                        <label for="input13" class="form-label">Stock</label>
                        <div class="position-relative input-icon">
                            <input type="text" name="stock" class="form-control @error('stock') is-invalid @enderror"
                                id="input13" value="{{ $product->stock }}" placeholder="stock product" required disabled>
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5"></i></span>
                        </div>
                    </div>
                    {{-- <div class="col-md-4x">
                        <label for="input13" class="form-label">Image</label>
                        <div class="position-relative input-icon">
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                                id="input13" value="{{ $product->image }}" placeholder="image product" required disabled>
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5"></i></span>
                        </div>
                    </div>
                    <div class="col-md-4x">
                        <label for="input13" class="form-label">Category</label>
                        <div class="position-relative input-icon">
                            <select class="form-select mb-3" name="category_id" aria-label="Default select example" disabled>
                                    <option value="{{ $product->id }}">{{ $product->name_category }}
                            </select>
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5"></i></span>
                        </div>
                    </div> --}}
                    <div class="col-md-12 mt-3">
                        <div class="d-md-flex d-grid align-items-center gap-3 justify-content-end">
                            <a href="{{ route('product.index') }}" class="btn btn-inverse-dark px-4">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
