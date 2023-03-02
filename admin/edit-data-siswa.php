<?php include 'header.php';
include 'koneksi.php';

 ?>


<!-- button triger -->
 <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nisn</th>
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Alamat</th>
                                            <th>No Telpon</th>
                                            <th>SPP</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    $query =  "SELECT*FROM siswa,spp,kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER BY nama ASC";
                                    $exec = mysqli_query($conn, $query);
                                    while($res = mysqli_fetch_assoc($exec)):

                                     ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $res['nisn'] ?></td>
                                            <td><?= $res['nis'] ?></td>
                                            <td><?= $res['nama'] ?></td>
                                            <td><?= $res['nama_kelas'] ?></td>
                                            <td><?= $res['alamat'] ?></td>
                                            <td><?= $res['no_telp'] ?></td>
                                            <td><?= $res['tahun']; ?> - <?= number_format($res['nominal'],2,',','.'); ?></td>
                                            <td>
                            					<a href="?url=edit-siswa&nisn=<?= $data['nisn'] ?>" class='btn btn-warning'>EDIT</a>
                            				</td>
                            				<td>
                            					<a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')" href="?url=hapus-siswa&nisn=<?= $data['nisn'] ?>" class='btn btn-danger'>HAPUS</a>
                            				</td>
                                        </tr>
                                    <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        


<?php include 'footer.php'; ?>