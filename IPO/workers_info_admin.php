<div>
    <h2 style="text-align:center;">Information about workers</h2>
    <table>
        <tr>
            <th>id</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Birth date</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Post</th>
            <th>Salary</th>
            <th>Experience</th>
            <th>Show full info</th>
        </tr>
        <?php foreach($resultArray as $worker):?>
            <tr>
                <td><?=$worker['id']?></td>
                <td><?=$worker['first_name']?></td>
                <td><?=$worker['last_name']?></td>
                <td><?=$worker['birth_date']?></td>
                <td><?=$worker['phone']?></td>
                <td><?=$worker['email']?></td>
                <td><?=$worker['post']?></td>
                <td><?=$worker['salary']?></td>
                <td><?=mb_strimwidth($worker['experience'],0,30)?></td>
                <td><a href="worker_show.php?id=<?=$worker['id']?>">Show</a></td>
            </tr>
        <?php endforeach;?>
    </table>
</div>
