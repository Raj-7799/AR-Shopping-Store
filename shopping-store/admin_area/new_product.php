<?php
  include('../functions/functions.php');
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>New Product</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/admin_styles.css">
</head>

<body>
    <div class="container-fluid">
        <form action="new_product.php" method="post" enctype="multipart/form-data">
            <table class="table table-striped table-bordered">
                <tdh>
                    <tr>
                        <th colspan="6" class="center">Contents</th>
                        <th colspan="6" class="center">Input</th>
                    </tr>
                </tdh>
                <!-- product name -->
                <tr>
                    <td colspan="6" class="center">Product name</td>
                    <td colspan="6" class="center"><input type="text" name="title" placeholder="enter product title" class="form-control" required></td>
                </tr>
                <!-- price -->
                <tr>
                    <td colspan="6" class="center">Price</td>
                    <td colspan="6" class="center"><input type="text" name="price" placeholder="enter price" class="form-control" required></td>
                </tr>
                <!-- Cateogary -->
                <tr>
                    <td colspan="6" class="center">Cateogary</td>
                    <td colspan="6" class="center">
                        <select name="cateogary_name" id="cat" class="form-control" required="">
                            <option value="">Select a cateogary</option>
                            <option value="shirt">shirt</option>
                            <option value="suit">suit</option>
                            <option value="trousers">trousers</option>
                            <option value="shoes">shoes</option>
                        </select>
                    </td>
                </tr>
                <!-- image -->
                <tr>
                    <td colspan="6" class="center">Image</td>
                    <td colspan="6" class="center"><input type="file" name="file" class="form-control" required></td>
                </tr>
                <!-- desc -->
                <tr>
                    <td colspan="6" class="center">Product Description</td>
                    <td colspan="6" class="center"><textarea name="desc" rows="8" cols="80" class="form-control"></textarea></td>
                </tr>
                <tr>
                    <td colspan="6" class="center">Keywords</td>
                    <td colspan="6" class="center"><input type="text" name="keyword" placeholder="enter keywords" class="form-control" required></td>
                </tr>
                <tr>
                  <td colspan="12" class="center">
                    <input type="Submit" value="Submit" name='submit' class="btn btn-primary btn-lg">
                  </td>
                </tr>
            </table>
        </form>
    </div>
    <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>

<?php
  if($_POST!==null && isset($_POST['submit'])){
    insert();
    //  echo "<meta http-equiv='refresh' content='0'>";
  }
 ?>
