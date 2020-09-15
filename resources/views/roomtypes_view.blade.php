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
  <th colspan="2"> Extras Table</th><tr>
<td>Id</td>
<td>{{ $user->room_type_id }}</td><tr>
<td>Description</td>
<td>{{ $user->descriptionroomtype }}</td><tr>
<td>Amount</td>
<td>{{ $user->amountroomtype }}</td><tr>
<td colspan="2" ><a href="{{ route('room_types')}}">Back</a></td>
</tr>
</table>
@endforeach

</div>
</body>
</html>
