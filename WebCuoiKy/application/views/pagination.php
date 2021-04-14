<!DOCTYPE html>
<html>
    <head>
        <title>CodeIgniter Pagination Examples</title>
    </head>
    <body>
        <div class="container">
            <h2 class="text-primary">CodeIgniter Pagination Example</h2>
               <table class="table table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Course</th>
                        </tr>
                        <tbody>
                        <?php foreach ($student as $res): ?>
                            <tr>
                                <td><?php echo  $res->id ?></td>
                                <td><?php echo  $res->name ?></td>
                                <td><?php  echo  $res->email ?></td>
                                <td><?php echo  $res->course ?></td>
                               </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <h2><?php echo $links; ?></h2>
            </div>
        </div>
    </body>
</html>