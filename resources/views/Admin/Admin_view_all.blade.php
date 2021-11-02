<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <h1>danh sach admin</h1>
    <table>
        <thead>
        <tr>
            <td>username</td>
            <td>pass</td>
            <td>email</td>
            <td>address</td>
            <td>phone</td>
            <td>type</td>
        </tr>
        </thead>
        <tbody>
        @foreach($array_Admin as $Admin)
            <tr>
                <td>
                    {{$Admin->admin_name}}
                </td>
                <td>
                    {{$Admin->admin_pass}}
                </td>
                <td>
                    {{$Admin->admin_mail}}
                </td>
                <td>
                    {{$Admin->admin_address}}
                </td>
                <td>
                    {{$Admin->admin_phone}}
                </td>
                <td>
                    {{$Admin->type}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
