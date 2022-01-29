<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Github Searcher</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container mt-5">
            <div class="mb-3 text-center">
                <a href="/"><h3>Github Searcher</h3></a>
            </div>
            <div class="mb-5">
                <input class="form-control" placeholder="Search for Users" />
            </div>
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-info">
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Repo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($userData as $data)
                    <tr style="cursor: pointer;" onClick="gotoRepo({{$data->id}})" >
                        <th scope="row"><img height="30" width="30" src="{{$data->avatar}}" /></th>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->firstname }} {{ $data->lastname }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->repos }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $userData->links() !!}
            </div>
        </div>
    </body>
    <script>
        function gotoRepo(id) {
            window.location.href = './repo/' + id;
        }
    </script>
</html>