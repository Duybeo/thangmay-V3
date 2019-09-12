@extends('master-layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/trangchu.css')}}">

<div class="masthead">
	<!-- Carousel container -->
	<div id="suds-carousel" class="carousel fade-carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#suds-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#suds-carousel" data-slide-to="1"></li>

		</ol>

		<!-- Content -->
		<div class="carousel-inner" role="listbox">

			<!-- Slide 1 -->
			<div class="carousel-item active">
				<div class="carousel-caption">

					<h1 class="title-slide">UNIECO</h1>
					<h3 class="text-slide">Giải pháp kinh tế tối ưu dành cho hệ thống hang máy, thang cuốn</h3>
					<a href="" class="bt-add container text-center">Tìm Hiểu Thêm</a>

				</div>
				<div class="slide-1">
					<img class="img-slide" src="images-h/slide-banner.jpg" alt="">
				</div>
			</div>

			<!-- Slide 2 -->
			<div class="carousel-item">
				<div class="carousel-caption">

					<h1 class="title-slide">Love Coding?</h1>
					<h3 class="text-slide">Click button to know more</h3>
					<a href="" class="bt-add container text-center">Tìm Hiểu Thêm</a>

				</div>
				<div class="slide-2">
					<img class="img-slide" src="images-h/slide-banner2.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="gioithieu container">
	<div class="row">
		<div class="col-md-6">
			<h2 class="gthieu">Giới Thiệu Về <span style="color: #f3cc29;">UNIECO</span></h2>
			<p class="text-gt">UNIECO được thành lập từ năm 2007 tại Hà Nội, Việt Nam, với tầm nhìn tạo ra những sản phẩm có chất lượng cao nhất và dịch vụ tốt nhất, Suplo liên tục phát triển và dẫn đầu thị trường với những sản phẩm, thiết kế, và công nghệ mới. Tầm nhìn và mục tiêu của Suplo vẫn được duy trì, cập nhật và phát huy xuyên suốt quá trình phát triển. Ngày nay, Suplo đã trở lên lớn mạnh với quy mô hơn 150 nhân viên, và phạm vi hoạt động trên cả nước. Các sản phẩm của Suplo hoàn toàn ưu việt về thiết kế, công nghệ, chất lượng so với các sản phẩm khác trên thị trường, tạo đẳng cấp vượt trội. Giải pháp lọc nước của Suplo không chỉ đảm bảo nguồn nước tốt nhất mà còn có tính năng cao cấp, theo dõi tình trạng máy và tiện lợi dễ dàng khi lắp đặt, thay thế nhằm đem lại cho khách hàng chất lượng cuộc sống tốt nhất, đảm bảo sức khỏe của cả gia đình.</p>
			<a class="bt-gt" href="">Tìm hiểu thêm</a>
		</div>
		<div class="col-md-6">
			<div class="img-gioithieu1">
			<img class="img-gioithieu" src="images-h/bao-tri-thang-may.jpg" alt="">
			</div>
		</div>
	</div>
</div>
<div class="ket-qua">
	<div class="container">
		<div class="row">
			<div class="col doanhso">
				<span class="number">150</span>
				<p class="text-nv">Nhân Viên</p>
			</div>
			<div class="col doanhso">
				<span class="number">24/7</span>
				<p class="text-nv">Hỗ Trợ</p>
			</div>
			<div class="col doanhso">
				<span class="number">1000+</span>
				<p class="text-nv">Khách hàng</p>
			</div>
			<div class="col doanhso">
				<span class="number">150</span>
				<p class="text-nv">Đối Tác</p>
			</div>
			<div class="col doanhso">
				<span class="number">50+</span>
				<p class="text-nv">Giải Thưởng</p>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<h2 class="title-content">Dịch Vụ Của Chúng Tôi</h2>
	<div class="gach-chan container"></div>
	<div class="row">
		<div class="col-md-4">
			<div class="img-dichvu">
				<img src="" alt="">
			</div>
		</div>
	</div>
</div>
@endsection