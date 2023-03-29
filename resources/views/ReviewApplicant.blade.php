<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Review Applicant</title>
    <link rel="stylesheet" href="{{ asset('style3.css') }}">
    <link rel="stylesheet" href="style3.js">
</head>
<body>
    <section>
        <!--for demo wrap-->
        <h1>Applicant Full information</h1>
        <div class="tbl-header">
          <table cellpadding="0" cellspacing="0" border="0">
            <thead>
              <tr>
                <th>Name</th>
                <th>Country</th>
                <th>Email Addrs</th>
                <th>DOB</th>
                <th>state</th>
                <th>city</th>
                <th>experience</th>
                <th>Candidate</th>
                <th>Status</th>

              </tr>
            </thead>
          </table>
        </div>
        <div class="tbl-content">
          <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
                @foreach ($data as $d )
              <tr>
                <th>{{ $d->name }}</th>
                <th>{{ $d->country }}</th>
                <td>{{ $d->email }}</td>
                <th>{{ $d->date }}</th>
                <th>{{ $d->state }}</th>
                <th>{{ $d->city }}</th>
                <th>{{ $d->experience }}</th>
                <th>{{ $d->radio }}</th>
                <td><a href="process/1/{{ $d->id }}"><input class="selc" type="button" name="btn" value="Selected"></a>
                    <a href="process/2/{{ $d->id }}"><input class="rejc"  type="button" name="btn" value="Rejected"></a></td>
              </tr>
              @endforeach
              <script>
                var msg = '{{Session::get('alert')}}';
                var exist = '{{Session::has('alert')}}';
                if(exist){
                  alert(msg);
                }
              </script>
            </tbody>
          </table>
        </div>
      </section>

        <p></p>


</body>
</html>
