<div class="container">
    <h1>Users<small class="text-muted"> | with addresses</small></h1>
    <div class="card-deck">
    <?php
    //var_dump($viewmodel);
    foreach($viewmodel as $item) : ?>
        <div class="card">
            <div class="card-body">
                <h3><?php echo $item['first_name']; ?> <?php echo $item['first_name']; ?></h3>
                <h3></h3>
                <small>Phone: <?php echo ($item['phone'])? $item['phone'] : "N/A"; ?></small>
                <hr />
                <p><?php echo $item['country_name']; ?> | address: <?php echo $item['address']; ?> | postcode: <?php echo $item['postcode']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>
