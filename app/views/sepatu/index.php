<?php Flasher::flash()?>

<a href="<?=BASEURL;?>/sepatu/add">Add Data</a>
<table>
    <thead>
        <tr>
            <th>Kode Sepatu</th>
            <th>Merk Sepatu</th>
            <th>Warna Sepatu</th>
            <th>Jenis Sepatu</th>
            <th>Bahan Sepatu</th>
            <th>Deskripsi Sepatu</th>
            <th>Tanggal Launching Sepatu</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data['sepatu'] as $sepatu): ?>
            <tr>
                <td><?php echo $sepatu['kode_sepatu']; ?></td>
                <td><?php echo $sepatu['merk_sepatu']; ?></td>
                <td><?php echo $sepatu['warna_sepatu']; ?></td>
                <td><?php echo $sepatu['jenis_sepatu']; ?></td>
                <td><?php echo $sepatu['bahan_sepatu']; ?></td>
                <td><?php echo $sepatu['deskripsi_sepatu']; ?></td>
                <td><?php echo $sepatu['tanggal_launching_sepatu']; ?></td>
                <td><?php echo $sepatu['tanggal_launching_sepatu']; ?></td>
                  <td>
                <a  href="<?= BASEURL;?>/sepatu/viewOne/<?= $sepatu['kode_sepatu']?>" class="btn btn-secondary btn-sm ">Edit</a>
                    <a href="<?= BASEURL;?>/sepatu/delete/<?= $sepatu['kode_sepatu']?>" class="btn btn-danger btn-sm " onclick="return confirm('yakin?');">Delete</a>
                   </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>