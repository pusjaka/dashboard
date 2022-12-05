<div class="row show-on-large hide-on-small-only">
	<div class="col s12 ">
		<div class="card">
			<div class="card-content margin" style="margin: 12px;">
				<div class="row">
					<div class="col s6 m6 l6">
						<h4 class="cardbox-text light left margin">Daftar Kegiatan Sub Kordinator Tata Usaha</h4>
					</div>
					<!--                    <div class="col s6 m6 l6">-->
					<!--                        <a href="#tambah-kategori" class="btn-flat white-text blue right waves-effect waves-light modal-trigger">-->
					<!--                            tambah kategori-->
					<!--                        </a>-->
					<!--                    </div>-->

				</div>
			</div>

			<br>
			<div class="divider"></div>
			<table class="bordered" id="barang-table2">
				<thead>
					<tr>
						<th>Tanggal</th>
						<th>Nama Kegiatan</th>
						<th>Progress</th>
						<th>Keterangan</th>
						<th class="center">AKSI</th>
					</tr>
				</thead>
				<tbody>
					<?php
				foreach ($kegiatan as $value):
                ?>
					<tr>
						<td class="teal-text text-darken-1"><?= $value->tanggal_kegiatan ?></td>
						<td class="grey-text text-darken-1"><?= $value->nama_kegiatan ?></td>
						<td class="grey-text text-darken-1"><?= $value->progress ?></td>
						<td class="grey-text text-darken-1"><?= $value->keterangan ?></td>
						<td>
							<div class="row">
								<a href="#modal-edit"
									class="btn-flat waves-effect waves-orange col l6 center modal-trigger btn-edit2"
									title="ubah data" data-id="<?= $value->id ?>"
									data-date="<?= $value->tanggal_kegiatan ?>"
									data-kegiatan="<?= $value->nama_kegiatan ?>" data-progress="<?= $value->progress ?>"
									data-keterangan="<?= $value->keterangan ?>">
									<i class="mdi-content-create orange-text"></i>
								</a>
								<a href="#modal-hapus"
									class="btn-flat waves-effect waves-orange col l6 center modal-trigger btn-delete"
									title="hapus data" data-id="<?= $value->id ?>" data-url="tu">
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
	<a href="#modal-tambah" class="btn-floating btn-large teal modal-trigger">
		<i class="mdi-av-playlist-add"></i>
	</a>
</div>
<!-- Floating Action Button -->

<!-- Modal delete -->
<div id="modal-tambah" class="modal">
	<?=form_open('kegiatan-tu')?>
	<div class="modal-content center">
		<div class="row">
			<div class="col s12 m12 center">
				<h5 class="more-text">Tambah Data Kegiatan</h5>
				<h5 class="divider"></h5>
			</div>

			<div class="col s12 m1">
				<h3 class="grey-text">
					<i class="mdi-action-perm-identity"></i>
				</h3>
			</div>
		</div>

		<!-- <div class="row">
			<div class="input-field col s12 m6">
				<p>Tang</p>
				<input type="date" name="tanggal_kehadiran" required>
			</div>
		</div> -->

		<div class="row">
			<div class="input-field col s12 m6">
				<label for="nama_kegiatan">Nama Kegiatan</label>
				<input type="text" placeholder="Masukkan Nama" name="nama_kegiatan">
			</div>

			<div class="input-field col s12 m6">
				<select placeholder="Masukkan Progress" name="progress">
					<option value="progress">Progress</option>
					<option value="selesai">Selesai</option>
				</select>
			</div>

			<div class="input-field col s12 m6">
				<p style="font-size: 9pt;">Keterangan</p>
				<textarea placeholder="Masukkan Keterangan" name="keterangan" id="" cols="30" rows="10"></textarea>
			</div>

			<div class="input-field col s12 m6">
				<p style="font-size: 9pt;">Tanggal Kegiatan</p>
				<input type="date" name="tanggal_kegiatan" required>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="submit" name="simpan"
			class="waves-effect waves-red btn-flat modal-action modal-close">lanjutkan</button>
		<a href="#!" class="waves-effect btn-flat modal-action modal-close">Batalkan</a>
	</div>
	<?=form_close()?>
</div>

<div id="modal-edit" class="modal">
	<?=form_open('kegiatan-tu')?>
	<div class="modal-content center">
		<div class="row">
			<div class="col s12 m12 center">
				<h5 class="more-text">Update Data Kegiatan</h5>
				<h5 class="divider"></h5>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12 m6">
				<!-- <label for="tanggal_kehadiran">Tanggal Kehadiran</label> -->
				<input type="hidden" class="id_kegiatan" name="id_kegiatan">
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12 m6">
				<label for="nama_kegiatan">Nama Kegiatan</label>
				<input type="text" class="kegiatan" placeholder="Masukkan Nama" name="nama_kegiatan">
			</div>

			<div class="input-field col s12 m6">
				<select name="progress">
					<option value="progress">Progress</option>
					<option value="selesai">Selesai</option>
				</select>
			</div>

			<div class="input-field col s12 m6">
				<p style="font-size: 9pt;">Keterangan</p>
				<textarea name="keterangan" class="keterangan" id="" cols="30" rows="10"></textarea>
			</div>

			<div class="input-field col s12 m6">
				<p style="font-size: 9pt;">Tanggal Kegiatan</p>
				<input type="date" class="tanggal_kegiatan" name="tanggal_kegiatan" required>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="submit" name="simpan"
			class="waves-effect waves-red btn-flat modal-action modal-close">lanjutkan</button>
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
