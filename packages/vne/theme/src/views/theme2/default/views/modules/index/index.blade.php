@extends('VNE-THEME::layouts.master')
@section('content')
<main class="main">

			<div class="container">
				<div class="row no-spacing">
					<!-- hero -->
					<section class="col-md-8 col-xl-9 no-spacing section hero">
						<div class="carousel js-carousel">
							<div class="img-cover carousel-item">
								<a href="#" class="img-cover__wrapper">
									<img src="images/slide.png" alt="">
								</a>
							</div>
							<div class="img-cover carousel-item">
								<a href="#" class="img-cover__wrapper">
									<img src="images/slide1.jpg" alt="">
								</a>
							</div>
						</div>
					</section>
					<!-- hero end -->
					<!-- sign in -->
					<section class="col-md-4 col-xl-3 no-spacing section sign-in">
						<div class="inner">
							<div class="headline">Đăng nhập</div>
							<form>
								<div class="form-group">
									<label>Tài khoản</label>
									<input class="form-control" type="email">
								</div>
								<div class="form-group">
									<label>Mật khẩu</label>
									<input class="form-control" type="password">
								</div>
								<p><i>Hãy đăng nhập để tham gia rèn luyện</i></p>
								<button type="submit" class="btn btn-primary">Đăng nhập</button>
							</form>
						</div>
					</section>
					<!-- sign in end -->
				</div>
			</div>

			<div class="container container-main">

				<!-- Accordion rating -->
				<section class="section accordion-rating">
					<div class="grid top">
						<div class="grid-3 class">
							<span><i class="fa fa-book"></i> Chuyên hiệu</span>
						</div>
						<div class="grid-9 headline">
							<h2><a href="">BXH RÈN LUYỆN ĐỘI VIÊN</a></h2>
						</div>
					</div>
					<div class="grid center">
						<div class="grid-3">
							<ul class="rating-list js-accordion-buttons">
								<li class="item active">
									<h3 class="title">AN TOÀN GIAO THÔNG</h3>
									<p class="date">(01/02/2018 - 28/04/2018)</p>
								</li>
								<li class="item">
									<h3 class="title">NHÀ SỬ HỌC NHỎ TUỔI</h3>
									<p class="date">(01/02/2018 - 28/04/2018)</p>
								</li>
								<li class="item">
									<h3 class="title">NHÀ SINH HỌC NHỎ TUỔI</h3>
									<p class="date">(01/03/2018 - 28/04/2018)</p>
								</li>
								<li class="item">
									<h3 class="title">HỮU NGHỊ QUỐC TẾ</h3>
									<p class="date">(01/03/2018 - 28/04/2018)</p>
								</li>
							</ul>
							<a href="" target="_blank"><img src="images/adv.png" alt=""></a>
						</div>
						<div class="grid-9">
							<div class="rating-list js-accordion-body" style="background-image: url(../images/bg_top_student.png);">
								<ul class="row rating-item active">
									<img class="background" src="images/atgt.png" alt="">
									<li class="col-4 user user-no1">
										<div class="wrapper">
											<div class="img-cover">
												<span class="img-cover__wrapper">
													<img src="images/user.jpg" alt="">
												</span>
											</div>
											<div class="info">
												<div class="name">Trương Chí Bảo</div>
												<div class="address">5/1 - Tiểu học Nguyễn Văn Trỗi - Quảng Nam</div>
											</div>
											<div class="number"><span>1</span></div>
										</div>
									</li>
									<li class="col-4 user user-no2">
										<div class="wrapper">
											<div class="img-cover">
												<span class="img-cover__wrapper">
													<img src="images/user.jpg" alt="">
												</span>
											</div>
											<div class="info">
												<div class="name">Lưu Triệu Vỹ</div>
												<div class="address">5E - Tiểu học Mương Mán - Bình Thuận</div>
											</div>
											<div class="number"><span>2</span></div>
										</div>
									</li>
									<li class="col-4 user user-no3">
										<div class="wrapper">
											<div class="img-cover">
												<span class="img-cover__wrapper">
													<img src="images/user.jpg" alt="">
												</span>
											</div>
											<div class="info">
												<div class="name">Nguyễn Ngọc Thanh Đoan</div>
												<div class="address">4D - Tiểu học Ninh Đa 1 - Khánh Hòa</div>
											</div>
											<div class="number"><span>3</span></div>
										</div>
									</li>
								</ul>
								<ul class="row rating-item">
									<img class="background" src="images/su.png" alt="">
									<li class="col-4 user user-no1">
										<div class="wrapper">
											<div class="img-cover">
												<span class="img-cover__wrapper">
													<img src="images/user.jpg" alt="">
												</span>
											</div>
											<div class="info">
												<div class="name">Trương Chí Bảo</div>
												<div class="address">5/1 - Tiểu học Nguyễn Văn Trỗi - Quảng Nam</div>
											</div>
											<div class="number"><span>1</span></div>
										</div>
									</li>
									<li class="col-4 user user-no2">
										<div class="wrapper">
											<div class="img-cover">
												<span class="img-cover__wrapper">
													<img src="images/user.jpg" alt="">
												</span>
											</div>
											<div class="info">
												<div class="name">Lưu Triệu Vỹ</div>
												<div class="address">5E - Tiểu học Mương Mán - Bình Thuận</div>
											</div>
											<div class="number"><span>2</span></div>
										</div>
									</li>
									<li class="col-4 user user-no3">
										<div class="wrapper">
											<div class="img-cover">
												<span class="img-cover__wrapper">
													<img src="images/user.jpg" alt="">
												</span>
											</div>
											<div class="info">
												<div class="name">Nguyễn Ngọc Thanh Đoan</div>
												<div class="address">4D - Tiểu học Ninh Đa 1 - Khánh Hòa</div>
											</div>
											<div class="number"><span>3</span></div>
										</div>
									</li>
								</ul>
								<ul class="row rating-item">
									<img class="background" src="images/shnt.png" alt="">
									<li class="col-4 user user-no1">
										<div class="wrapper">
											<div class="img-cover">
												<span class="img-cover__wrapper">
													<img src="images/user.jpg" alt="">
												</span>
											</div>
											<div class="info">
												<div class="name">Trương Chí Bảo</div>
												<div class="address">5/1 - Tiểu học Nguyễn Văn Trỗi - Quảng Nam</div>
											</div>
											<div class="number"><span>1</span></div>
										</div>
									</li>
									<li class="col-4 user user-no2">
										<div class="wrapper">
											<div class="img-cover">
												<span class="img-cover__wrapper">
													<img src="images/user.jpg" alt="">
												</span>
											</div>
											<div class="info">
												<div class="name">Lưu Triệu Vỹ</div>
												<div class="address">5E - Tiểu học Mương Mán - Bình Thuận</div>
											</div>
											<div class="number"><span>2</span></div>
										</div>
									</li>
									<li class="col-4 user user-no3">
										<div class="wrapper">
											<div class="img-cover">
												<span class="img-cover__wrapper">
													<img src="images/user.jpg" alt="">
												</span>
											</div>
											<div class="info">
												<div class="name">Nguyễn Ngọc Thanh Đoan</div>
												<div class="address">4D - Tiểu học Ninh Đa 1 - Khánh Hòa</div>
											</div>
											<div class="number"><span>3</span></div>
										</div>
									</li>
								</ul>
								<ul class="row rating-item">
									<img class="background" src="images/hnqt.png" alt="">
									<li class="col-4 user user-no1">
										<div class="wrapper">
											<div class="img-cover">
												<span class="img-cover__wrapper">
													<img src="images/user.jpg" alt="">
												</span>
											</div>
											<div class="info">
												<div class="name">Trương Chí Bảo</div>
												<div class="address">5/1 - Tiểu học Nguyễn Văn Trỗi - Quảng Nam</div>
											</div>
											<div class="number"><span>1</span></div>
										</div>
									</li>
									<li class="col-4 user user-no2">
										<div class="wrapper">
											<div class="img-cover">
												<span class="img-cover__wrapper">
													<img src="images/user.jpg" alt="">
												</span>
											</div>
											<div class="info">
												<div class="name">Lưu Triệu Vỹ</div>
												<div class="address">5E - Tiểu học Mương Mán - Bình Thuận</div>
											</div>
											<div class="number"><span>2</span></div>
										</div>
									</li>
									<li class="col-4 user user-no3">
										<div class="wrapper">
											<div class="img-cover">
												<span class="img-cover__wrapper">
													<img src="images/user.jpg" alt="">
												</span>
											</div>
											<div class="info">
												<div class="name">Nguyễn Ngọc Thanh Đoan</div>
												<div class="address">4D - Tiểu học Ninh Đa 1 - Khánh Hòa</div>
											</div>
											<div class="number"><span>3</span></div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<a class="btn" href="">Xem chi tiết</a>
				</section>
				<!-- Accordion rating -->

				<div class="row">
					<div class="col-md-6">
						<!-- message -->
						<section class="section message">
							<div class="headline-section">
								<h2><a href="">THÔNG BÁO CỦA HỘI ĐỒNG ĐỘI TW</a></h2>
								<a href="">Xem tất cả</a>
							</div>
							<ul class="message-list">
								<li class="item">
									<div class="date">
										<div class="day">20</div>
										<div class="month">03</div>
									</div>
									<h3 class="title"><a href="">Thông báo lần 2 v/v triển khai thí điểm rèn luyện và công nhận hoàn thành chuyên
											hiệu rèn luyện đội viên trực tuyến năm học 2017 - 2018</a></h3>
								</li>
								<li class="item">
									<div class="date">
										<div class="day">23</div>
										<div class="month">01</div>
									</div>
									<h3 class="title"><a href="">THÔNG BÁO TỪ HỘI ĐỒNG ĐỘI TRUNG ƯƠNG</a></h3>
								</li>
								<li class="item">
									<div class="date">
										<div class="day">24</div>
										<div class="month">08</div>
									</div>
									<h3 class="title"><a href="">Công văn về việc tham gia Liên hoan thiếu nhi các dân tộc toàn quốc năm 2017</a></h3>
								</li>
								<li class="item">
									<div class="date">
										<div class="day">18</div>
										<div class="month">8</div>
									</div>
									<h3 class="title"><a href="">Hướng dẫn triển khai chương trình RLĐV</a></h3>
								</li>
								<li class="item">
									<div class="date">
										<div class="day">18</div>
										<div class="month">9</div>
									</div>
									<h3 class="title"><a href="">Kế hoạch</a></h3>
								</li>
							</ul>
						</section>
						<!-- message end -->
					</div>
					<div class="col-md-6">
						<!-- province -->
						<section class="section province">
							<div class="headline-section">
								<h2><a href="">TỈ LỆ ĐỘI VIÊN THAM GIA RÈN LUYỆN THEO TỈNH/ TP</a></h2>
								<a href="">Xem tất cả</a>
							</div>
							<ul class="province-list">
								<li class="item">
									<div class="number">1</div>
									<div class="progressbar">
										<span>Lai Châu</span>
										<div class="progress">
											<div class="progress-bar" style="width:73.74%"><span>73.74%</span></div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="number">2</div>
									<div class="progressbar">
										<span>Kom Tum</span>
										<div class="progress">
											<div class="progress-bar" style="width:73.68%"><span>73.%</span></div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="number">3</div>
									<div class="progressbar">
										<span>Điện biên</span>
										<div class="progress">
											<div class="progress-bar" style="width:46.41%"><span>46.41%</span></div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="number">4</div>
									<div class="progressbar">
										<span>Bình Định</span>
										<div class="progress">
											<div class="progress-bar" style="width:39.02%"><span>39.02 %</span></div>
										</div>
									</div>
								</li>
								<li class="item">
									<div class="number">5</div>
									<div class="progressbar">
										<span>Hà Nam</span>
										<div class="progress">
											<div class="progress-bar" style="width: 36.15%"><span>36.15 %</span></div>
										</div>
									</div>
								</li>
							</ul>
						</section>
						<!-- province end -->
					</div>
					<div class="col-12">
						<!-- adv -->
						<div class="section adv">
							<a href="" target="_blank">
								<img src="images/adv1.jpg">
							</a>
						</div>
						<!-- adv end -->
					</div>
					<div class="col-md-6">
						<!-- news -->
						<section class="section news">
							<div class="headline-section bg-navy">
								<h2><a href="">rèn luyện đội viên 360</a></h2>
								<a href="">Xem tất cả</a>
							</div>
							<div class="news-list">
								<figure class="item">
									<div class="img-cover">
										<a href="#" class="img-cover__wrapper">
											<img src="images/new1.JPG" alt="">
										</a>
									</div>
									<div class="content">
										<h3 class="title">
											<a href="">500 đội viên tham gia Ngày hội rèn luyện đội viên</a>
										</h3>
										<div class="description">Sáng 25-5, tại Nhà thiếu nhi tỉnh, Hội đồng Đội Trung ương và Công ty cổ phần tập
											đoàn giáo dục Egroup đã phối hợp tổ chức Ngày hội rèn luyện đội viên năm học 2017-2018.</div>
									</div>
								</figure>
								<figure class="item">
									<div class="img-cover">
										<a href="#" class="img-cover__wrapper">
											<img src="images/new2.jpg" alt="">
										</a>
									</div>
									<div class="content">
										<h3 class="title">
											<a href="">Đồng Nai: Tưng bừng ngày hội “Rèn luyện đội viên” năm học 2017 – 2018</a>
										</h3>
										<div class="description">Sáng nay, ngày 25/5 tại Nhà Thiếu nhi tỉnh Đồng Nai, ngày hội “Rèn luyện đội viên”
											năm học 2017 – 2018 đã diễn ra trong không khí sôi động, đầy màu sắc với sự tham gia của hàng trăm Đội viên.</div>
									</div>
								</figure>
								<figure class="item">
									<div class="img-cover">
										<a href="#" class="img-cover__wrapper">
											<img src="images/new3.png" alt="">
										</a>
									</div>
									<div class="content">
										<h3 class="title">
											<a href="">Tổ chức chương trình</a>
										</h3>
										<div class="description">Ngày hội rèn luyện đội viên năm 2018 sẽ được tổ chức vào 25/05/2018 tại tỉnh Đồng
											Nai. Các bạn hãy theo dõi chương trình trên website và fanpage.</div>
									</div>
								</figure>
								<figure class="item">
									<div class="img-cover">
										<a href="#" class="img-cover__wrapper">
											<img src="images/new4.png" alt="">
										</a>
									</div>
									<div class="content">
										<h3 class="title">
											<a href="">V/v: Thí điểm việc rèn luyện và công nhận hoàn thành chuyên hiệu "Rèn luyện đội viên”</a>
										</h3>
										<div class="description">Ngày 08/01/2018, Hội đồng Đội Trung ương đã triển khai Kế hoạch số 06-KH/HĐĐTW triển
											khai thí
											điểm việc rèn luyện và công nhận hoàn thành chuyên hiệu"Rèn luyện đội viên” trực tuyến năm học 2017 - 2018.
											Để việc
											thí điểm được triển khai hiệu quả, đề nghị Hội đồng Đội các tỉnh, thành phố thực hiện tốt một số nội dung
											sau:</div>
									</div>
								</figure>
								<figure class="item">
									<div class="img-cover">
										<a href="#" class="img-cover__wrapper">
											<img src="images/new5.jpg" alt="">
										</a>
									</div>
									<div class="content">
										<h3 class="title">
											<a href="">Chủ tịch nước Trần Đại Quang chúc Tết Trung thu thiếu niên, nhi đồng cả nước</a>
										</h3>
										<div class="description">Nhân dịp Tết Trung thu năm 2017, Chủ tịch nước Trần Đại Quang đã có thư gửi các cháu
											thiếu niên, nhi đồng trên cả nước.</div>
									</div>
								</figure>
							</div>
						</section>
						<!-- news end -->
					</div>
					<div class="col-md-6">
						<!-- news -->
						<section class="section news">
							<div class="headline-section">
								<h2><a href="">SỔ TAY RÈN LUYỆN</a></h2>
								<a href="">Xem tất cả</a>
							</div>
							<div class="news-list">
								<figure class="item">
									<div class="img-cover">
										<a href="#" class="img-cover__wrapper">
											<img src="images/new1.JPG" alt="">
										</a>
									</div>
									<div class="content">
										<h3 class="title">
											<a href="">500 đội viên tham gia Ngày hội rèn luyện đội viên</a>
										</h3>
										<div class="description">Sáng 25-5, tại Nhà thiếu nhi tỉnh, Hội đồng Đội Trung ương và Công ty cổ phần tập
											đoàn giáo dục Egroup đã phối hợp tổ chức Ngày hội rèn luyện đội viên năm học 2017-2018.</div>
									</div>
								</figure>
								<figure class="item">
									<div class="img-cover">
										<a href="#" class="img-cover__wrapper">
											<img src="images/new2.jpg" alt="">
										</a>
									</div>
									<div class="content">
										<h3 class="title">
											<a href="">Đồng Nai: Tưng bừng ngày hội “Rèn luyện đội viên” năm học 2017 – 2018</a>
										</h3>
										<div class="description">Sáng nay, ngày 25/5 tại Nhà Thiếu nhi tỉnh Đồng Nai, ngày hội “Rèn luyện đội viên”
											năm học 2017 – 2018 đã diễn ra trong không khí sôi động, đầy màu sắc với sự tham gia của hàng trăm Đội viên.</div>
									</div>
								</figure>
								<figure class="item">
									<div class="img-cover">
										<a href="#" class="img-cover__wrapper">
											<img src="images/new3.png" alt="">
										</a>
									</div>
									<div class="content">
										<h3 class="title">
											<a href="">Tổ chức chương trình</a>
										</h3>
										<div class="description">Ngày hội rèn luyện đội viên năm 2018 sẽ được tổ chức vào 25/05/2018 tại tỉnh Đồng
											Nai. Các bạn hãy theo dõi chương trình trên website và fanpage.</div>
									</div>
								</figure>
								<figure class="item">
									<div class="img-cover">
										<a href="#" class="img-cover__wrapper">
											<img src="images/new4.png" alt="">
										</a>
									</div>
									<div class="content">
										<h3 class="title">
											<a href="">V/v: Thí điểm việc rèn luyện và công nhận hoàn thành chuyên hiệu "Rèn luyện đội viên”</a>
										</h3>
										<div class="description">Ngày 08/01/2018, Hội đồng Đội Trung ương đã triển khai Kế hoạch số 06-KH/HĐĐTW triển
											khai thí
											điểm việc rèn luyện và công nhận hoàn thành chuyên hiệu"Rèn luyện đội viên” trực tuyến năm học 2017 - 2018.
											Để việc
											thí điểm được triển khai hiệu quả, đề nghị Hội đồng Đội các tỉnh, thành phố thực hiện tốt một số nội dung
											sau:</div>
									</div>
								</figure>
								<figure class="item">
									<div class="img-cover">
										<a href="#" class="img-cover__wrapper">
											<img src="images/new5.jpg" alt="">
										</a>
									</div>
									<div class="content">
										<h3 class="title">
											<a href="">Chủ tịch nước Trần Đại Quang chúc Tết Trung thu thiếu niên, nhi đồng cả nước</a>
										</h3>
										<div class="description">Nhân dịp Tết Trung thu năm 2017, Chủ tịch nước Trần Đại Quang đã có thư gửi các cháu
											thiếu niên, nhi đồng trên cả nước.</div>
									</div>
								</figure>
							</div>
						</section>
						<!-- news end -->
					</div>
				</div>





			</div>

			<!-- media -->
			<section class="section media">
				<div class="container">
					<h2 class="headline">VIDEO - HÌNH ẢNH NỔI BẬT</h2>
					<div class="row media-list">
						<figure class="col-md-3 media-item video">
							<div class="img-cover">
								<a href="#" class="img-cover__wrapper">
									<img src="images/new1.JPG" alt="">
								</a>
							</div>
							<h3 class="title">
								<a href="">Tường thuật trực tiếp chương trình ngày hội rèn luyện đội viên năm 2018 tại tỉnh Đồng Nai</a>
							</h3>
						</figure>
						<figure class="col-md-3 media-item">
							<div class="img-cover">
								<a href="#" class="img-cover__wrapper">
									<img src="images/new2.jpg" alt="">
								</a>
							</div>
							<h3 class="title">
								<a href="">Ai yêu Bác Hồ Chí Minh hơn thiếu niên nhi đồng?</a>
							</h3>
						</figure>
						<figure class="col-md-3 media-item">
							<div class="img-cover">
								<a href="#" class="img-cover__wrapper">
									<img src="images/new3.png" alt="">
								</a>
							</div>
							<h3 class="title">
								<a href="">Clip mẫu 3 bài trống của Đội</a>
							</h3>
						</figure>
						<figure class="col-md-3 media-item video">
							<div class="img-cover">
								<a href="#" class="img-cover__wrapper">
									<img src="images/new4.png" alt="">
								</a>
							</div>
							<h3 class="title">
								<a href="">Clip mẫu 5 bài Dân vũ Festival</a>
							</h3>
						</figure>
					</div>
				</div>
			</section>
			<!-- media end -->

		</main>
@stop