<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .div-style{
            border-color: black ;
            border-style: solid;
            border-width: 5px;
        }
        .content-messageBody{
            font-size: 20px;
            font-family: "Times New Roman";

        }
        .content-title{
            color: red;
            font-size: 15px;
        }
        .content-subject{
            color:blue;
            font-size: 15px;
        }
        textarea{
            border-width: 5px;
            border-style: solid;
            border-color:red;
        }
    </style>
</head>
<body>
    <h1>Chat Box</h1>
@foreach($myMessage as $msg)
    <div class="div-style">
        <div class="content-title" align="center">
            <u><p> Message Title</p></u>
            {{$msg->messageTitle}}
        </div>
        <div  align="center">
            <u><p>Message Subject</p></u>
            {{$msg->messageSubject}}
        </div>
        <div class="content-messageBody">
           <u> <p>Message Description</p></u>
            {{$msg->messageDescription}}
        </div>
        <div>
            <p>Time</p>
            {{$msg->created_at}}
        </div>
        <div align="right">
            <textarea rows="7"cols="70">
            </textarea>
            <div>
                <input type="submit" value="Reply">
            </div>
        </div>
    </div>
    <br>
@endforeach
</body>
</html>
