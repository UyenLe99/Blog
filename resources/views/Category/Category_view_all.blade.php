<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <h1>danh sach Category</h1>
    <table>
        <thead>
        <tr>
            <td>Category</td>
        </tr>
        </thead>
        <tbody>
        @foreach($array_Category as $Category)
            <tr>
                <td>
                    {{$Category->category_name}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
