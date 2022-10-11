<div class="dt-responsive table-responsive">
    <!-- id bisa diganti => simpletable -->
    <table id="simpletable" class="table table-striped table-bordered nowrap">
        <thead>
            <tr>
                <th style="max-width:10%; text-align: center;">No.</th>
                <th style="max-width:5%; text-align: center;">Aksi</th>
                <th style="max-width:5%; text-align: center;">Nomor</th>
                <th style="max-width:20%; text-align: center;">Tanggal</th>
                <th style="max-width:20%; text-align: center;">Tujuan</th>
                <th style="max-width:20%; text-align: center;">Perihal</th>
                <th style="max-width:20%; text-align: center;">Log</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>

            <?php foreach ($surat_keluar as $item) : ?>
                <?php $id = $item['id'] ?>
                <tr style="text-align: center;">
                    <td><?= $no++ ?></td>
                    <td>
                        R | U | D
                    </td>

                    <!-- ISI VIEW -->
                    <td><?= $item['nomor'] ?></td>
                    <td><?= $item['tanggal'] ?></td>
                    <td><?= $item['tujuan'] ?></td>
                    <td><?= $item['perihal'] ?></td>
                    <td><?= $item['operator'] ?>|<?= $item['timestamp'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->include('layouts/js_view') ?>