<?php

include '../includes/db.php';
include '../includes/header.php';
include '../includes/footer.php';


$username = 'root';
$password = 'secret';


$childssn = '';
$birthdate = '';
$gender = '';
$schoolid = '';
$f_name = '';
$l_name = '';

function getPosts()
{
    $posts = array();

    $posts[0] = $_POST['childssn'];
    $posts[1] = $_POST['birthdate'];
    $posts[2] = $_POST['gender'];
    $posts[3] = $_POST['studentid'];
    $posts[4] = $_POST['f_name'];
    $posts[5] = $_POST['l_name'];
    return $posts;
}

if (isset($_POST['apply_for_children'])) {
    $data = getPosts();
    if (empty($data[0]) || empty($data[1]) || empty($data[2]) || empty($data[3]) || empty($data[4]) || empty($data[5])) {
        echo 'Missing Data';
    } else {
        echo var_dump($data);
        sprintf("CALL ParentApplyForChildren('%s','%s','%s')", $_SESSION['username']);
        $result = mysqli_query($conn, "CALL ParentApplyForChildren('" . $_SESSION['username'], $data[0],
            $data[1], $data[2], $data[3],
            $data[4], $data[5] . "')");;

        if ($result) {
            echo 'Application Successful';
        }

    }
}


?>

    <div class="panel panel-primary">
    <div class="panel-heading">
        Child Social Security Number
    </div>
    <div class="panel-body">
        <form action="parentapply.php" method="post">
        <div class="input-group">
            <input type="text" name='childssn' class="form-control" placeholder="Child SSN"
                   value="<?php echo $childssn; ?>"><br><br>
        </div>
    </div>
    </div>
    <div class="panel panel-primary\
    ">
    <div class="panel-heading">
        Child Birthdate
    </div>
    <div class="panel-body">
        <div class="input-group">
            <input type="text" name='birthdate' class="form-control" placeholder="Child Birthdate"
                   value="<?php echo $birthdate; ?>"><br><br>

        </div>

    </div>
    </div>
    <div class="panel panel-primary\
    ">
    <div class="panel-heading">
        Child Gender
    </div>
    <div class="panel-body">
        <div class="input-group">
            <select name="maleorfemale" class="form-control">
                <option value="Male">Male</option>
                value="<?php echo $gender; ?>"><br><br>
                <option value="Female">Female</option>
                value="<?php echo $gender; ?>"><br><br>
            </select>

        </div>

    </div>
    </div>
    </div>
    <div class="panel panel-primary\
    ">
    <div class="panel-heading">
        School ID
    </div>
    <div class="panel-body">
        <div class="input-group">
            <input type="text" name='school id' class="form-control" placeholder="School ID"
                   value="<?php echo $schoolid; ?>"><br><br>

        </div>

    </div>
    </div>
    <div class="panel panel-primary\
    ">
    <div class="panel-heading">
        Child First name
    </div>
    <div class="panel-body">
        <div class="input-group">
            <input type="text" name='firstname' class="form-control" placeholder="First name"
                   value="<?php echo $f_name; ?>"><br><br>
        </div>

    </div>
    </div>
    <div class="panel panel-primary">
    <div class="panel-heading">
        Child Last name
    </div>
    <div class="panel-body">
        <div class="input-group">
            <input type="text" name='last name' class="form-control" placeholder="Last name"
                   value="<?php echo $l_name; ?>"><br><br>

        </div>

    </div>
    </div>
    <input type="submit" name="apply_for_children" value="Apply for your child">

</form>
