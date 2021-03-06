<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Image Collection File Renamer</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <main class="container">
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

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                <div class="alert alert-success<?php if ((empty($_REQUEST['r'])) || $_REQUEST['r'] !== 'success') { echo ' hidden'; } ?>">
                    <strong>Success!</strong> All files have been renamed.
                </div>
            </form>
        </main>
        <span><?php include_once "app/get_values.php"; include_once "app/renamer.php"; ?></span>
    </body>
</html>
