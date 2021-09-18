@if ($contact)
    <p>Thời gian: <i>{{ $contact->created_at ?? "N/A" }}</i></p>
    <p>Họ và tên khách hàng: <i>{{ $contact->name ?? "N/A"}}</i></p>
    <p>Số điện thoại: <i>@if ($contact->phone) <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a> @else N/A @endif</i></p>
    <p>Địa chỉ: <i>Tỉnh/Thành phố {{ $contact->city.', '.$contact->district.', '.$contact->ward.' ('.$contact->address.')' }}</i></p>
    <p>Showroom: <i>{{ $contact->showroom ?? "N/A"}}</i></p>

@endif
