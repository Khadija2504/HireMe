<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Sign in/up Form</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <link rel="stylesheet" href="../../css/style.css">
    
</head> 
<body>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="{{route('store')}}" method="POST">
            @csrf
            <h1>Create Account</h1>

            <input type="text" name="Nom" placeholder="nom" required>

            <input type="text" name="Prenom" placeholder="prenom" required>

            <input type="Email" name="email" placeholder="Email" required>

            <input type="text" name="Phone" placeholder="phone number" required>

            <input type="number" name="age" placeholder="age" required>

            <input type="password" name="password" placeholder="Mot de passe" required>

            <button type="submit" name="store">S'inscrire</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <h1>Sign in</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <input type="email" name="email" placeholder="Email" required>

            <input type="password" name="password" placeholder="Password" required>

            <button type="submit" name="login">Se Connecter</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start the journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>
<script  src="../../js/script.js"></script>
</body>
</html>
