<html>

<head>
    <title>LabITF</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'labmysql.mysql.database.azure.com', 'it63070122@labmysql', 'Ppp192544', 'LabITF', 3306);
    if (mysqli_connect_errno($conn)) {
        die('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
    $res = mysqli_query($conn, 'SELECT * FROM guestbook');
    ?>
    <div class="table-responsive">
    <table class="table">
        <tr>
            <th width="200">
                <div align="center">Name</div>
            </th>
            <th width="350">
                <div align="center">Comment </div>
            </th>
            <th width="150">
                <div align="center">Action </div>
            </th>
        </tr>
        <?php
        while ($Result = mysqli_fetch_array($res)) {
        ?>
            <tr>
                <td><?php echo $Result['name']; ?></div></td>
                <td><?php echo $Result['comment']; ?></td>
                <td><center><a href="formedit.html"><input type="submit" value="EDIT" class="btn btn-warning"></a>&nbsp;&nbsp;<a href="formdel.html"><input type="submit" value="DELETE"  class="btn btn-danger"></a></center></td>
            </tr>
        <?php
        }
        ?>
    </table>
    </div>
    <center><a href="form.html"><input type="submit" value="INSERT" class="btn btn-success"></a></center>
    <?php
    mysqli_close($conn);
    ?>
</body>

</html>
