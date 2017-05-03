<?php
include 'includes/db.php';
include 'includes/header.php';
?>


<?php
function display_teachers($results){
    echo "<div class=\"container\">";
    echo "<div class=\"panel panel-primary\">";
    echo "<div class=\"panel-heading\"> Teachers that teach yor children : "    . "</div>" .
        "<div class=\"panel-body\">";
    echo "<div class=\"row\">";
    echo "<div class=\" col-md-6 col-lg-9 \">
                    <table class=\"table table-user-information\">";
    echo " <thead>";
    echo "<tr>";

    echo "</tr>";
    echo " </thead>";
    echo " <tbody>";
    while ($result = mysqli_fetch_array($results)) {


        echo "<tr>";
        echo " <div class =\"panel-heading\">" . $result['first_name'] . "\r\n" . $result['last_name'] ."    </div>";
        echo " <form action=\"parentresult.php\" method=\"get\">
 <span class=\"input-group-btn\">
                <input type=\"text\" name='rateteacher2' class=\"form-control\" placeholder=\"Rating ..\">
                    <button class=\"btn btn-default\" type=\"submit\"name = \"rateteacher\">Rate this teacher</button>
                    
                </span>";
        echo "</tr>";
        if (isset($_GET['rateteacher']))
        {
            $conn= mysql_connect('localhost', 'root', 'secret','M3_School');
            $search_query = $_GET['rateteacher2'];
            $search_query = htmlspecialchars($search_query);
            $search_query = mysqli_real_escape_string($conn, $search_query);
            $result = mysqli_query($conn, "CALL RateTeachers('".$_SESSION['USERNAME'],$result['teacher_username'],$search_query. "')");
            echo "Rating Sent";
        }
    }
    // call ReplyToReports(c_ssn INT, t_usrname VARCHAR(50), datee DATETIME, rep TEXT)
    echo " </tbody>";
    echo " </table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
function display_schools_review2($results){
    echo "<div class=\"container\">";
    echo "<div class=\"panel panel-primary\">";
    echo "<div class=\"panel-heading\"> Schools that accepted your children : "    . "</div>" .
        "<div class=\"panel-body\">";
    echo "<div class=\"row\">";
    echo "<div class=\" col-md-6 col-lg-9 \">
                    <table class=\"table table-user-information\">";
    echo " <thead>";
    echo "<tr>";

    echo "</tr>";
    echo " </thead>";
    echo " <tbody>";
    while ($result = mysqli_fetch_array($results)) {


        echo "<tr>";
        echo " <div class =\"panel-heading\">" . $result['school_id'] . "\r\n" . $result['review'] ."    </div>";
        echo " <form action=\"parentresult.php\" method=\"get\">
 <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"submit\"name = \"deletereview\">Delete this review</button>
                    
                </span>";
        echo "</tr>";
        if (isset($_GET['deletereview']))
        {
            $conn= mysql_connect('localhost', 'root', 'secret','M3_School');
            $search_query = $_GET['deletereview'];
            $search_query = htmlspecialchars($search_query);
            $search_query = mysqli_real_escape_string($conn, $search_query);
            $result = mysqli_query($conn, "CALL DeleteReview('".$_SESSION['USERNAME'],$result['school_id']. "')");
            echo "Review Deleted";
        }
    }
    // call ReplyToReports(c_ssn INT, t_usrname VARCHAR(50), datee DATETIME, rep TEXT)
    echo " </tbody>";
    echo " </table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
function display_schools_review($results){
    echo "<div class=\"container\">";
    echo "<div class=\"panel panel-primary\">";
    echo "<div class=\"panel-heading\"> Schools that accepted your children : "    . "</div>" .
        "<div class=\"panel-body\">";
    echo "<div class=\"row\">";
    echo "<div class=\" col-md-6 col-lg-9 \">
                    <table class=\"table table-user-information\">";
    echo " <thead>";
    echo "<tr>";

    echo "</tr>";
    echo " </thead>";
    echo " <tbody>";
    while ($result = mysqli_fetch_array($results)) {


        echo "<tr>";
        echo " <div class =\"panel-heading\">" . $result['child_ssn'] . "\r\n" . $result['name'] ."    </div>";
        echo " <form action=\"parentresult.php\" method=\"get\">
 <span class=\"input-group-btn\">
  <input type=\"text\" name='reviewschool2' class=\"form-control\" placeholder=\"Review ..\">
                    <button class=\"btn btn-default\" type=\"submit\"name = \"reviewschool\">Review this school</button>
                    
                </span>";
        echo "</tr>";
        if (isset($_GET['reviewschool']))
        {
            $conn= mysql_connect('localhost', 'root', 'secret','M3_School');
            $search_query = $_GET['reviewschool2'];
            $search_query = htmlspecialchars($search_query);
            $search_query = mysqli_real_escape_string($conn, $search_query);
            $result = mysqli_query($conn, "CALL ReviewSchools('".$_SESSION['USERNAME'],$result['id'].$search_query. "')");
            echo "Review Sent";
        }
    }
    // call ReplyToReports(c_ssn INT, t_usrname VARCHAR(50), datee DATETIME, rep TEXT)
    echo " </tbody>";
    echo " </table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
function display_schools($results){
    echo "<div class=\"container\">";
    echo "<div class=\"panel panel-primary\">";
    echo "<div class=\"panel-heading\"> Schools that accepted your children : "    . "</div>" .
        "<div class=\"panel-body\">";
    echo "<div class=\"row\">";
    echo "<div class=\" col-md-6 col-lg-9 \">
                    <table class=\"table table-user-information\">";
    echo " <thead>";
    echo "<tr>";

    echo "</tr>";
    echo " </thead>";
    echo " <tbody>";
    while ($result = mysqli_fetch_array($results)) {
        echo "<tr>";
        echo " <div class =\"panel-heading\">" . $result['child_ssn'] . "\r\n" . $result['name'] ."    </div>";
        echo " <form action=\"parentresult.php\" method=\"get\">
 <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"submit\"name = \"applytoschool\">Apply to this school</button>
                    
                </span>";
        echo "</tr>";
        if (isset($_GET['applytoschool']))
        {
            $conn= mysql_connect('localhost', 'root', 'secret','M3_School');
            $search_query = $_GET['applytoschool'];
            $search_query = htmlspecialchars($search_query);
            $search_query = mysqli_real_escape_string($conn, $search_query);
            $result = mysqli_query($conn, "CALL ChooseSchool('".$result['child_ssn']. "')");
            echo "Application Sent";
        }
    }
    // call ReplyToReports(c_ssn INT, t_usrname VARCHAR(50), datee DATETIME, rep TEXT)
    echo " </tbody>";
    echo " </table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
function display_reports($results)
{
    echo "<div class=\"container\">";
    echo "<div class=\"panel panel-primary\">";
    echo "<div class=\"panel-heading\"> Reports about your child : "    . "</div>" .
        "<div class=\"panel-body\">";
    echo "<div class=\"row\">";
    echo "<div class=\" col-md-6 col-lg-9 \">
                    <table class=\"table table-user-information\">";
    echo " <thead>";
    echo "<tr>";

    echo "</tr>";
    echo " </thead>";
    echo " <tbody>";
    while ($result = mysqli_fetch_array($results)) {
        echo "<tr>";
        echo " <div class =\"panel-heading\">" . $result['date'] . "\r\n" . $result['first_name'] ."\r\n".
            $result['middle_name']. " \r\n". $result['last_name']. ":\r\n". $result['teacher_comment']."    </div>";
        echo " <form action=\"parentresult.php\" method=\"get\">
 <span class=\"input-group-btn\">
                  <input type=\"text\" name='replytoreport2' class=\"form-control\" placeholder=\"Reply ..\">
                    <button class=\"btn btn-default\" type=\"submit\"name = \"replytoreport\">Reply to this report</button>
                    
                </span>";
        echo "</tr>";
        if (isset($_GET['replytoreport']))
        {
            $conn= mysql_connect('localhost', 'root', 'secret','M3_School');
            $search_query = $_GET['replytoreport2'];
            $search_query = htmlspecialchars($search_query);
            $search_query = mysqli_real_escape_string($conn, $search_query);
            $result = mysqli_query($conn, "CALL ReplyToReports('".$result['child_ssn'],$result['teacher_username'],
                $result['date'] ,$search_query . "')");
            echo "Reply Sent";
        }
    }
    // call ReplyToReports(c_ssn INT, t_usrname VARCHAR(50), datee DATETIME, rep TEXT)
    echo " </tbody>";
    echo " </table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
function display_results($results, $cols, $type, $header_title)
{
    echo "<div class=\"container\">";
    echo "<div class=\"panel panel-primary\">";
    echo "<div class=\"panel-heading\"> Results for query : " . $header_title . "</div>" .
        "<div class=\"panel-body\">";
    echo "<div class=\"row\">";
    echo "<div class=\" col-md-6 col-lg-9 \">
                    <table class=\"table table-user-information\">";
    echo " <thead>";
    echo "<tr>";
    foreach ($cols as $col) {
        echo "<th>" . $col . "</th>";
    }
    echo "</tr>";
    echo " </thead>";
    echo " <tbody>";
    while ($result = mysqli_fetch_array($results)) {
        echo "<tr>";
        echo " <td><a href='/schools/school.php?id=" . $result['id'] . "'>" . $result['name'] . "</a></td>";
        echo "</tr>";
    }
    echo " </tbody>";
    echo " </table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}

?>

<?php
// Address Query
if (isset($_GET['teacherquery'])) {
    $search_query = $_GET['teacherquery'];
    $search_query = htmlspecialchars($search_query);
    $search_query = mysqli_real_escape_string($conn, $search_query);
    $raw_results = mysqli_query($conn, "CALL Search_For_School_By_Address('" . $search_query . "')");
    if ($raw_results == false) {
        echo mysqli_error($conn);
    } else {
        $cols = array('Name');
        if (mysqli_num_rows($raw_results) < 1) {
            if (mysqli_num_rows($raw_results) != 1) {
                die("<div class=\"container\">
            <div class=\"alert alert-info\">
                <p><strong>Oops! </strong>You search returned no results!</p>
            </div>
            </div>");
            }
        }
        display_results($raw_results, $cols, 1, $search_query);
    }

}
?>


<?php

// Name Query
if (isset($_GET['Search'])) {
    $search_query = $_GET['Search'];
    $raw_results = mysqli_query($conn, "CALL ViewReports('" .'kojak' . "')");
    if ($raw_results == false) {
        die(mysqli_error($conn));
    } else {
        $cols = array('Name');
        if (mysqli_num_rows($raw_results) < 1) {
            if (mysqli_num_rows($raw_results) != 1) {
                die("<div class=\"container\">
            <div class=\"alert alert-info\">
                <p><strong>Oops! </strong>You search returned no results!</p>
            </div>
            </div>");
            }
        }
        display_reports($raw_results, $cols, 1, $search_query);
    }

}


// Type Query
if (isset($_GET['schoolname'])) {
    $search_query = $_GET['schoolname'];
    $search_query = htmlspecialchars($search_query);
    $search_query = mysqli_real_escape_string($conn, $search_query);
    $raw_results = mysqli_query($conn, "CALL ReviewSchools('" . $search_query . "')");
    if ($raw_results == false) {
        echo mysqli_error($conn);
    } else {
        $cols = array('Name');
        if (mysqli_num_rows($raw_results) < 1) {
            if (mysqli_num_rows($raw_results) != 1) {
                die("<div class=\"container\">
            <div class=\"alert alert-info\">
                <p><strong>Oops! </strong>You search returned no results!</p>
            </div>
            </div>");
            }
        }
        display_reports($raw_results, $cols, 1, $search_query);
    }

}
if (isset($_GET['schoolname'])) {
    $search_query = $_GET['schoolname'];
    $search_query = htmlspecialchars($search_query);
    $search_query = mysqli_real_escape_string($conn, $search_query);
    $raw_results = mysqli_query($conn, "CALL ReviewSchools('" . $search_query . "')");
    if ($raw_results == false) {
        echo mysqli_error($conn);
    } else {
        $cols = array('Name');
        if (mysqli_num_rows($raw_results) < 1) {
            if (mysqli_num_rows($raw_results) != 1) {
                die("<div class=\"container\">
            <div class=\"alert alert-info\">
                <p><strong>Oops! </strong>You search returned no results!</p>
            </div>
            </div>");
            }
        }
        display_reports($raw_results);
    }

}
if (isset($_GET['searchschool'])) {
    $search_query = $_GET['searchschool'];
    $search_query = htmlspecialchars($search_query);
    $search_query = mysqli_real_escape_string($conn, $search_query);
    $raw_results = mysqli_query($conn, "CALL ViewSchools('" . 'kojak' . "')");
    if ($raw_results == false) {
        echo mysqli_error($conn);
    } else {
        $cols = array('Name');
        if (mysqli_num_rows($raw_results) < 1) {
            if (mysqli_num_rows($raw_results) != 1) {
                die("<div class=\"container\">
            <div class=\"alert alert-info\">
                <p><strong>Oops! </strong>You search returned no results!</p>
            </div>
            </div>");
            }
        }
        display_schools($raw_results);
    }

}
if (isset($_GET['searchschoolreview'])) {
    $search_query = $_GET['searchschoolreview'];
    $search_query = htmlspecialchars($search_query);
    $search_query = mysqli_real_escape_string($conn, $search_query);
    $raw_results = mysqli_query($conn, "CALL ViewSchoolsList2('" . 'kojak' . "')");
    //this procedure was added to the procedures
    /*
    use M3_School;
    DELIMITER //
CREATE PROCEDURE ViewSchoolsList2(usrname VARCHAR(50))
  BEGIN

    SELECT
      CHP.child_ssn,
      SC.name,
      SC.address,
      SC.email,
      SC.fees,
      SC.general_info,
      SC.main_language,
      SC.mission,
      SC.type,
      SC.vision
    FROM Students S INNER JOIN Children_Have_Parents CHP
        ON S.child_ssn = CHP.child_ssn
      INNER JOIN Schools SC ON S.school_id = SC.id
    WHERE CHP.parent_username = usrname
    ORDER BY SC.name;

  END//
DELIMITER ;
*/
    if ($raw_results == false) {
        echo mysqli_error($conn);
    } else {
        $cols = array('Name');
        if (mysqli_num_rows($raw_results) < 1) {
            if (mysqli_num_rows($raw_results) != 1) {
                die("<div class=\"container\">
            <div class=\"alert alert-info\">
                <p><strong>Oops! </strong>You search returned no results!</p>
            </div>
            </div>");
            }
        }
        display_schools_review($raw_results);
    }

}
if (isset($_GET['view'])) {
    $search_query = $_GET['view'];
    $search_query = htmlspecialchars($search_query);
    $search_query = mysqli_real_escape_string($conn, $search_query);
    $raw_results = mysqli_query($conn, "CALL FindReview('" . $_SESSION['USERNAME'] . "')");
    /*this procedure was added to the procedures

    use M3_School;
    DELIMITER //
CREATE PROCEDURE FindReview(usrname VARCHAR(50))
  BEGIN
   ELECT  school_id,review
   From Parents_Review_Schools
   WHERE parent_username = usrname;
 END//
DELIMITER ;*/
    if ($raw_results == false) {
        echo mysqli_error($conn);
    } else {
        $cols = array('Name');
        if (mysqli_num_rows($raw_results) < 1) {
            if (mysqli_num_rows($raw_results) != 1) {
                die("<div class=\"container\">
            <div class=\"alert alert-info\">
                <p><strong>Oops! </strong>You search returned no results!</p>
            </div>
            </div>");
            }
        }
        display_schools_review2($raw_results);
    }

}
if (isset($_GET['Search!'])) {
    $search_query = $_GET['Search!'];
    $search_query = htmlspecialchars($search_query);
    $search_query = mysqli_real_escape_string($conn, $search_query);
    $raw_results = mysqli_query($conn, "CALL ViewTeachers('" . $_SESSION['USERNAME'] . "')");
    //this procedure was added to the procedures
    /*

USE M3_School;
DELIMITER //
CREATE PROCEDURE ViewTeachers(usrname VARCHAR(50))
  BEGIN

    SELECT
      CTS.teacher_username,
      E.first_name,
      E.last_name

    FROM Parents P INNER JOIN Children_Have_Parents CHP  ON P.username = CHP.parent_username
      INNER JOIN Courses_Taken_By_Students CTBS ON CTBS.student_ssn = CHP.child_ssn
      INNER JOIN  Courses_Taught_In_School_By_Teacher CTS  ON CTS.course_code = CTBS.course_code
      INNER JOIN  Employees E ON CTS.teacher_username = E.username

    ORDER BY CHP.child_ssn;

  END//
DELIMITER ;
*/
    if ($raw_results == false) {
        echo mysqli_error($conn);
    } else {
        $cols = array('Name');
        if (mysqli_num_rows($raw_results) < 1) {
            if (mysqli_num_rows($raw_results) != 1) {
                die("<div class=\"container\">
            <div class=\"alert alert-info\">
                <p><strong>Oops! </strong>You search returned no results!</p>
            </div>
            </div>");
            }
        }
        display_teachers($raw_results);
    }

}
?>

<?php
include "includes/footer.php";
?>