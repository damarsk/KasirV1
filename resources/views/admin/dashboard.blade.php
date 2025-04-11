@extends('admin.template.master')

 @section('css')
<style>
  .gradient-card-blue {
    background: linear-gradient(135deg, #2193b0 0%, #6dd5ed 100%);
    border: none;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  }
  .gradient-card-green {
    background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
    border: none;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  }
  .gradient-card-orange {
    background: linear-gradient(135deg, #f46b45 0%, #eea849 100%);
    border: none;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  }
  .gradient-card-purple {
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    border: none;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  }
  .card-stats {
    transition: all 0.3s ease;
    overflow: hidden;
  }
  .card-stats:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
  }
  .card-stats .icon {
    font-size: 60px;
    opacity: 0.4;
    position: absolute;
    right: 15px;
    bottom: 15px;
  }
  .card-stats .inner {
    padding: 20px;
    color: white;
  }
  .card-stats h3 {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 10px;
  }
  .card-stats p {
    font-size: 18px;
    margin-bottom: 0;
    font-weight: 500;
  }
  .card-stats .small-box-footer {
    background: rgba(255, 255, 255, 0.2);
    color: white;
    padding: 10px;
    text-align: center;
    font-weight: 500;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
  }
  .modern-card {
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
    border: none;
    overflow: hidden;
    margin-bottom: 25px;
  }
  .modern-card .card-header {
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    color: white;
    border: none;
    padding: 15px 20px;
    font-weight: 600;
  }
  .modern-card .card-body {
    padding: 20px;
  }
  .table-transactions th {
    border-top: none;
    border-bottom: 2px solid #e9ecef;
    font-weight: 600;
    color: #495057;
  }
  .table-transactions td {
    vertical-align: middle;
  }
  .status-badge {
    padding: 5px 10px;
    border-radius: 50px;
    font-size: 12px;
    font-weight: 600;
  }
  .status-success {
    background-color: rgba(40, 167, 69, 0.2);
    color: #28a745;
  }
  .status-pending {
    background-color: rgba(255, 193, 7, 0.2);
    color: #ffc107;
  }
</style>
@endsection

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-3">
          <div class="col-sm-6">
            <h1 class="m-0" style="font-weight: 700; color: #333;">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#" style="color: #6a11cb;">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box gradient-card-blue card-stats">
              <div class="inner">
                <h3>{{ \App\Models\Penjualan::count() }}</h3>
                <p>Total Transaksi</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('penjualan.index') }}" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box gradient-card-green card-stats">
              <div class="inner">
                <h3>Rp {{ number_format(\App\Models\Penjualan::sum('TotalHarga'), 0, ',', '.') }}</h3>
                <p>Total Pendapatan</p>
              </div>
              <div class="icon">
                <i class="ion ion-cash"></i>
              </div>
              <a href="{{ route('penjualan.index') }}" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box gradient-card-orange card-stats">
              <div class="inner">
                <h3>{{ \App\Models\Produk::count() }}</h3>
                <p>Total Produk</p>
              </div>
              <div class="icon">
                <i class="ion ion-cube"></i>
              </div>
              <a href="{{ route('produk.index') }}" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box gradient-card-purple card-stats">
              <div class="inner">
                <h3>{{ \App\Models\Produk::sum('Stok') }}</h3>
                <p>Total Stok</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ route('produk.index') }}" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Transaksi Terbaru -->
            <div class="card modern-card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-shopping-cart mr-1"></i>
                  Transaksi Terbaru
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-hover table-transactions">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                        $latestTransactions = \App\Models\Penjualan::join('users', 'penjualans.UsersId', '=', 'users.id')
                          ->leftJoin('bayars', 'penjualans.id', '=', 'bayars.PenjualanId')
                          ->select('penjualans.*', 'users.name', 'bayars.StatusBayar')
                          ->orderBy('penjualans.created_at', 'desc')
                          ->take(5)
                          ->get();
                      @endphp
                      @forelse($latestTransactions as $transaction)
                        <tr>
                          <td>{{ $transaction->id }}</td>
                          <td>{{ \Carbon\Carbon::parse($transaction->TanggalPenjualan)->format('d M Y') }}</td>
                          <td>Rp {{ number_format($transaction->TotalHarga, 0, ',', '.') }}</td>
                          <td>
                            @if(isset($transaction->StatusBayar) && $transaction->StatusBayar == 'Lunas')
                              <span class="status-badge status-success">Lunas</span>
                            @else
                              <span class="status-badge status-pending">Pending</span>
                            @endif
                          </td>
                        </tr>
                      @empty
                        <tr>
                          <td colspan="4" class="text-center">Belum ada transaksi</td>
                        </tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>
              </div><!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="{{ route('penjualan.index') }}" class="btn btn-sm" style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); color: white; border-radius: 50px; padding: 8px 20px; font-weight: 500;">Lihat Semua Transaksi</a>
              </div>
            </div>
            <!-- /.card -->

            <!-- Grafik Penjualan -->
          </section>
          <!-- /.Left col -->
          
          <!-- right col -->
          <section class="col-lg-5 connectedSortable">
            <!-- Produk Terlaris -->
            <div class="card modern-card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-star mr-1"></i>
                  Produk Terlaris
                </h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  @php
                    $topProducts = \App\Models\DetailPenjualan::join('produks', 'detail_penjualans.ProdukId', '=', 'produks.id')
                      ->select('produks.id', 'produks.NamaProduk', 'produks.Harga', \DB::raw('SUM(detail_penjualans.JumlahProduk) as total_sold'))
                      ->groupBy('produks.id', 'produks.NamaProduk', 'produks.Harga')
                      ->orderByDesc('total_sold')
                      ->take(5)
                      ->get();
                  @endphp
                  @forelse($topProducts as $product)
                    <li class="item">
                      <div class="product-info">
                        <a href="javascript:void(0)" class="product-title">
                          {{ $product->NamaProduk }}
                          <span class="badge badge-info float-right">{{ $product->total_sold }} Terjual</span>
                        </a>
                        <span class="product-description">
                          Rp {{ number_format($product->Harga, 0, ',', '.') }}
                        </span>
                      </div>
                    </li>
                  @empty
                    <li class="item">
                      <div class="product-info text-center">
                        Belum ada data produk
                      </div>
                    </li>
                  @endforelse
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
      
@endsection