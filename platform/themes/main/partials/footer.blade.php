
     {{-- <div id="fb-root"></div>
     <div id="fb-customer-chat" class="fb-customerchat">
     </div>
     <script>
         var chatbox = document.getElementById('fb-customer-chat');
         chatbox.setAttribute("page_id", "149184158553057");
         chatbox.setAttribute("attribution", "biz_inbox");
         window.fbAsyncInit = function() {
             FB.init({
                 xfbml: true,
                 version: 'v12.0'
             });
         };
         (function(d, s, id) {
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) return;
             js = d.createElement(s);
             js.id = id;
             js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
             fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
     </script>
 --}}
     <div class="tuvanngay font-kia-light font20">
       Tư vấn ngay
     </div>
  <!-- Messenger Plugin chat Code -->
  <div id="fb-root"></div>

  <!-- Your Plugin chat code -->
  <div id="fb-customer-chat" class="fb-customerchat">
  </div>
  @php
      $fb = theme_option('facebook_page_id');
  @endphp
  
  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", <?php echo $fb ?>);
    chatbox.setAttribute("attribution", "biz_inbox");

    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v12.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

<!-- JS Library-->
{!! Theme::footer() !!}

</body>
</html>
