@php Theme::layout('default') @endphp


<div id="fullpage" class="fullpage" data-section="{{$section ?? ''}}" class="d-none">
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
