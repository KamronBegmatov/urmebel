@include('template.header_section')
<link rel="stylesheet" type="text/css" href="{{asset('css/jquery-ui.css')}}">
<!-- //banner-top -->
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>{{$category->name}}</h3>
	</div>
</div>
<!-- //banner -->
<!-- mens -->
<div class="men-wear">
	<div class="container">
		<div class="col-md-4 products-left">
			<div class="filter-price">
				<h3>Сортировать по цене:</h3>
					<ul class="dropdown-menu6">
						<li>
							<div id="slider-range"></div>
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>
					</ul>
							<!---->
							<script type='text/javascript'>//<![CDATA[
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 10000000,
										values: [ 200000, 1000000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "" + ui.values[ 0 ] + "сум - " + ui.values[ 1 ] + "сум" );
										}
							 });
							$( "#amount" ).val( "" + $( "#slider-range" ).slider( "values", 0 ) + "сум - " + $( "#slider-range" ).slider( "values", 1 )+ "сум" );

							});//]]>

							</script>
						<script type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script>
					 <!---->
			</div>
			<div class="css-treeview">
				<h4>Категории</h4>
				<ul class="tree-list-pad">
                    @foreach($categories as $category)
                        <li><a href="{{route('category', $category->id)}}">{{$category->name}}</a>
                    </li>
                    @endforeach
                </ul>
			</div>
			<div class="community-poll">
				<h4>Сортировать:</h4>
				<div class="swit form">
					<form method="get" action="{{route('category', $category->id)}}">
                        @csrf
					<div class="check_box"> <div class="radio"> <label><input type="radio" value="default" name="sort"><i></i>Обычно</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" value="last" name="sort"><i></i>Недавние</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" value="asc" name="sort"><i></i>Имя (А - Я)</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" value="desc" name="sort"><i></i>Имя (Я - А)</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" value="high" name="sort"><i></i>Цена (Высокая - Низкая)</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" value="low" name="sort"><i></i>Цена (Низкая - Высокая)</label> </div></div>
					<input type="submit" onclick="display()" value=" Выбрать ">
					</form>
                </div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products-right">
			<h5>Продукты</h5>
			<div class="sort-grid">
{{--				<div class="sorting">--}}
{{--					<h6>Фильтр: </h6>--}}
{{--                    <form method="get" action="{{route('category', $category->id)}}">--}}
{{--                        @csrf--}}
{{--					<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">--}}
{{--                        <select name="sort" class="frm-field required sect">--}}
{{--						<option name="sort" value="default">Обычно</option>--}}
{{--                        <option name="sort" value="last">Недавние</option>--}}
{{--						<option name="sort" value="asc">Имя (А - Я)</option>--}}
{{--						<option name="sort" value="desc">Имя (Я - А)</option>--}}
{{--						<option name="sort" value="high">Цена (Высокая - Низкая)</option>--}}
{{--						<option name="sort" value="low">Цена (Низкая - Высокая)</option>--}}
{{--					</select>--}}
{{--                        <input type="submit" value=" Выбрать ">--}}
{{--                    </form>--}}
{{--					<div class="clearfix"></div>--}}
{{--				</div>--}}
{{--				<div class="sorting">--}}
{{--					<h6>Showing</h6>--}}
{{--					<select id="country2" onchange="change_country(this.value)" class="frm-field required sect">--}}
{{--						<option value="null">7</option>--}}
{{--						<option value="null">14</option>--}}
{{--						<option value="null">28</option>--}}
{{--						<option value="null">35</option>--}}
{{--					</select>--}}
{{--					<div class="clearfix"></div>--}}
{{--				</div>--}}
				<div class="clearfix"></div>
			</div>
			<div class="men-wear-top">
				<script src="{{asset('js/responsiveslides.min.js')}}"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
{{--				<div  id="top" class="callbacks_container">--}}
{{--					<ul class="rslides" id="slider3">--}}
{{--						<li>--}}
{{--							<img class="img-responsive" src="images/men21.jpg" alt=" "/>--}}
{{--						</li>--}}
{{--						<li>--}}
{{--							<img class="img-responsive" src="images/men11.jpg" alt=" "/>--}}
{{--						</li>--}}
{{--						<li>--}}
{{--							<img class="img-responsive" src="images/men21.jpg" alt=" "/>--}}
{{--						</li>--}}
{{--						<li>--}}
{{--							<img class="img-responsive" src="images/men11.jpg" alt=" "/>--}}
{{--						</li>--}}

{{--					</ul>--}}
{{--				</div>--}}
{{--				<div class="clearfix"></div>--}}
{{--			</div>--}}
{{--			<div class="men-wear-bottom">--}}
{{--				<div class="col-sm-4 men-wear-left">--}}
{{--					<img class="img-responsive" src="images/men31.jpg" alt=" " />--}}
{{--				</div>--}}
{{--				<div class="col-sm-8 men-wear-right">--}}
{{--					<h4>Exclusive Women's Collections</h4>--}}
{{--					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem--}}
{{--					accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae--}}
{{--					ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt--}}
{{--					explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut--}}
{{--					odit aut fugit. </p>--}}
{{--				</div>--}}
{{--				<div class="clearfix"></div>--}}
{{--			</div>--}}
                @foreach($products as $product)
				<div class="col-md-4 product-men no-pad-men">
					<div class="men-pro-item simpleCart_shelfItem">
						<div class="men-thumb-item">
							<img src="{{asset('images/products_images/'.$product->name.'/'.$product->image_1)}}" alt="" class="pro-image-front">
							<img src="{{asset('images/products_images/'.$product->name.'/'.$product->image_2)}}" alt="" class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{'/category/'.$product->category_id.'/product/'.$product->id}}" class="link-product-add-cart">Подробнее</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

						</div>
						<div class="item-info-product ">
									<h4><a href="{{'/category/'.$product->category_id.'/product/'.$product->id}}">{{$product->name}}</a></h4>
									<div class="info-product-price">
                                        <del>{{$product->price+90000}} сум</del><br>
										<span class="item_price">{{$product->price}} сум</span>
									</div>
									<a href="#" class="item_add single-item hvr-outline-out button2">В корзину</a>
						</div>
					</div>
				</div>
                @endforeach
			<div class="clearfix"></div>
		</div>
{{--		<div class="pagination-grid text-right">--}}
{{--			<ul class="pagination paging">--}}
{{--				<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>--}}
{{--				<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>--}}
{{--				<li><a href="#">2</a></li>--}}
{{--				<li><a href="#">3</a></li>--}}
{{--				<li><a href="#">4</a></li>--}}
{{--				<li><a href="#">5</a></li>--}}
{{--				<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>--}}
{{--			</ul>--}}
{{--		</div>--}}
	</div>
</div>
<!-- //mens -->
<!-- //product-nav -->
<!-- footer -->
@include('template.footer_section')
<!-- //footer -->
<!-- login -->
{{--			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">--}}
{{--				<div class="modal-dialog" role="document">--}}
{{--					<div class="modal-content modal-info">--}}
{{--						<div class="modal-header">--}}
{{--							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
{{--						</div>--}}
{{--						<div class="modal-body modal-spa">--}}
{{--							<div class="login-grids">--}}
{{--								<div class="login">--}}
{{--									<div class="login-bottom">--}}
{{--										<h3>Sign up for free</h3>--}}
{{--										<form>--}}
{{--											<div class="sign-up">--}}
{{--												<h4>Email :</h4>--}}
{{--												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">--}}
{{--											</div>--}}
{{--											<div class="sign-up">--}}
{{--												<h4>Password :</h4>--}}
{{--												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">--}}

{{--											</div>--}}
{{--											<div class="sign-up">--}}
{{--												<h4>Re-type Password :</h4>--}}
{{--												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">--}}

{{--											</div>--}}
{{--											<div class="sign-up">--}}
{{--												<input type="submit" value="REGISTER NOW" >--}}
{{--											</div>--}}

{{--										</form>--}}
{{--									</div>--}}
{{--									<div class="login-right">--}}
{{--										<h3>Sign in with your account</h3>--}}
{{--										<form>--}}
{{--											<div class="sign-in">--}}
{{--												<h4>Email :</h4>--}}
{{--												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">--}}
{{--											</div>--}}
{{--											<div class="sign-in">--}}
{{--												<h4>Password :</h4>--}}
{{--												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">--}}
{{--												<a href="#">Forgot password?</a>--}}
{{--											</div>--}}
{{--											<div class="single-bottom">--}}
{{--												<input type="checkbox"  id="brand" value="">--}}
{{--												<label for="brand"><span></span>Remember Me.</label>--}}
{{--											</div>--}}
{{--											<div class="sign-in">--}}
{{--												<input type="submit" value="SIGNIN" >--}}
{{--											</div>--}}
{{--										</form>--}}
{{--									</div>--}}
{{--									<div class="clearfix"></div>--}}
{{--								</div>--}}
{{--								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
<!-- //login -->
</body>
</html>
