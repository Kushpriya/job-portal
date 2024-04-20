<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User UI</title>
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
        z-index: 0;

    }
     .title{
        position: absolute;
        top:200px;
        left: 270px;
        width: 100%;
        padding: 20px 100px;
        color: white;
        display: flex;
       }
       .heading{
        position: absolute;
        top:230px;
        left: 200px;
        width: 100%;
        padding: 20px 100px;
        display: flex;
        font-size: 2.7em;
        color:white;
        user-select: none;
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
    

    .input-group {
        position: relative;
    }

    .input-group .icon {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 1px;
        color: #aaa;
    }

    .input-group input[type="text"] {
        padding-left: 50px; 
        text-align: justify;
    }

    .search { 
    position: absolute;
    text-align: center; 
    top: 42%;
    left: 10%;
    margin-bottom: 2rem; 
    z-index: 0;
    } 
  
    .search form { 
        display: flex; 
        justify-content: center; 
        align-items: center; 
        
    } 
    
    .search input[type="text"] { 
        padding: 15px 30px; 
        margin-right: 20px; 
        border-radius: 4px; 
        background: white;
        border: 2px solid white;
        outline: none;
        border-radius: 6px;
        box
    } 
    
    .search button { 
        width: 200px;
        height: 50px;
        border: 2px solid white;
        outline: none;
        border-radius: 6px; 
        cursor: pointer;
        font-size: 1.3em;
        color:black;
        transition: .5s;  
    } 
    
    .search button:hover { 
        background-color:green; 
        color: white;

    }   

    .job-listings { 
     position: absolute;
     top: 60%;
     left: 5%;

    } 
    
     .job-listings h2 { 
        font-size: 30px; 
        margin-bottom: 1rem; 
        text-align: center; 
        color: #ff6600;
    }  
    
    .job-listings ul {
        list-style: none;

}

.job-listings li {
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 20px;
    margin-bottom: 20px;
    margin-left: 10px; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    display: inline-block;
}

.job-listings h3,
.job-listings p {
    margin: 5px 0;
}

.job-listings a {
    display: inline-block;
    background-color: #333;
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.job-listings a:hover {
    background-color:green;
}

    .wrapper{
        position: relative;
        width: 400px;
        height: 440px;
        background:transparent;
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
        position: absolute;
        margin: 0 auto;
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
        transition: transform 0.18s ease;
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
        transition: 0.5s;
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
        font-size: 0.9em;
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
        <p class="title ">FIND JOBS,CREATE TRACKABLE RESUMES AND ENRICH YOUR APPLICATIONS.</p>
        <h3 class="heading">The Easiest Way to Get Your New Job</h3>
        <h2 class="logo">Jobfind</h2>
        <nav class = "navigation">
            <a href="home">Home</a> 
            <a href="jobfind">Find Jobs</a>
            <a href="Companies">Companies</a>
            <a href="about">About Us</a>
            <a href="contact">Contact</a>
            <button class="btnlogin-popup" href="signin">Sign In</button>
      </nav> 
    </header>

    <section class="search">
        <form action="#" method="get">
            <div class="input-group">
                <span class="icon"><ion-icon name="search-outline"></ion-icon></span>
                <input type="text" name="keywords" placeholder="Keywords">
            </div>
            <div class="input-group">
                <span class="icon"><ion-icon name="navigate-outline"></ion-icon></span>
                <input type="text" name="location" placeholder="Location">
            </div>
            <div class="input-group">
                <span class="icon"><ion-icon name="business-outline"></ion-icon></span>
                <input type="text" name="company" placeholder="Company">
            </div>
            <button type="submit">Search</button>
        </form>
    </section>
    
    <section class="job-listings"> 
        <h2>Latest Job Listings</h2> 
        <ul> 
            <li> 
                <h3>Web Developer</h3> 
                <p>Company: ABC Tech</p> 
                <p>Location: Nepal</p> 
                <p>Description: Good Web Developer</p> 
                <a href="#">Apply Now</a> 
            </li> 
            <li> 
                <h3>Graphic Designer</h3> 
                <p>Company: XYZ Design</p> 
                <p>Location: Nepal </p> 
                <p>Description:Good Graphic Designer</p> 
                <a href="#">Apply Now</a> 
            </li> 
            <li> 
                <h3>Data Analyst</h3> 
                <p>Company: Data Insights Co.</p> 
                <p>Location: New York, USA</p> 
                <p>Description: Analyze data sets.</p> 
                <a href="#">Apply Now</a> 
            </li>
            
            <li> 
                <h3>Software Engineer</h3> 
                <p>Company: Tech Innovations Inc.</p> 
                <p>Location: San Francisco, USA</p> 
                <p>Description: Develop software applications.</p> 
                <a href="#">Apply Now</a> 
            </li>
            
        </ul> 
    </section> 

    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon>
        </span>

        <div class="form-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label> Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
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
                        <a href="#"class="register-link">Register</a>
                    </p>
                </div>
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
                        <a href="#"class="login-link">Login</a>
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

    loginlink.addEventListener('click', () => {
        wrapper.classList.remove('active-popup');
    });

    registerlink.addEventListener('click', () => {
        wrapper.classList.add('active-popup');
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