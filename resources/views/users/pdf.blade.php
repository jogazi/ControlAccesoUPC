
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
  </head>
  <body>
    <header class="clearfix">
      <div style="text-align: center" id="logo">
      <img src="{{ asset('/public/Logo/U.png') }}" class="img-fluid" alt="Responsive image">
      </div>
      <div style="text-align: center">
        <h1>Films Control-File Comparison</h1>
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
            <th > Name </th>
            <th > Email </th>
          </tr>
        </thead>
        <tbody>
        @foreach($users as $item)
          <tr>
            <td >{{ $item->name }} </td>
            <td >{{ $item->email }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </main>
  </body>
</html>