<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Xr
        </title>
        <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    </head>
    <body>
        <div class="container">
            <br/>
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>
                </div><br/>
                @endif
            <table class="table table-stripped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product['id']}}</td>
                        <td>{{$product['code']}}</td>
                        <td>{{$product['name']}}</td>

                        <td>
                            <a href="{{action('ProductController@edit',$product['id'])}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="{{action('ProductController@destroy',$product['id'])}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    <div style="text-align: center">
        <br/>
        <button class="btn btn-danger" onclick="window.location='{{action('ProductController@create')}}'">Add New Product</button>
        <br/>
    </div>
    </body>
</html>
