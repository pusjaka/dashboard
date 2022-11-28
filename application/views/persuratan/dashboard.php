<div class="row show-on-large hide-on-small-only">
	<div class="col s12 ">
		<div class="card">
			<div class="card-content margin" style="margin: 12px;">
				<div class="row">
					<div class="col s6 m6 l6">
						<h4 class="cardbox-text light left margin">Daftar Surat</h4>
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
			<table class="bordered" id="barang-table">
				<thead>
					<tr>
						<th>Tanggal</th>
						<th>Unit Kerja</th>
						<th>Uraian</th>
						<th>Disposisi</th>
						<th>Catatan</th>
						<th>Follow up</th>
						<th>Link Surat</th>
						<th class="center">AKSI</th>
					</tr>
				</thead>
				<tbody>
					<?php
				foreach ($surat as $value):
                ?>
					<tr>
						<td class="teal-text text-darken-1"><?= $value->tanggal_surat ?></td>
						<td class="grey-text text-darken-1"><?= $value->unit_kerja ?></td>
						<td class="grey-text text-darken-1"><?= $value->uraian ?></td>
						<td class="grey-text text-darken-1"><?= $value->disposisi ?></td>
						<td class="grey-text text-darken-1"><?= $value->catatan ?></td>
						<td class="grey-text text-darken-1"><?= $value->follow_up ?></td>
						<td class="grey-text text-darken-1"><a href="<?= $value->url_surat ?>">Download</a></td>
						<td>
							<div class="row">
								<a href="#modal-edit" class="btn-flat waves-effect waves-orange col l6 center modal-trigger btn-edit2" title="ubah data"
                                data-id="<?= $value->id; ?>" data-date="<?= $value->tanggal_surat ?>" data-uk="<?= $value->unit_kerja ?>"
                                 data-uraian="<?= $value->uraian ?>" data-disposisi="<?= $value->disposisi ?>" data-catatan="<?= $value->catatan ?>"
                                 data-fu="<?= $value->follow_up ?>" data-url="<?= $value->url_surat ?>">
									<i class="mdi-content-create orange-text"></i>
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
	<?=form_open('persuratan')?>
	<div class="modal-content center">
		<div class="row">
			<div class="col s12 m12 center">
				<h5 class="more-text">Tambah Data Surat</h5>
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
				<input type="date" name="tanggal_surat" required>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12 m6">
				<label for="nama_kegiatan">Unit Kerja</label>
				<input type="text" name="unit_kerja">
			</div>

			<div class="input-field col s12 m6">
				<label for="progress">Uraian</label>
				<textarea name="uraian" id="" cols="30" rows="10"></textarea>
			</div>

			<div class="input-field col s12 m6">
				<label for="progress">Follow Up</label>
				<textarea name="follow_up" id="" cols="30" rows="10"></textarea>
			</div>

			<div class="input-field col s12 m6">
				<label for="keterangan">Disposisi</label>
				<input type="text" name="disposisi">
			</div>

			<div class="input-field col s12 m6">
				<label for="tanggal_kegiatan">Catatan</label>
				<textarea name="catatan" id="" cols="30" rows="10"></textarea>
			</div>

			<div class="input-field col s12 m6">
				<label for="tanggal_kegiatan">Url Surat</label>
				<input type="text" name="url_surat">
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
	<?=form_open('persuratan')?>
	<div class="modal-content center">
		<div class="row">
			<div class="col s12 m12 center">
				<h5 class="more-text">Update Data Persuratan</h5>
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
				<input type="hidden" name="id_surat" class="id">
				<!-- <label for="tanggal_kehadiran">Tanggal Kehadiran</label> -->
				<input type="date" class="tanggal" name="tanggal_surat" required>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12 m6">
				<label for="nama_kegiatan">Unit Kerja</label>
				<input type="text" class="uk" name="unit_kerja">
			</div>

			<div class="input-field col s12 m6">
				<label for="progress">Uraian</label>
				<textarea name="uraian" class="uraian" id="" cols="30" rows="10"></textarea>
			</div>

			<div class="input-field col s12 m6">
				<label for="progress">Follow Up</label>
				<textarea name="follow_up" class="fu" id="" cols="30" rows="10"></textarea>
			</div>

			<div class="input-field col s12 m6">
				<label for="keterangan">Disposisi</label>
				<input type="text" class="disposisi" name="disposisi">
			</div>

			<div class="input-field col s12 m6">
				<label for="tanggal_kegiatan">Catatan</label>
				<textarea name="catatan" class="catatan" id="" cols="30" rows="10"></textarea>
			</div>

			<div class="input-field col s12 m6">
				<label for="tanggal_kegiatan">Url Surat</label>
				<input type="text" class="url" name="url_surat">
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
