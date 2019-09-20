<label for="Country">Country</label>
<select id="countries" name="countries" class="form-control">
    <?php
//var_dump($viewmodel);
foreach($viewmodel as $country) : ?>
    <option value="<?php echo $country['id'] ?>"><?php echo $country['country_name'] ?></option>
<?php endforeach; ?>
</select>
