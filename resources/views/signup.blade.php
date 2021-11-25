<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        input[type=text] {
             width: 50%;
        }
         body{
            background-color: papayawhip;
            background-image: linear-gradient(to right, rgba(226, 144, 199, 0), rgba(134, 135, 145, 0.767));
         }
         #ni {

        width:1200px;
        text-align: center;
        box-sizing: border-box;
        border: 4px outset rgb(152, 154, 173);
        margin-top:15px;
        margin-left:55px;
        margin-bottom: 15px;
        padding: 45px;
        font-style: oblique;
    }
    #bu{
        color:rgb(56, 9, 52);
        background-image: linear-gradient(to right,rgba(166, 163, 182, 0.767), rgb(90, 93, 141));
    }


     </style>
</head>
<body>
    <div class="containter">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
      <div id= "ni"><h3>Sign Up</h3>
      <p> <br> create an account to get connected with<strong> Elevate </strong> team and list your business </p>

      <hr>
    <form action={{route('adduser')}} method="POST">
        @csrf
        <br>
 <div class="form.group">
        <label for="name"> Business Name</label>
        <input type="text" class="form.control" placeholder="enter your Businesss name" name="name" value="{{old('name')}}">
       <br>
        <span class="text-danger">@error('name'){{$message}} @enderror</span>
</div>
    <br>
<div class="form.group">
        <label for="username">Username</label>
        <input type="text"   class="form.control" placeholder="enter username" name="username" value="{{old('username')}}">
       <br>
        <span class="text-danger">@error('username'){{$message}} @enderror</span>
</div>
    <br>
<div class="form.group">
        <label for="password">Password</label>
        <input type="text" class="form.control" placeholder="enter password" name="password" value="{{old('password')}}">
        <br>
        <span class="text-danger">@error('password'){{$message}} @enderror</span>
</div>
    <br>
<div class="form.group">
        <label for="email"> Email  </label>
        <input type="text" class="form.control" placeholder="enter Email" name="email" value="{{old('email')}}">
        <br>
        <span class="text-danger">@error('email'){{$message}} @enderror</span>
</div>
    <br>
    <div class="form.group">
        <label for="subject"> Subject  </label>
        <input type="text" class="form.control" placeholder="enter Subject" name="subject" value="{{old('subject')}}">
        <br>
        <span class="text-danger">@error('subject'){{$message}} @enderror</span>
    </div>
    <br>
<div class="form.group">
    <button id ="bu" type="submit" class="btn btn-default" data-dismiss="modal"><em>Sign Up!</em></button>
</div>
        <br>
        <a href="login">already registered!, Login Here</a>
    </form>
</div>
</div>
</div>
</body>
</html>
