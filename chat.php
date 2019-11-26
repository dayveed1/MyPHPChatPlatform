<?php


   include 'db.php';

    $query = "SELECT * FROM chat ORDER BY id DESC";
    $run = $con->query($query);

    while($row = $run-> fetch_array()) :
    
    
    ?>
        <div id="chat-data">
            <span class="one"> <?php echo $row['name']; ?> </span> :
            <span class="two"> <?php echo $row['msg']; ?> </span>
            <span class="three"> <?php echo formatDate($row['date']); ?> </span>
        </div>

<?php endwhile;?>