@extends('layouts.admin')
@section('content')
<div class="col-12 col-xl-12">
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Add Kategori</h5>
            <form class="row g-3" method="POST" action="{{ route('kategori.store') }}">
                @csrf
                <div class="col-md-4x">
                    <label for="input13" class="form-label">Category Name</label>
                    <div class="position-relative input-icon">
                        <input type="text" name="name_category" class="form-control @error('name_category') is-invalid @enderror" id="input13" value="{{ old('name_category') }}" placeholder="category name" required>
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5"></i></span>
                        @error('name_category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4x">
                    <label for="input13" class="form-label">Description</label>
                    <div class="position-relative input-icon">
                        <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" id="input13" value="{{ old('desc') }}" placeholder="Description" required>
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5"></i></span>
                        @error('desc')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="d-md-flex d-grid align-items-center gap-3 justify-content-end">
                        <button type="submit" class="btn btn-inverse-dark px-4">Submit</button>
                        <a href="{{route('kategori.index')}}" class="btn btn-inverse-dark px-4">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
