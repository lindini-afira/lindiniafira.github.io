<?php
    include 'header.php';
?>

    <!-- banner -->
    <div class="banner" style="background-image: url('uploads/identitas/<?= $d->foto_sekolah ?>');">
        <div class="banner-text">
            <div class="container">
                <h3>Selamat Datang di <?= $d->nama ?></h3>
                <p>Sekolah keagamaaan yang berlangsung sejak 10 tahaun lalu</p>
            </div>
        </div>
    </div>

    <!-- sambutan -->
    <div class="section">
        <div class="container text-center">
            <h3>Sambutan Kepala Sekkolah</h3>
            <img src="uploads/identitas/<?= $d->foto_kepsek ?>" width="150px">
            <h3><?= $d->nama_kepsek ?></h3>
            <p><?= $d->sambutan_kepsek ?></p>
        </div>
    </div>  

    <!-- galeri -->
    <div class="section1" id="galeri">
        <div class="container text-center">
            <h3>Galeri</h3>

            <?php
                $galeri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY id DESC");
                if(mysqli_num_rows($galeri) > 0){
                    while($p = mysqli_fetch_array($galeri)){
            ?>

                <div class="col-4">
                    <a href="uploads/galeri/<?= $p['foto'] ?>" target="_blank" class="thumbnail-link">
                        <div class="thumbnail-box" >
                            <div class="thumbail-img" style="background-image: 
                            url('uploads/galeri/<?= $p['foto'] ?>');">
                            </div>

                            <div class="thumbail-text">
                                <?= $p['keterangan'] ?>
                            </div>
                        </div>
                    </a>
                    
                </div>

            <?php }}else {?>
                    Data Tidak Ada
            <?php }?>
        </div>    
    </div>

    <!-- informasi -->
    <div class="section">

        <div class="container text-center" >
            <h3>Informasi Terbaru</h3>
        <?php
                $informasi = mysqli_query($conn, "SELECT * FROM informasi ORDER BY id DESC LIMIT 8");
                if(mysqli_num_rows($informasi) > 0){
                    while($p = mysqli_fetch_array($informasi)){
                ?>

                <div class="col-4">
                    <a href="detail-informasi.php?id=<?=$p['id'] ?>" class="thumbnail-link">
                        <div class="thumbnail-box" >
                            <div class="thumbail-img" style="background-image: url('uploads/informasi/<?= $p['gambar'] ?>');">

                            </div>

                            <div class="thumbail-text">
                                <?= substr($p['judul'], 0, 50) ?>
                            </div>
                        </div>
                    </a>
                    
                </div>

            <?php }}else {?>
                    Data Tidak Ada
            <?php }?>

        </div>

    </div>

<?php
    include 'footer.php';
?>