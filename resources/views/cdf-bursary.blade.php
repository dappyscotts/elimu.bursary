<!DOCTYPE html>
<html>

<head>
    <title>CDF Bursary</title>
    <link rel="stylesheet" href="{{ asset('css/cdfstyles.css') }}">
</head>

<body>
    <div class="content">
        <h1>Please Fill in Your Information to Apply</h1>
        <form action="{{ route('cdf-bursary.store') }}" method="post">
            @csrf
            <label>Gender:</label>
            <label><input type="radio" name="gender" value="male"> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label>
            <label><input type="radio" name="gender" value="other"> Other</label>

            <label>Type of Institution:</label>
            <label><input type="radio" name="institution_type" value="primary" required> Primary</label>
            <label><input type="radio" name="institution_type" value="secondary" required> Secondary</label>
            <label><input type="radio" name="institution_type" value="university" required> University</label>


            <label for="institution_name">Name of Institution:</label>
            <input type="text" id="institution_name" name="institution_name" required>

            <label for="campus">Campus:</label>
            <input type="text" id="campus" name="campus" required>

            <label for="faculty">Faculty:</label>
            <input type="text" id="faculty" name="faculty" required>

            <label for="course">Course:</label>
            <input type="text" id="course" name="course" required>

            <label>Mode of Study:</label>
            <label><input type="radio" name="mode_of_study" value="regular"> Regular</label>
            <label><input type="radio" name="mode_of_study" value="parallel"> Parallel</label>
            <label><input type="radio" name="mode_of_study" value="boarding"> Boarding</label>
            <label><input type="radio" name="mode_of_study" value="day"> Day</label>

            <label for="year_of_study">Year of Study:</label>
            <label><input type="radio" name="year_of_study" value="1"> 1</label>
            <label><input type="radio" name="year_of_study" value="2"> 2</label>
            <label><input type="radio" name="year_of_study" value="3"> 3</label>
            <label><input type="radio" name="year_of_study" value="4"> 4</label>

            <label for="expected_completion_date">Expected Year and Month of Completion:</label>
            <input type="date" id="expected_completion_date" name="expected_completion_date" required>

            <label for="personal_phone_number">Personal Phone Number:</label>
            <input type="tel" id="personal_phone_number" name="personal_phone_number" required>

            <label for="institution_telephone_number">Institution Telephone Number:</label>
            <input type="tel" id="institution_telephone_number" name="institution_telephone_phone" required>

            <label for="amount_applied_for">Amount Applied For:</label>
            <input type="number" id="amount_applied_for" name="amount_applied_for" required>

            <p>
                Family Background information will be verified by your chief and religious leader respectively. Please
                proceed to provide their verification codes below.
            </p>

            <label for="chief_verification_code">Chief Verification Code:</label>
            <input type="text" id="chief_verification_code" name="chief_verification_code" required>

            <label for="religious_leader_verification_code">Religious Leader Verification Code:</label>
            <input type="text" id="religious_leader_verification_code" name="religious_leader_verification_code"
                required>

            <input type="submit" value="Submit">
        </form>
    </div>


</body>

</html>
