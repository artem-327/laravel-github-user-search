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
        <div class="container mt-5 mb-5">
            <div class="mb-5 text-center">
                <a href="/"><h3>Github Searcher</h3></a>
            </div>
            <div class="mb-5 row">
                <div class="col col-xs-12 col-sm-12 cold-md-6 col-lg-6">
                    <img style="float: right;" height="200" width="200" src="{{$data->user->avatar}}" />
                </div>
                <div class="col col-xs-12 col-sm-12 cold-md-6 col-lg-6">
                    <p>{{$data->user->username}}</p>
                    <p>{{$data->user->email}}</p>
                    <p>{{$data->user->location}}</p>
                    <p>{{$data->user->joined}}</p>
                    <p>{{$data->user->followers}}</p>
                    <p>{{$data->user->followings}}</p>
                </div>
            </div>
            <div class="mb-3">
                <input class="form-control" placeholder="Search for User's Repositories" />
            </div>
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-info">
                        <th scope="col">RepoName</th>
                        <th scope="col">Forks</th>
                        <th scope="col">Stars</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data->repos as $repo)
                    <tr>
                        <td>{{ $repo->name }}</td>
                        <td>{{ $repo->forks }}</td>
                        <td>{{ $repo->stars }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>