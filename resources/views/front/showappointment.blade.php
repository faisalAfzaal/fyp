

<div class="container-fluid page-body-wrapper">
<div align="center" style="padding:100px;">
<table>
    <tr>
    <th>Patient NAme</th>
    <th>phone</th>
    <th>Type Of Service</th>
    <th>Date</th>
    <th>From</th>
    <th>to</th>
    <th>Doctor(optional)</th>
    <th>Status</th>
    <th>User</th>
    <th style="padding:10px">Status</th>

</tr>

<tr align="center" style="background-color:skyblue">
    @foreach($data as $appoint)
    <td>{{$appoint->name}}</td>
    <td>{{$appoint->phone}}</td>
    <td>{{$appoint->type_of_service}}</td>
    <td>{{$appoint->date}}</td>
    <td>{{$appoint->from}}</td>
    <td>{{$appoint->to}}</td>
    <td>{{$appoint->staff}}</td>
    <td>{{$appoint->status}}</td>
    <td>{{$appoint->user_id}}</td>
    <td>
    <a class="btn btn-success" href="{{url('approve',$appoint->id)}}">Approved</a></td>
    <td>
        <a class="btn btn-danger" href="{{url('cancel',$appoint->id)}}">Canceled</a></td>
</tr>
@endforeach
</table>
</div></div>
