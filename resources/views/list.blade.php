<h1>Member List </h1>
<table border="1">
    <tr>
    <td>ID</td>
    <td>NAME</td>
    <td>EMAIL</td>
    <td>ADDRESS</td>
    <td>Action</td>
 </tr>
@foreach($members as $member)
 <tr>
    <td>{{$member['id']}}</td>
    <td>{{$member['name']}}</td>
    <td>{{$member['email']}}</td>
    <td>{{$member['address']}}</td>
    <td><a href={{"delete/".$member['id']}}>Delete</a>
      <a href={{"edit/".$member['id']}}>Edit</a>
   </td>

 </tr>

 @endforeach

</table>