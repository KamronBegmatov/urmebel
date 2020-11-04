<div class="footer">
    <div class="container">
        <div class="col-md-3 footer-left">
            <h2><a href="{{route('home')}}"><img src="{{asset('images/logo_small.png')}}" alt=" " /></a></h2>
            <p>Высококачественная мебель под ваш вкус в Ташкенте.</p>
        </div>
        <div class="col-md-9 footer-right">
            <!--<div class="col-sm-6 newsleft">
                <h3>SIGN UP FOR NEWSLETTER !</h3>
            </div>
            <div class="col-sm-6 newsright">
                <form>
                    <input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <input type="submit" value="Submit">
                </form>
            </div>-->
<div class="clearfix"></div>
<div class="sign-grds">
    <div class="col-md-4 sign-gd">
        <h4>Меню</h4>
        <ul>
            <li><a href="{{route('home')}}">Главная</a></li>
{{--            <li><a href="about.blade.php">Short Codes</a></li>--}}
            <li><a href="{{route('contact')}}">Контакты</a></li>
            <li><a href="{{route('about')}}">О компании</a></li>
        </ul>
    </div>

    <div class="col-md-4 sign-gd">
        <h4>Мебель под заказ</h4>
        <ul>
            @foreach($categories as $category)
            <li><a href="{{route('category', $category->id)}}">{{$category->name}}</a></li>
                @endforeach
        </ul>
    </div>

    <div class="col-md-4 sign-gd-two">
        <h4>Офис</h4>
        <ul>
            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Адрес : Чиланзар, 26-квартал, <span>Ташкент.</span></li>
            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">urmebel.uz@gmail.com</a></li>
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Телефон : +998 90 352 48 66</li>
        </ul>
    </div>
    <!--<div class="col-md-4 sign-gd flickr-post">
        <h4>Flickr Posts</h4>
        <ul>
            <li><a href="product.blade.php"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
            <li><a href="product.blade.php"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
            <li><a href="product.blade.php"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
            <li><a href="product.blade.php"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
            <li><a href="product.blade.php"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
            <li><a href="product.blade.php"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
            <li><a href="product.blade.php"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
            <li><a href="product.blade.php"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
            <li><a href="product.blade.php"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
        </ul>
    </div>-->
    <div class="clearfix"></div>
</div>
</div>
<div class="clearfix"></div>
<p class="copy-right">&copy {{date("Y")}} Umarov. Все права защищены.</p>
</div>
</div>
