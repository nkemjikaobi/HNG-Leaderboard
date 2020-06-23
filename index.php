<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HNG LEADER BOARD</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap-theme.min.css'>
    <link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css'>
    <script type ='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5ef14b8eb61c220011098187&product=inline-share-buttons' async='async'></script>
</head>
<body>
    <div id ='main'>
    <div class="container wrapper">
        <h3>HNG LEADER BOARD</h3>
    </div>
    <div class='sharethis-inline-share-buttons'></div>
    <hr>
    <div class="container">
        <table class='table table-bordered table-striped table-responsive'>
            <tr>
                <th>FULL NAME</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>POINTS</th>
            </tr>
            <?php 

                $jsondata = file_get_contents("interns.json");
                $json = json_decode($jsondata,true);
                foreach ($json['interns'] as $intern){

            ?>
            <tr>
                <td><?php echo $intern['fullname']?></td>
                <td><?php echo $intern['username'] ?></td>
                <td><?php echo $intern['email'] ?></td>
                <td><?php echo $intern['points'] ?></td>
        <?php } ?>
            </tr>
        </table>
    </div>
    </div>
</body>
</html>