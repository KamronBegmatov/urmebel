<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@include('template.header_section')
<!-- //banner-top -->
<!-- banner -->
<div class="page-head">
	<div class="container">
		<h3>Контакты</h3>
	</div>
</div>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="contact-grids">
				<div class="col-md-4 contact-grid text-center animated wow slideInLeft" data-wow-delay=".5s">
					<div class="contact-grid1">
						<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
						<h4>Адрес</h4>
						<p>Чиланзар, 26-квартал, <span>Ташкент.</span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid text-center animated wow slideInUp" data-wow-delay=".5s">
					<div class="contact-grid2">
						<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
						<h4>Позвоните нам</h4>
						<p>+998 90 352 48 66<span></span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid text-center animated wow slideInRight" data-wow-delay=".5s">
					<div class="contact-grid3">
						<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						<h4>Email</h4>
						<p><a href="mailto:info@example.com">urmebel.uz@gmail.com</a><span><a href="mailto:info@example.com"></a></span></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="map wow fadeInDown animated" data-wow-delay=".5s">
				<h3 class="tittle">Смотрите на карте</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d671.9050922749168!2d69.23011915542712!3d41.35132086719712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1510238558993" frameborder="0" style="border:0"></iframe>
			</div>
			<h3 class="tittle">Отправить заявку</h3>
			<form>
				<div class="contact-form2">
					<input type="text" value="Имя" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" value="Телефон" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Пишите здесь...</textarea>
					<input type="submit" value=" Отправить " >
				</div>
			</form>
		</div>
	</div>

<!-- //contact -->

<!-- //product-nav -->
<!--<div class="coupons">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>Buy your product in a simple way</h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>LOGIN TO YOUR ACCOUNT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>SELECT YOUR ITEM</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>MAKE PAYMENT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>-->
<!-- footer -->
@include('template.footer_section')
<!-- //footer -->
</body>
</html>
