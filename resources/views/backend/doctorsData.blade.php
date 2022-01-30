

<!DOCTYPE html>
<html lang="en">

<head>
        <style type="text/css">
        lable{
            display:inline-block;
            width:200px;
        }
            </style>
</head>
<body>

<h1>PLEASE ADD DOCTOR HERE</h1>

<div class="container-fluid page-body-wrapper">


    <div class="container" align="center" style="padding-top: 50px">


    @if(session()->has('message'))
    <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert">Success</button>
        {{session()->get('message')}}

@endif


        <form action="{{url('upload-doctor')}}" method="POST" enctype="multipart/form-data">

         @csrf
            <div style="padding:15px;">

                <label>Doctor NAme</label>
                <input type="text" style="color:black;" name="name" placeholder="write the name" required="">
            </div>
            <div style="padding:15px;">

                <label>Phone number</label>
                <input type="number" style="color:black;" name="number" placeholder="write the phone Number" required="">
            </div>
            <div style="padding:15px;">

                <label>Doctor specility</label>
              <select style="color: black; width:160px">
                <option>-------select--------</option>
                  <option value="gainy">gainy</option>
                  <option value="consultant">consultant</option>
                  <option value="dilvery">dilvery</option>
                  <option value="trainer">trainer</option>
              </select>
            </div>
            <div style="padding:15px;">

                <label>Doctor room</label>
                <input type="text" style="color:black;" name="room" placeholder="write the room number" required="">
            </div>
            <div style="padding:15px;">

                <label>Doctor image</label>
                <input type="file"  name="file" required="">
            </div>
            <div style="padding:15px;">

                <input type="submit"  class="btn btn-success" required="">
            </div>
    </div></div>
</body>

