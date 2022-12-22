<div class="row show-on-large hide-on-small-only">
	<div class="col s12 ">
		<div class="card">
			<div class="card-content margin" style="margin: 12px;">
				<div class="row">
					<div class="col s6 m6 l6">
						<h4 class="cardbox-text light left margin">Daftar Sub Kegiatan Bidang Kebijakan Lalu Lintas dan Angkutan</h4>
					</div>
					<!--                    <div class="col s6 m6 l6">-->
					<!--                        <a href="#tambah-kategori" class="btn-flat white-text blue right waves-effect waves-light modal-trigger">-->
					<!--                            tambah kategori-->
					<!--                        </a>-->
					<!--                    </div>-->

				</div>
			</div>

			<br>

			<div class="valign-wrapper">
				<a href="<?= base_url('kegiatan-pe') ?>" class="valign-wrapper" style="margin-left: 20px;font-size: 15pt;"><i class="mdi-hardware-keyboard-arrow-left black-text" style="font-size: 25pt !important;"></i> Kembali</a>
			</div>
			<br>

			<div class="divider"></div>
			<table class="bordered" id="barang-table">
				<thead>
					<tr>
						<!-- <th >Tanggal</th> -->
						<th>Nama Sub Kegiatan</th>
						<th>Status</th>
						<th>Timeline</th>
						<th>Completion</th>
						<th>Deskripsi</th>
						<th>Update Terakhir</th>
						<th class="center">AKSI</th>
					</tr>
				</thead>
				<tbody>
					<?php
				foreach ($kegiatan as $value):
                ?>
					<tr>
						<!-- <td class="teal-text text-darken-1"><?= $value->tanggal_kegiatan ?></td> -->
						<td class="grey-text text-darken-1"><?= $value->nama_proses ?></td>
						<td class="grey-text text-darken-1"><?= $value->status ?></td>
						<td class="grey-text text-darken-1"><?= $value->tanggal_mulai ?> s/d <?= $value->tanggal_selesai ?></td>
						<td class="grey-text text-darken-1"><?= $value->completion ?>%</td>
						<td class="grey-text text-darken-1"><?= $value->deskripsi ?></td>
						<td class="grey-text text-darken-1"><?= $value->updated_at ?></td>
						<td>
							<div class="row">
								<a href="#modal-edit" class="btn-flat waves-effect waves-orange col l6 center modal-trigger btn-edit3" title="ubah data"
								data-id="<?= $value->id_kegiatan ?>" data-id_sub_kegiatan="<?= $value->id ?>" data-kegiatan="<?= $value->nama_proses ?>"
								data-completion="<?= $value->completion ?>" data-status="<?= $value->status ?>" data-keterangan="<?= $value->deskripsi ?>" data-dstart="<?= $value->tanggal_mulai ?>"
								data-dend="<?= $value->tanggal_selesai ?>">
									<i class="mdi-content-create orange-text"></i>
								</a>
								<a href="#modal-hapus"
									class="btn-flat waves-effect waves-orange col l6 center modal-trigger btn-delete-sub"
									title="hapus data" data-id="<?= $value->id ?>" data-bidang="LLA" data-idk="<?= $value->id_kegiatan ?>">
									<i class="mdi-action-delete red-text"></i>
								</a>
							</div>
						</td>
					</tr>

					<!-- Modal delete -->
					<div id="delete" class="modal">
						<div class="modal-content">
							<h4 class="red-text text-lighten-1">
								<i class="mdi-action-info-outline"></i> Yakin ingin menghapus barang ?
							</h4>
							<div class="modal-content">
								<h4>
									item yang anda hapus akan tersimpan ke data arsip
								</h4>
							</div>
						</div>
						<div class="modal-footer">
							<a href="#!" class="waves-effect waves-red btn-flat modal-action modal-close">lanjutkan</a>
							<a href="#!" class="waves-effect btn-flat modal-action modal-close">Batalkan</a>
						</div>
					</div>
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
	<?=form_open('kegiatan-ptpp/log/'.$id_kegiatan.'')?>
	<div class="modal-content center">
		<div class="row">
			<div class="col s12 m12 center">
				<h5 class="more-text">Tambah Data Sub Kegiatan</h5>
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
				<!-- <label for="tanggal_kehadiran">Tanggal Kehadiran</label> -->
			</div>
		</div>

		<div class="row">
			<input type="hidden" name="bidang_kegiatan" value="KTP">
			<input type="hidden" name="id_kegiatan" value="<?= $id_kegiatan ?>">

			<div class="input-field col s12 m6">
				<label for="nama_kegiatan">Nama Sub Kegiatan</label>
				<input type="text" placeholder="Masukkan Nama Kegiatan" name="nama_kegiatan">
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12 m6">
				<label for="nama_kegiatan">Status Sub Kegiatan</label>
				<input type="text" placeholder="Masukkan Status Sub Kegiatan" name="status_kegiatan">
			</div>

			<div class="input-field col s12 m6">
				<label for="progress">Completion</label>
				<input type="number" placeholder="0" name="completion">
			</div>

			<div class="input-field col s12 m6">
				<p style="font-size: 9pt;">Tanggal Awal Kegiatan</p>
				<input type="date" name="tanggal_kegiatan" required>
			</div>

			<div class="input-field col s12 m6">
				<p style="font-size: 9pt;">Tanggal Akhir Kegiatan</p>
				<input type="date" name="tanggal_kegiatan_end" required>
			</div>
		</div>
		<div class="row">
			<div class="input-field col s12 m6">
				<label for="keterangan">Deskripsi</label>
				<textarea name="keterangan" id="" placeholder="Masukkan Keterangan" cols="30" rows="10"></textarea>
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

<!-- Modal Edit -->
<div id="modal-edit" class="modal">
	<?=form_open('kegiatan-ptpp/log/'.$id_kegiatan.'')?>
	<div class="modal-content center">
		<div class="row">
			<div class="col s12 m12 center">
				<h5 class="more-text">Update Data Sub Kegiatan</h5>
				<h5 class="divider"></h5>
			</div>
		</div>

		<div class="row">
			<input type="hidden" name="bidang_kegiatan" value="KTP">
			<input type="hidden" class="id_kegiatan" name="id_kegiatan">
			<input type="hidden" class="id_sub_kegiatan" name="id_sub_kegiatan">

			<div class="row">
				<div class="input-field col s12 m6">
					<label for="nama_kegiatan">Nama Sub Kegiatan</label>
					<input type="text" class="kegiatan" placeholder="Masukkan Nama Kegiatan" name="nama_kegiatan">
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12 m6">
					<label for="nama_kegiatan">Status Sub Kegiatan</label>
					<input type="text" class="status" placeholder="Masukkan Status Sub Kegiatan" name="status_kegiatan">
				</div>

				<div class="input-field col s12 m6">
					<label for="progress">Completion</label>
					<input type="number" class="completion"  placeholder="0" name="completion">
				</div>
			</div>

			<div class="row">
				<div class="input-field col s12 m6">
					<p style="font-size: 9pt;">Tanggal Awal Kegiatan</p>
					<input type="date" class="date_awal" name="tanggal_kegiatan" required>
				</div>

				<div class="input-field col s12 m6">
					<p style="font-size: 9pt;">Tanggal Akhir Kegiatan</p>
					<input type="date" class="date_akhir" name="tanggal_kegiatan_end" required>
				</div>
			</div>

			<div class="input-field col s12 m6">
				<label for="keterangan">Deskripsi</label>
				<textarea name="keterangan" id="" placeholder="Masukkan Keterangan" cols="30" rows="10"></textarea>
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