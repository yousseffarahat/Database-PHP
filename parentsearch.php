<?php
include 'includes/db.php';
include 'includes/header.php';
?>

<div class="panel panel-primary">
    <div class="panel-heading">
        Apply to a school for one of your children
    </div>
    <div class="panel-body">
        <form action="parentapply.php" method="get">
            <div class="input-group">
                    <span class="input-group-btn">
                        <input type="submit" value="Apply!" name = "Apply" class="btn btn-default">
                </span>
            </div>
        </form>
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        Search Schools to apply
    </div>
    <div class="panel-body">
        <form action="parentresult.php" method="get">
            <div class="input-group">
                    <span class="input-group-btn">
                        <input type="submit" value="Search!" name = "searchschool"class="btn btn-default">
                </span>
            </div>
        </form>
    </div>
</div>


    <div class="panel panel-primary">
        <div class="panel-heading">
            View Reports about your child
        </div>
        <div class="panel-body">
            <form action="parentresult.php" method="get">
                <div class="input-group">
                    <span class="input-group-btn">
                        <input type="submit" value="Search!" name = "Search"class="btn btn-default">
                </span>
                </div>
            </form>
        </div>
    </div>


    <div class="panel panel-primary">
        <div class="panel-heading">
            Search teachers
        </div>
        <div class="panel-body">
            <form action="parentresult.php" method="get">
                <div class="input-group">
                    <span class="input-group-btn">
                        <input type="submit" value="Search!" name = "Search!" class="btn btn-default">
                </span>
                </div>
            </form>
        </div>
    </div>


<div class="panel panel-primary">
    <div class="panel-heading">
        Search Schools to review
    </div>
    <div class="panel-body">
        <form action="parentresult.php" method="get">
            <div class="input-group">
                    <span class="input-group-btn">
                        <input type="submit" value="Search!" name = "searchschoolreview"class="btn btn-default">
                </span>
            </div>
        </form>
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        View Reports written by you
    </div>
    <div class="panel-body">
        <form action="parentresult.php" method="get">
            <div class="input-group">
                <span class="input-group-btn">
                        <input type="submit" value="View!" name = "view"class="btn btn-default">
                </span>
            </div>
        </form>
    </div>
</div>