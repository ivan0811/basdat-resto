@extends('layouts.app')
@section('content')    
<div class="d-flex h-100">        
<div class="container-fluid py-4 px-5 h-100">                        
            <h4 class="mb-5">Riwayat Transaksi</h4>                  
        <div class="row">
            <div class="col-12">                
                <form action="">
                    <div class="mb-5">
                        <input type="text" placeholder="Cari Transaksi" class="form-control custom-textfield search">
                    </div>                    
                </form>
            </div>            
            @php
                $no = 0;
            @endphp
            @foreach ($transaksi as $item)
            <div class="col-12 mb-3">
                <div onclick="" class="card border-0 card-pointer">                
                    <div class="container d-flex py-2">                                                                                                        
                        <p class="mb-0 ml-3 mr-4 secondary-text-color">{{$no++}}</p>    
                        <p class="mb-0 mx-5">Transaksi #{{(int)substr($item->kd_transaksi, 2)}}</p>                    
                        <p class="mb-0 mx-5 secondary-text-color">{{$item->created_at}}</p>           
                    </div>                    
                </div>
            </div>
            @endforeach                        
        </div>                    
</div>  
<div class="p-0" style="width: 500px">            
    <aside class="sidebar-right">
        <div class="d-flex h-100">
            <div class="align-self-center mx-auto">
                <div class="img-detail-menu"></div>                   
                <h5 class="text--grey mb-0 mt-5">Belum ada transaksi</h5>
            </div>            
        </div>
    </aside>
</div>     
</div> 
@endsection
@push('scripts')
    
@endpush