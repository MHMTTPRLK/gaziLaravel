<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href=" registerStyle.css">
    @toastr_css

    <style>
        body {
            background-color: #2a4066;
        }

        .form-container {
            /* margin: 100px auto; */
            padding: 30px;
            max-width: 350px;
            background: white;
            box-sizing: border-box;
        }

        .container {
            margin: 100px auto;
            max-width: 350px;
            /* background: white; */
            box-sizing: border-box;
        }

        .form-container .head {
            text-align: center;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .Inputs {
            padding-top: 50px;
        }

        form {
            width: 100%;
        }

        form label {
            display: block;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            color: grey;
            line-height: 30px;
        }

        input {
            display: block;
            margin-bottom: 20px;
            width: 100%;
            padding: 5px;
            border: 1px solid rgb(133, 133, 133);
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            display: block;
            margin-bottom: 20px;
            width: 100%;
            padding: 5px;
            background: #3fb996;
            border: hidden;
            color: white;
            font-weight: bold;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .footer {
            text-align: center;
            font-size: 10px;
            box-sizing: border-box;
            padding: 5px 20px;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        a {
            text-decoration: none;
        }

        .signup {
            margin: 20px;
            text-align: center;
            color: white;
            /* font-weight: bold; */
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .signup a {
            color: #3fb996;
        }

    </style>

</head>

<body>
<div class="container">
    <div class="form-container">
        <div class="head">
            <h3>Forgot Password</h3>

        </div>
        <form class="Inputs" action="{{route('login.sendPassword')}}" method="post">
            @csrf

            <label for="pswd">Phone Number</label>
            <input id="pswd" name="phone"  required />
            <button type="submit">Get Password</button>
        </form>
        <div class="footer">

        </div>
    </div>
    <div class="signup"> Already have a account ? <a href="{{route('login.index')}}">Login Here</a></div>
</div>
</body>
@jquery
@toastr_js
@toastr_render
</html>

