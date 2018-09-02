<!DOCTYPE html>
<html>
<head>
    <title>Contoh Visitor</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/4.0.0/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/font-awesome-4.7.0/css/font-awesome.min.css')}}">

</head>
<body>
    <br>
<div class="container">
    <div class="table-responsive">
                <form action="/logout" method="post" id="logout-form">
        {{ csrf_field() }}

        <button class="btn btn-warning pull-right" onclick="document.getElementById('logout-form').submit()">Logout <i class="fa fa-sign-out"></i></button>
    </form>
        <h3> Contoh Visitor </h3>
        <br>
        <table class="table table-bordered">
            <thead>
            <tr class="heading">
                <th>No</th>
                <th>Name</th>
                <th>Details</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{!! $product->name !!}</td>
                        <td>{!! $product->details !!}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $products->links('pagination') !!}
    </div>

</div>
</body>
</html>