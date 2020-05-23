
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Users</title>
  </head>
  <body>
    <header class="clearfix">
      <div style="text-align: center" id="logo">
      <img src="{{ asset('/public/Logo/U.png') }}" class="img-fluid" alt="Responsive image">
      </div>
      <div style="text-align: center">
        <h1>Films Control-Log System</h1>
      </div>
      <div style="text-align: left" id="project">
        <div><span>PROJECT: </span> Website development</div>
        <div><span>CREATORS: </span> Ricardo Rico Lozada-Johan Aley Garcia Herrran</div>
        <div><span>ADDRESS: </span> 796 Silver Harbour, TX 79273, US</div>
        <div><span>EMAIL: </span> <a href="mailto:john@example.com">management@filmscontrol.edu.co</a></div>
        <div><span>DATE: </span> August 17, 2019</div>
        <div><span>DUE DATE: </span> September 17, 2022</div>
      </div>
    </header>
    <br>
    <main>
      <table align="center" border=1>
        <thead >
          <tr >
            <th> Id </th>
            <th> Method </th>
            <th> Date Time </th>
            <th> User </th>
            <th> Role </th>
            <th> Controller </th>
            <th> Action </th>
            <th>  Ip user </th>
          </tr>
        </thead>
        <tbody>
        @foreach($audit07 as $item)
          <tr>
            <td> {{ $item->id_sys }} </td>
            <td > 
            @if ($item->sys_act=="C")
                Create
            @endif
            @if ($item->sys_act=="R")
                Read
            @endif
            @if ($item->sys_act=="U")
                Update
            @endif
            @if ($item->sys_act=="D")
                Delete
            @endif
            @if ($item->sys_act=="L")
                Login
            @endif
            </td>
            <td > <font size=2>{{ $item->sys_date }} </font> </td>
            <td > <font size=2>{{ $item->user->name }} </font> </td>
            <td > 
            @foreach($item->user->roles as $item2)
            <font size=2>{{ $item2->name }} </font>
            @endforeach
            </td>
            <td> <font size=2>{{ $item->audit08->dsyscontroller }} </font> </td>
            <td> <font size=2>{{ $item->audit08->dsysmethod }} </font> </td>
            <td> <font size=2>{{ $item->audit08->dsysip }} </font> </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </main>
  </body>
</html>