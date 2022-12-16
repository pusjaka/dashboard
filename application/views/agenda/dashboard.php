<div class="row show-on-large hide-on-small-only" >
    <div class="col s12 ">
        <div class="card">
            <div class="card-content margin" style="margin: 12px;">
                <div class="row">
                    <div class="col s6 m6 l6">
                        <h4 class="cardbox-text light left margin">Daftar Agenda</h4>
                    </div>
                </div>
            </div>

            <br>
            <div class="divider"></div>
            <table class="bordered" id="barang-table2">
                <thead>
                <tr>
                    <th >Nama Agenda</th>
                    <th >Mulai</th>
                    <th >Selesai</th>
                    <th >Lokasi</th>
                    <th >PIC</th>
                    <th >Jumlah Peserta</th>
                    <th >Urgensi</th>
                    <th class="center">AKSI</th>
                </tr>
                </thead>
                <tbody>
				<?php
				foreach ($agenda as $value):
                ?>
                <tr>
                    <td class="teal-text text-darken-1"><?= $value->nama ?></td>
                    <td class="grey-text text-darken-1"><?= $value->start_date ?></td>
                    <td class="grey-text text-darken-1"><?= $value->end_date ?></td>
                    <td class="grey-text text-darken-1"><?= $value->lokasi ?></td>
                    <td class="grey-text text-darken-1"><?= $value->pic ?></td>
                    <td class="grey-text text-darken-1"><?= $value->jumlah_peserta ?></td>
                    <td class="grey-text text-darken-1"><?= $value->urgensi ?></td>
                    <td>
                        <div class="row">
								<a href="#modal-edit" class="btn-flat waves-effect waves-orange col l6 center modal-trigger btn-edit2"
                                 data-id="<?= $value->id;?>" data-nama="<?= $value->nama;?>" data-dstart="<?php $date = explode(" ",$value->start_date); echo $date[0]; ?>" data-tstart="<?php $date = explode(" ",$value->start_date); echo $date[1]; ?>"
                                 data-dend="<?php $date = explode(" ",$value->end_date); echo $date[0]; ?>" data-tend="<?php $date = explode(" ",$value->end_date); echo $date[1]; ?>"
                                 data-lokasi="<?= $value->lokasi;?>" data-pic="<?= $value->pic;?>" 
                                 data-peserta="<?= $value->jumlah_peserta; ?>" data-urgensi="<?= $value->urgensi; ?>" 
                                 data-deskripsi="<?= $value->deskripsi; ?>" title="ubah data">
									<i class="mdi-content-create orange-text"></i>
								</a>

                                <a href="#modal-hapus"
									class="btn-flat waves-effect waves-orange col l6 center modal-trigger btn-delete-tu"
									title="hapus data" data-id="<?= $value->id ?>" data-url="agenda">
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
    <?=form_open('agenda')?>
        <div class="modal-content center">
            <div class="row">
                <div class="col s12 m12 center">
                    <h5 class="more-text">Tambah Data Agenda</h5>
                    <h5 class="divider"></h5>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <label for="progress">Nama Agenda</label>
                    <input type="text" placeholder="Masukkan Nama" class="validate" name="nama_agenda" required>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <p for="tanggal_kehadiran">Mulai Kegiatan</p>
                    <div class="row">
                        <div class="col m8">
                            <input type="text" class="datepicker" name="tanggal_mulai" required>
                        </div>
                        <div class="col m4">
                            <input type="time" name="waktu_mulai" required>
                        </div>
                    </div>
                </div>

                <div class="input-field col s12 m6">
                    <p for="tanggal_kehadiran">Selesai Kegiatan</p>
                    <div class="row">
                        <div class="col m8">
                            <input type="text" class="datepicker" name="tanggal_selesai" required>
                        </div>
                        <div class="col m4">
                            <input type="time" name="waktu_selesai"required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <label for="progress">Lokasi</label>
                    <input type="text" placeholder="Masukkan Lokasi" class="validate" name="lokasi" required>
                </div>

                <div class="input-field col s12 m6">
                    <label for="progress">PIC</label>
                    <input type="text" placeholder="Masukkan PIC" class="validate" name="pic" required>
                </div>   
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <label for="progress">Jumlah Peserta</label>
                    <input type="number" placeholder="Masukkan Jumlah" class="validate" name="peserta" required>
                </div>

                <div class="input-field col s12 m6">
                    <select name="urgensi" required>
                        <option value="Penting">Penting</option>
                        <option value="Umum">Umum</option>
				    </select>
                </div>   
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" placeholder="Masukkan Deskripsi" id="" cols="30" rows="10"></textarea>
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
    <?=form_open('agenda')?>
        <div class="modal-content center">
            <div class="row">
                <div class="col s12 m12 center">
                    <h5 class="more-text">Update Data Agenda</h5>
                    <h5 class="divider"></h5>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <input type="hidden" name="id_agenda" class="id">
                    <label for="progress">Nama Agenda</label>
                    <input type="text" placeholder="Masukkan Nama" class="validate nama_agenda" name="nama_agenda" required>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <p for="tanggal_kehadiran">Mulai Kegiatan</p>
                    <div class="row">
                        <div class="col m8">
                            <input type="text" class="datepicker tanggal_mulai" name="tanggal_mulai">
                        </div>
                        <div class="col m4">
                            <input type="time" class="waktu_mulai" name="waktu_mulai">
                        </div>
                    </div>
                </div>

                <div class="input-field col s12 m6">
                    <p for="tanggal_kehadiran">Selesai Kegiatan</p>
                    <div class="row">
                        <div class="col m8">
                            <input type="text" class="datepicker tanggal_selesai" name="tanggal_selesai">
                        </div>
                        <div class="col m4">
                            <input type="time" class="waktu_selesai" name="waktu_selesai">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <label for="progress">Lokasi</label>
                    <input type="text" placeholder="Masukkan Lokasi" class="validate lokasi" name="lokasi" required>
                </div>

                <div class="input-field col s12 m6">
                    <label for="progress">PIC</label>
                    <input type="text" placeholder="Masukkan PIC" class="validate pic" name="pic" required>
                </div>   
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <label for="progress">Jumlah Peserta</label>
                    <input type="number" placeholder="Masukkan Jumlah" class="validate peserta" name="peserta" required>
                </div>

                <div class="input-field col s12 m6">
                    <select name="urgensi" class="urgensi">
                        <option value="Penting">Penting</option>
                        <option value="Umum">Umum</option>
				    </select>
                </div>   
            </div>

            <div class="row">
                <div class="input-field col s12 m6">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="deskripsi" placeholder="Masukkan Deskripsi" id="" cols="30" rows="10"></textarea>
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
