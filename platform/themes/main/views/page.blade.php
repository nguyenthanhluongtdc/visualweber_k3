@php Theme::layout('default') @endphp
{{-- {!! get_field($page, 'number_user') !!} --}}

{{-- <div class="count-down">
    
    <video autoplay muted loop playsinline id="myVideo">
        <source src="{{ Theme::asset()->url('images/section1/video.mp4') }}" type="video/mp4">
    </video>
    <div class="fixed-bg">

    </div>
    <div  class="animated-modal-tk">
        <div class="popup-content">
            <h2 class="font-sfu-black">CẢM ƠN BẠN ĐÃ ĐĂNG KÝ!</h2>
            <div class="close-popup">
                <i class="fas fa-times"></i>
            </div>
        </div>
        
    </div>
    <div class="content-count-down">
        <h3 class="font-sfu-black">SẮP XUẤT HIỆN</h3>
        <ul class="time-countdown">
            <li>
                <p id="days" class="font-sfu-black"></p>
                <p class="font-sfu-bold">ngày</p>
            </li>
            <li>
                <p id="hours" class="font-sfu-black"></p>
                <p class="font-sfu-bold">giờ</p>
            </li>
            <li>
                <p id="minutes" class="font-sfu-black"></p>
                <p class="font-sfu-bold">phút</p>
            </li>
            <li>
                <p id="seconds" class="font-sfu-black"></p>
                <p class="font-sfu-bold">giây</p>
            </li>
        </ul>

        <h5 class="font-sfu-black">ĐĂNG KÝ NHẬN THÔNG TIN MỚI NHẤT</h5>


        {!! Form::open(['route' => 'public.send.contact', 'method' => 'POST', 'class' => 'contact-form']) !!}
            <div class="contact-form-row contact-form-row-top">
                <div class="contact-column-6">
                    <div class="contact-form-group">
                        <input type="text" class="contact-form-input font20 font-buenos-light" name="name" value="{{ old('name') }}" id="contact_name"
                            placeholder="Họ và tên">
                            <p class="error-msg font-buenos-re">{{$errors->first('name')}}</p>
                    </div>
                </div>
                <div class="contact-column-6">
                    <div class="contact-form-group">
                        <input type="text" class="contact-form-input font20 font-buenos-light" name="phone" value="{{ old('phone') }}" id="contact_phone"
                               placeholder="Số điện thoại">
                               <p class="error-msg font-buenos-re">{{$errors->first('phone')}}</p>
                    </div>
                </div>
            </div>
            <div class="contact-form-row">
                <div class="contact-column-12">
                    <div class="contact-form-group">
                        <input type="text" class="contact-form-input font20 font-buenos-light" name="address" value="{{ old('address') }}" id="contact_address"
                               placeholder="Địa chỉ">
                               <p class="error-msg font-buenos-re">{{$errors->first('address')}}</p>
                    </div>
                </div>
            </div>
            <div class="contact-form-group-bt">
                <button type="submit" class="contact-button font-buenos-bold font20">Gửi</button>
            </div>
            
            <div class="contact-form-group">
                <div class="contact-message contact-success-message" style="display: none"></div>
                <div class="contact-message contact-error-message" style="display: none"></div>
            </div>
    {!! Form::close() !!}

    </div>
</div> --}}
<div id="fullpage" class="fullpage" data-section="{{$section ?? ''}}">
    @includeIf('theme.main::views.sections.section1')
    @includeIf('theme.main::views.sections.section2')
    @includeIf('theme.main::views.sections.section3')
    @includeIf('theme.main::views.sections.section4')
    @includeIf('theme.main::views.sections.section5')
    @includeIf('theme.main::views.sections.section6')
    @includeIf('theme.main::views.sections.section7')
    @includeIf('theme.main::views.sections.section8')
    @includeIf('theme.main::views.sections.section9')
    @includeIf('theme.main::views.sections.section10')
    @includeIf('theme.main::views.sections.section11')
    @includeIf('theme.main::views.sections.section12')
</div>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Sep 15, 2021 8:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  var distance = countDownDate - now;
    
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("seconds").innerHTML = seconds;
//   document.getElementById("demo").innerHTML = days + "ngày" + hours + "giờ"
//   + minutes + "phút" + seconds + "giây";
    
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
