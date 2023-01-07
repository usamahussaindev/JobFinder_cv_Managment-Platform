<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Contact Page for blogs</title>
    <style>
       body{ background: url("img/white01.jpg");
        background-size: cover;

}

        body {
            padding-top: 10vh;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
            background: #11dfb22b;
            width: 75vw;
            padding: 15px;
        }

        h2 {
            color: black;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 75%;
        }

        input {
            margin: 5px 15px;
            height: 25px;
        }

        textarea {
            height: 150px;
            margin: 5px 15px;

        }

        button {
            margin: 5px 15px;
            width: 80px;
            background: #0069f7;
            padding: 3px 10px;
            border: 0;
            border-radius: 5px;
            color: white;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Contact Us</h2>
        <form action="complainform.php" method="post">
            <label for="fullname">fullname :</label>
            <input type="text" name="fullname" id="fullname" placeholder="Full Name" required>
            <label for="Email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="tel">Telephone Number</label>
            <input type="tel" name="tel" id="tel" placeholder="tel:" required>
            <label for="Complain">Message:</label>
            <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Your Message Here..."></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
</body>

</html>