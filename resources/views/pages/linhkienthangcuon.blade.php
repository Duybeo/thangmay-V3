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
				<div class="col-lg-3 mt-4 abc">
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
			<div class="col-lg-9 mt-4 ">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<h4>Linh cuộn thang cuốn</h4>
							</div>
						<div class="col-lg-4 col-md-4">
							
                            </div>
                            <div class="col-lg-4 col-md-4">
                        <select style="margin-left: auto;    width: 100%;
    height: 35px;">
								<option>Mới nhất</option>
								<option>Sản phẩm bán chạy</option>
								<option>Theo bảng giá từ A-Z</option>
								<option>Theo bảng giá từ cao đến thấp</option>
								<option>Theo bảng giá từ thấp đến cao</option>
								<option>Cũ nhất</option>
								<option>Mới nhất</option>
							</select>
                </div>
                </div>
            </div>
                            <div class="right mt-4">
                                <div class="container text-center lk">
                                    <div class="row">
                                        <div class="col-lg-4 mt-4">
            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/4.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/may.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-heart"></a></li>
                        <li><a href="" class="fa fa-eye"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
       
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">thang máy khác sạn</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$5.000000
                        <span>$10.00000</span>
                    </div>
                </div>
            </div>
                                        </div>
                                        <div class="col-lg-4 mt-4">
                                            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/1.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/2.png') }}">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-heart"></a></li>
                        <li><a href="" class="fa fa-eye"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                  
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">thang máy khác sạn</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$5.000000
                        <span>$10.00000</span>
                    </div>
                </div>
            </div>
                                        </div>
                                        <div class="col-lg-4 mt-4">
                                            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/3.png') }}">
                        <img class="pic-2" src="{{ asset('images/4.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-heart"></a></li>
                        <li><a href="" class="fa fa-eye"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                   
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">thang máy khác sạn</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$5.000000
                        <span>$10.00000</span>
                    </div>
                </div>
            </div>
                                        </div>
                <div class="col-lg-4 mt-4">
            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/4.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/may.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-heart"></a></li>
                        <li><a href="" class="fa fa-eye"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
       
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">thang máy khác sạn</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$5.000000
                        <span>$10.00000</span>
                    </div>
                </div>
            </div>
                                        </div>
                                        <div class="col-lg-4 mt-4">
                                            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/1.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/2.png') }}">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-heart"></a></li>
                        <li><a href="" class="fa fa-eye"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                  
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">thang máy khác sạn</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$5.000000
                        <span>$10.00000</span>
                    </div>
                </div>
            </div>
                                        </div>
                                        <div class="col-lg-4 mt-4">
                                            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/3.png') }}">
                        <img class="pic-2" src="{{ asset('images/4.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-heart"></a></li>
                        <li><a href="" class="fa fa-eye"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                   
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">thang máy khác sạn</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$5.000000
                        <span>$10.00000</span>
                    </div>
                </div>
            </div>
                                        </div>
                                        <div class="col-lg-4 mt-4">
            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/4.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/may.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-heart"></a></li>
                        <li><a href="" class="fa fa-eye"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
       
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">thang máy khác sạn</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$5.000000
                        <span>$10.00000</span>
                    </div>
                </div>
            </div>
                                        </div>
                                        <div class="col-lg-4 mt-4">
                                            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/1.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/2.png') }}">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-heart"></a></li>
                        <li><a href="" class="fa fa-eye"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                  
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">thang máy khác sạn</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$5.000000
                        <span>$10.00000</span>
                    </div>
                </div>
            </div>
                                        </div>
                                        <div class="col-lg-4 mt-4">
                                            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/3.png') }}">
                        <img class="pic-2" src="{{ asset('images/4.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-heart"></a></li>
                        <li><a href="" class="fa fa-eye"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                   
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">thang máy khác sạn</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$5.000000
                        <span>$10.00000</span>
                    </div>
                </div>
            </div>
                                        </div>
                                        <div class="col-lg-4 mt-4">
            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/4.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/may.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-heart"></a></li>
                        <li><a href="" class="fa fa-eye"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
       
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">thang máy khác sạn</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$5.000000
                        <span>$10.00000</span>
                    </div>
                </div>
            </div>
                                        </div>
                                        <div class="col-lg-4 mt-4">
                                            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/1.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/2.png') }}">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-heart"></a></li>
                        <li><a href="" class="fa fa-eye"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                  
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">thang máy khác sạn</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$5.000000
                        <span>$10.00000</span>
                    </div>
                </div>
            </div>
                                        </div>
                                        <div class="col-lg-4 mt-4">
                                            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/3.png') }}">
                        <img class="pic-2" src="{{ asset('images/4.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-heart"></a></li>
                        <li><a href="" class="fa fa-eye"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                   
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">thang máy khác sạn</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$5.000000
                        <span>$10.00000</span>
                    </div>
                </div>
            </div>
                                        </div>
                                        <div class="col-lg-4 mt-4">
                                            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/thangmay.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/may.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-heart"></a></li>
                        <li><a href="" class="fa fa-eye"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                   
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">thang máy khác sạn</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$5.000000
                        <span>$10.00000</span>
                    </div>
                </div>
            </div>

                                        </div>
                                        <div class="col-lg-4 mt-4">
                                            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/thangmay.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/may.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-heart"></a></li>
                        <li><a href="" class="fa fa-eye"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                   
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">thang máy khác sạn</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$5.000000
                        <span>$10.00000</span>
                    </div>
                </div>
            </div>

                                        </div>
                                        <div class="col-lg-4 mt-4">
                                            <div class="product-grid7">
                <div class="product-image7">
                    <a href="#">
                        <img class="pic-1" src="{{ asset('images/thangmay.jpg') }}">
                        <img class="pic-2" src="{{ asset('images/may.jpg') }}">
                    </a>
                    <ul class="social">
                        <li><a href="" class="fa fa-heart"></a></li>
                        <li><a href="" class="fa fa-eye"></a></li>
                        <li><a href="" class="fa fa-shopping-cart"></a></li>
                    </ul>
                   
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">thang máy khác sạn</a></h3>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="price">$5.000000
                        <span>$10.00000</span>
                    </div>
                </div>
            </div>

                                        </div>

						<nav aria-label="Page navigation example-blog mb-4" style="margin: auto;margin-top: 5%;">
                            <ul class="pagination mb-4">
                                  <li class="page-item">
                                     <a class="page-link" href="#" aria-label="Previous">
                                          <span aria-hidden="true">&laquo;</span>
                                          <span class="sr-only">Previous</span>
                                     </a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                  <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                  <span class="sr-only">Next</span>
                                  </a>
                                  </li>
                            </ul>
                        </nav>
				
                            		</div>
                            	</div>
                            		</div>
                            	</div>
                            </div>
						</div>
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