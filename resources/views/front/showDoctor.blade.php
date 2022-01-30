

<div class="container-fluid page-body-wrapper">
    <div align="center" style="padding:100px;">
    <table>
        <tr>
        <th>Doctor NAme</th>
        <th>phone</th>
        <th>Specility of Doctor</th>
        <th>Room</th>
        <th>image</th>
        <th>Registered date</th>


    </tr>

    <tr align="center" style="background-color:skyblue">
        @foreach($data as $Doctor)
        <td>{{$Doctor->name}}</td>
        <td>{{$Doctor->phone}}</td>
        <td>{{$appoint->specility}}</td>
        <td>{{$appoint->room}}</td>
        <td>{{$appoint->image}}</td>
        <td>{{$appoint->created_at}}</td>

        <td>
        <a class="btn btn-success" href="{{url('approve',$appoint->id)}}">update</a></td>
        <td>
            <a class="btn btn-danger" href="{{url('cancel',$appoint->id)}}">delete</a></td>
    </tr>
    @endforeach
    </table>
    </div></div>
