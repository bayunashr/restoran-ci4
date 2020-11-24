<div class="form-group">
<select onchange="this.form.submit()" class="form-control" name="idkategori" id="idkategori">
    <option value="1">Cari</option>
    <?php foreach($kategori as $key => $value) : ?>
    <option value="<?= $value['idkategori'] ?>"><?= $value['kategori'] ?></option>
    <?php endforeach; ?>
</select>
</div>