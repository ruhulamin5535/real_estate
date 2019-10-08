<?php
//DB Connection
$db = new PDO('mysql:host=localhost;dbname=house;charset=utf8mb4', 'root', '');

$query="SELECT * FROM flat NATURAL JOIN rent ORDER BY flat_id DESC ";

$stmt=$db->query($query);
$courses=$stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Paradise kindergarteen School</title>

    <!-- Bootstrap -->

    <link href="asset/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
<div class="container-fluid well">

    <div class="row">

       <!--  <div class="col-md-offset-3 col-md-6"> -->
        <div class="col-md-offset-1 col-md-6">
            <nav>
                <li><a href="addprojectrent.php">Add New project</a> </li>
            </nav>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th> flat id  </th>
                    <th> Location </th>
                    <th> City  </th>
                    <th> Description  </th>
                    <th> Amenities  </th>
                    <th> Amenities1 </th>
                    <th> Amenities2  </th>
                    <th> Area   </th>
                    <th> Image  </th>
                    <th> bedroom </th>
                    <th> bathroom </th>
                    <th> garages </th>
                    <th> Rate amount </th>
                    <th> Actions      </th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($courses as $course) {


                    ?>

                    <tr>
                        <td><?= $course['flat_id'] ?></td>
                        <td><?php echo $course['location']?></td>
                        <td><?= $course['city'] ?></td>
                        <td><?= $course['description'] ?></td>
                        <td><?php echo $course['amenities']?></td>
                        <td><?php echo $course['amenities1']?></td>
                        <td><?php echo $course['amenities2']?></td>
                        <td><?= $course['area'] ?></td>
                        <td><?= $course['image'] ?></td>
                        <td><?php echo $course['p_feature']?></td>
                        <td><?= $course['p_feature1'] ?></td>
                        <td><?= $course['p_feature2'] ?></td>
                        <td><?php echo $course['rent_amount']?></td>
                      





                        <td>
                            <nav>
                               
                                <!-- <li><a href="edit.php?flat_id=<?= $course['flat_id'] ?>">Edit</a> </li> -->
                                <li><a href="delete_rent.php?flat_id=<?= $course['flat_id'] ?>">Delete</a></li>
                            </nav>
                        </td>
                    </tr>

                    <?php
                };
                ?>
                </tbody>
            </table>

        </div>

    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


</body>
</html>
