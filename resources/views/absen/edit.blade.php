@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

<style>
    .form {
        background-color: #fff;
        width: 85%;
        padding: 10px;
        margin-top: 2rem;
        box-shadow: 0 2px 20px rgb(177, 187, 245);
    }
    h2 {
        font-family: 'Droid serif', serif;
        font-size: 36px; font-weight: 400;
        line-height: 44px;
    }
}
    </style>

@section('isikonten')

@section('judulhalaman', 'Edit Absen')

<h2>{{ $judul }}</h2>

@foreach($absen as $p)

	<form action="/absen/update" method="post" class="form form-horizontal">
		{{ csrf_field() }}

        <div class="form-body">
            <div class="row">

                <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                    <input type="hidden" name="id" value="{{ $p->ID }}">
                    <label>Nama Pegawai</label>
                </div>
                <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
                <select id="IDPegawai" name="IDPegawai" required="required">
                    @foreach($pegawai as $peg)
                        <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                    @endforeach
                </select>
                </div>

            <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                <label>Tanggal</label>
            </div>
             <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
                <input class="form-control" type="datetime-local" name="Tanggal" value="{{ $p->Tanggal }}"></input>
            </div>

            <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                <label>Status Kehadiran</label>
            </div>
             <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
            <input type="radio" id="hadir" name="Status" value="H" @if ($p->Status === "H") checked="checked" @endif>
            <label for="hadir">HADIR</label>
            <input type="radio" id="tidak" name="Status" value="T" @if ($p->Status === "T") checked="checked" @endif>
            <label for="tidak">TIDAK HADIR</label>
             </div>
            </div>

             <div class="row mb-3" style="margin-top: 1rem; margin-bottom:1rem text-align">
                <div class="col-sm-6">
                      <button type="submit" id="submit" value="Simpan Data" class="btn btn-primary">Kirim</button>
                </div>
              <div class="col-sm-6">
                      <button type="reset" id="reset" value="reset" class="btn btn-warning">
                        <a href="/absen"> Kembali</a>
                      </button>
              </div>

            </div>
        </form>
	@endforeach

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
    config = {
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    altInput: true,
    altFormat: "F, j, Y (h:s:K )"
    }
    flatpickr("input[type=datetime-local]",config);

  </script>


    @endsection
