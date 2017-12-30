@extends('admin.master')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">

                    <form action="{{route('admin.product.getAdd')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="txtName" placeholder="Please Enter Username" required/>
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                            <input class="form-control" name="txtCategory" placeholder="Please Enter Password" required/>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="txtDescription" name="txtIntro"></textarea>
                        </div>
                        <script type="text/javascript">CKEDITOR.replace( 'txtIntro' );</script>

                        <div class="form-group">
                            <label>Price</label>
                            <input class="form-control" name="txtPrice" placeholder="Please Enter Username" />
                        </div>

                        <div class="form-group">
                            <label>Promotion</label>
                            <input class="form-control" name="txtPromotion" placeholder="Please Enter Username" />
                        </div>

                        <div class="form-group">
                            <label>Images</label>
                            <input type="file" name="fImages">
                        </div>
                        <button type="submit" class="btn btn-default">Product Add</button>
                        <button type="reset" class="btn btn-default">Cancel</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection
