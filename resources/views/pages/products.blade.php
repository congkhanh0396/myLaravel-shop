@extends('master')
@section('content')
<div class="container">
	<div class="products-page">
		<div class="products">
			<div class="product-listy">
				<h2>our Products</h2>
				<ul class="product-list">
					@foreach($cate as $type)
					<li><a href="{{route('products',$type->id)}}">{{$type->name}}</a></li>
					@endforeach
					<li><a href="register.html">Register</a></li>
				</ul>
			</div>
			<div class="latest-bis">
				<img src="source/images/l4.jpg" class="img-responsive" alt="" />
				<div class="offer">
					<p>40%</p>
					<small>Top Offer</small>
				</div>
			</div> 	
			<div class="tags">
				<h4 class="tag_head">Tags Widget</h4>
				<ul class="tags_links">
					<li><a href="#">Kitesurf</a></li>
					<li><a href="#">Super</a></li>
					<li><a href="#">Duper</a></li>
					<li><a href="#">Theme</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Women</a></li>
					<li><a href="#">Equipment</a></li>
					<li><a href="#">Best</a></li>
					<li><a href="#">Accessories</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Apparel</a></li>
					<li><a href="#">Super</a></li>
					<li><a href="#">Duper</a></li>
					<li><a href="#">Theme</a></li>
					<li><a href="#">Responsive</a></li>
					<li><a href="#">Women</a></li>
					<li><a href="#">Equipment</a></li>
				</ul>
			</div>
		</div>

		<div class="new-product">
			<div class="new-product-top">
				<ul class="product-top-list">
					<li><a href="index.html">Home</a>&nbsp;<span>&gt;</span></li>
					<li><span class="act">Best Sales</span>&nbsp;</li>
				</ul>
				<p class="back"><a href="index.html">Back to Previous</a></p>
				<div class="clearfix"></div>
			</div>
			<div class="mens-toolbar">
				<div class="sort">
					<div class="sort-by">
						<label>Sort By</label>
						<select>
							<option value="">Position</option>
							<option value="">Name</option>
							<option value="">Price</option>
						</select>
						<a href=""><img src="source/images/arrow2.gif" alt="" class="v-middle"></a>
					</div>
				</div>
				<div class="clearfix"></div>		
			</div>
			<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
				<div class="cbp-vm-options">
					<a href="#" class="cbp-vm-icon cbp-vm-grid cbp-vm-selected" data-view="cbp-vm-view-grid" title="grid">Grid View</a>
					<a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list">List View</a>
				</div>
				<div class="pages">   
					<div class="limiter visible-desktop">
						<label>Show</label>
						<select>
						<option value="" selected="selected">9</option>
						<option value="">15</option>
						<option value="">30</option>
						</select> per page        
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">	
				<ul>
					@foreach($cate_product as $item)
					<li>
						<a class="cbp-vm-image" href="{{route('single',$item->id)}}">
							<!-- <div class="simpleCart_shelfItem"> -->
							<div class="view view-first">
								<div class="inner_content clearfix">		
									<div class="product_image">
										<img src="../resources/images/{{$item->image}}" class="img-responsive" alt="" style="width:300px; height:300px"/>
										<div class="mask">
											<div class="info">Quick View</div>
										</div>
										<div class="product_container">
											<div class="cart-left">
												<p class="title">{{$item->name}}</p>
											</div>
											<div class="pricey"><span class="item_price">${{$item->price}}</span></div>
											<div class="clearfix"></div>
										</div>		
									</div>			
								</div>
							</div>
						</a>
						<div class="cbp-vm-details">
								{{$item->description}}
						</div>
						<a class="cbp-vm-icon cbp-vm-add item_add" href="#">Add to cart</a>
					</li>
					@endforeach
				</ul>
			</div>
			<div style="margin-left:40%; margin-top:15px;">
				{{$cate_product->links()}}
			</div>
			<script src="source/js/cbpViewModeSwitch.js" type="text/javascript"></script>
			<script src="source/js/classie.js" type="text/javascript"></script>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
</div>

<div class="other-products">
		<div class="container">
			<h3 class="like text-center">Sale Products</h3>        			
			<ul id="flexiselDemo3">
				@foreach($sale_product as $item)
					<li><a href="{{route('single',$item->id)}}"><img src="../resources/images/{{$item->image}}" class="img-responsive" alt="" style="width:300px; height:400px" /></a>
						<div class="product liked-product simpleCart_shelfItem">
							<a class="like_name" href="{{route('single',$item->id)}}">{{$item->name}}</a>
							<p><a class="item_add" href="#"><i></i> <span class=" item_price">{{$item->promotion}}</span></a></p>
						</div>
					</li>
				@endforeach
			</ul>
			<script type="text/javascript">
				$(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems: 4,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
						responsiveBreakpoints: { 
							portrait: { 
							changePoint:480,
							visibleItems: 1
							}, 
							landscape: { 
							changePoint:640,
							visibleItems: 2
							},
							tablet: { 
							changePoint:768,
							visibleItems: 3
							}
						}
					});
				});
			</script>
			<script type="text/javascript" src="source/js/jquery.flexisel.js"></script>
		</div>
</div>
@endsection