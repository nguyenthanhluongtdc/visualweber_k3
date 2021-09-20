{!! Form::open(['route' => 'public.send.contact-buy-cars', 'method' => 'POST', 'class' => 'form form-car text-white', 'id' => 'id="book-a-car"']) !!}
   <input type="hidden" name="car_color">
   <input type="hidden" name="modal" value="{{$modal ?? ''}}">
   <input type="hidden" name="car_type" value="{{$car_type ?? ''}}">
   <h2 class="form__title text-center font50 text-uppercase text-white font-kia-bold">ĐẶT XE TRỰC TUYẾN</h2>
   <div class="form__body">
      <p class="form__input">
            <label for="city" class="font16">Tỉnh thành (*): </label>
            <select name="city" id="city_buy_car" class="font-buenos-light ui search selection dropdown required city w-100">
               <option hidden value="" selected>Vui lòng chọn tỉnh thành</option>
               @forelse(@$provinces as $row)
                  <option {{ old('city') == @$row->matp ? 'selected' : '' }}
                        value="{{ @$row->matp }}">{{ @$row->name }}</option>
               @empty
               @endforelse
            </select>
            <p class="error-msg font-kia-re request erro-p">{{$errors->first('city')}}</p>
      </p>

      <p class="form__input">
            <label for="showroom" class="font16">Showroom (*): </label>
            @if(old('city'))
               <select name="showroom" class="font-buenos-light ui search selection dropdown showroom w-100 showroom-book-a-car">
                  <option value="" selected>Vui lòng chọn showroom</option>
                  @foreach(get_agencies_by_province_id(old('city')) as $item)
                     <option  {{ old('showroom') == @$item->id ? 'selected' : '' }} value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
               </select>
            @else
               <select name="showroom" class="font-buenos-light ui search selection dropdown showroom w-100 showroom-book-a-car">
                  <option value="" selected>Vui lòng chọn showroom</option>
               </select>
            @endif
      </p>

      <div class="form__infoMore">
            <div class="form__infoMore--wrap">
               <ul>
                  <li class="line">
                        <span class="line__title font16 font-buenos-light">
                           Giá công bố:
                        </span>

                        <span class="line__value font-buenos-light" id="car_price" data-price="685000000">
                           685.000.000 VND
                        </span>
                  </li>

                  <li class="line">
                        <span class="line__title font16 font-buenos-light">
                           Ưu đãi:
                        </span>

                        <span class="line__value font-buenos-light" id="car_discount">
                           xxx.xxx.xxx VND
                        </span>
                  </li>

                  <li class="line">
                        <span class="line__title font16 font-buenos-light">
                           Giá sau ưu đãi:
                        </span>

                        <span class="line__value font-buenos-light" id="car_price_after_discount">
                           xxx.xxx.xxx VND
                        </span>
                  </li>

                  <li class="line">
                        <span class="line__title font16 font-buenos-light">
                           Lệ phí trước bạ (*):
                        </span>

                        <span class="line__value font-buenos-light"  id="registration_fee">
                           xxx.xxx.xxx VND
                        </span>
                  </li>

                  

                  <li class="line">
                        <span class="line__title font16 font-buenos-light">
                           Phí đăng kiểm(*):
                        </span>

                        <span class="line__value font-buenos-light" id="registry_fee">
                           xxx.xxx.xxx VND
                        </span>
                  </li>

                  <li class="line">
                        <span class="line__title font16 font-buenos-light">
                           Phí đăng ký biển số:
                        </span>

                        <span class="line__value font-buenos-light" id="license_plate_fee">
                           xxx.xxx.xxx VND
                        </span>
                  </li>
                  <li class="line">
                        <span class="line__title font16 font-buenos-light">
                           Thuế:
                        </span>

                        <span class="line__value font-buenos-light"  id="fee">
                           xxx.xxx.xxx VND
                        </span>
                  </li>
               </ul>

               <p class="mt-3 font-buenos-light">
                  <i>
                        (*): Chi phí thực tế có thể thay đổi theo tỉnh thành
                  </i>
               </p>
            </div>
      </div>

      <div class="form__total-cost text-center">
            <div class="font-kia-bold font25 item text-uppercase">
               <span class="font-buenos-bold">
                  tổng chi phí ước tính:
               </span>

               <span class="font-buenos-bold" id="car_price_total">
                  xxx.xxx
               </span>
               <input type="hidden" name="total_price" value="{{old('total_price')}}">
            </div>
            <p class="font-buenos-light font-mobie-small">
               (Tổng chi phí ước tính mang tính chất tham khảo. Vui lòng liên hệ Showroom để biết thêm chi tiết.)
            </p>
      </div>

      <p class="form__input">
            <label for="" class="font16 font-buenos-light">Thời gian nhận xe (*): </label>
            <input name="buy_date" type="date" class="date ui search selection dropdown" value="{{old('buy_date')}}">
      </p>
      <p class="form__input">
            <label for="date" class="font16 font-buenos-light"> Khách hàng (*): </label>
            <input name="fullname" class="ui search selection dropdown" type="text" placeholder="Họ và tên" value="{{old('fullname')}}">
      </p>

      <p class="form__input">
            <label for="date" class="font16 font-buenos-light">Số điện thoại (*): </label>
            <input name="phone" class="ui search selection dropdown" type="text" placeholder="Nhập số điện thoại" value="{{old('phone')}}">
      </p>

      <p class="form__input">
            <label for="date" class="font16 font-buenos-light">Địa chỉ liên hệ (*):</label>
            <input name="address" class="ui search selection dropdown" type="text" placeholder="Nhập địa chỉ liên hệ" value="{{old('address')}}">
      </p>

      <div class="form__position">
            <div class="item-right">
               <select id="customer__city" name="province"  class="font-buenos-light ui search selection dropdown customner__city" required>
                  <option value="" selected>Tỉnh/ Thành phố</option>
                  @forelse(@$provinces as $row)
                        <option {{ old('province') == @$row->matp ? 'selected' : '' }}
                           value="{{ @$row->matp }}">{{ @$row->name }}</option>
                  @empty
                  @endforelse
               </select>

               <select id="customer__district" name="disctrict"  class="font-buenos-light ui search selection dropdown customer__district" required>
                  <option value="" selected>Quận/ Huyện</option>
                  @if(old('province'))
                     @foreach(get_district_by_province_id(old('province')) as $item)
                        <option  {{ old('disctrict') == @$item->maqh ? 'selected' : '' }} value="{{$item->maqh}}">{{$item->name}}</option>
                     @endforeach
                  @else
                  @endif
               </select>

               <select id="customer__ward" name="ward"  class="font-buenos-light ui search selection dropdown customer__ward" required>
                  <option value="" selected>Phường/ xã</option>
                  @if(old('disctrict'))
                  <option value="">Phường/ Xã</option>
                  @foreach(get_ward_by_district_id(old('disctrict')) as $item)
                      <option  {{ old('ward') == @$item->xaid ? 'selected' : '' }} value="{{$item->xaid}}">{{$item->name}}</option>
                  @endforeach
              @endif
               </select>
            </div>
      </div>

      <p class="form__input">
            <label for="date" class="font16 font-buenos-light">Email (*): </label>
            <input name="email" class="ui search selection dropdown" type="text" placeholder="Nhập thông tin email" value="{{old('email')}}">
      </p>

      <p class="form__checkbox">
            <input type="checkbox" name="accept" id="accept" value="{{old('accept')}}">
            <label class="ml-3 mb-0 font16 font-buenos-light" for="accept">Đồng ý nhận thông tin từ KIA</label>
      </p>

      <p class="form__btnSubmit">
            <button type="submit" class="text-uppercase font16 font-kia-bold button">
               đăng ký ngay
            </button>
      </p>
   </div>
{{-- </form> --}}
{!! Form::close() !!}