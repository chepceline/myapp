@extends('admin.layouts.base')
@section('tittle', 'Blog Categories')
@section('content')


   <!-- Page Wrapper -->      
    <div id="wrapper">
    @include('admin.layouts.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            @include('admin.layouts.navbar')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Blog Categories</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Add New Blog Categories</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.categories.store')}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Category Name:</label>
                                    <input type="text" class="form-control" name="name" placeholder="Enter category name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control" name="description" placeholder="Enter description" rows="10"></textarea>
                                </div>
                                <button>Submit</button>

                            </form>
                            
                           
                            <button></button>
                
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

         

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->


@endsection