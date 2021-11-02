<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <h1>danh sach user</h1>
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
        @foreach($array_User as $User)
            <tr>
                <td>
                    {{$User->user_name}}
                </td>
                <td>
                    {{$User->user_pass}}
                </td>
                <td>
                    {{$User->user_mail}}
                </td>
                <td>
                    {{$User->user_address}}
                </td>
                <td>
                    {{$User->user_phone}}
                </td>
                <td>
                    {{$User->type}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
