@extends('master-layout')
@section('title')
 Linh kien
@endsection

@section('css')
   <link rel="stylesheet" href="{{asset('css/linhkien.css')}}">
@endsection
@section('content')
<main>
	<div class="content_linhkien">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 mt-4 col-md-12 abc">
				<div class="blog-categories aaaa">
						<a href=""><h4 class="title_block">Danh mục</h4></a>
						<div class="blog_content">
							<ul class="category-top-menu-blog" style="padding: 0px;margin: 0px;">
								<li style="list-style: none;">
									<ul class="category-sub-menu-blog" >
										<div class="down">
										<li class="data-depth-blog" >
											<a href="">Linh kiện thang máy</a>
										</li>
									    </div>
									    <div class="dow">
										<li class="data-depth-blog">
											<a href="">Linh kiện thang cuốn</a>
										</li>
									    </div>
									</ul>
								</li>
							</ul>
						</div>
				</div>
				<div class="blog-categories">
						<a href=""><h4 class="title_block">Bộ lọc tìm kiếm</h4></a>
						<div class="slidecontainer mt-4">
							<h5><a href="">Giá</a></h5>
                    <p class="gia">$0   ~    $<span id="demo"></span></p>
                 <input type="range" min="100000" max="35000000" value="" class="" id="myRange" style="width: 100%;">
                 </div>
                 <div class="thuonghieu">
                 	<h5><a href="">Thương hiệu</a></h5>
                 	<ul class="ulth">
                 		<li class="th">
                 			<input type="checkbox" name="">
                 			<a href="" class="">Schindler</a>
                 		</li>
                 		<li class="th">
                 			<input type="checkbox" name="">
                 			<a href="" class=""> Otis</a>
                 		</li>
                 		<li class="th">
                 			<input type="checkbox" name="">
                 			<a href="" class="">Thyssen</a>
                 		</li>
                 		<li class="th">
                 			<input type="checkbox" name="">
                 			<a href="" class="">Kone</a>
                 		</li>
                 		<li class="th">
                 			<input type="checkbox" name="">
                 			<a href="" class="">Schindler</a>
                 		</li>
                 	</ul>
                 </div>
                    </div>
                    <div class="blog-categories">
                    	<a href=""><h4 class="title_block">Sản phẩm nổi bật</h4></a>
                    	<div class="spsl" style="">
                    		 <div class="box21">
                        <a href=""><img src="{{ asset('images/may.jpg') }}" alt=""></a>
                        <div class="box-content">
                            <h4 class="title">Thang máy khách sạn</h4>
                            <p class="description">7.000.000đ</p>
                            <a class="read-more" href="#">Đọc thêm</a>
                        </div>
                             </div>
                             <div class="box21">
                        <a href=""><img src="{{ asset('images/thangmay.jpg') }}" alt=""></a>
                        <div class="box-content">
                            <h4 class="title">Thang máy khách sạn</h4>
                            <p class="description">7.000.000đ</p>
                            <a class="read-more" href="#">Đọc thêm</a>
                        </div>
                             </div>
                             <div class="box21">
                        <a href=""><img src="{{ asset('images/thang.jpg') }}" alt=""></a>
                        <div class="box-content">
                            <h4 class="title">Thang máy khách sạn</h4>
                            <p class="description">7.000.000đ</p>
                            <a class="read-more" href="#">Đọc thêm</a>
                        </div>
                             </div>
			            </div>
		            </div>
		            <div class="blog-categories">
		            	<a href=""><h4 class="title_block">Hỗ trợ khách hàng</h4></a>
		            	<div class="kh">
		            		<ul>
		            			<li><a href="">Hỗ trợ kĩ thuật :&nbsp;  091999999</a></li>
		            			<li><a href="">Hỗ trợ kinh doanh:&nbsp; 091999999</a></li>
		            			<li><a href="">Hỗ trợ dịch vụ   :&nbsp;091999999</a></li>
		            		</ul>
		            	</div>
		            </div>
		        </div>
			<div class="col-lg-9  mt-4  ">
                <div class="ri">
                <div class="container">
                    <div class="row">
				     <div class="col-lg-6 mt-4 col-md-12">
                        <div class="container">
  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="{{ asset('images/may.jpg') }}" style="width:100%;height: 400px;">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="{{ asset('images/thangmay.jpg') }}" style="width:100%;height: 400px;">
  </div>

  <div class="mySlides">
    <div class="numbertext"></div>
    <img src="{{ asset('images/thang.jpg') }}" style="width:100%;height: 400px;">
  </div>
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
  <div class="row mt-4">
    <div class="column mt-4">
      <img class="demo cursor" src="{{ asset('images/may.jpg') }}" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column mt-4">
      <img class="demo cursor" src="{{ asset('images/thangmay.jpg') }}" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column mt-4">
      <img class="demo cursor" src="{{ asset('images/thang.jpg') }}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>    
  </div>
</div>
 
                     </div>
                     <div class="col-lg-6 mt-4 col-md-12 fomm" >
                         <h3 class="product-title">Bộ điều khiển cửa cabin thang máy</h3>
                        <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            
                        </div>
                        <p class="product-description">Tủ điện thang máy có chức năng điều khiển mọi hoạt động của thang máy, thực tế các chức năng hoạch định phối hợp với các lệnh điều khiển của người sử dụng</p>
                        <h4 class="price">Giá: <span>$180</span></h4>
                        <p class="vote"><strong>91%</strong> của người mua rất thích sản phẩm này!<strong>(87 phiếu)</strong></p>
                        <h5 class="sizes">Số lượng
                            <input type="number" min="1" value="1" class="amount">
                        </h5>
                        <h5 class="colors">Nhãn hiệu
                            <select class="nh">
                                <option>Schindler</option>
                                <option> Otis</option>
                                <option>Thyssen</option>
                                <option>Kone</option>
                                <option>Schindler</option>
                            </select>
                            <span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
                            <span class="color green"></span>
                            <span class="color blue"></span>
                        </h5>
                        <div class="action">
                            <button class="add-to-cart btn btn-default" type="button">add to cart</button>
                            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                        </div>
                     </div>
                            </div>
						</div>
					</div>
				</div>   
</main>
 @endsection

@section('js')

@endsection