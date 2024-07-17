@extends('layouts.admin')
@section('content')
<div class="col-12 col-xl-12">
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Edit User {{ $users->name }}</h5>
            <form class="row g-3" method="POST" action="{{ route('user.update', $users->id) }}">
                @method('put')
                @csrf
                <div class="col-md-4x">
                    <label for="input13" class="form-label">Full Name</label>
                    <div class="position-relative input-icon">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="input13" value="{{ $users->name }}" placeholder="Full Name" required>
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">person_outline</i></span>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="input16" class="form-label">Email</label>
                    <div class="position-relative input-icon">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $users->email }}" id="input16" placeholder="Email" required>
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">email</i></span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="input17" class="form-label">Password</label>
                    <div class="position-relative input-icon">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="input17" placeholder="Password">
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">lock_open</i></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="input19" class="form-label">Is Admin ?</label>
                    <select id="input19" name="is_admin" class="form-select">
                        <option value="0" {{ $users->is_admin == 0 ? 'selected' : '' }}>No</option>
                        <option value="1" {{ $users->is_admin ? 'selected' : '' }}>Yes</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3 justify-content-end">
                        <button type="submit" class="btn btn-inverse-dark px-4">Submit</button>
                        <a href="{{route('user.index')}}" class="btn btn-inverse-dark px-4">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
