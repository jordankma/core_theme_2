@extends('VNE-THEME::layouts.master')
@section('content')
<main class="main">

	<!-- registration -->
	<section class="registration">
		<div class="container">
			<div class="inner">
				<form>
					<div class="form-group">
						<label>Họ tên</label>
						<div class="input">
							<input class="form-control" type="name">
							<small class="form-text">(Chú ý: Họ tên phải là tiếng Việt có dấu, không viết liền, không chứa ký tự đặc biệt)</small>
							<small class="text-muted">*</small>
						</div>
					</div>
					<div class="form-group">
						<label>Giới tính</label>
						<div class="input">
							<div class="item">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
								<label class="form-check-label">Nam</label>
							</div>
							<div class="item">
								<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
								<label class="form-check-label" for="exampleRadios2">Nữ</label>
							</div>
						</div>
						<small class="text-muted">*</small>
					</div>
					<div class="form-group">
						<label>Ngày sinh</label>
						<div class="input">
							<select class="form-control date">
								<option value=""></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
							<span>/</span>
							<select class="form-control date">
								<option value=""></option>
								<option value="0">01</option>
								<option value="1">02</option>
								<option value="2">03</option>
								<option value="3">04</option>
								<option value="4">05</option>
								<option value="5">06</option>
								<option value="6">07</option>
								<option value="7">08</option>
								<option value="8">09</option>
								<option value="9">10</option>
								<option value="10">11</option>
								<option value="11">12</option>
							</select>
							<span>/</span>
							<select class="form-control date year">
								<option value=""></option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
								<option value="1969">1969</option>
								<option value="1968">1968</option>
								<option value="1967">1967</option>
								<option value="1966">1966</option>
								<option value="1965">1965</option>
								<option value="1964">1964</option>
								<option value="1963">1963</option>
								<option value="1962">1962</option>
								<option value="1961">1961</option>
								<option value="1960">1960</option>
								<option value="1959">1959</option>
								<option value="1958">1958</option>
								<option value="1957">1957</option>
								<option value="1956">1956</option>
								<option value="1955">1955</option>
								<option value="1954">1954</option>
								<option value="1953">1953</option>
								<option value="1952">1952</option>
								<option value="1951">1951</option>
								<option value="1950">1950</option>
							</select>
							<small class="text-muted">*</small>
						</div>
					</div>
					<div class="form-group">
						<label>Điện thoại</label>
						<div class="input">
							<input class="form-control" type="name">
							<small class="form-text form-text-01">(Chú ý: Họ tên phải là tiếng Việt có dấu, không viết liền, không chứa ký
								tự đặc biệt)</small>
							<small class="form-eror">Điện thoại không được để trống.</small>
							<small class="text-muted">*</small>
						</div>
					</div>
					<div class="form-group">
						<label>Bạn là đối tượng</label>
						<div class="input">
							<select class="form-control">
								<option value="hocsinh">Học sinh Trung học cơ sở</option>
								<option value="thpt">Học sinh Trung học phổ thông</option>
								<option value="gdtx">Trung tâm Giáo dục thường xuyên</option>
								<option value="sinhvien">Sinh viên, học sinh trung cấp sư phạm</option>
								<option value="giaovien">Nhà giáo, cán bộ quản lý giáo dục, giáo viên trẻ, giảng viên trẻ</option>
								<option value="doanthanhnien">Đoàn viên thanh niên</option>
								<option value="sinhviennuocngoai">Lưu học sinh Việt Nam ở nước ngoài</option>
								<option value="more">Đối tượng khác</option>
							</select>
							<small class="text-muted">*</small>
						</div>
					</div>
					<div class="class00">Thông tin nơi học tập, công tác</div>
					<div class="form-group">
						<label>Thành phố</label>
						<div class="input">
							<select class="form-control">
								<option value="">Tỉnh/Thành phố</option>
								<option value="19">An Giang</option>
								<option value="43">Bà Rịa - Vũng Tàu</option>
								<option value="13">Bắc Giang</option>
								<option value="9">Bắc Kạn</option>
								<option value="26">Bạc Liêu</option>
								<option value="29">Bắc Ninh</option>
								<option value="64">Ban Thanh niên Quân đội</option>
								<option value="20">Bến Tre</option>
								<option value="40">Bình Dương</option>
								<option value="48">Bình Định</option>
								<option value="39">Bình Phước</option>
								<option value="52">Bình Thuận</option>
								<option value="27">Cà Mau</option>
								<option value="28">Cần Thơ</option>
								<option value="8">Cao Bằng</option>
								<option value="45">Đà Nẵng</option>
								<option value="61">Đắk Lắk</option>
								<option value="62">Đắk Nông</option>
								<option value="55">Điện Biên</option>
								<option value="65">Đoàn Khối các Cơ quan TW</option>
								<option value="66">Đoàn Khối Doanh nghiệp TW</option>
								<option value="67">Đoàn Thanh niên Bộ Công an</option>
								<option value="41">Đồng Nai</option>
								<option value="17">Đồng Tháp</option>
								<option value="60">Gia Lai</option>
								<option value="7">Hà Giang</option>
								<option value="30">Hà Nam</option>
								<option value="31">Hà Nội</option>
								<option value="3">Hà Tĩnh</option>
								<option value="32">Hải Dương</option>
								<option value="33">Hải Phòng</option>
								<option value="23">Hậu Giang</option>
								<option value="56">Hòa Bình</option>
								<option value="34">Hưng Yên</option>
								<option value="50">Khánh Hòa</option>
								<option value="24">Kiên Giang</option>
								<option value="59">Kon Tum</option>
								<option value="57">Lai Châu</option>
								<option value="63">Lâm Đồng</option>
								<option value="10">Lạng Sơn</option>
								<option value="53">Lào Cai</option>
								<option value="16">Long An</option>
								<option value="35">Nam Định</option>
								<option value="2">Nghệ An</option>
								<option value="36">Ninh Bình</option>
								<option value="51">Ninh Thuận</option>
								<option value="14">Phú Thọ</option>
								<option value="49">Phú Yên</option>
								<option value="4">Quảng Bình</option>
								<option value="46">Quảng Nam</option>
								<option value="47">Quảng Ngãi</option>
								<option value="15">Quảng Ninh</option>
								<option value="5">Quảng Trị</option>
								<option value="68">Sinh viên ngoài nước</option>
								<option value="25">Sóc Trăng</option>
								<option value="58">Sơn La</option>
								<option value="42">Tây Ninh</option>
								<option value="37">Thái Bình</option>
								<option value="12">Thái Nguyên</option>
								<option value="1">Thanh Hóa</option>
								<option value="6">Thừa Thiên Huế</option>
								<option value="18">Tiền Giang</option>
								<option value="44">Tp.Hồ Chí Minh</option>
								<option value="22">Trà Vinh</option>
								<option value="11">Tuyên Quang</option>
								<option value="21">Vĩnh Long</option>
								<option value="38">Vĩnh Phúc</option>
								<option value="54">Yên Bái</option>
							</select>
							<small class="text-muted">*</small>
						</div>
					</div>
					<div class="form-group">
						<label>Quận/Huyện</label>
						<div class="input">
							<select class="form-control">
								<option value="">Chọn quận/huyện</option>
							</select>
							<small class="text-muted">*</small>
						</div>
					</div>
					<div class="form-group">
						<label>Trường</label>
						<div class="input">
							<select class="form-control"></select>
							<small class="text-muted">*</small>
						</div>
					</div>
					<div class="form-group">
						<label>Lớp</label>
						<div class="input">
							<select class="form-control">
								<option value="">Chọn lớp</option>
								<option value="6">Lớp 6</option>
								<option value="7">Lớp 7</option>
								<option value="8">Lớp 8</option>
								<option value="9">Lớp 9</option>
								<option value="10">Lớp 10</option>
								<option value="11">Lớp 11</option>
								<option value="12">Lớp 12</option>
							</select>
							<small class="text-muted">*</small>
						</div>
					</div>
					<div class="class01">Xác thực *</div>
					<div class="form-group">
						<label>Email</label>
						<div class="input">
							<input class="form-control" type="email" placeholder="nguyenvana@gmail.com">
						</div>
					</div>
					<p class="or"><i>Hoặc</i></p>
					<div class="form-group">
						<label>Facebook</label>
						<div class="input">
							<input class="form-control" type="email" placeholder="facebook.com/nghiemvanmanh0192">
						</div>
					</div>
					<div class="btn-group">
						<button type="submit" class="btn btn-save">Lưu</button>
						<a class="btn btn-exit" href="">Bỏ qua</a>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- registration end -->

</main>
@stop