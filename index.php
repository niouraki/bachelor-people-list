<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="people_list_styles.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ce3703125e.js" crossorigin="anonymous"></script>
    <title>People table</title>
</head>

<body>
<?php
include "dbconnection.php";

// comment in to see errors
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

// solves issue with cache showing old data after update or delete
header("Cache-Control: no-cache, must-revalidate");

$query = "SELECT * FROM t_people";
$result = mysqli_query($connection, $query);
$number_of_rows=mysqli_num_rows($result);
?>

<h1>People list</h1>

<?php
if($number_of_rows>0){
?>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead class="table-light">
        <tr>
            <th class="text-nowrap">Full name</th>
            <th class="text-nowrap">Email</th>
            <th class="text-nowrap">Gender</th>
            <th class="text-nowrap">Occupation</th>
            <th class="text-nowrap">Skill</th>
            <th class="text-nowrap">Car</th>
            <th>Education</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
        <?php
                 while ($rowdata=mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $rowdata['first_name'] . " " . $rowdata['last_name'];?></td>
            <td><?php echo $rowdata['email'];?></td>
            <td><?php echo $rowdata['gender'];?></td>
            <td><?php echo $rowdata['occupation'];?></td>
            <td><?php echo $rowdata['skill'];?></td>
            <td><?php echo $rowdata['car'];?></td>
            <td><?php echo $rowdata['education'];?></td>
            <td>
                <span>
                    <a href='deletePerson.php?id=<?php echo $rowdata['id']; ?>'>Delete</a>
                </span>
                <span><a href='peopleForm.php?id=<?php echo $rowdata['id']; ?>'>Update</a></span>
            </td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>

    <?php } else { ?>

        <div class="no-results">No results found</div>
    <?php } ?>
</div>


</body>
</html>
