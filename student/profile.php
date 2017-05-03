<?php
session_start();

$user_logged_in = isset($_SESSION['student_logged_in']) && !empty($_SESSION['student_logged_in']) && $_SESSION['student_logged_in'] == 1;
$student_has_username = isset($_SESSION['student_username']) && !empty(isset($_SESSION['student_username']));
$student_has_ssn = isset($_SESSION['student_ssn']) && !empty(isset($_SESSION['student_ssn']));

if (!$user_logged_in || !$student_has_username || !$student_has_ssn)
    header("Location:/index.php");
?>

<?php
include '../includes/db.php';
include '../includes/functions.php';
include '../includes/header.php';
include '../includes/footer.php';
?>
<?php

if (!isset($_GET['ssn']))
    die(formattedMessage("Oops! You need to specifiy the student ssn!"));

$student_username = $_SESSION['student_username'];
$student_ssn = $_GET['ssn'];

$student_ssn = htmlspecialchars($student_ssn);
$student_ssn = mysqli_real_escape_string($conn, $student_ssn);

$raw_results = mysqli_query($conn, "CALL DisplayAccountInformation('" . $student_ssn . "')");
if ($raw_results == false) {
    die(formattedMessage(mysqli_error($conn),1));
} else {
    $user = mysqli_fetch_all($raw_results, MYSQLI_ASSOC);
}


?>

<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">My Profile</div>
        <div class="panel-body">
            <table class="table table-user-information">
                <tbody>
                <tr>
                    <td>Username:</td>
                    <td><?php echo $user[0]['username']; ?></td>
                </tr>

                <tr>
                    <td>First Name:</td>
                    <td><?php echo $user[0]['first_name']; ?></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><?php echo $user[0]['last_name']; ?></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><?php echo $user[0]['birth_date']; ?></td>
                </tr>


                <tr>
                    <td>Gender</td>
                    <td><?php echo $user[0]['gender']; ?></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><?php echo $user[0]['age']; ?></td>
                </tr>

                <tr>
                    <td>School</td>
                    <?php echo "<td><a href='../schools/school.php?id=" . $user[0]['school_id'] . "'>" . $user[0]['name'] . "</a></td>"; ?>
                </tr>

                </tbody>
            </table>
            <?php
            if ($user[0]['username'] == $student_username) {
                ?>
                <a href="editprofile.php" role="submit"
                   class="btn btn-primary">Edit Profile</a>
            <?php } ?>

        </div>
    </div>
</div>
