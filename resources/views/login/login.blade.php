<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center>
        <div>
             <h4>Masukan Username dan Password</h4>
        </div>
        <div>
            <form action="{{ route('cek.login') }}" method="POST">
            @csrf
            <div>
                <label for="Username">Username</label>
                <input type="text" name="username" id="username">
            </div>
                <br/>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
                <br/>  
            <button type="submit">Login</button>     
            </form>
        </div>
    </center>
</body>
</html>