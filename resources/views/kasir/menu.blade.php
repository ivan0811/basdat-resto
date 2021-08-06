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
        <h4 class="my-4">Makanan</h4>
        <div class="row">
            <div class="col-4">
                <div class="card border-0 d-flex justify-content-between">                
                    <div class="container">
                        <img src="" alt="">                
                        <div>
                            <h6>Ramen</h6>
                            <p class="primary-text-color">Rp 5000</p>
                        </div>
                        <div>
                            <div class="d-grid mb-2">
                                <small class="secondary-text-color">Level</small>                        
                            </div>                            
                            <label for="lv0" class="lv-checkbox mr-2">                                
                                <p class="mb-0 py-1 px-1">0</p>                                
                                <input type="checkbox" name="" id="lv0">
                            </label>
                            <label for="lv1" class="lv-checkbox mr-2">                                
                                <p class="mb-0 py-1 px-1">1</p>                                
                                <input type="checkbox" name="" id="lv1">
                            </label>
                            <label for="lv2" class="lv-checkbox mr-2">                                
                                <p class="mb-0 py-1 px-1">2</p>                                
                                <input type="checkbox" name="" id="lv2">
                            </label>
                            <label for="lv3" class="lv-checkbox mr-2">                                
                                <p class="mb-0 py-1 px-1">3</p>                                
                                <input type="checkbox" name="" id="lv3">
                            </label>
                            <label for="lv4" class="lv-checkbox mr-2">                                
                                <p class="mb-0 py-1 px-1">4</p>                                
                                <input type="checkbox" name="" id="lv4">
                            </label>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <div class="d-flex">
                                <button id="minus" class="btn" style="width: 30px; height: 30px">
                                    <span class="icon icon-minus grey-dark icon-mask" style="width: 14px; height: 2px"></span>
                                </button>
                                    <p class="mb-0 mx-3 my-1">1</p>
                                <button id="plus" class="btn" style="width: 30px; height: 30px">
                                    <span class="icon icon-plus grey-dark icon-13" style="width: 14px; height: 13px"></span>
                                </button>
                            </div>
                            <button class="btn color-primary" style="height:40px">
                                <span class="icon icon-cart-add white icon-24"></span>
                            </button>
                        </div>
                    </div>                    
                </div>
            </div>
            <div class="col-4">
                <div class="card border-0">
                    
                </div>
            </div>
            <div class="col-4">
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
                <h4>Transaksi</h4>            
                <p>24 Agustus 2021</p>
            </div>                        
            <div class="h-100 detail-overflow-box">
                <div class="detail-item px-3">
                    <div class="d-flex justify-content-between">
                        <img src="" alt="">
                        <div>
                            <p class="mb-2">Ramen</p>
                            <div class="d-flex mb-2">
                                <button id="minus" class="btn" style="width: 30px; height: 30px">
                                    <span class="icon icon-minus grey-dark icon-mask" style="width: 14px; height: 2px"></span>
                                </button>
                                    <p class="mb-0 mx-3 my-1">1</p>
                                <button id="plus" class="btn" style="width: 30px; height: 30px">
                                    <span class="icon icon-plus grey-dark icon-13" style="width: 14px; height: 13px"></span>
                                </button>
                            </div>
                            <p>Kuah Kari</p>                            
                        </div>
                        <div>
                            <p class="primary-text-color">Level 3, 2</p>
                            <p class="secondary-text-color">Rp 68000</p>
                            <p class="secondary-text-color">Rp 5000</p>
                        </div>                        
                    </div>
                </div>
                <div class="detail-item">
                    
                </div>
                <div class="detail-item">
                    
                </div>
                <div class="detail-item">
                    
                </div>
            </div>
            <div class="summary-box">
                <div class="px-3 mb-3">
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
                    <div class="d-grid">
                        <button class="btn color-primary w-100">Bayar</button>
                    </div>     
                </div>                               
            </div>
        </div>
    </aside>
</div>     
</div> 
@endsection