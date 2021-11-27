<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Builder</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="./css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="./css/style_pagebuilder.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col offset-3">
                <form class="form-horizontal" id="Bpage" method="post" action="PageGen.php">
                    <h1>Build a new page</h1>
                    <div class="form-group">
                        <input type="text" name="inPageName" class="form-control" placeholder="Page Name">
                    </div>
                    <div class="form-group">
                        <label for="navbar">Choose navbar presence</label>
                        <select name="navbar" id="navbar">
                            <option value="with">With</option>
                            <option value="without">Without (Somes adminpages dont need navbar)</option>
                        </select>
                    </div>  
                    <div class="form-group">
                        <input type="text" name="inBkgF" class="form-control" placeholder="Parallax Image 1">
                    </div>
                    <div class="form-group">
                        <input type="text" name="inHeadLine" class="form-control" placeholder="HeadLine">
                    </div>
                    <div class="form-group">
                        <textarea name="inParaF" class="form-control" placeholder="Para 1"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="inBkgS" class="form-control" placeholder="Parallax Image 2">
                    </div>
                    <div class="form-group">
                        <textarea name="inParaS" class="form-control" placeholder="Para 2"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="inBkgT" class="form-control" placeholder="Parallax Image 3">
                    </div>
                    <div class="input-field col s12">
                        <select>
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">With</option>
                            <option value="2">Without (Somes adminpages dont need navbar)</option>
                            </select>
                        <label>Choose footer presence</label>
                    </div>
                    <button type="submit" class="btn btn-success">Submit It</button>
                </form>

            </div>
        </div>
    <script src="./js/jQuery.js"></script>
    <script src="./js/materialize.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>