<html>

<head>
    <link rel="stylesheet" href="search.css">
    <script src="https://kit.fontawesome.com/7f6d2012d0.js"></script>
</head>

<body>
    <div class="wrap">
        <form action="search_record" method="post" class="search-bar">
            <div class="search">
                {{ csrf_field() }}
                <input type="text" class="searchTerm" name="q" placeholder="Search here to know about status">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </form>
    </div>
    <table class="tab" border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Qualification</th>
            <th>City</th>
            <th>Level</th>
            <th>Status</th>
        </tr>
        @if (empty($data))
        @else
            @foreach ($data as $r)
                <tr>
                    <td>{{ $r->name }}</td>
                    <td>{{ $r->email }}</td>
                    <td>{{ $r->qualification }}</td>
                    <td>{{ $r->city }}</td>
                    <td>{{ $r->experience }}</td>
                    @if ($r->status == 0)
                        <td class="under">Under Review</td>
                    @elseif ($r->status == 1)
                        <td class="selec">Selected</td>
                    @elseif($r->status == 2)
                        <td class="rejece">Rejected</td>
                    @endif
                </tr>
            @endforeach

        @endif

    </table>

</body>

</html>
