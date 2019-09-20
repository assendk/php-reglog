<?php foreach($viewmodel as $item) : ?>
    <div class="card">
        <div class="card-body">
            <h3><?php echo $item['address']; ?></h3>
            <small><?php echo $item['country_id']; ?></small>
            <hr />
            <p><?php echo $item['postcode']; ?></p>
            <br />
        </div>
    </div>
<?php endforeach; ?>