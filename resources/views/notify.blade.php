<!DOCTYPE html>
<html>

<head>
    <title>Notify Me</title>
    <link rel="stylesheet" href="{{ asset('css\notifystyles.css') }}">
</head>

<body>
    <div class="content">
        <h1>Notify Me</h1>
        <p>
            Please provide your email address and phone number below to stay informed about the progress of your bursary
            application.
        </p>
        <form action="{{ route('notify.store') }}" method="post">
            @csrf
            <label for="email">Email:</label>
            <input type="email" id="email" name='email' required>

            <label for="phone_number">Phone Number:</label>
            <input type="tel" id="phone_number" name="phone_number" required>

            <input type="submit" value="Submit">
        </form>
        <p>
    </div>
</body>

</html>
