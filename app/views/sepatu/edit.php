<?php

// var_dump($data['sepatu']);
// exit;
?>
  <form action="<?= BASEURL; ?>/sepatu/update" method="post">
        <input type="hidden" id="kode_sepatu" name="kode_sepatu" value="<?= $data['sepatu']['kode_sepatu']?>"><br><br>
        
        <label for="merk_sepatu">Merk Sepatu:</label><br>
        <input type="text" id="merk_sepatu" name="merk_sepatu" value="<?= $data['sepatu']['merk_sepatu']?>">
        
        <label for="warna_sepatu">Warna Sepatu:</label><br>
        <input type="text" id="warna_sepatu" name="warna_sepatu" value="<?= $data['sepatu']['warna_sepatu']?>">
        
        <label for="jenis_sepatu">Jenis Sepatu:</label><br>
        <input type="text" id="jenis_sepatu" name="jenis_sepatu" value="<?= $data['sepatu']['jenis_sepatu']?>">
        
        <label for="bahan_sepatu">Bahan Sepatu:</label><br>
        <input type="text" id="bahan_sepatu" name="bahan_sepatu" value="<?= $data['sepatu']['bahan_sepatu']?>">
        
        <label for="deskripsi_sepatu">Deskripsi Sepatu:</label><br>
       <input type="text" id="bahan_sepatu" name="deskripsi_sepatu" value="<?= $data['sepatu']['deskripsi_sepatu']?>"> 
        
        <label for="tanggal_launching_sepatu">Tanggal Launching Sepatu:</label><br>
        <input type="date" id="tanggal_launching_sepatu" name="tanggal_launching_sepatu" value="<?= $data['sepatu']['tanggal_launching_sepatu']?>">
        
        <input type="submit" value="Submit">
    </form>