@extends('layouts.app')
@section('content')    
<div class="d-flex h-100">        
<div class="container-fluid py-4 px-5 h-100">                        
            <h4 class="mb-4">Pilih Kategori</h4>
        <div class="d-flex mb-3">
            <div class="card border-0 mr-4 pt-3">
                <div class="container">
                    <div class="icon icon-ramen icon-48"></div>
                    <p>Makanan</p>
                </div>            
            </div>        
            <div class="card border-0 mr-4 pt-3">
                <div class="container">
                    <div class="icon icon-juice icon-48"></div>
                    <p>Minuman</p>
                </div>            
            </div>        
            <div class="card border-0 mr-4 pt-3">
                <div class="container">
                    <div class="icon icon-dango icon-48"></div>
                    <p>Cemilan</p>
                </div>            
            </div>        
        </div>        
        <div class="d-flex justify-content-between">
            <h4 class="my-4">Makanan</h4>
            <button class="btn color-primary my-4">Tambah Menu</button>
        </div>        
        <div class="row">
            <div class="col-3">
                <div class="card border-0 d-flex justify-content-between">                
                    <div class="container">
                        <img src="" alt="">                
                        <div>
                            <h6>Ramen</h6>
                            <p class="primary-text-color">Rp 5000</p>
                        </div>                      
                        <div class="d-flex justify-content-end mb-3">                            
                            <button class="btn color-primary-outline mr-2">Ubah</button>                                                        
                            <button class="btn color-primary-outline">Hapus</button>                            
                        </div>
                    </div>                    
                </div>
            </div>
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
</div> 
@endsection