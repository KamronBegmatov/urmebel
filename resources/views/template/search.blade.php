@include('template.header_section')
<script src="{{asset('js/easyResponsiveTabs.js')}}" type="text/javascript"></script>

<div class="product-easy">
    <div class="container">
        <script type="text/javascript">
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion
                    width: 'auto', //auto or any width like 600px
                    fit: true   // 100% fit in a container
                });
            });

        </script>
        <div class="sap_tabs">
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Результаты поиска по запросу "{{request()->search}}":</span></li>
                    {{--					<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li>--}}
                    {{--					<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li>--}}
                </ul>
                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                        @foreach($products as $product)
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset('images/products_images/'.$product->name.'/'.$product->image_1)}}" alt="" class="pro-image-front">
                                    <img src="{{'images/products_images/'.$product->name.'/'.$product->image_2}}" alt="" class="pro-image-back">
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
                    </>
                </div>
            </div>
        </div>
    </div>
</div>
@include('template.footer_section')
</body>
</html>
