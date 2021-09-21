@if(!empty($data))
<section style="
background-color: #fff;
max-width: 700px;
margin: auto;
padding: 15px;
border: 1px solid #08141e;
color: #000;
">
    <div class="header">
        <table width="100%">
          <tr>
            <td>
              <h4 style="padding:0;margin:0;color:#08141e;font-size:18px;">{{__('KIA')}}</h4>
            </td>
            <td style="text-align: right;">
              <img class="img-fluid" style="max-width:100px;" src="{{ RvMedia::getImageUrl(theme_option('logo')) }}" alt="{{ @theme_option('site_title') }}">
            </td>
          </tr>
        </table>
    </div>
    <div class="body">
      <h4>Cảm ơn bạn đã đăng ký thông tin từ KIA</h4>
      <p>Đội ngũ kinh doanh sẽ liên hệ bạn sớm nhất.</p>
    </div>
    <div class="footer" style="padding:15px 0;">
        <ul>
          <li>Date: {{Carbon\Carbon::now()->format('Y-m-d')}}</li>
          <li>From website: <a href="{{config('app.url')}}">{{config('app.url')}}</a></li>
        </ul>
    </div>
</section>
@endif
