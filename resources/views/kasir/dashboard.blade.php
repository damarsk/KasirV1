@extends('admin.template.master')

@section('content')

<div class="content-wrapper d-flex align-items-center justify-content-center" style="min-height: 100vh;">
  <div class="text-center">
    <p style="font-size: 24px;">👋Halo, {{ Auth::user()->name }}</p>
    <h4 style="color: #6a11cb;">Anda login sebagai kasir</h4>
    <a href="{{ route('penjualan.create') }}" class="btn btn-primary mt-3" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%); border: none; border-radius: 50px; padding: 10px 25px; font-weight: 500;">
      Buat Transaksi Baru
    </a>
  </div>
</div>

@endsection
