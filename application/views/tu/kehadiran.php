<div class="row show-on-large hide-on-small-only">
	<div class="col s12 ">
		<div class="card">
			<div class="card-content margin" style="margin: 12px;">
				<div class="row">
					<div class="col s6 m6 l6">
						<h4 class="cardbox-text light left margin">Daftar Kehadiran</h4>
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
						<th>TB</th>
						<th>Cuti</th>
						<th>Dinas Luar</th>
						<th>PKP</th>
						<th>Sakit</th>
						<th class="center">AKSI</th>
					</tr>
				</thead>
				<tbody>
					<?php
				foreach ($kehadiran as $value):
                ?>
					<tr>
						<td class="teal-text text-darken-1"><?= $value->tanggal_kehadiran ?></td>
						<td class="grey-text text-darken-1"><?= $value->TB ?></td>
						<td class="grey-text text-darken-1"><?= $value->CUTI ?></td>
						<td class="grey-text text-darken-1"><?= $value->DL ?></td>
						<td class="grey-text text-darken-1"><?= $value->PKP ?></td>
						<td class="grey-text text-darken-1"><?= $value->S ?></td>
						<td>
							<div class="row">
								<a href="#modal-edit" class="btn-flat waves-effect waves-orange col l6 center modal-trigger btn-edit"
                                data-id="<?= $value->id;?>" data-date="<?= $value->tanggal_kehadiran;?>" data-tb="<?= $value->TB;?>" data-cuti="<?= $value->CUTI;?>" data-dl="<?= $value->DL;?>" data-pkp="<?= $value->PKP;?>" data-s="<?= $value->S;?>" title="ubah data">
									<i class="mdi-content-create orange-text"></i>
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

<!-- Modal Tambah -->
<div id="modal-tambah" class="modal">
	<?=form_open('kehadiran')?>
	<div class="modal-content center">
		<div class="row">
			<div class="col s12 m12 center">
				<h5 class="more-text">Tambah Data Kehadiran</h5>
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
				<input type="date" name="tanggal_kehadiran" required>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12 m2">
				<label for="">TB</label>
				<input type="number" name="tb">
			</div>

			<div class="input-field col s12 m2">
				<label for="">CUTI</label>
				<input type="number" name="cuti">
			</div>

			<div class="input-field col s12 m2">
				<label for="">DINAS LUAR</label>
				<input type="number" name="dl">
			</div>

			<div class="input-field col s12 m2">
				<label for="">PKP</label>
				<input type="number" name="pkp">
			</div>

			<div class="input-field col s12 m2">
				<label for="">SAKIT</label>
				<input type="number" name="s">
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
	<?=form_open('kehadiran')?>
	<div class="modal-content center">
		<div class="row">
			<div class="col s12 m12 center">
				<h5 class="more-text">Update Data Kehadiran</h5>
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
                <input type="hidden" name="id_kehadiran" class="id">
				<!-- <label for="tanggal_kehadiran">Tanggal Kehadiran</label> -->
				<input type="date" class="tanggal" name="tanggal_kehadiran" required>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s12 m2">
				<label for="">TB</label>
				<input type="number" class="tb" name="tb">
			</div>

			<div class="input-field col s12 m2">
				<label for="">CUTI</label>
				<input type="number" class="cuti" name="cuti">
			</div>

			<div class="input-field col s12 m2">
				<label for="">DINAS LUAR</label>
				<input type="number" class="dl" name="dl">
			</div>

			<div class="input-field col s12 m2">
				<label for="">PKP</label>
				<input type="number" class="pkp" name="pkp">
			</div>

			<div class="input-field col s12 m2">
				<label for="">SAKIT</label>
				<input type="number" class="s" name="s">
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
<div id="modal-delete" class="modal">
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

