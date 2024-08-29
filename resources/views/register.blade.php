<!DOCTYPE html>
<html>

<head>
    <title>registration</title>
    <link rel="stylesheet" href="{{ asset('css\registrationstyles.css') }}">
</head>

<body>

    <h2>Please fill in your details to sign up with us</h2>
    <br>
    <h4>If you register as admin you will not be able to login!</h4>

    <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required autocomplete="off">

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required autocomplete="off">

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="schoolcode">School Code:</label>
        <input type="text" id="schoolcode" name="schoolcode" required>

        <label for="admissionnumber">Admission Number:</label>
        <input type="text" id="admissionnumber" name="admissionnumber" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="yearofstudy">Year of Study:</label>
        <input type="number" id="yearofstudy" name="yearofstudy" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirmpassword">Confirm Password:</label>
        <input type="password" id="confirmpassword" name="confirmpassword" required>

        <label for="role">Select Role:</label>
        <select name="role" id="role" required>
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
