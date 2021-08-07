@extends('layouts.app')
@section('content')    
<div class="row h-100">        
<div class="py-4 pl-5 pr-2 h-100 col-7">  
        <h4 class="mb-4">Transaksi</h4>
            <div class="card border-0 p-3">
                <canvas id="chart_transaksi"></canvas>
              </div>
        <h4 class="my-4">Riwayat</h4>
        <div class="row">
            <div class="col-12">
                <div class="card border-0">                
                    <div class="container d-flex py-2">                                                                                                        
                        <p class="mb-0 ml-3 mr-4 secondary-text-color">01</p>    
                        <p class="mb-0 mx-5">Transaksi #29</p>                    
                        <p class="mb-0 mx-5 secondary-text-color">24 April 2021 20.14 WIB</p>           
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
<div class="col-4 py-5">
    <div class="row py-4">        
        <div class="col-6">
            <div class="card border-0 p-4">
                <div class="">
                    <span class="active icon-32 icon icon-pegawai"></span>
                </div>
                <div class="">
                    <p class="mt-3 mb-0 subBody-text grey-dark-text">Total Pegawai</p>                
                    <p class="admin-text">24</p>
                </div>            
            </div>            
        </div>
        <div class="col-6">
            <div class="card border-0 p-4">
                <div class="">
                    <span class="active icon-32 icon icon-menu"></span>
                </div>
                <div class="">
                    <p class="mt-3 mb-0 subBody-text grey-dark-text">Total Menu</p>                
                    <p class="admin-text">24</p>
                </div>            
            </div>  
        </div>
        <div class="col-12 mt-4">
            <div class="card border-0 p-4">
                <div class="mb-3 align-self-center">
                    <h4 class="">Laporan Keuangan</h4>                
                </div>          
                <div class="mb-3">
                    <p class="mb-2 secondary-text-color">Total Pemasukan</p>
                    <h4>Rp 4.123.423.643</h4>                    
                </div>      
                <div class="mb-3">
                    <p class="mb-2 secondary-text-color">Total Pengeluaran</p>
                    <h4>Rp 500.293.241</h4>                    
                </div>  
                <div class="d-grid mt-3">
                    <button class="btn py-2 color-primary w-100 button-text">Download PDF</button>
                </div>    
            </div>   
        </div>
    </div>
</div>         
</div> 
@endsection
@push('scripts')
<script>        
    const labels = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
    ];
    const data = {
        labels: labels,
        datasets: [
            {
                label: 'Total Penghasilan',
                backgroundColor: '#FEBD2E',
                fill: false,
                borderColor: '#FEBD2E',
                data: [5, 20, 15, 20, 20, 20],
            },
            {
                label: 'Total Pengeluaran',
                backgroundColor: '#2EB3FE',
                borderColor: '#2EB3FE',
                data: [20, 30, 25, 10, 15, 30]
            }            
        ]
    };
    const config = {
    type: 'line',
    data,
    options: {        
        scale: {            
            ticks: {
                display: false
            }
        },
        elements: {                        
            point:{
                radius: 0
            }            
        }
    }
    };
    var myChart = new Chart(
        $('#chart_transaksi')[0],
      config
    );
  </script>
@endpush