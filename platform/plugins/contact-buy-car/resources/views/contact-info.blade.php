@if ($contact)
    <p>Thời gian: <i>{{ $contact->created_at ?? "N/A" }}</i></p>
    <p>Họ và tên khách hàng: <i>{{ $contact->fullname ?? "N/A"}}</i></p>
    <p>Email: <i>{{ $contact->email ?? "N/A"}}</i></p>
    <p>Số điện thoại: <i>@if ($contact->phone) <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a> @else N/A @endif</i></p>
    <p>Địa chỉ: <i>Tỉnh/Thành phố {{ $contact->province.', '.$contact->disctrict.', '.$contact->ward.' ('.$contact->address.')' }}</i></p>
    <p>Showroom: <i>{{ get_showroom_by_id($contact->showroom)->name ?? "N/A"}}</i></p>
    <p>Loại xe: <i>{{ $contact->car_type ?? "N/A"}}</i></p>
    <p>Màu xe: <i>{{ $contact->car_color ?? "N/A"}}</i></p>
    <p>Giá xe đã bao gồm các phí: <i>{{ number_format($contact->total_price,2,',','.') ?? "N/A"}}</i></p>
    <p>Ngày nhận xe: <i>{{ $contact->buy_date ?? "N/A"}}</i></p>

@endif
