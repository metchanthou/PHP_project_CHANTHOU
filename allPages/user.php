<div class=" text-center  ">
  <div class="card-body bg-info">
    <h5 class="card-title text-uppercase text-white display-2">Adnimistrator</h5>
    <h5 class="card-title text-white display-3"> is manage all user in this website</h5>
  </div>
</div>
    <table class= "table table-striped">
        <tr>
            <th>ID</th>
            <th>First_Name</th>
            <th>Last_Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Position</th>
            <th></th>
            <th>Action</th>
        </tr>
        <?php
            require_once('streamfile/function.php');
            $listUser = allUser();
            foreach ($listUser as $user) :
                // if (!$user) :
        ?>
        <tr>
            <td><?= $user['user_ID']; ?></td>
            <td><?= $user['first_name']; ?></td>
            <td><?= $user['last_name']; ?></td>
            <td><?= $user['age']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><?= $user['information']; ?></td>
            <td></td>
            <td>  
                <a href="" class= "btn btn-danger">Disable</a>
                <a href="" class ="btn btn-success"> Active</a>
            </td>
        </tr>
            
        <?php endforeach; ?>
    </table>