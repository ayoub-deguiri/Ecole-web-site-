<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
    <style>




    </style>
</head>
<body>
    <div class="container">
        <form action="">
        <div class="card">
            <a class="login">Login </a>
            <div class="inputBox">
                <input type="text" required="required">
                <span class="user">Username</span>
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="inputBox">
                <input type="password" required="required" id="password">
                <span>Password</span>
                <i class="fa-solid fa-lock" ></i>

                <i class="fa-solid fa-eye-slash" id="togglePassword"></i>
                
            </div>
            <a href="#" id="forgot-ps"> forgot password ?</a>
            <button class="enter">login</button>

        </div>
    </form>
    </div>
    <script>
       
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            this.classList.toggle("fa-eye");
        });

        // prevent form submit
        const form = document.querySelector("form");
        form.addEventListener('submit', function (e) {
            e.preventDefault();
        });
       
    </script>
</body>
</html>