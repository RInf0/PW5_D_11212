@extends('dashboard')
@section('content')
<!-- Presensi member -->
<style>
    .gambarKelas {
      width: 300px;
    }
    .col-3 img {
      width: 240px;
      height: 160px;
      border-radius: 20px;
      border: 3px solid black;
    }
    .cont-card {
      padding: 20px;
      margin-left: 20px;
      margin-right: 20px;
    }
    p {
      margin: 3px;
      font-size: 14px;
    }
    h5{
      margin-left: 20px;
    }
    .col-md-4{
      width: 390px;
    }
    .tanggal{
      margin-left: 700px;
      margin-top: -155px;
    }
</style>
<div class="content">
  <div class="container-fluid">
    <br>
    <div class="card cont-card">
      <div class="row">
        <div class="col-3">
          <img src="https://www.fitnessfirst.co.id/id/-/media/project/evolution-wellness/fitness-first/south-east-asia/indonesia/classes/bodycombat/bodycombat_fb-sharing.png" alt="">
        </div>
        <div class="col-9">
          <h3>Body Combat</h3>
          <p><strong>Instruktur : {{ $classInfo['instruktur']}}</strong></p>
          <p><strong>Ruang : {{ $classInfo['ruang']}}</strong></p>
          <p><strong>Total Member : {{ $classInfo['totalMember']}}</strong></p>

          @if($classInfo['rating'] == 5)
          <div class="d-flex">
            <p><strong>Rating :</strong> </p>
            <h4>
            <ul class="mb-0 list-unstyled d-flex flexrow" style="color: Gold;">
              <li>
                <i class="fas fa-star fa-xs"></i>
              </li>
              <li>
                  <i class="fas fa-star fa-xs"></i>
              </li>
              <li>
                  <i class="fas fa-star fa-xs"></i>
              </li>
              <li>
                  <i class="fas fa-star fa-xs"></i>
              </li>
              <li>
                  <i class="fas fa-star fa-xs"></i>
              </li>
            </ul>
            </h4>
          </div> 
          @endif
          <div class="tanggal">
            <p><strong>Tanggal : {{ $classInfo['tgl']}}</strong></p>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-between cont ">
      <h5>Daftar Member</h5>
      <button type="button" class="btn btn-sm btn-success " id="showToastBtn">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height= "16" fill="currentColor" class="bi bi-check" viewBox="3 3 12 12">
          <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
        </svg>Presensi
      </button>
    </div>
    <div class="container">
      <br>
      <div class="row  justify-content-around">
        @forelse ($Cards as $card)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                  <div class="fill-data">
                    <td><img class="gambarKelas rounded" src="{{ $card['gambar']}}" alt=""></td>
                    <p class="card-title font-weight-bold">{{ $card['nama'] }}</p>
                    <p class="card-text">Email : {{ $card['email'] }}</p>
                    <p class="card-text">No Telp : {{ $card['noTelp'] }}</p>
                    <div class="jenis">
                      @if($card['jenis'] == "Gold")
                      <div class="d-flex">
                        <p>Jenis Kartu : </p>
                        <span class="badge badge-pill rounded-pill text-bg-warning text-white">{{ $card['jenis'] }}</span>
                      </div>
                      @elseif($card['jenis'] == "Silver")
                      <div class="d-flex">
                        <p>Jenis Kartu : </p>
                        <span class="badge badge-pill rounded-pill text-bg-secondary">{{ $card['jenis'] }}</span>
                      </div>
                      @elseif($card['jenis'] == "Black")
                      <div class="d-flex">
                         <p>Jenis Kartu : </p>
                         <span class="badge badge-pill rounded-pill text-bg-dark">{{ $card['jenis'] }}</span>
                      </div>
                      @endif
                    </div>
                    <div class="metode">
                      @if($card['metode'] == "Deposit Uang")
                      <div class="d-flex">
                        <p>Metode Pembayaran : </p>
                        <span class="badge badge-pill text-bg-success text-white">{{ $card['metode'] }}</span>
                      </div>
                      @elseif($card['metode'] == "Deposit Kelas")
                      <div class="d-flex">
                        <p>Metode Pembayaran : </p>
                        <span class="badge badge-pill text-bg-primary text-white">{{ $card['metode'] }}</span>
                      </div>
                      @endif
                    </div>
                  </div>
                </div>
            </div>
        </div>
        @empty
        <div class="alert alert-danger">Data Kelas masi kosong</div>
        @endforelse
      </div>
    </div>
  </div>
</div>
<script>
        $(document).ready(function() {
            $('#showToastBtn').click(function() {
                $('.toast').toast('show');
            });
        });
        </script>
@endsection