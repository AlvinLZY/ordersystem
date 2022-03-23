<html>
    <head>
        <meta charset="utf-8">
        <title>Add New Product</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div style="margin-top: 15%;text-align: center">
            <h2>Add New Product</h2><br>
            <form method="post" action="{{url('products')}}">
                @csrf
                <p>
                    <label for="code">Product Code:</label>
                    <input type="text" name="code">
                </p>
                <p>
                    <label for="name">Product Name:</label>
                    <input type="text" name="name">
                </p>
                <p>
                    <button type="submit">Submit</button>
                </p>
            </form>
        </div>
    </body>
</html>
