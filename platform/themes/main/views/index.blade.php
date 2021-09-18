@php Theme::layout('default') @endphp
{{-- {!! get_field($page, 'number_user') !!} --}}

<script>
    const showroomsUrl = '{{route('public.ajax.showroom')}}'
    const xaphuongUrl = '{{route('public.ajax.xaphuong')}}'
    const quanhuyenUrl = '{{route('public.ajax.quanhuyen')}}'
</script>

<div class="count-down">
    
    <video autoplay muted loop playsinline id="myVideo">
        <source src="{{ Theme::asset()->url('images/teasingare.mp4') }}" type="video/mp4">
    </video>
    <div class="fixed-bg">

    </div>
    <div  class="animated-modal-tk">
        <div class="popup-content">
            <h2 class="font-kia-bold font30">CẢM ƠN BẠN ĐÃ ĐĂNG KÝ!</h2>
            <div class="close-popup">
                <i class="fas fa-times"></i>
            </div>
        </div>
        
    </div>
    <div class="content-count-down">
        {{-- <div class="loading d-none">
        <img src="{{Theme::asset()->url('images/ts1.gif')}}" alt="Loading">
        </div> --}}
        <h3 class="font-kia-bold">CÙNG CHỜ ĐÓN</h3>
        <ul class="time-countdown">
            <li class="li-dau">
                <p id="days" class="font-kia-bold"></p>
                <p class="font-kia-re">ngày</p>
            </li>
            <li>
                <p id="hours" class="font-kia-bold"></p>
                <p class="font-kia-re">giờ</p>
            </li>
            <li>
                <p id="minutes" class="font-kia-bold"></p>
                <p class="font-kia-re">phút</p>
            </li>
            <li>
                <p id="seconds" class="font-kia-bold"></p>
                <p class="font-kia-re">giây</p>
            </li>
        </ul>

        <h5 class="font-kia-bold">ĐĂNG KÝ NHẬN THÔNG TIN MỚI NHẤT</h5>


        {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST', 'class' => 'contact-form']) !!}

        {{-- hệ thống showwroom tỉnh thành  --}}
        <div class="contact-form-row contact-form-row-top">
            <div class="contact-column-6">
               
                <div class="contact-form-group">
                    <select id="city" name="city"  class="font-kia-light js-example-disabled-results city" required>
                        <option value="" selected>Vui lòng chọn tỉnh thành</option>
                        @foreach(get_province_for_form() as $item)
                        <option value="{{$item->matp}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                   
                </div>
                <p class="city-required d-none">Vui lòng chọn tỉnh thành</p>
            </div>
            <div class="contact-column-6">
                <div class="contact-form-group">
                    <select id="showroom-form" name="showroom"  class="font-kia-light js-example-disabled-results" required>
                        <option value="" selected>Vui lòng chọn showroom</option>
                    </select>
                    <div class="loading d-none">
                        <img src="{{Theme::asset()->url('images/ts1.gif')}}" alt="Loading">
                        </div>
                </div>
            </div>
        </div>

        {{-- họ tên số điện thoại  --}}

            <div class="contact-form-row contact-form-row-top">
                <div class="contact-column-6">
                    <div class="contact-form-group">
                        <input type="text" class="contact-form-input font-kia-light" name="name" value="{{ old('name') }}" id="contact_name"
                            placeholder="Họ và tên" required>
                            <p class="error-msg font-kia-re request">{{$errors->first('name')}}</p>
                    </div>
                </div>
                <div class="contact-column-6">
                    <div class="contact-form-group">
                        <input type="text" class="contact-form-inputfont-kia-light" name="phone" value="{{ old('phone') }}" id="contact_phone"
                               placeholder="Số điện thoại" required>
                               {{-- <p class="error-msg font-kia-re request">{{$errors->first('phone')}}</p> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="contact-form-row">
                <div class="contact-column-12">
                     <div class="contact-form-group">
                        <input type="text" class="contact-form-input font-kia-light" name="address" value="{{ old('address') }}" id="contact_address"
                               placeholder="Nhập địa chỉ liên hệ"  type="color" value="#444">
                        <p class="error-msg font-buenos-re">{{$errors->first('address')}}</p>
                    </div>
                </div>
            </div> --}}
            
            <div class="contact-form-row">
                <div class="contact-column-12">
                   
                    <div class="tinh">
                        <input type="text" class="add-item  add-item1 contact-form-input font20 font-kia-light" name="address" value="{{ old('address') }}" id="contact_address"
                        placeholder="Nhập địa chỉ liên hệ" required>
                       
                        {{-- <select id="province" name="province" onchange="changeFunc();" class="font-kia-light js-example-disabled-results">
                            <option value="" selected>Tỉnh/ Thành phố</option>
                        </select> --}}
                        <select id="district-form" name="district" class="add-item add-item2 font-kia-light js-example-disabled-results" required>
                            <option value="">Quận/ Huyện</option>
                        </select>
                        <select id="ward-form" name="ward" aria-placeholder="Quận huyện" class="add-item3 add-item font-kia-light js-example-disabled-results" required>
                            <option value="">Phường/ Xã</option>
                        </select>
                    </div>
                    {{-- <p class="error-msg font-kia-re request">{{$errors->first('address')}}</p> --}}
                </div>
            </div>

            
            <div class="contact-form-group-bt">
                <button type="submit" class="contact-button font-kia-bold font20">Gửi</button>
            </div>
            
            <div class="contact-form-group">
                <div class="contact-message contact-success-message" style="display: none"></div>
                <div class="contact-message contact-error-message" style="display: none"></div>
            </div>
    {!! Form::close() !!}

    </div>
</div>







<script>
// Set the date we're counting down to
var countDownDate = new Date("Sep 22, 2021 0:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  var distance = countDownDate - now;
    
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("days") ? document.getElementById("days").innerHTML = days : '';
  document.getElementById("hours") ? document.getElementById("hours").innerHTML = hours : '';
  document.getElementById("minutes") ? document.getElementById("minutes").innerHTML = minutes : '';
  document.getElementById("seconds") ? document.getElementById("seconds").innerHTML = seconds : '';
//   document.getElementById("demo").innerHTML = days + "ngày" + hours + "giờ"
//   + minutes + "phút" + seconds + "giây";
    
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo") ? document.getElementById("demo").innerHTML = "EXPIRED" : '';
  }
}, 1000);
</script>

{{-- <script>
    document.addEventListener("DOMContentLoaded", function(){
        var province=document.getElementById("province");
        window.onload=function(){
            $.ajax({
                url: 'https://dev-online-gateway.ghn.vn/shiip/public-api/master-data/province',
                headers: {
                    'token':'2144f26b-183f-11ec-b8c6-fade198b4859',
                    'Content-Type':'application/json'
                },
                method: 'GET',
                dataType: 'json',
                success: function(response){
                    console.log('succes: ');
                    console.log(response.data);
                    var str="<option selected> Tỉnh thành</option>";
                    for(var i=0; i<response.data.length; i++){
                        console.log(response.data[i].ProvinceName);
                        str=str+"<option class='provinceId' data-province='"+response.data[i].ProvinceID+"' >" +response.data[i].ProvinceName + "</option>"
                    }
                    province.innerHTML=str;
                }
            });
        }
    }, false)

   function changeFunc(){
       var selectBox = document.getElementById("province");
       var selectedValue = selectBox.options[selectBox.selectedIndex].getAttribute('data-province');
       var district=document.getElementById('district');
       $.ajax({
                url: 'https://dev-online-gateway.ghn.vn/shiip/public-api/master-data/district',
                headers: {
                    'token':'2144f26b-183f-11ec-b8c6-fade198b4859',
                    'Content-Type':'application/json'
                },
                method: 'GET',
                dataType: 'json',
                success: function(response){
                    var str="<option selected>Quận huyện</option>";
                    for(var i=0; i<response.data.length; i++){
                        if(response.data[i].ProvinceID==selectedValue)
                        str=str+"<option class='districtId' data-district='"+response.data[i].DistrictID+"' >" +response.data[i].DistrictName + "</option>"
                    }
                    district.innerHTML=str;
                }
            });
   }

   function changeFuncDistrict(){
       var selectBox = document.getElementById("district");
       var selectedValue = selectBox.options[selectBox.selectedIndex].getAttribute('data-district');
       var ward = document.getElementById('ward');
       $.ajax({
                url: 'https://dev-online-gateway.ghn.vn/shiip/public-api/master-data/ward?district_id='+selectedValue,
                headers: {
                    'token':'2144f26b-183f-11ec-b8c6-fade198b4859',
                    'Content-Type':'application/json'
                },
                method: 'GET',
                dataType: 'json',
                success: function(response){
                    var str="<option selected>Phường xã</option>";
                    for(var i=0; i<response.data.length; i++){
                        if(response.data[i].ProvinceID==selectedValue)
                        str=str+"<option class='wardId' data-ward='"+response.data[i].WardCode+"' >" +response.data[i].WardName + "</option>"
                    }
                    ward.innerHTML=str;
                }
            });
   }
</script> --}}
