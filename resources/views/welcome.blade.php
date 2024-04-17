<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('images/background.jpg')no-repeat;
            background-size: cover;
            background-position: center;
        }

    header {
        position: fixed;;
        top:0%;
        left: 0%;
        width: 100%;
        padding: 20px 100px;
        /* background: red; */
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 99;

    }
    .logo{
        font-size: 2em;
        color:white;
        user-select: none;
    }

    .navigation a{
        position: relative;
        font-size:1.1em;
        color: white;
        text-decoration: none;
        font-weight: 500;
        margin-left: 40px;

    }
    .navigation a::after{
        content: '' ;
        position: absolute;
        left:0;
        bottom: -6px;
        width:100%;
        height: 3px;
        background: rgb(248, 245, 245) ;
        border-radius: 5px;
        transform-origin: right;
        transform: scaleX(0);
        transition: transform .5s;
        
    }
    .navigation a:hover::after{
        transform-origin: left;
        transform: scaleX(1);
    }
    
    .navigation .btnlogin-popup{
        width: 130px;
        height: 50px;
        background: transparent;
        border: 2px solid white;
        outline: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 1.3em;
        color:white;
        font-weight: 500;
        margin-left: 40px;
        transition: .5s; 
    }

    .navigation .btnlogin-popup:hover{
        background: rgb(12, 176, 12);
        color: white;
    }
    
    .wrapper{
        position: relative;
        width: 400px;
        height: 440px;
        background: transparent;
        border: 2px solid rgb(218, 211, 211);
        border-radius: 20px;
        backdrop-filter: blur(20px);
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        transform: scale(0);
        transition: transform .5s ease,height .2s ease;
    }

    .wrapper.active-popup{
        transform: scale(1);
    }

    .wrapper .active{
        height: 520px;
    }

    .wrapper .form-box{
         width: 100%;
         padding: 40px;
    }

    .wrapper .form-box.login
    {
        /* display: none; */
        transition: transform .18s ease;
        transform: translateX(0);
    }

    .wrapper.active .form-box.login{
        transition: none;
        transform: translate(-400px);
    }

    .wrapper .form-box.register
    {
        position: absolute;
        transition: none;
        transform: translateX(400px);
        display: none;
    }

    .wrapper.active-popup .form-box.login
    {
    transition:none;
    transform: translateX(0);
    display: block;
    }

    .wrapper .icon-close{
        position: absolute;
        top: 0%;
        right: 0;
        width: 45px;
        height: 45px;
        background: black;
        font-size: 2em;
        color: rgb(239, 234, 234);
        display: flex;
        justify-content: center;
        align-items: center;
        border-bottom-left-radius: 20px;
        cursor: pointer;
        z-index: 1;

    }
    .form-box h2{
        font-size: 2em;
        color: black;
        text-align: center;

    }
       .input-box{
        position: relative;
        width: 100%;
        height: 50px;
        border-bottom: 2px solid black;
        margin: 30px 0;
       }

       .input-box label{
        position: absolute;
        top: 50%;
        left: 5px;
        transform: translateY(-50%);
        font-size: 1em;
        color: black;
        font-weight: 500;
        pointer-events: none;
        transition: .5s;
       }

       .input-box input:focus~label,
       .input-box input:valid~label{
        top: -5px;
       }

       .input-box input{

        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline:none;
        font-size: 1em;
        color: black;
        font-weight: 600;
        padding: 0 35px 0 5px;
       }

       .input-box .icon{
        position: absolute;
        right: 8px;
        font-size: 1.2em;
        color: black;
        line-height: 57px;
       }

       .remember-forgot{
        font-size: .9em;
        color: black;
        font-weight: 500;
        margin: -15px 0 15px;
        display: flex;
        justify-content: space-between;

       }

       .remember-forgot label input{
        accent-color: black;
        margin-right: 3px;
       }
       .remember-forgot a{
        color: black;
        text-decoration: none;
       }
       .remember-forgot a:hover{
        text-decoration: underline;
       }

       .btn{
        width: 100%;
        height: 45px;
        background: rgb(2, 13, 58);
        outline: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 1em;
        color: white;
        font-weight: 500;

       }

       .login-register{
        font-size: .9em;
        color: black;
        text-align: center;
        font-weight: 500;
        margin: 25px 0 10px;

       }

       .login-register p a{
        color: black;
        text-decoration: none;
        font-weight:600;

       }

       .login-register p a:hover{
        text-decoration: underline;

       }


  </style>
</head>
<body>
    <header>

        <h2 class="logo">Jobfind</h2>
        <nav class = "navigation">
            <a href="home">Home</a> 
            <a href="jobfind">Find Jobs</a>
            <a href="Companies">Companies</a>
            <a href="about">About Jofind</a>
            <button class="btnlogin-popup" href="signin">Sign In</button>
      </nav>
    </header>

    <div class="wrapper">
        <span class="icon-close"><ion-icon 
            name="close"></ion-icon>
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon 
                        name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label> Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon 
                        name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">
                        Remember me</label>
                        <a href="#">Forgot Password?</a>
                </div>

                <button type="submit" class="btn">Login</button>

                <div class="login-register">
                    <p>Don't have an account?
                        <a href="#"
                        class="register-link">Register</a>
                    </p>
            </form>
         </div>


         <div class="form-box register">
            <h2>Registration</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon 
                        name="person"></ion-icon></span>
                    <input type="text" required>
                    <label>Username</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon 
                        name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label> Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon 
                        name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label>Password</label>
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">
                        I agree to the terms & conditions</label>
                        
                </div>

                <button type="submit" class="btn">Register</button>

                <div class="login-register">
                    <p>Already have an account?
                        <a href="#"
                        class="login-link">Login</a>
                    </p>
            </form>
         </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
            const wrapper = document.querySelector('.wrapper');
        const loginlink = document.querySelector('.login-link');
        const registerlink = document.querySelector('.register-link');
        const btnPopup = document.querySelector('.btnlogin-popup');
        const iconClose = document.querySelector('.icon-close');

        registerlink.addEventListener('click', () => {
            wrapper.classList.add('active-popup');
        });

        loginlink.addEventListener('click', () => {
            wrapper.classList.remove('active-popup');
        });

        btnPopup.addEventListener('click', () => {
            wrapper.classList.add('active-popup');
        });

        iconClose.addEventListener('click', () => {
            wrapper.classList.remove('active-popup');
        });

    </script>
</body>
</html> 