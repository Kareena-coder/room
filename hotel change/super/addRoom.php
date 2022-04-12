<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>


    <?php include('include/nav.php') ?>
    <div class="container">
        <div class="row">
            

            <div class="col-8">
                <form method="POST" action="db/addRoom.php" enctype="multipart/form-data">
                    <div class="md-3">
                        <label for="" style="font-size:20px; font-weight:bold;" class="form-label">Room Title:
                        </label>
                        <input placeholder="Title" type="text" class="form-control" name="title">
                    </div>
                    <div class="md-3">
                        <label for="" style="font-size:20px; font-weight:bold;" class="form-label">Room No:
                        </label>
                        <input placeholder="Room no" type="text" class="form-control" name="no">
                    </div>


                    <div class="md-3">
                        <br>
                        <label for="" style="font-size:20px; font-weight:bold;" class="form-label">Room Description:
                        </label>
                        <textarea id="news" placeholder="Type some texts..." type="text" class="form-control"
                            name="description"></textarea>
                    </div>

                    <div class="md-3">
                        <label for="" style="font-size:20px; font-weight:bold;" class="form-label">Cover image:</label>
                        <br>
                        <input type="file" name="image">
                    </div>
                    <br>
                    <div class="md-3">
                        <label for="" style="font-size:20px; font-weight:bold;" class="form-label">Price:
                        </label>
                        <input placeholder="Price in Rs" type="text" class="form-control" name="price">
                    </div>



                    
                    <hr>
                    <button type="submit" class="btn btn-dark">Save</button>
                    
                </form>
                <?php include('../include/message.php')  ?>
            </div>
        </div>
    </div>

    
</body>
</html>