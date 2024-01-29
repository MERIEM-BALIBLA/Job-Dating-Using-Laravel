<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @auth 
        <p>Welcome BAck!!</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>
    @else 
        <!-- signup -->
        <div>
            <h1>SignUp Page</h1>
            <form action="/register" method="POST" style="border:3px solid red; padding:2%">
                @csrf
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="email" placeholder="Emial">
                <input type="password" name="password" placeholder="PAssword">
                <button>Submit</button>
            </form>
        </div>

        <!-- login -->
        <div>
            <h1>Login Page</h1>
            <form action="/login" method="POST" style="border:3px solid red; padding:2%">
                @csrf
                <input type="text" name="email_login" placeholder="Your Emial">
                <input type="password" name="password_login" placeholder=",Your Password Here">
                <button>Log in</button>
            </form>
        </div>
    @endauth

    
</body>
</html>