<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .content-login{
                align-content: center;
                border-color: black;
                border-style: solid;
                background-color: darkseagreen;
                width: 1000px;
                height: 500px;
                font-family: "Times New Roman";
                font-size: 25px;

            }
            .content-registration{
                align-content: center;
                border-color: black;
                border-style: solid;
                background-color: darkseagreen;
                width: 1000px;
                height: 500px;
                font-family: "Times New Roman";
                font-size: 25px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

       <div class="content-login" align="center">
           <form action="{{url('/log-in')}}" method="post">
               @csrf
               <div><h1>Log In Form </h1></div>
               <div>
                   <p>User Email</p>
                   <input  type = "text" size="40" name="userEmail">
               </div>
               <div>
                   <p>Password</p>
                   <input type="password" size="40" name="userPassword">
               </div>
               <div>
                   <input type="submit" class="content-button" value="Log In">
                   <hr>
               </div>
           </form>
       </div>
    <br>
    <div class="content-registration" align="center">
        <form action="{{url('/welcome/user-registration')}}" method="post">
            @csrf
            <div>
                <h1>Registration Form</h1>
            </div>
            <div>
                <p>User Name</p>
                <input type = "text" size="40" name="userName">
            </div>
            <div>
                <p>User Email</p>
                <input type = "text" size="40" name="userEmail">
            </div>
            <div>
                <p>User Password</p>
                <input type = "password" size="40" name="userPassword">
            </div>
            <div>
                <input type="submit" class="content-button" value="Register">
            </div>
        </form>
    </div>

    </body>
</html>
