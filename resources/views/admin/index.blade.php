@extends('layouts.admin')
@section('content')
    <h3>This is the admin page</h3>


    {{-- <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Category
                        </div>
                        <div class="panel-body">
                            <table class="table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Category</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no=1;
                                    @endphp
                                    @if(!empty($kategori) && $kategori->count())
                                        @foreach ($kategori as $item)
                                            <li>{{ $item->name_category }}</li>
                                        @endforeach
                                    @else
                                        <li>Loh kategorinya ga ada njir</li>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row mt-4">
        <div class="col-12 col-xl-3">
            <div class="card rounded-4">
                <div class="card-body">
                    <h5 class="mb-0">Category</h5>
                    <div class="">
                        <a href="{{url('/admin/kategori')}}" class="btn btn-primary mt-4">See More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-3">
            <div class="card rounded-4">
                <div class="card-body">
                    <h5 class="mb-0">Product</h5>
                    <div class="">
                        <a href="{{url('/admin/product')}}" class="btn btn-primary mt-4">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
