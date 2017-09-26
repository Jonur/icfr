<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Image Collection File Renamer</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Image Collection File Renamer</h1>
            <form method="post" action="">
              <div class="form-group">
                <label for="file-group-label">Absolute Local Directory</label>
                <input type="text" class="form-control" name="local-directory" placeholder="i.e. D:\images">
              </div>

              <div class="form-group">
                <label for="file-group-label">Label (optional)</label>
                <input type="text" class="form-control" name="file-group-label" placeholder="Label">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <?php
            $userDirectory = !(empty($_POST['local-directory'])) ? $_POST['local-directory'] : '';
            $userLabel = !(empty($_POST['file-group-label'])) ? $_POST['file-group-label'] : '';

            include_once "app/renamer.php";
        ?>
    </body>
</html>
