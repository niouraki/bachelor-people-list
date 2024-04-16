<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="form_styles.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ce3703125e.js" crossorigin="anonymous"></script>
    <title>Update person form</title>
</head>
<body>
    <?php
    include 'updatePerson.php';
    ?>
    <h1>Update person</h1>
    <form action="updatePerson.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">

        <label class="label-text" for="firstName">Firstname</label>
        <input type="text" name= "first_name" id="firstName" value="<?php echo $firstname ?>">

        <label class="label-text" for="lastName">Lastname</label>
        <input type="text" name= "last_name" id="lastName" value="<?php echo $lastname ?>">

        <label class="label-text" for="email">Email</label>
        <input type="email" name= "email" id="email" value="<?php echo $email ?>">

        <label class="label-text" for="gender">Gender</label>
        <input type="text" name= "gender" id="gender" value="<?php echo $gender ?>">

        <label class="label-text" for="occupation">Occupation</label>
        <input type="text" name= "occupation" id="occupation" value="<?php echo $occupation ?>">

        <label class="label-text" for="skill">Skill</label>
        <input type="text" name= "skill" id="skill" value="<?php echo $skill ?>">

        <label class="label-text" for="car">Car</label>
        <input type="text" name= "car" id="car" value="<?php echo $car ?>">

        <label class="label-text" for="education">Education</label>
        <input type="text" name= "education" id="education" value="<?php echo $education ?>">

        <input class="submit-btn" type="submit" name="submit" value="Update">
    </form>
</body>
</html>