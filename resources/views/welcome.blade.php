<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
   
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background-color: rgb(157, 189, 220);
    padding: 50px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 500px;
}
h2 {
    margin-bottom: 30px;
    text-align: center;
    color: white;
    
}

.input-group {
    margin-bottom: 15px;
}

.input-group label {
    display: block;
    font-size: 20px;
    margin-bottom: 5px;
    color: white;
}

.input-group input {
    width: 100%;
    padding: 8px;
    box-sizing: border-box ;
    
}
button {
    width: 50%;
    padding: 10px;
    margin-left: 100px;
    margin-top: 30px;
    background-color: rgb(53, 106, 175)    ;
    color: #ffffff;
    border: none;
    border-radius: 50px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: rgb(157, 189, 220);
    
}
    </style>
    <form action="/auth" method="post">
    @csrf
    @if(Session::has('pesanLogin'))
    {{Session::get('pesanLogin')}}
    @endif
    <div class="login-container">
        <h2>Login</h2>
            <div class="input-group">
                <label for="username">Email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</body>
</html>