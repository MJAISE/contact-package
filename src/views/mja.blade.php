<html lang="">
<head>
    <title>MJA First Package</title>
</head>
<body>
@yield('content')
<h1>This is Created by MJA</h1>
<form action="{{route('contact')}}" method="post">
    <h1>Contact Me anytime.</h1>
    @csrf
    <label for="name">First name:</label><br>
    <input type="text" id="name" name="name" placeholder="Your name please"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="name" name="email" placeholder="Your valid Email"><br>
    <label for="message">Message:</label><br>
    <label>
        <textarea name="message" cols="20" rows="10" placeholder="Your valid Email"></textarea>
    </label><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>