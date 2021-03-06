@extends('master')
@section('content')
<div class="content">
	<div class="container">
		<div class="login-page">
		    <div class="dreamcrub">
 				<ul class="breadcrumbs">
                    <li class="home">
                       <a href="{{route('index')}}" title="Go to Home Page">TRANG CHỦ</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">ĐĂNG NHẬP</li>
                </ul>
                <ul class="previous">
                	<li><a href="index.html">Trở về trang vừa truy cập</a></li>
                </ul>
                <div class="clearfix"></div>
			</div>
			<div class="account_grid">
				<div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
					<h2>NEW CUSTOMERS</h2>
					<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
					<a class="acount-btn" href="{{route('register')}}">Create an Account</a>
				</div>
				<div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
					<h3>REGISTERED CUSTOMERS</h3>
					<p>If you have an account with us, please log in.</p>
					<form>
						<div>
							<span>Email Address<label>*</label></span>
							<input type="text"> 
						</div>
						<div>
							<span>Password<label>*</label></span>
							<input type="password"> 
						</div>
						<a class="forgot" href="#">Forgot Your Password?</a>
						<input type="submit" value="Login">
					</form>
				</div>	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
@endsection