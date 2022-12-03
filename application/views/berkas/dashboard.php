<div class="row show-on-large hide-on-small-only" >
    <div class="col s12 ">
        <div class="card">
            <div class="card-content margin" style="margin: 12px;">
                <div class="row">
                    <div class="col s6 m6 l6">
                        <h4 class="cardbox-text light left margin">Daftar Berkas</h4>
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
                    <th >Created At</th>
                    <th >Nama Berkas</th>
                    <th >Url Berkas</th>
                    <th class="center">AKSI</th>
                </tr>
                </thead>
                <tbody>
				<?php
				foreach ($berkas as $value):
                ?>
                <tr>
                    <td class="teal-text text-darken-1"><?= $value->created_at ?></td>
                    <td class="grey-text text-darken-1"><?= $value->nama_berkas ?></td>
                    <td class="grey-text text-darken-1"><?= $value->url_berkas ?></td>
                    <td>
                        <div class="row">
								<a href="#modal-edit" class="btn-flat waves-effect waves-orange col l6 center modal-trigger btn-edit1"
                                 title="ubah data">
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
    <?=form_open('berkas')?>
        <div class="modal-content center">
            <div class="row">
                <div class="col s12 m12 center">
                    <h5 class="more-text">Tambah Data Berkas</h5>
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
                    <label for="nama_kegiatan">Nama Berkas</label>
                    <input type="text" name="nama_berkas">
                </div>

                <div class="input-field col s12 m6">
                    <label for="progress">URL Berkas</label>
                    <input type="text" name="url_berkas">
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
    <?=form_open('berkas')?>
        <div class="modal-content center">
            <div class="row">
                <div class="col s12 m12 center">
                    <h5 class="more-text">Update Data Berkas</h5>
                    <h5 class="divider"></h5>
                </div>

                <div class="col s12 m1">
                    <h3 class="grey-text">
                        <i class="mdi-action-perm-identity"></i>
                    </h3>
                </div>
            </div>

            <input type="hidden" name="id_berkas" class="id">

            <div class="row">
                <div class="input-field col s12 m6">
                    <label for="total_anggaran">Nama Berkas</label>
                    <input type="text" name="nama_berkas" class="ta">
                </div>

                <div class="input-field col s12 m6">
                    <label for="realisasi_anggaran">URL Berkas</label>
                    <input type="text" class="real" name="url_berkas">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="simpan" class="waves-effect waves-red btn-flat modal-action modal-close">lanjutkan</button>
            <a href="#!" class="waves-effect btn-flat modal-action modal-close">Batalkan</a>
        </div>
    <?=form_close()?>
</div>
