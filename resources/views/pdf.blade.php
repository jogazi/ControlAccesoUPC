
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="{{ asset('/public/css/style.css') }}" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
      <img src="{{ asset('/public/Logo/U.png') }}" class="img-fluid" alt="Responsive image">
      </div>
      <h1>Films Control-File Comparison</h1>
      <div id="project">
        <div><span>PROJECT</span> Website development</div>
        <div><span>CREATORS</span> Ricardo Rico Lozada-Johan Aley Garcia Herrran</div>
        <div><span>ADDRESS</span> 796 Silver Harbour, TX 79273, US</div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">management@filmscontrol.edu.co</a></div>
        <div><span>DATE</span> August 17, 2019</div>
        <div><span>DUE DATE</span> September 17, 2021</div>
      </div>
    </header>
    <main>
      <table>
        <thead >
          <tr>
            <th class="service"> Name </th>
            <th class="service"> Email </th>
            <th class="service"> State </th>
          </tr>
        </thead>
        <tbody>
        @foreach($users as $item)
          <tr>
            <td class="service">{{ $item->name }} </td>
            <td class="service">{{ $item->email }}</td>
            <td class="service">{{ $item->active }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>