<?php include('userheader.php') ?>
<?php
$conn = mysqli_connect('localhost', 'root', "", 'hrm_db');
$sql = mysqli_query($conn , "SELECT * FROM `task`");

if(isset($_GET['id']) && isset($_GET['status'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];
    mysqli_query($conn, "update task set status ='$status' where id = '$id'");
}
?>
<html>
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .container{
                width: 100%;
                max-width: 725px;
                margin: 10px auto;
            }
            .container table{
                width: 100%;
                margin: 30px;
                border-collapse: collapse;
                font-size: 20px;
                text-align: center;
                text-transform: capitalize;
            }
            .container table th{
                background: grey;
                color:#fff;
            }
            select {
                width : 100%;
                padding: 0.5rem 0;
                font-size: 1rem;
            }
        </style>
    </head>
    <body>
    <div class="s-12 l-10">
               <h1 style="color: #858282;">Task Box</h1><hr>
               <div class="clearfix"></div>
               
        <div class="container">
            <table border = "1">
                <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Position</th>
                <th>Task</th>
                <th>Date</th>
                <th>status</th>
                <th>action</th>
        </tr>
        <?php 
        $i = 1;
        if (mysqli_num_rows($sql)>0) {
            while ($row = mysqli_fetch_assoc($sql)) { ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $row['employee name'] ?></td>
                <td><?php echo $row['position'] ?></td>
                <td><?php echo $row['task_add'] ?></td>
                <td><?php echo $row['date'] ?></td>
                <td>
                    <?php
                    if($row['status'] == 1 ) {
                        echo "Pending";
                    }
                    if($row['status'] == 2 ) {
                        echo "Complete";
                    }
                    if($row['status'] == 3 ) {
                        echo "Incomplete";
                    }
                    ?>
                    </td>
                    <td>
                        <select onchange = "status_update(this.options[this.selectedIndex].value, '<?php echo $row['Id'] ?>')">
                            <option value = "">status</option>
                            <option value = "1">Pending</option>
                            <option value = "2">complete</option>
                            <option value = "3">incomplete</option>
                        </select>
                    </td>
            </tr>
        <?php }
        } ?>
            </table>
        </div>

        <script>
            function status_update(value, id) {
                //alert(id);
                let url = "http://localhost/hrm/user/taskrequest.php";
                window.location.href= url + "?id="+ id + "&status="+ value;
            }
        </script>
    </body>
</html>
<?php include('userfooter.php') ?>