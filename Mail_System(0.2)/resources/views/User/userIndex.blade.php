
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .content-message{
            border-style: solid;
            border-color: black;
            background-color: darkseagreen;
            width: 50%;
            height: 500px;
            float:right;;
        }
        .sidebar{
            float:left;
            width: 40%;
            background-color: burlywood;
            border-color:black;
            border-style: solid;

        }
    </style>
    <title>Document</title>
</head>
<body>
<h1>Index </h1>
<div class="sidebar">
    <p>My Profile </p>
    <table border="1px">
        <tr>
            <td>Email</td>
            <td>{{$senderDetails->userEmail}}</td>
        </tr>
        <tr>
            <td>User Name</td>
            <td>{{$senderDetails->userName}}</td>
        </tr>
    </table>
    <h3>Messages List </h3>
    <div>
        @foreach($who_mailed_me as $email)
            <h3> <a href="{{url('/sender/emailId/'.$email['senderEmail'].'/receiver/emailId/'.$senderDetails->userEmail)}}">{{$email['senderEmail']}}</a>  </h3>
        @endforeach
    </div>

</div>
<form action="{{url('/send-message/'.$senderDetails->userEmail)}}" method="post">
    @csrf
    <div class="content-message">
        <div>
            <p>Email To: </p>
            <input type="text" name="receiverEmail" size="50" >
        </div>
        <div>
            <p>Message Title</p>
            <input type="text" name="messageTitle" size="50" >
        </div>
        <div>
            <p>Message Subject </p>
            <input type="text" name="messageSubject" size="50" >
        </div>
        <br>
        <div>
            <p>Message Description</p>
            <textarea name="messageDescription" rows="10"cols="70">

        </textarea>
        </div>
        <div>
            <input type="submit" value="Send">
        </div>
    </div>

</form>
</body>
</html>
