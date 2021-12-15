@extends('layout.ceria')

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
    </style>
@section('title', 'Data Karyawan')
@section('isikonten')

	<h2>Data Karyawan</h2>

	<form class="form form-horizontal" action="/karyawan1/store" method="post">
		{{ csrf_field() }}
        <div class="form-body">
            <div class="row">

                <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                    <label>NIP</label>
                </div>
                <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
                    <input type="text" name="NIP" required="required" maxlength="9" minlength="9">
                </div>

                <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                    <label>Nama</label>
                </div>
                <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
                    <input type="text" name="Nama" required="required">
                </div>

                <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                    <label>Pangkat</label>
                </div>
                <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
                    <input type="text" name="Pangkat" required="required">
                </div>

                <div class="col-md-4" style="margin-top: 1rem; margin-bottom:1rem">
                    <label>Gaji</label>
                </div>
                <div class="col-md-8 form-group" style="margin-top: 1rem; margin-bottom:1rem">
                    <input type="text" name="Gaji" id="rupiah" required="required"></input>
                </div>
            </div>

            <div class="row mb-3" style="margin-top: 1rem; margin-bottom:1rem">
              <div class="col-sm-6">
                      <button type="reset" id="reset" value="reset" class="btn btn-warning">
                        <a href="/karyawan1"> Kembali</a>
                      </button>
              </div>
              <div class="col-sm-6">
                <button type="submit" id="submit" value="Simpan Data" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </div>
        </form>

        <script type="text/javascript">
            var rupiah = document.getElementById('rupiah');
            rupiah.addEventListener('keyup', function(e){
                // tambahkan 'Rp.' pada saat ketik nominal di form kolom input
                // gunakan fungsi formatRupiah() untuk mengubah nominal angka yang di ketik menjadi format angka
                rupiah.value = formatRupiah(this.value, 'Rp. ');
            });
            /* Fungsi formatRupiah */
            function formatRupiah(angka, prefix){
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split           = number_string.split(','),
                sisa             = split[0].length % 3,
                rupiah             = split[0].substr(0, sisa),
                ribuan             = split[0].substr(sisa).match(/\d{3}/gi);

                // tambahkan titik jika yang di input sudah menjadi angka satuan ribuan
                if(ribuan){
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
            }
        </script>

@endsection
