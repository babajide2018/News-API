<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NEWS API Test Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>

<h1>API RESULTS</h1>


<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Source</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Content</th>
    </tr>
    </thead>
    <tbody>
    @foreach($result['articles'] as $res)
    <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{($res['source']['name'])}}</td>
        <td>{{($res['title'])}}</td>
        <td>{{($res['description'])}}</td>
        <td><a href="{{($res['urlToImage'])}}"><img src="{{($res['urlToImage'])}}" alt="" style="height: 60px;width: 60px"></a></td>
        <td>{{($res['content'])}}</td>
    </tr>
    @endforeach
    </tbody>
</table>





{{--@foreach($result['articles'] as $res)
    {{($res['source']['name'])}}
@endforeach--}}

</body>
</html>
