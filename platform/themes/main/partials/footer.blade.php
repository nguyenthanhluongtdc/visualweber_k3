
     <!-- Messenger Chat Plugin Code -->
     <div id="fb-root"></div>
     <!-- Your Chat Plugin code -->
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
<!-- JS Library-->
{!! Theme::footer() !!}

</body>
</html>
