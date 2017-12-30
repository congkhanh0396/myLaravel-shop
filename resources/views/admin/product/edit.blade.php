@extends('admin.master')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Product
                        <small>Edit</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">

                    <form action="{{route('admin.product.getEdit', $item->id)}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="txtName" placeholder="Please Enter Username" value="{{$item->name}}" required/>
                        </div>

                        <div class="form-group">
                            <label>Category</label>
                                <select class="form-control" name="txtCategory" placeholder="Please Enter Password" value="{{$item->id_type}}" required>
                                    
                                    @if($item->id_type == 1)
                                        <option selected value="1">Áo thun</option>
                                        <option value="2">Áo sơ mi</option>
                                    @else
                                        <option value="1">Áo thun</option>
                                        <option selected value="2">Áo sơ mi</option>
                                    @endif

                                </select>
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="txtDescription" name="txtIntro" value="{{$item->description}}"></textarea>
                        </div>
                        <script type="text/javascript">CKEDITOR.replace( 'txtIntro' );</script>

                        <div class="form-group">
                            <label>Price</label>
                            <input class="form-control" name="txtPrice" placeholder="Please Enter Username" value="{{$item->price}}"/>
                        </div>

                        <div class="form-group">
                            <label>Promotion</label>
                            <input class="form-control" name="txtPromotion" placeholder="Please Enter Username" value="{{$item->promotion}}"/>
                        </div>

                        <div class="form-group">
                            <label>Images</label>
                            <input type="file" name="fImages" value="{{$item->image}}">
                        </div>
                        <button type="submit" class="btn btn-default">Product Edit</button>
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
