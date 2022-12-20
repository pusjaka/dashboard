<div class="row show-on-large hide-on-small-only">
	<div class="col s12 ">
		<div class="card">
			<div class="card-content margin" style="margin: 12px;">
				<div class="row">
					<div class="col s6 m6 l6">
						<h4 class="cardbox-text light left margin">Ubah Password</h4>
					</div>
				</div>
			</div>

			<br>
			<div class="divider"></div>
			<?=form_open('ubah-password')?>
            <div class="card-content margin" style="margin: 12px;">
				<div class="row">
                    <div class="input-field col s12 m6">
						<label for="nama_kegiatan">Password Lama</label>
						<input type="password" placeholder="Masukkan Password Lama" class="validate" name="password_lama"
							required>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12 m6">
						<label for="progress">Password Baru</label>
						<input type="password" id="password" placeholder="Masukkan Password Baru" class="validate" name="password_baru"
							required>
					</div>

                    <div class="input-field col s12 m6">
						<label for="progress">Ulangi Password</label>
						<input type="password" id="confirm" placeholder="Ulangi Password" class="" name="password_validate"
							required>
					</div>

                    <button type="submit" name="submit" class="waves-effect waves-red btn-flat red-text">Ubah Password</button>
				</div>
            </div>
			<?=form_close()?>
		</div>
	</div>
</div>
