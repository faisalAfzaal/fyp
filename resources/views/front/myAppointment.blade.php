@include('front.navigation')
<style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    tr:nth-child(even) {
      background-color: rgba(150, 212, 212, 0.4);
    }

    th:nth-child(even),td:nth-child(even) {
      background-color: rgba(150, 212, 212, 0.4);
    }
    </style>
    <h1 style="padding:10px;" font-size: 20px; color:white;>My Appointments</h1>
<div>

<div align="center" style="padding:70px;">

    <table class="container" style="width: 100%;">

        <tr style="">
            <th style="padding:10px;" font-size: 20px; color:white;>Doctor Name</th>
            <th style="padding:10px;" font-size: 20px; color:white;>Date</th>
            <th style="padding:10px;" font-size: 20px; color:white;>Message</th>
            <th style="padding:10px;" font-size: 20px; color:white;>Status</th>
            <th style="padding:10px;" font-size: 20px; color:white;>Cancle Appointment</th>
        </tr>
        @foreach($appoint as $appoints)
    <tr>
    <td style="padding:10px;" font-size: 20px; color:white;>{{$appoints->doctor}}</td>
    <td style="padding:10px;" font-size: 20px; color:white;>{{$appoints->date}}</td>
    <td style="padding:10px;" font-size: 20px; color:white;>{{$appoints->type_of_service}}</td>
    <td style="padding:10px;" font-size: 20px; color:white;>{{$appoints->status}}</td>
    <td  style="padding:10px;" font-size: 20px; color:white><a class="bt btn-danger" onclick="return confirm('are you sure to delete this')" href="{{url('cancel-appointment',$appoints->id)}}">Cancel</a></td>

    </tr>
    @endforeach
    </table>
</div></div>
@include('front.footer')
