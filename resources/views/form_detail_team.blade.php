@extends('layout.headerfooter') @section('link')
<link rel="stylesheet" href="/css/login_detailform_registeralpro.css"> @endsection @section('content')

<div class="container">
	<div class="row main">
		<div class="main-login main-center">
			<h5 style="margin: 20px 0;">Lengkapi data team kamu!!</h5>
			<form class="" method="post" action="{{ route('create.team') }}">
				{{ csrf_field() }}
				<input type="text" name="id_users" value="{{ $id }}" hidden="true">
				<div class="row">
					<div class="col-sm-12 col-lg-12 col-md-12" style="margin-bottom: 30px">
						<div class="form-group">
							<label for="namateam" class="cols-sm-2 control-label">Nama Team</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" required class="form-control" value="{{ old('nama_team') }}" name="nama_team" id="namateam" placeholder="Masukkan Nama Team" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="namateam" class="cols-sm-2 control-label">Kota</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" required class="form-control" value="{{ old('kota') }}" name="kota" id="kota" placeholder="Masukkan Asal Kota" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="asalsekolah" class="cols-sm-2 control-label">Asal Sekolah</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" required class="form-control" value="{{ old('asal_sekolah') }}" name="asal_sekolah" id="asalsekolah" placeholder="Masukkan Nama Sekolah" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="namapembina" class="cols-sm-2 control-label">Nama Pembina (opsional)</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="nama_pembina" value="{{ old('nama_pembina') }}" id="namapembina" placeholder="Masukkan Nama Pembina" />
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="telppembina" class="cols-sm-2 control-label">No. Telp Pembina (optional)</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="number" class="form-control" name="no_telp_pembina" value="{{ old('no_telp_pembina') }}" id="telppembina" placeholder="Masukkan No. Telp Pembina" />
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-sm-12 col-md-6">
						<p class="title-participan">Data Ketua</p>
						<div class="form-group">
							<label for="namaketua" class="cols-sm-2 control-label">Nama Lengkap</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" required class="form-control" value="{{ old('nama_lengkap_ketua') }}" name="nama_lengkap_ketua" id="namaketua" placeholder="Masukkan Nama Lengkap" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="tempat_lahir_ketua" class="cols-sm-2 control-label">Tempat Lahir</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" required class="form-control" value="{{ old('tempat_lahir_ketua') }}" name="tempat_lahir_ketua" id="tempat_lahir_ketua" placeholder="Masukan Tempat Lahir" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="tanggal_lahir_ketua" class="cols-sm-2 control-label">Tanggal Lahir</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="date" required class="form-control" value="{{ old('tanggal_lahir_ketua') }}" name="tanggal_lahir_ketua" id="tanggal_lahir_ketua" placeholder="Masukkan Tanggal Lahir" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="alamat_ketua" class="cols-sm-2 control-label">Alamat</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" required class="form-control" value="{{ old('alamat_ketua') }}" name="alamat_ketua" id="alamat_ketua" placeholder="Masukkan Alamat Rumah" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="telpketua" class="cols-sm-2 control-label">No. Telp</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="number" required class="form-control" value="{{ old('no_telp_ketua') }}" name="no_telp_ketua" id="telpketua" placeholder="Masukkan No. Telp" />
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-sm-12 col-md-6">
						<p class="title-participan">Data Anggota (optional)</p>
						<div class="form-group">
							<label for="namaanggota" class="cols-sm-2 control-label">Nama Lengkap</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" value="{{ old('nama_lengkap_anggota') }}" name="nama_lengkap_anggota" id="namaanggota" placeholder="Masukkan Nama Lengkap" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="tempat_lahir_anggota" class="cols-sm-2 control-label">Tempat Lahir</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" value="{{ old('tempat_lahir_anggota') }}" name="tempat_lahir_anggota" id="tempat_lahir_anggota" placeholder="Masukan Tempat Lahir" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="tanggal_lahir_anggota" class="cols-sm-2 control-label">Tanggal Lahir</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="date" class="form-control" value="{{ old('tanggal_lahir_anggota') }}" name="tanggal_lahir_anggota" id="tanggal_lahir_anggota" placeholder="Masukkan Tanggal Lahir" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="alamat_anggota" class="cols-sm-2 control-label">Alamat</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" value="{{ old('alamat_anggota') }}" name="alamat_anggota" id="alamat_anggota" placeholder="Masukkan Alamat Rumah" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="telpanggota" class="cols-sm-2 control-label">No. Telp</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="number" class="form-control" value="{{ old('no_telp_anggota') }}" name="no_telp_anggota" id="telpanggota" placeholder="Masukkan No. Telp" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div style="margin-bottom: 20px">
					@if($errors->has('nama_team'))
					<span class="text-danger">
					            *{{ $errors->first('nama_team') }}
					        </span> @elseif ($errors->has('kota'))
					<span class="text-danger">
					                *{{ $errors->first('kota') }}
					            </span> @elseif ($errors->has('asal_sekolah'))
					<span class="text-danger">
					                *{{ $errors->first('asal_sekolah') }}
					            </span> @elseif ($errors->has('nama_pembina'))
					<span class="text-danger">
					                *{{ $errors->first('nama_pembina') }}
					            </span> @elseif ($errors->has('no_telp_pembina'))
					<span class="text-danger">
					                *{{ $errors->first('no_telp_pembina') }}
					            </span> @elseif ($errors->has('nama_lengkap_ketua'))
					<span class="text-danger">
					                *{{ $errors->first('nama_lengkap_ketua') }}
					            </span> @elseif ($errors->has('tempat_lahir_ketua'))
					<span class="text-danger">
					                *{{ $errors->first('tempat_lahir_ketua') }}
					            </span> @elseif ($errors->has('tanggal_lahir_ketua'))
					<span class="text-danger">
					                *{{ $errors->first('tanggal_lahir_ketua') }}
					            </span> @elseif ($errors->has('alamat_ketua'))
					<span class="text-danger">
					                *{{ $errors->first('alamat_ketua') }}
					            </span> @elseif ($errors->has('no_telp_ketua'))
					<span class="text-danger">
					                *{{ $errors->first('no_telp_ketua') }}
					            </span> @elseif ($errors->has('nama_lengkap_anggota'))
					<span class="text-danger">
									*{{ $errors->first('nama_lengkap_anggota') }}
								</span> @elseif ($errors->has('tempat_lahir_anggota'))
					<span class="text-danger">
									*{{ $errors->first('tempat_lahir_anggota') }}
								</span> @elseif ($errors->has('tanggal_lahir_anggota'))
					<span class="text-danger">
									*{{ $errors->first('tanggal_lahir_anggota') }}
								</span> @elseif ($errors->has('alamat_anggota'))
					<span class="text-danger">
									*{{ $errors->first('alamat_anggota') }}
								</span> @elseif ($errors->has('no_telp_anggota'))
					<span class="text-danger">
									*{{ $errors->first('no_telp_anggota') }}
								</span> @endif
				</div>
				<div>
					<button type="submit" id="btn-create-team" class="btn btn-success btn-block">Simpan</a>
						</div>
					</form>
				</div>
			</div>
</div>
@endsection
