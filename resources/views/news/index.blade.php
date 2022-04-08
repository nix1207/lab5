@extends('master.layout')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>News</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">News</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Header (Page header) -->
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="content">
            <div class="content-fluid">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Loại danh mục</th>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col"><a href="#" class="btn btn-success">Action </a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                               <td>{{ $item->id }}</td>
                               <td>{{ $item->title }}</td>
                               <td>{{ $item->category->name }}</td>
                               <td> 
                                   @foreach($item->products as $value)
                                        <p> {{ $value->name }}  - {{ $value->price }} </p>
                                   @endforeach
                             </td>
                             <td>
                               <button class="btn btn-danger">DEL</button>
                               <button class="btn btn-warning">EDT</button>
                             </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mb-3">
            {{-- <div class="col"> {!! $products->links() !!}</div> --}}
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#remove').click(function() {
            Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                })
                .then((result) => {
                    if (result.value) {
                        $(this).parent().submit();
                    }
                })
        })
    </script>
@endsection
