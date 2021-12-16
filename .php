 <!DOCTYPE html>
<html lang="en">

<head>

<?php
include '../layouts/header.php';
?>
</head>
<body>
<?php
include '../layouts/navbar.php';
include '../layouts/sidebar.php';
include '../Controller/db.php';
$sql = "select * from teacher";
$result = $conn->query($sql);
?>

<div class="main-panel">        
<div class="content-wrapper">
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Course</h4>
                  <form class="forms-sample" action="../Controller/CourseController.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Description</label>
                      <input type="text" name="description" class="form-control" id="exampleInputName1" placeholder="Description">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Fess</label>
                      <input type="text" name="fees" class="form-control" id="exampleInputName1" placeholder="Fess">
                    </div>
                    
                    <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="image" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" name="image" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                      </div>
                      <div class="form-group">
                      <label for="exampleInputEmail3">Added By</label>
                      <select  name="added_by" class="form-control" id="exampleInputEmail3">
                        <?php
                        while($row = $result->fetch_assoc()) { ?>
                        <option value="<?php echo $row['id']?>"><?php echo $row["name"]?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <button type="submit" name="add_course" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
  <?php
include '../layouts/footer.php';
?>
</body>

</html>           <!DOCTYPE html>
<html lang="en">

<head>

<?php
include '../layouts/header.php';
?>
</head>
<body>
<?php
include '../layouts/navbar.php';
include '../layouts/sidebar.php';
include '../Controller/db.php';
$sql = "select * from teacher";
$result = $conn->query($sql);
?>

<div class="main-panel">        
<div class="content-wrapper">
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Course</h4>
                  <form class="forms-sample" action="../Controller/CourseController.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Description</label>
                      <input type="text" name="description" class="form-control" id="exampleInputName1" placeholder="Description">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Fess</label>
                      <input type="text" name="fees" class="form-control" id="exampleInputName1" placeholder="Fess">
                    </div>
                    
                    <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="image" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" name="image" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                      </div>
                      <div class="form-group">
                      <label for="exampleInputEmail3">Added By</label>
                      <select  name="added_by" class="form-control" id="exampleInputEmail3">
                        <?php
                        while($row = $result->fetch_assoc()) { ?>
                        <option value="<?php echo $row['id']?>"><?php echo $row["name"]?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <button type="submit" name="add_course" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
  <?php
include '../layouts/footer.php';
?>
</body>

</html>          