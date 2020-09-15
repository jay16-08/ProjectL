@if($message = Session::get('success'))
<div>
<p>{{$message}}</p>
</div>
@endif
<!DOCTPE html>
<html>
<head>
<title>Extras Table</title>
</head>
<body align="center">
  <br><br><br><br>
 <!-- Start Styles. Move the 'style' tags and everything between them to between the 'head' tags -->
<style type="text/css">
.myOtherTable { background-color:#FFFFE0;border-collapse:collapse;color:#000;font-size:18px; }
.myOtherTable th { background-color:#BDB76B;color:white;width:50%; }
.myOtherTable td, .myOtherTable th { padding:5px;border:0; }
.myOtherTable td { border-bottom:1px dotted #BDB76B; }
</style>
<!-- End Styles -->
@foreach ($data as $user)
<table align="center"  style="text-align:center" class="myOtherTable">
<tr>
  <th colspan="2"> Customer </th><tr>
<td> Customer Id</td>
<td>{{ $user->customers_id }}</td><tr>
<td>First Name</td>
<td>{{ $user->first_name }}</td><tr>
<td>Last Name</td>
<td>{{ $user->last_name }}</td><tr>
<td>Address</td>
<td>{{ $user->address }}</td><tr>
<td>Email Id</td>
<td>{{ $user->email }}</td><tr>
<td>Password</td>
<td>{{ $user->password }}</td><tr>
<td>Phone Number</td>
<td>{{ $user->phone_number }}</td><tr>

<td colspan="2" ><a href="{{ route('customers')}}">Back</a></td>
</tr>
</table>
@endforeach

</div>
</body>
</html>
