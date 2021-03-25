<!DOCTYPE html>
<html lang="en">

<head>
    <title>Task Manager</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="jumbotron text-center">
        <h1>AKM Cookie Task Manager</h1>
        <p></p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <form action="savecookie.php" method="post">

                    <div class="form-group">
                        <label for="name">Task Name:</label>
                        <input type="name" name="tname" class="form-control" placeholder="Enter your name" id="tname">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Task Detail:</label>
                        <input type="name" name="tdetail" class="form-control" placeholder="Enter phone" id="pwd">
                    </div>



                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>

        </div>


        <div class="row pt-5 ">
            <div class="col-12">



                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col-4">Task Title</th>
                            <th scope="col-8">Task Detail</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                    var_dump($_COOKIE);
                    if(isset($_COOKIE)) {
                     
                        foreach($_COOKIE as  $key => $val)
                        {
                          echo "
                          <tr>
                          <td>".$key."</td><td>".$val;
                        echo '</td></tr>';

                        }
                    } 
                    
                    ?>
                        
                    </tbody>
                </table>

                



            </div>

        </div>



    </div>

</body>

</html>