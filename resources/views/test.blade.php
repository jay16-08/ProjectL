

<!DOCTYPE html>

<html>
<body>
@extends('layouts.admin')

@section('content')
<p>
    This is test page
</p>
@endsection

<table class="table" id="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">bookid</th>
            <th class="text-center">roomid</th>
            <th class="text-center">customerid</th>
            <th class="text-center">bookingdate</th>
            <th class="text-center">checkin</th>
            <th class="text-center">checkout</th>
            <th class="text-center">failed_at</th>
        </tr>
    </thead>
    <tbody>
        <tr>

        </tr>
    </tbody>
</table>
</body>
</html>