@extends('clients.master-layout')

@section('content')
    @php
        $colors = [
            'Đen' => 'linear-gradient(#666666, #000000)',
            'Xanh Blue' => 'linear-gradient(#b3ccff, #001a4d)',
            'Nâu' => 'linear-gradient(#ffd9b3, #4d1300)',
            'Xanh lá' => 'linear-gradient(#d6ffd9, #006007)',
            'Xám' => 'linear-gradient(#fcfcfc, #666666)',
            'Ánh kim' => '',
            'Nhiều màu' => 'linear-gradient(#ff0000, #ffa500, #ffff00, #00ff00, #0000ff, #4b0082, #ee82ee',
            'Trung tính' => 'linear-gradient(#ffffff, #d99a6c)',
            'Cam' => 'linear-gradient(#ffd9b3, #ff4000)',
            'Hồng' => 'linear-gradient(#ffcce6, #f00078)',
            'Tím' => 'linear-gradient(#ffccff, #660066',
            'Đỏ' => 'linear-gradient(#ff9999, #b70000)',
            'Trắng' => 'linear-gradient(#ffffff, #f0f0f0)',
            'Vàng' => 'linear-gradient(#fff5cc, #ffcc00'
        ];
    @endphp
    <div class="main">
        <div class="product">
            <div class="product-left">
                <div class="product-left-category">
                    <div class="product-left-category-item">
                        <div class="product-left-category-item-title">
                            <h2>Danh mục</h2>
                            <span>Xóa
                                <i class="fa-solid fa-circle-xmark"></i>
                            </span>
                        </div>
                        <div class="product-left-category-item-content">
                            <input id="cat-hidden" type="hidden" value="{{$url}}">
                            <hr>
                            @if($categorise)
                            <div class="product-left-category-item-wrap">
                                @foreach($categorise as $category)
                                        <div class="product-left-category-item-item">
                                            <div class="product-left-category-item-item-input">
                                                <label class="checkbox_item" for="{{$category->id}}">
                                                    <input class="danhmuc" type="checkbox" id="{{$category->id}}" data-catid="{{$category->id}}" />
                                                    <i class="fa-solid fa-check checkbox_item_icon"></i>
                                                    <div class="product-left-category-item-item-color"></div>
                                                    <span>{{$category->name}}</span>
                                                </label>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                            @endif
                        </div>
                    </div>
                    <div class="product-left-category-item">
                        <div class="product-left-category-item-title">
                            <h2>Màu sắc</h2>
                            <span>Xóa
                                <i class="fa-solid fa-circle-xmark"></i>
                            </span>
                        </div>
                        <div class="product-left-category-item-content">
                            <hr>
                            <div class="product-left-category-item-wrap">
                                @foreach($colors as $key =>$color)
                                    <div class="product-left-category-item-item">
                                        <div class="product-left-category-item-item-input">
                                            <label class="checkbox_item">
                                                <input type="checkbox" id="0" class="mausac">
                                                <i class="fa-solid fa-check checkbox_item_icon"></i>
                                                <div class="product-left-category-item-item-color">
                                                    <div class="product-left-category-item-item-color-item">
                                                        <span style="background: '{{$color}}'"></span></div>
                                                </div>
                                                <span>{{$key}}</span>
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="product-left-category-item">
                        <div class="product-left-category-item-title">
                            <h2>Kích thước</h2>
                            <span>Xóa
                                <i class="fa-solid fa-circle-xmark"></i>
                            </span>
                        </div>
                        <div class="product-left-category-item-content">
                            <hr>
                            <div class="product-left-category-item-wrap">
                                <div class="product-left-category-item-item">
                                    <div class="product-left-category-item-item-input">
                                        <label class="checkbox_item">
                                            <input type="checkbox" id="0" class="kickthuoc">
                                            <i class="fa-solid fa-check checkbox_item_icon"></i>
                                            <div class="product-left-category-item-item-color"></div>
                                            <span>34</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="product-left-category-item-item">
                                    <div class="product-left-category-item-item-input">
                                        <label class="checkbox_item">
                                            <input type="checkbox" id="1" class="kickthuoc">
                                            <i class="fa-solid fa-check checkbox_item_icon"></i>
                                            <div class="product-left-category-item-item-color"></div>
                                            <span>35</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="product-left-category-item-item">
                                    <div class="product-left-category-item-item-input">
                                        <label class="checkbox_item">
                                            <input type="checkbox" id="2" class="kickthuoc">
                                            <i class="fa-solid fa-check checkbox_item_icon"></i>
                                            <div class="product-left-category-item-item-color"></div>
                                            <span>36</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="product-left-category-item-item">
                                    <div class="product-left-category-item-item-input">
                                        <label class="checkbox_item">
                                            <input type="checkbox" id="3" class="kickthuoc">
                                            <i class="fa-solid fa-check checkbox_item_icon"></i>
                                            <div class="product-left-category-item-item-color"></div>
                                            <span>37</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="product-left-category-item-item">
                                    <div class="product-left-category-item-item-input">
                                        <label class="checkbox_item">
                                            <input type="checkbox" id="4" class="kickthuoc">
                                            <i class="fa-solid fa-check checkbox_item_icon"></i>
                                            <div class="product-left-category-item-item-color"></div>
                                            <span>38</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="product-left-category-item-item">
                                    <div class="product-left-category-item-item-input">
                                        <label class="checkbox_item">
                                            <input type="checkbox" id="5" class="kickthuoc">
                                            <i class="fa-solid fa-check checkbox_item_icon"></i>
                                            <div class="product-left-category-item-item-color"></div>
                                            <span>39</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="product-left-category-item-item">
                                    <div class="product-left-category-item-item-input">
                                        <label class="checkbox_item">
                                            <input type="checkbox" id="6" class="kickthuoc">
                                            <i class="fa-solid fa-check checkbox_item_icon"></i>
                                            <div class="product-left-category-item-item-color"></div>
                                            <span>XXS</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="product-left-category-item-item">
                                    <div class="product-left-category-item-item-input">
                                        <label class="checkbox_item">
                                            <input type="checkbox" id="7" class="kickthuoc">
                                            <i class="fa-solid fa-check checkbox_item_icon"></i>
                                            <div class="product-left-category-item-item-color"></div>
                                            <span>S</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="product-left-category-item-item">
                                    <div class="product-left-category-item-item-input">
                                        <label class="checkbox_item">
                                            <input type="checkbox" id="8" class="kickthuoc">
                                            <i class="fa-solid fa-check checkbox_item_icon"></i>
                                            <div class="product-left-category-item-item-color"></div>
                                            <span>M</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="product-left-category-item-item">
                                    <div class="product-left-category-item-item-input">
                                        <label class="checkbox_item">
                                            <input type="checkbox" id="9" class="kickthuoc">
                                            <i class="fa-solid fa-check checkbox_item_icon"></i>
                                            <div class="product-left-category-item-item-color"></div>
                                            <span>R</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-left-category-item">
                        <div class="product-left-category-item-title">
                            <h2>Giá</h2>
                            <span>Xóa
                                <i class="fa-solid fa-circle-xmark"></i>
                            </span>
                        </div>
                        <div class="product-left-category-item-content">
                            <hr>
                            <div class="product-left-category-item-wrap">
                                <div class="product-left-category-item-item">
                                    <div class="product-left-category-item-item-input">
                                        <label class="checkbox_item">
                                            <input type="checkbox" id="0" class="gia">
                                            <i class="fa-solid fa-check checkbox_item_icon"></i>
                                            <div class="product-left-category-item-item-color"></div>
                                            <span>Dưới 1200000 VND</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="product-left-category-item-item">
                                    <div class="product-left-category-item-item-input">
                                        <label class="checkbox_item">
                                            <input type="checkbox" id="1" class="gia">
                                            <i class="fa-solid fa-check checkbox_item_icon"></i>
                                            <div class="product-left-category-item-item-color"></div>
                                            <span>Dưới 1500000 VND</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="product-left-category-item-item">
                                    <div class="product-left-category-item-item-input">
                                        <label class="checkbox_item">
                                            <input type="checkbox" id="2" class="gia">
                                            <i class="fa-solid fa-check checkbox_item_icon"></i>
                                            <div class="product-left-category-item-item-color"></div>
                                            <span>Dưới 2000000 VND</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="product-left-category-item-item">
                                    <div class="product-left-category-item-item-input">
                                        <label class="checkbox_item">
                                            <input type="checkbox" id="3" class="gia">
                                            <i class="fa-solid fa-check checkbox_item_icon"></i>
                                            <div class="product-left-category-item-item-color"></div>
                                            <span>Dưới 2500000 VND</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="product-left-category-item-item">
                                    <div class="product-left-category-item-item-input">
                                        <label class="checkbox_item">
                                            <input type="checkbox" id="4" class="gia">
                                            <i class="fa-solid fa-check checkbox_item_icon"></i>
                                            <div class="product-left-category-item-item-color"></div>
                                            <span>Trên 2500000 VND</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-right">
                <div class="product-right-top">
                    <div class="product-right-top-item">
                        <h3>Sắp xếp theo:</h3>
                        <div class="product-right-top-item-options">
                            <div class="product-right-top-item-options-content">
                                <span>Phổ biến nhất</span>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <div class="product-right-top-item-options-item">
                                <div class="product-right-top-item-options-item-content">
                                    <span>Hàng mới về</span>
                                    <span>Giá (Từ cao đến thấp)</span>
                                    <span>Hàng (Từ thấp đến cao)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-right-content grid wide">
                    <div class="product-right-content-wrap row" id="wrapper-list-products">
                        <!-- Sản phẩm  -->
                        {!! $view !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="_token" content="{{csrf_token()}}">
    <script>
        $(document).ready(function (){
            $(document).on('click', '.danhmuc', function (){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').attr('content')
                    }
                })

                var catids = $.map($('input:checked'), function (val, i){
                    return val.getAttribute("id");
                });
                var catname = $('#cat-hidden').val();
                catids = catids.concat('asd');
                $.ajax({
                    data:{
                        "catids" : catids,
                        "catname" : catname
                    },
                    url: '{{route('product.get')}}',
                    type: 'post',
                    success:function (response){
                        $("#wrapper-list-products").html(response);
                    },
                    error: function (response){
                        $("#wrapper-list-products").html(response);
                    }
                })
            })
        });
    </script>
@endsection
