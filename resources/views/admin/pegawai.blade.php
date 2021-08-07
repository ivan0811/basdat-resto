@extends('layouts.app')
@section('content')    
<div class="d-flex h-100">        
<div class="container-fluid py-4 px-5 h-100">                                        
        <div class="d-flex justify-content-between">
            <h4 class="my-4">Makanan</h4>
            <button class="btn color-primary my-4">Tambah Pegawai</button>
        </div>        
        <div class="row">
            @foreach ($user as $item)
            @if ($item->id == 1)
                @continue
            @endif
            <div class="col-4 mb-4">
                <div class="card border-0 d-flex justify-content-between">                
                    <div class="container">
                        <img src="" alt="">                
                        <div>
                            <h6>{{$item->pegawai[0]->nama}}</h6>
                            <p class="primary-text-color">{{$item->role}}</p>
                        </div>                      
                        <div class="d-flex justify-content-end mb-3">                            
                            <button class="btn color-primary-outline mr-2">Ubah</button>                                                        
                            <button class="btn color-primary-outline">Hapus</button>                            
                        </div>
                    </div>                    
                </div>            
            </div>
            @endforeach            
            <div class="col-3">
                <div class="card border-0">
                    
                </div>
            </div>
            <div class="col-3">
                <div class="card border-0">
                    
                </div>
            </div>
        </div>                    
</div>  
<div class="p-0" style="width: 500px">            
    <aside class="sidebar-right">
        {{-- <div class="d-flex h-100">
            <div class="align-self-center mx-auto">
                <div class="img-detail-menu"></div>                   
                <h5 class="text--grey mb-0 mt-5">Belum ada transaksi</h5>
            </div>            
        </div>         --}}        
        <div class="d-flex flex-column h-100 py-4">
            <div class="px-3 mb-3">
                <h4>Detail Pegawai</h4>            
                <p>24 Agustus 2021</p>
            </div>                                  
            <div class="summary-box">
                <div class="px-3 mb-3">
                    <img src="" alt="">
                    <h4>Ringkasan</h4>                
                    <div class="d-flex justify-content-between mb-3">
                        <p class="mb-0 secondary-text-color">Jumlah Item</p>
                        <p class="mb-0">11</p>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p class="mb-0 secondary-text-color">Pajak</p>
                        <p class="mb-0">Rp 26000</p>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p class="mb-0 secondary-text-color">Total Harga</p>
                        <p class="mb-0">Rp 293700</p>
                    </div>                                
                </div>                               
            </div>
        </div>
    </aside>
</div>     
</div> 
@endsection