@extends('master-layout')
@section('title')
 Giới thiệu
@endsection



@section('css')
<link rel="stylesheet" href="css/gioithieu.css">
@endsection



@section('content')
 <main class="main">

    <section id="breadcrumb">
  <div class="wrapper">
    <div class="inner">
      <div class="breadcrumb-content">

        
        
        
        
        <p class="breadcrumb-title">Về chúng tôi</p>
        
        <a href="/" title="Quay trở về trang chủ">Trang chủ</a>

        
        <i class="fa fa-angle-right" aria-hidden="true"></i>
        <span>Về chúng tôi</span>

        
      </div>
    </div>
  </div>
</section>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="about-left">
            <a href="#">
              <img src="images/whoweare.jpg" alt="Chúng tôi là ai">
            </a>
            <div class="who-title text-left">
              <div class="who-shortdes">
                <h2>Chúng tôi là ai</h2>
                <p>Sứ mệnh của chúng tôi là gì ?</p>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-md-6">
          <div class="who-des">
            <p class="tille">Với đội ngũ nhân viên trẻ, năng động, nhiệt huyết và chuyên nghiệp, Contruction tin rằng sẽ mang đến cho khách hàng không gian sống và làm việc không những sang trọng, đẳng cấp mà còn thể hiện được nét văn hóa riêng của mỗi doanh nghiệp, gia đình.</p>
            <p class="view-more"><a href="#">Xem tiếp&nbsp;»</a></p></div>
          </div>
        </div>
      </div>
      <div class="khoangcach"></div>
      <!-- jksdhajskd -->
  <!--     <div class="container">
        <div class="row">
          <div class="col-md-3" >
            <div class="module">
              <div class="contents">
                <div class="blurb_image"><a href="#" style="color: #ffffff; background-color: #3a3a3a;">
                  <span class="icon" style="color: #ffffff; background-color: #3a3a3a;"><i class="fas fa-dollar-sign"></i> </span></a>
                </div>
                <div class="blurb_container">
                  <h4>
                    <a href="#">GIÁ CẢ CẠNH TRANH</a>
                  </h4>   
                  <div class="blurb_content"></div>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-3 " >
           <div class="module-1">
            <div class="contents">
              <div class="blurb_image"><a href="#" style="color: #ffffff; background-color: #3a3a3a;">
                <span class="icon" style="color: #ffffff; background-color: #3a3a3a;"><i class="fas fa-comments"></i></span></a>
              </div>
              <div class="blurb_container">
                <h4>
                  <a href="#">TƯ VẤN TẬN TÌNH</a>
                </h4>   
                <div class="blurb_content"></div>
              </div>
            </div> 
          </div>
        </div>
        <div class="col-md-3" >
          <div class="module-2">
            <div class="contents">
              <div class="blurb_image"><a href="#" style="color: #ffffff; background-color: #3a3a3a;">
                <span class="icon" style="color: #ffffff; background-color: #3a3a3a;"><i class="fas fa-users"></i></i> </span></a>
              </div>
              <div class="blurb_container">
                <h4>
                  <a href="#">HỖ TRỢ 24/7</a>
                </h4>   
                <div class="blurb_content"></div>
              </div>
            </div> 
          </div>
        </div>
        <div class="col-md-3" >
         <div class="module-3">
          <div class="contents">
            <div class="blurb_image"><a href="#" style="color: #ffffff; background-color: #3a3a3a;">
              <span class="icon" style="color: #ffffff; background-color: #3a3a3a;"><i class="fas fa-cog"></i> </span></a>
            </div>
            <div class="blurb_container">
              <h4>
                <a href="#">DỊCH VỤ TẬN TÂM</a>
              </h4>   
              <div class="blurb_content"></div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </div> -->
  <div class="mission ">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="service-item">
            <a href="#">
              <div class="img-left">
               <i class="fas fa-dollar-sign"></i>
             </div>
             <div class="info-right">
              <h3>Sáng tạo</h3>
              <p>Với đội ngũ kiến trúc sư, kỹ sư, thợ lành nghề, dồi dào kinh nghiệm, công ty sẽ mang đến cho khách hàng sự hài lòng về chất lượng công trình đồng thời thể hiện được giá trị thương hiệu.</p>
            </div>
          </a>
        </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="service-item">
          <a href="#">
            <div class="img-left">
              <i class="fas fa-comments"></i>
            </div>
            <div class="info-right">
              <h3>An toàn</h3>
              <p>Với đội ngũ kiến trúc sư, kỹ sư, thợ lành nghề, dồi dào kinh nghiệm, công ty sẽ mang đến cho khách hàng sự hài lòng về chất lượng công trình đồng thời thể hiện được giá trị thương hiệu.</p>
            </div>
          </a>
        </div>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-3">
        <div class="service-item">
          <a href="#">
            <div class="img-left">
             <i class="fas fa-users"></i>
           </div>
           <div class="info-right">
            <h3>Bảo mật</h3>
            <p>Với đội ngũ kiến trúc sư, kỹ sư, thợ lành nghề, dồi dào kinh nghiệm, công ty sẽ mang đến cho khách hàng sự hài lòng về chất lượng công trình đồng thời thể hiện được giá trị thương hiệu.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <div class="service-item">
        <a href="#">
          <div class="img-left">
           <i class="fas fa-cog"></i>
         </div>
         <div class="info-right">
          <h3>Chất lượng</h3>
          <p>Với đội ngũ kiến trúc sư, kỹ sư, thợ lành nghề, dồi dào kinh nghiệm, công ty sẽ mang đến cho khách hàng sự hài lòng về chất lượng công trình đồng thời thể hiện được giá trị thương hiệu.</p>
        </div>
      </a>
    </div>
  </div>     
</div>
</div>
</div>



<div class="dichvu">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <div class="item-content">  
          <div class="item-row">
            <div class="item-right">
              <a href="#"><img src="images/service-1.png" alt=" Thi công xây dựng"></a>
            </div>
            <div class="item-left">
              <h3> Thi công xây dựng</h3>
              <p>Với đội ngũ kiến trúc sư, kỹ sư, thợ lành nghề, dồi dào kinh nghiệm, công ty sẽ mang đến cho khách hàng sự hài lòng về chất lượng công trình đồng thời thể hiện được giá trị thương hiệu.</p>
            </div>
          </div> 
          <div class="item-row">
            <div class="item-right">
              <a href="#"><img src="images/service-2.png" alt="Xây dựng công trình"></a>
            </div>
            <div class="item-left">
              <h3>Xây dựng công trình</h3>
              <p>Với đội ngũ kiến trúc sư, kỹ sư, thợ lành nghề, dồi dào kinh nghiệm, công ty sẽ mang đến cho khách hàng sự hài lòng về chất lượng công trình đồng thời thể hiện được giá trị thương hiệu.</p>
            </div>
          </div>   
          <div class="item-row">
            <div class="item-right">
              <a href="#"><img src="images/service-3.png" alt="Sơn sửa công trình"></a>
            </div>
            <div class="item-left">
              <h3>Sơn sửa công trình</h3>
              <p>Với đội ngũ kiến trúc sư, kỹ sư, thợ lành nghề, dồi dào kinh nghiệm, công ty sẽ mang đến cho khách hàng sự hài lòng về chất lượng công trình đồng thời thể hiện được giá trị thương hiệu.</p>
            </div>
          </div>   
        </div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-left">
          <a href="#"><img src="images/service.jpg" alt="Dịch vụ"></a>
          <div class="text-right">
            <div class="shortdes">
              <h2>Dịch vụ</h2>
              <p>của chúng tôi</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="taisao">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <div class="about-left">
          <a href="#"><img src="images/whyus.jpg" alt="Tại sao "></a>
          <div class=" text-left">
            <div class="shortdes">
              <h2>Tại sao </h2>
              <p>chọn chúng tôi ?</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 col-md-6">
        <div class="des">
          <ul>



            <li><i class="fas fa-check"></i>Chất lượng tuyệt vời</li>
            
            
            
            
            <li><i class="fas fa-check"></i>An toàn tuyệt đối</li>
            
            
            
            
            <li><i class="fas fa-check"></i>Sáng tạo không giới hạn</li>
            
            
            
            
            <li><i class="fas fa-check"></i>Bảo mật thông tin</li>
            
            
            
            
            <li><i class="fas fa-check"></i>Tuân thủ đúng thời gian</li>
            
            
            
            
            <li><i class="fas fa-check"></i>Nhân viên thân thiện, dễ thương</li>
            
            
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="nhanxet">
  <div class="container">
    <div class="row" style="display: block;">
      <div class="col-xs-12 col-sm-8 col-md-6 pull-right">
        <div id="owl-nhanxet" class=" owl-carousel  owl-theme  owl-slider "  style="opacity: 1; display: block;">

          <div class="owl-wrapper-outer   "  >
            <div class="owl-wrapper "  style="width: 2220px; left: 0px; display: block; transition: all 400ms ease 0s; transform: translate3d(0px, 0px, 0px);">
              <div class="owl-item " style="width: 555px;">
                <div class="testimonial" >
                  <p>Đã xây nhà ở đây, và nhận được tư vấn thiết kế của đội ngũ nhân viên ở công ty, tôi thực sự cảm thấy hài lòng vì sự lựa chọn của mình.<br>
                  Mong rằng Công ty sẽ phát triển hơn nữa, thiết kế và cho ra những sản phẩm chất lượng, giá cả hợp lý nhất để có thêm nhiều hơn nữa các sản phẩm đẹp cho chúng tôi lựa chọn</p>
                  <div class="whopic">
                    <img src="images/nhanxet-1.jpg" class="centered" alt="Ý kiến khách hàng 1">
                    <strong>Ông Tuấn Trần</strong>
                  </div>
                </div>
              </div>
              <div class="owl-item" style="width: 555px;">
                <div class="testimonial">
                  <p>Đã từng thi công ống nước ở đây, và nhận được tư vấn thiết kế của đội ngũ nhân viên ở công ty, tôi thực sự cảm thấy hài lòng vì sự lựa chọn của mình.<br>
                  Mong rằng Công ty sẽ phát triển hơn nữa, thiết kế và cho ra những sản phẩm chất lượng, giá cả hợp lý nhất để có thêm nhiều hơn nữa các sản phẩm đẹp cho chúng tôi lựa chọn</p>
                  <div class="whopic">
                    <img src="images/nhanxet-2.jpg" class="centered" alt="Ý kiến khách hàng 2">
                    <strong>Bà Mai Ngô</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="owl-controls clickable " >
            <div class="owl-pagination">
              <div class="owl-page active" >
                <span class=""></span>
              </div><div class="owl-page " >
                <span class=""></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="lienhe">
    <div class="container">
      <div class="row">
        <div class=" col-md-7">
          <div class="contact-content">
            <h2 class="title">Liên hệ với chúng tôi</h2>
            <div class="des">
              Với đội ngũ kiến trúc sư, kỹ sư, thợ lành nghề, dồi dào kinh nghiệm, công ty sẽ mang đến cho khách hàng sự hài lòng về chất lượng công trình đồng thời thể hiện được giá trị thương hiệu.
            </div>
            <p class="contact-more"><a href="#">Liên hệ</a></p>
          </div>
        </div>
        <div class="col-md-5">
          <<img class="contact-img" src="images/contact-index.png" style="max-width: 100%;">
        </div>
      </div>
    </div>
  </div>
</main>
 @endsection
@section('js')

@endsection