<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact us any time</h1>

    <form action="{{ route('contact') }}" method="post">
        @csrf

        <input type="text" name="name" placeholder="Enter Your Name Please">
        <input type="email" name="email" placeholder="Enter Your Email Please">
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Query"></textarea>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

