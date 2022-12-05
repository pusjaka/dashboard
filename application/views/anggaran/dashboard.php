<div class="row show-on-large hide-on-small-only" >
    <div class="col s12 ">
        <div class="card">
            <div class="card-content margin" style="margin: 12px;">
                <div class="row">
                    <div class="col s6 m6 l6">
                        <h4 class="cardbox-text light left margin">Daftar Anggaran</h4>
                    </div>
                </div>
            </div>

            <br>
            <div class="divider"></div>
            <table class="bordered" id="barang-table2">
                <thead>
                <tr>
                    <th >Tanggal Anggaran</th>
                    <th >Total Anggaran</th>
                    <th >Realisasi Anggaran</th>
                    <th class="center">AKSI</th>
                </tr>
                </thead>
                <tbody>
				<?php
				foreach ($anggaran as $value):
                ?>
                <tr>
                    <td class="teal-text text-darken-1"><?= $value->tanggal_anggaran ?></td>
                    <td class="grey-text text-darken-1"><?= $value->total_anggaran ?></td>
                    <td class="grey-text text-darken-1"><?= $value->realisasi_anggaran ?></td>
                    <td>
                        <div class="row">
								<a href="#modal-edit" class="btn-flat waves-effect waves-orange col l6 center modal-trigger btn-edit1"
                                 data-id="<?= $value->id;?>" data-date="<?= $value->tanggal_anggaran;?>" data-ta="<?= $value->total_anggaran;?>" data-real="<?= $value->realisasi_anggaran;?>" title="ubah data">
									<i class="mdi-content-create orange-text"></i>
								</a>

                                <a href="#modal-hapus"
									class="btn-flat waves-effect waves-orange col l6 center modal-trigger btn-delete-tu"
									title="hapus data" data-id="<?= $value->id ?>" data-url="anggaran">
									<i class="mdi-action-delete red-text"></i>
								</a>
						</div>
                    </td>
                </tr>
				<?php
				endforeach;
				?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Floating Action Button -->
<div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
    <a href="#modal-tambah" class="btn-floating btn-large teal modal-trigger" >
        <i class="mdi-av-playlist-add"></i>
    </a>
</div>
<!-- Floating Action Button -->

<!-- Modal Tambah -->
<div id="modal-tambah" class="modal">
    <?=form_open('anggaran')?>
        <div class="modal-content center">
            <div class="row">
                <div class="col s12 m12 center">
                    <h5 class="more-text">Tambah Data Anggaran</h5>
                    <h5 class="divider"></h5>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <p for="tanggal_kehadiran">Tanggal Kehadiran</p>
                    <input type="date" name="tanggal_anggaran" required>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <label for="nama_kegiatan">Total Anggaran</label>
                    <input type="text" placeholder="Masukkan Nominal" class="validate" name="total_anggaran" required>
                </div>

                <div class="input-field col s12 m6">
                    <label for="progress">Realisasi Anggaran</label>
                    <input type="text" placeholder="Masukkan Nominal" class="validate" name="realisasi_anggaran" required>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="simpan" class="waves-effect waves-red btn-flat modal-action modal-close">lanjutkan</button>
            <a href="#!" class="waves-effect btn-flat modal-action modal-close">Batalkan</a>
        </div>
    <?=form_close()?>
</div>

<!-- Modal Edit -->
<div id="modal-edit" class="modal">
    <?=form_open('anggaran')?>
        <div class="modal-content center">
            <div class="row">
                <div class="col s12 m12 center">
                    <h5 class="more-text">Update Data Anggaran</h5>
                    <h5 class="divider"></h5>
                </div>

                <div class="col s12 m1">
                    <h3 class="grey-text">
                        <i class="mdi-action-perm-identity"></i>
                    </h3>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <input type="hidden" name="id_anggaran" class="id">
                    <p for="tanggal_kehadiran">Tanggal Kehadiran</p>
                    <input type="date" class="tanggal" name="tanggal_anggaran" required>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <label class="active" for="total_anggaran">Total Anggaran</label>
                    <input type="text" name="total_anggaran" placeholder="Masukkan Nominal" class="ta validate" required>
                </div>

                <div class="input-field col s12 m6">
                    <label class="active" for="realis">Realisasi Anggaran</label>
                    <input type="text" class="real validate" placeholder="Masukkan Nominal" id="realis" name="realisasi_anggaran" required>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="simpan" class="waves-effect waves-red btn-flat modal-action modal-close">lanjutkan</button>
            <a href="#!" class="waves-effect btn-flat modal-action modal-close">Batalkan</a>
        </div>
    <?=form_close()?>
</div>

<!-- Modal delete -->
<div id="modal-hapus" class="modal">
	<div class="modal-content">
		<h4 class="red-text text-lighten-1">
			<i class="mdi-action-info-outline"></i> Yakin ingin menghapus data ?
		</h4>
		<div class="modal-content">
			<h4>
				item akan terhapus dari database dan tidak dapat dipulihkan kembali
			</h4>
		</div>
	</div>
	<div class="modal-footer">
		<a href="" id="tombol-delete" class="waves-effect waves-red btn-flat modal-action modal-close delete-a">Hapus</a>
		<a href="#!" class="waves-effect btn-flat modal-action modal-close">Batalkan</a>
	</div>
</div>
