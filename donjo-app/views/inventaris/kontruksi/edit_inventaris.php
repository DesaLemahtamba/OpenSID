<div class="panel">
	<div class="panel-body">
		<section class="content">
			<div class='box box-default'>
				<div class='box-header with-border'>
					<h4 class='box-title'>Edit -
						<small>Data Inventaris Kontruksi Dalam Pengerjaan</small>
					</h4>
					<hr>
				</div>
				<div class='box-body'>
					<div class="form">
					<form class="form-horizontal" id="form_update_kontruksi" name="form_update_kontruksi" method="post" action="">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-sm-2 control-label " style="text-align:left;" for="nama_barang">Nama Barang / Jenis Barang</label>
								<div class="col-sm-9">
									<input maxlength="50" value="<?= $main->id; ?>" class="form-control" name="id" id="id" type="hidden"/>
									<input maxlength="50" value="<?= $main->nama_barang; ?>" class="form-control" name="nama_barang" id="nama_barang" type="text" required/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" style="text-align:left;" for="fisik_bangunan">Fisik Bangunan</label>
									<div class="col-sm-4">
										<select name="fisik_bangunan" id="fisik_bangunan" class="form-control" required>
											<option value="<?= $main->kondisi_bangunan; ?>"><?= $main->kondisi_bangunan; ?></option>
											<option value="Darurat">Darurat</option>
											<option value="Permanen">Permanen</option>
											<option value="Semi Permanen">Semi Permanen</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" style="text-align:left;" for="tingkat">Bangunan Bertingkat</label>
									<div class="col-sm-6">
										<div class="input-group">
											<input type="number" value="<?= $main->kontruksi_bertingkat; ?>" class="form-control" id="tingkat" name="tingkat" type="number"/>
											<span class="input-group-addon" id="koefisien_dasar_bangunan-addon">Lantai</span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" style="text-align:left;" for="bahan">Kontruksi Beton</label>
									<div class="col-sm-4">
										<select name="bahan" id="bahan" class="form-control">
											<?php if($main->kontruksi_beton == 0): ?>
												<option value='0'>Tidak</option>
												<option value='1'>Ya</option>
											<?php else: ?>
												<option value='1'>Ya</option>
												<option value='0'>Tidak</option>
											<?php endif; ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" style="text-align:left;" for="luas_bangunan">Luas</label>
									<div class="col-sm-4">
										<div class="input-group">
											<input type="number" value="<?= $main->luas_bangunan; ?>" class="form-control" id="luas_bangunan" name="luas_bangunan" type="number"/>
											<span class="input-group-addon" id="koefisien_dasar_bangunan-addon">M<sup>2</sup></span>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" style="text-align:left;" for="alamat">Letak / Lokasi </label>
									<div class="col-sm-9">
										<textarea class="form-control" name="alamat" id="alamat" required><?= $main->letak; ?></textarea>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-sm-2 control-label" style="text-align:left;" for="no_bangunan">Nomor Bangunan</label>
									<div class="col-sm-9">
										<input maxlength="50" value="<?= $main->no_dokument; ?>"  class="form-control" name="no_bangunan" id="no_bangunan" type="text"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" style="text-align:left;" for="tanggal_bangunan">Tanggal Dokumen Bangunan</label>
									<div class="col-sm-9">
										<input maxlength="50" value="<?= $main->tanggal_dokument; ?>" class="form-control" name="tanggal_bangunan" id="tanggal_bangunan" type="date"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" style="text-align:left;" for="tanggal_mulai">Tanggal Mulai </label>
									<div class="col-sm-4">
										<input class="form-control" value="<?= $main->tanggal; ?>" id="tanggal_mulai" name="tanggal_mulai" type="date" required/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" style="text-align:left;" for="status_tanah">Status Tanah</label>
									<div class="col-sm-9">
										<select name="status_tanah" id="status_tanah" class="form-control">
											<option value="<?= (!empty($main->status_tanah)? $main->status_tanah : '-' ); ?>"><?= (!empty($main->status_tanah)? $main->status_tanah : '-' ); ?></option>
											<option value="Tanah milik Pemda">Tanah milik Pemda</option>
											<option value="Tanah Negara">Tanah Negara (Tanah yang dikuasai langsung oleh Negara)</option>
											<option value="Tanah Hak Ulayat">Tanah Hak Ulayat (Tanah masyarakat Hukum Adat)</option>
											<option value="Tanah Hak">Tanah Hak (Tanah kepunyaan perorangan atau Badan Hukum)</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" style="text-align:left;" for="kode_tanah">Nomor Kode Tanah</label>
									<div class="col-sm-9">
										<input maxlength="50"  value="<?= (!empty($main->kode_tanah)? $main->kode_tanah : '-' ); ?>" class="form-control" name="kode_tanah" id="kode_tanah" type="text"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" style="text-align:left;" for="asal_usul" required>Asal Usul </label>
									<div class="col-sm-9">
										<select name="asal_usul" id="asal_usul" class="form-control">
											<option value="<?= $main->asal; ?>"><?= $main->asal; ?></option>
											<option value="Bantuan Kabupaten">Bantuan Kabupaten</option>
											<option value="Bantuan Pemerintah">Bantuan Pemerintah</option>
											<option value="Bantuan Provinsi">Bantuan Provinsi</option>
											<option value="Pembelian Sendiri">Pembelian Sendiri</option>
											<option value="Sumbangan">Sumbangan</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" style="text-align:left;" for="harga">Harga</label>
									<div class="col-sm-6">
										<div class="input-group">
											<span class="input-group-addon" id="koefisien_dasar_bangunan-addon">Rp</span>
											<input type="number" value="<?= $main->harga; ?>" class="form-control" id="harga" name="harga" type="text" required/>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" style="text-align:left;" for="keterangan">Keterangan</label>
									<div class="col-sm-9">
										<textarea rows="5" class="form-control" name="keterangan" id="keterangan"><?= $main->keterangan; ?></textarea>
									</div>
								</div>
							</div>
							<div class="pull-right" >
								<button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>

								<a href="<?= site_url() ?>inventaris_kontruksi" class="btn btn-default save"
									   id="btn_batal" name="yt1" type="button"/>Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<script>
	$(document).ready(function()
	{
		$("#form_update_kontruksi").validate(
		{
			submitHandler: function(form)
			{
				var formInput = new FormData($(form));
				formInput.append('nama_barang', $('#nama_barang').val());
				formInput.append('fisik_bangunan', $('#fisik_bangunan').val());
				formInput.append('tingkat', $('#tingkat').val());
				formInput.append('bahan', $('#bahan').val());
				formInput.append('luas_bangunan', $('#luas_bangunan').val());
				formInput.append('alamat', $('#alamat').val());
				formInput.append('no_bangunan', $('#no_bangunan').val());
				formInput.append('tanggal_bangunan', $('#tanggal_bangunan').val());
				formInput.append('tanggal_mulai', $('#tanggal_mulai').val());
				formInput.append('status_tanah', $('#status_tanah').val());
				formInput.append('kode_tanah', $('#kode_tanah').val());
				formInput.append('asal', $('#asal_usul').val());
				formInput.append('harga', $('#harga').val());
				formInput.append('keterangan', $('#keterangan').val());

				$.ajax(
				{
					url: '<?= site_url("api_inventaris_kontruksi/update"); ?>' + '/' + $('#id').val(),
					method: 'post',
					dataType: 'json',
					data: formInput,
					contentType: false,
					processData: false,
					success: function()
					{
						swal(
						{
							title: 'Sukses!',
							text: 'Berhasil Mengubah Data',
							type: 'success'
						});
						setTimeout(function()
						{
							window.location.href = '<?= site_url("inventaris_kontruksi"); ?>';
						}, 2000)
					},
					error: function(err){
						console.log('error',err);
					},
				});
			}
		});

	});

</script>