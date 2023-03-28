<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Applications</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

    <h2>Applicant List</h2>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>

                <tr>
                    <th>Serial No</th>
                    <th>Applicants Name</th>
                    <th>View</th>
                    <th>Delete</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d )
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->name }}</td>
                    <td><a href="Review/{{ $d->id}}">view</a></td>
                    <td><a href="Apllicantions/{{ $d->id }}">Delete</a></td>
                </tr>
                @endforeach
            <tbody>
        </table>
    </div>
</body>
</html>
