@extends('layouts.app')
@section('content')    
<div class="d-flex h-100">        
<div class="container-fluid py-4 px-5 h-100">                        
            <h4 class="mb-4">Pilih Kategori</h4>
        <div class="d-flex mb-3">
            <div onclick="selectTab(this, 'makanan')" class="card mr-4 pt-3 custom-tabs subBody-text active">
                <div class="container">
                    <div class="d-flex mb-2">
                        <div class="icon icon-ramen icon-48 mx-auto"></div>
                    </div>                    
                    <p>Makanan</p>
                </div>            
            </div>        
            <div onclick="selectTab(this, 'minuman')" class="card mr-4 pt-3 custom-tabs subBody-text">
                <div class="container">
                    <div class="d-flex mb-2">
                        <div class="icon icon-juice icon-48 mx-auto"></div>
                    </div>                   
                    <p>Minuman</p>
                </div>            
            </div>        
            <div onclick="selectTab(this, 'cemilan')" class="card mr-4 pt-3 custom-tabs subBody-text">
                <div class="container">
                    <div class="d-flex mb-2">
                        <div class="icon icon-dango icon-48 mx-auto"></div>
                    </div>                                   
                    <p>Cemilan</p>
                </div>            
            </div>        
        </div>        
        <div id="tabMenu">
            <div class="active" id="makanan" role="tabpanel">
                <h4 class="my-4">Makanan</h4>
                    <div class="row">
                        @foreach ($menu as $item)
                        @if ($item->kategori == 'Makanan')
                        <div class="col-4">
                            <div class="card border-0 d-flex justify-content-between">                
                                <div class="container">
                                    <img src="" alt="" id="gambar{{$item->id}}">                
                                    <div>
                                        <h6 id="nama{{$item->id}}">{{$item->nama}}</h6>
                                        <p class="primary-text-color">Rp <span id="harga{{$item->id}}">{{$item->harga}}</span></p>
                                    </div>
                                    @if ($item->level)
                                        <div id="lv_box{{$item->id}}">
                                            <div class="d-grid mb-2">
                                                <small class="secondary-text-color">Level</small>                        
                                            </div>                                                                                                                       
                                        </div>
                                        <input type="hidden" value="{{$item->id}}" class="lv-val">
                                    @endif                                           
                                    <div class="d-flex justify-content-between mb-3">
                                        <div class="d-flex">
                                            <button id="minus" onclick="counter('less', {{$item->id}})" class="btn" style="width: 30px; height: 30px">
                                                <span class="icon icon-minus grey-dark icon-mask" style="width: 14px; height: 2px"></span>
                                            </button>
                                                <p class="mb-0 mx-3 my-1" id="jumlah{{$item->id}}">1</p>
                                            <button id="plus" onclick="counter('add', {{$item->id}})" class="btn" style="width: 30px; height: 30px">
                                                <span class="icon icon-plus grey-dark icon-13" style="width: 14px; height: 13px"></span>
                                            </button>
                                        </div>
                                        <button onclick="addDetail({{$item->kuah}},{{$item->id}})" class="btn color-primary" style="height:40px">
                                            <span class="icon icon-cart-add white icon-24"></span>
                                        </button>
                                    </div>
                                </div>                    
                            </div>
                        </div>
                        @endif            
                        @endforeach            
                    </div>    
            </div>

            <div class="" id="minuman" role="tabpanel">
                <h4 class="my-4">Minuman</h4>
                    <div class="row">
                        @foreach ($menu as $item)
                        @if ($item->kategori == 'Minuman')
                        <div class="col-4">
                            <div class="card border-0 d-flex justify-content-between">                
                                <div class="container">
                                    <img src="" alt="" id="gambar{{$item->id}}">                
                                    <div>
                                        <h6 id="nama{{$item->id}}">{{$item->nama}}</h6>
                                        <p class="primary-text-color">Rp <span id="harga{{$item->id}}">{{$item->harga}}</span></p>
                                    </div>
                                    @if ($item->level)
                                        <div id="lv_box{{$item->id}}">
                                            <div class="d-grid mb-2">
                                                <small class="secondary-text-color">Level</small>                        
                                            </div>                                                                                                                       
                                        </div>
                                        <input type="hidden" value="{{$item->id}}" class="lv-val">
                                    @endif                                           
                                    <div class="d-flex justify-content-between mb-3">
                                        <div class="d-flex">
                                            <button id="minus" onclick="counter('less', {{$item->id}})" class="btn" style="width: 30px; height: 30px">
                                                <span class="icon icon-minus grey-dark icon-mask" style="width: 14px; height: 2px"></span>
                                            </button>
                                                <p class="mb-0 mx-3 my-1" id="jumlah{{$item->id}}">1</p>
                                            <button id="plus" onclick="counter('add', {{$item->id}})" class="btn" style="width: 30px; height: 30px">
                                                <span class="icon icon-plus grey-dark icon-13" style="width: 14px; height: 13px"></span>
                                            </button>
                                        </div>
                                        <button onclick="addDetail({{$item->kuah}},{{$item->id}})" class="btn color-primary" style="height:40px">
                                            <span class="icon icon-cart-add white icon-24"></span>
                                        </button>
                                    </div>
                                </div>                    
                            </div>
                        </div>
                        @endif            
                        @endforeach            
                    </div>    
            </div>

            <div class="" id="cemilan" role="tabpanel">
                <h4 class="my-4">Cemilan</h4>
                    <div class="row">
                        @foreach ($menu as $item)
                        @if ($item->kategori == 'Cemilan')
                        <div class="col-4">
                            <div class="card border-0 d-flex justify-content-between">                
                                <div class="container">
                                    <img src="" alt="" id="gambar{{$item->id}}">                
                                    <div>
                                        <h6 id="nama{{$item->id}}">{{$item->nama}}</h6>
                                        <p class="primary-text-color">Rp <span id="harga{{$item->id}}">{{$item->harga}}</span></p>
                                    </div>
                                    @if ($item->level)
                                        <div id="lv_box{{$item->id}}">
                                            <div class="d-grid mb-2">
                                                <small class="secondary-text-color">Level</small>                        
                                            </div>                                                                                                                       
                                        </div>
                                        <input type="hidden" value="{{$item->id}}" class="lv-val">
                                    @endif                                           
                                    <div class="d-flex justify-content-between mb-3">
                                        <div class="d-flex">
                                            <button id="minus" onclick="counter('less', {{$item->id}})" class="btn" style="width: 30px; height: 30px">
                                                <span class="icon icon-minus grey-dark icon-mask" style="width: 14px; height: 2px"></span>
                                            </button>
                                                <p class="mb-0 mx-3 my-1" id="jumlah{{$item->id}}">1</p>
                                            <button id="plus" onclick="counter('add', {{$item->id}})" class="btn" style="width: 30px; height: 30px">
                                                <span class="icon icon-plus grey-dark icon-13" style="width: 14px; height: 13px"></span>
                                            </button>
                                        </div>
                                        <button onclick="addDetail({{$item->kuah}},{{$item->id}})" class="btn color-primary" style="height:40px">
                                            <span class="icon icon-cart-add white icon-24"></span>
                                        </button>
                                    </div>
                                </div>                    
                            </div>
                        </div>
                        @endif            
                        @endforeach            
                    </div>    
            </div>

        </div>                    
</div>  
<div class="p-0" style="width: 500px">            
    <aside class="sidebar-right">
        <div id="before_transaksi" class="d-flex h-100">
            <div class="align-self-center mx-auto">
                <div class="img-detail-menu"></div>                   
                <h5 class="text--grey mb-0 mt-5">Belum ada transaksi</h5>
            </div>            
        </div> 
        <div id="after_transaksi" class="d-flex flex-column h-100 py-4">
            <div class="px-3 mb-3">
                <h4>Transaksi</h4>            
                <p id="set_tanggal"></p>
            </div>               
            <form action="{{route('transaksi')}}" id="submitTransaksi" class="h-100 detail-overflow-box" method="POST">
                @csrf
            <input type="hidden" value="" id="_total_harga" name="_total_harga">
            <input type="hidden" value="" id="_nominal_bayar" name="nominal_bayar">
            <div id="detail_box">                                                
                {{-- <div class="detail-item px-3">                    
                    <input type="hidden" value="" id="menu_id[]" name="menu_id[]">
                    <input type="hidden" value="" id="qty[]" name="qty[]">
                    <div id="level_box">
                        <input type="hidden" value="" id="level[][]" name="level[][]">
                    </div>               
                    <div id="kuah_box">
                        <input type="hidden" value="" id="kuah[][]" name="kuah[][]">                                        
                    </div>                    
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
                </div>                 --}}
                </div>
            </form>         
            <div class="summary-box">
                <div class="px-3 mb-3">
                    <h4>Ringkasan</h4>                
                    <div class="d-flex justify-content-between mb-3">
                        <p class="mb-0 secondary-text-color">Jumlah Item</p>
                        <p class="mb-0" id="jumlah_item">0</p>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p class="mb-0 secondary-text-color">Pajak</p>
                        <p class="mb-0">Rp 0</p>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p class="mb-0 secondary-text-color">Total Harga</p>
                        <p class="mb-0">Rp <span id="total_harga_keseluruhan"></span></p>
                    </div>            
                    <div class="d-grid">
                        <button data-toggle="modal" data-target="#modalBayar" class="btn color-primary w-100">Bayar</button>
                    </div>     
                </div>                               
            </div>
        </div>
    </aside>
</div>     
</div> 
<div class="modal fade" id="modalKuah" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title">Kuah</h5>
          <button onclick="closeKuah()" type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>                           
        <div class="modal-body">
            <div class="container">
            <div class="mb-3" id="kuah_chk">
                @foreach ($kuah as $item)
                    <div class="d-flex justify-content-between mb-3">
                        <p class="mb-0" id="nama_kuah{{$item->id}}">{{$item->nama}}</p>                        
                        <input type="checkbox" name="" value="{{$item->id}}">
                    </div>
                @endforeach
            </div>                              
        </div>
    </div>
        <div class="modal-footer border-0">          
          <button onclick="setKuah()" type="button" class="btn color-primary">Lanjut</button>
        </div>    
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalBayar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title">Pembayaran</h5>
          <button data-dismiss="modal" type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>                           
        <div class="modal-body">
            <div class="container">
            <p class="mb-3 subBody-text grey-dark-text">Jumlah harga yang harus dibayar</p>
            <h4 class="mb-3">Rp <span id="__total_harga"></span></h4>
            <div class="form-group">
                <label for="exampleInputEmail1">Nominal</label>
                <input id="nominal_bayar" class="form-control custom-textfield" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder="Bayar">
            </div>
        </div>
    </div>
        <div class="modal-footer border-0">          
          <button onclick="bayar()" id="btn_bayar" type="button" class="btn color-primary" disabled>Lanjut</button>
        </div>    
      </div>
    </div>
  </div>

  @if (session('kembalian'))
  <div class="modal fade" id="modalKembalian" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title">Transaksi Sukses</h5>
          <button data-dismiss="modal" type="button" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>                           
        <div class="modal-body">
            <div class="container">
            <p class="mb-3 subBody-text grey-dark-text">Kembalian</p>
            <h4 class="mb-3">Rp {{ session('kembalian') }}</h4>            
        </div>
    </div>
        <div class="modal-footer border-0">          
          <button type="button" class="close" aria-label="Close" type="button" class="btn color-primary">Tutup</button>
        </div>    
      </div>
    </div>
  </div>
      
  @endif

@endsection
@push('scripts')
    <script>
        let detailCounter = 1
        let detail = []        
        let detailLv = []     

        let detailId = 0       

        setDetailTransaksi()   
        setActiveTab()
        setDetailLv()             

        $('#modalKembalian').modal('show')

        function setDetailTransaksi(){
            if(detail.length > 0){                
                $('#before_transaksi').hide()
                $('#after_transaksi').show()                
                if(!$('#after_transaksi').hasClass('d-flex')){
                    $('#after_transaksi').addClass('d-flex flex-column h-100 py-4')
                    setTanggal()
                }
                $('#before_transaksi').removeClass('d-flex h-100')                
            }else{                
                $('#before_transaksi').show()                                
                $('#after_transaksi').hide()                                
                if(!$('#before_transaksi').hasClass('d-flex')){
                    $('#before_transaksi').addClass('d-flex h-100')                      
                }
                $('#after_transaksi').removeClass('d-flex flex-column h-100 py-4')
            }
        }

        function appendLv(id){
            for (let i = 0; i <= 4; i++) {                
                $('#lv_box'+id).append(                    
                `<label for="lv${i}${id}" class="lv-checkbox mr-2">                                
                    <p class="mb-0 py-1 px-1">${i}</p>                                                    
                    <input type="checkbox" name="" value="${i}" id="lv${i}${id}">
                </label>`)                              
            }                       
            $('#lv0'+id).prop('checked', true)
        }

        function setDetailLv(){                  
            for (const item of $('.lv-val')) {
                detailLv.push({
                    id: $(item).val(),
                    level: [0]
                })            
                appendLv($(item).val())                
            }
            setChecked()        
        }   

        detailLv.forEach((item, index) => {
            $('#lv_box'+item.id).find('input').change((e) => {
                setChecked()                    
            })            
        })
        
        function setChecked(){                        
            detailLv.forEach(item => {
                $('#lv_box'+item.id).find('input').parent().removeClass('active')
                $('#lv_box'+item.id).find('input:checked').parent().addClass('active')                                
                item.level = $('#lv_box'+item.id).find('input:checked')
                .map((_, val) => $(val).val()).get()
            })
        }              

        function selectTab(key, tabs){                
            $('#tabMenu > div').removeClass('active')      
            $('.custom-tabs').removeClass('active')
            $(key).addClass('active')
            $('#'+tabs).tab('show')                              
            setActiveTab()
        }        

        function setActiveTab(){
            $('#tabMenu > div').hide() 
            $('#tabMenu > div.active').show()               
        }        

        function addDetail(kuah, id){                     
            const getDetail = detail.filter(item => item.id == id)[0]
            let lv = detailLv.filter(item => item.id == id)[0] 
            if(detail.length > 0 && getDetail != undefined){
                detailId = id
                getDetail.jumlah = parseInt($('#jumlah'+id).text())
                getDetail.totalHarga = getDetail.harga * getDetail.jumlah
                if(kuah){                    
                    $('#modalKuah').modal('show')                
                    
                }else{                 
                    $('#detail_jumlah'+id).text(getDetail.jumlah)
                    $('#total_harga'+id).text(getDetail.totalHarga)                     
                    if(tempDetail.level.length > 0) appendLevelBox(id)    
                    resetDetail(id)       
                    setRingkasan() 
                    setDetailTransaksi()                
                }                  
                
            }else{                               
                detail.push({
                    id: id,        
                    nama: $('#nama'+id).text(),        
                    jumlah: parseInt($('#jumlah'+id).text()),
                    harga: parseInt($('#harga'+id).text()),
                    kuah: [],
                    level: lv != undefined ? lv.level : [],
                    totalHarga: 0                
                })

                let tempDetail = detail.filter(item => item.id == id)[0]
                tempDetail.totalHarga = tempDetail.harga * tempDetail.jumlah
                if(kuah){                    
                    $('#modalKuah').modal('show')                
                    
                }else{
                    appendDetail(id)                
                    if(tempDetail.level.length > 0) appendLevelBox(id)            
                    resetDetail(id)   
                    setRingkasan() 
                    setDetailTransaksi()
                }                                                
            }                              
        }

        function resetDetail(id){
            $('#kuah_chk').find('input:checked').prop('checked', false)
            $('#jumlah'+id).text(1)           
            $('#lv_box'+id).find('input:checked').prop('checked', false)             
            $('#lv0'+id).prop('checked', true) 
            detailLv = []
            for (const item of $('.lv-val')) {
                detailLv.push({
                    id: $(item).val(),
                    level: [0]
                })                            
            }         
            setChecked()
        }

        function appendLevelBox(id){
            $('#level_list'+id).empty()
            $('#level_list'+id).append(`Level <p></p>`)
            detail.filter((item) => item.id == id)[0].level.forEach((item, i, self) => {
                $('#level_box'+id).append(`<input type="hidden" value="${item}" name="level[${id}][]">`)                
                if(i == self.length - 1){
                    $('#level_list'+id+' > p').append(` <span>${item}</span> `)                    
                }else{
                    $('#level_list'+id+' > p').append(` <span>${item}, </span> `)                
                }                                                
            })                        
        }

        function appendKuahBox(id){
            $('#kuah_box'+id).empty()
            $('#kuah_list'+id).empty()
            detail.filter((item) => item.id == id)[0].kuah.forEach(item => {
                $('#kuah_box'+id).append(`<input type="hidden" value="${item}" name="kuah[${id}][]">`)
                $('#kuah_list'+id).append(`<p class="mb-1">Kuah ${$('#nama_kuah'+item).text()}</p>`)
            })              
        }

        function appendDetail(id){            
            $('#detail_box').append(`<div id="detail${id}" class="detail-item px-3 mt-3">                    
                    <input type="hidden" value="${id}" id="menu_id" name="menu_id[]">                    
                    <input type="hidden" value="" id="qty${id}" name="qty[]">
                    <div class="border-0" id="level_box${id}">
                        
                    </div>               
                    <div class="border-0" id="kuah_box${id}">
                        
                    </div>                    
                    <div class="d-flex justify-content-between">
                        <img src="" alt="">
                        <div>
                            <p class="mb-2">${detail.filter((item) => item.id == id)[0].nama}</p>
                            <div class="d-flex mb-2">                                
                                <p class="mb-0 mx-3 my-1">x<span id="detail_jumlah${id}">${detail.filter((item) => item.id == id)[0].jumlah}</span></p>
                            </div>
                            <div class="mb-3" id="kuah_list${id}">
                                
                            </div>   
                        </div>
                        <div>
                            <p class="primary-text-color" id="level_list${id}"></p>
                            <p class="secondary-text-color mb-1" >Rp <span id="total_harga${id}">${detail.filter((item) => item.id == id)[0].totalHarga}</span></p>
                            <button onclick="removeDetail(${id})" class="btn d-flex justify-content-end no-decor py-1"><span class="icon icon-bin icon-16 black"></span></button>
                        </div>                        
                    </div>
                </div>`)
                $('#qty'+id).val(parseInt(detail.filter((item) => item.id == id)[0].jumlah))
        }

        function closeKuah(){            
            $('#modalKuah').modal('hide');
            detail.splice(detail.length - 1, 1)
        }

        function setKuah(){            
            detail[detail.length - 1].kuah = $('#kuah_chk input:checked').map((_, val) => $(val).val()).get()
            $('#modalKuah').modal('hide');         
            const getDetail = detail.filter(item => item.id == detailId)[0]   
            if(detail.length > 0 && getDetail != undefined){
                $('#detail_jumlah'+detailId).text(getDetail.jumlah)
                $('#total_harga'+detailId).text(getDetail.totalHarga)
                if(detail.filter(item => item.id == detailId)[0].level.length > 0) appendLevelBox(detailId)                                
                appendKuahBox(detailId)    
                $('#qty'+detailId).val(getDetail.jumlah)
                resetDetail(detailId)    
                setRingkasan()      
                setDetailTransaksi()       
            }else{
                let id = detail[detail.length - 1].id                
                appendDetail(id)
                if(detail.filter(item => item.id == id)[0].level.length > 0) appendLevelBox(id)                                
                appendKuahBox(id)                                   
                resetDetail(id)                 
                setRingkasan()
                setDetailTransaksi()
            }                                           
        }

        function counter(desc, id){
            let jumlah = $('#jumlah'+id)
            let tempJumlah = parseInt(jumlah.text())
            
            desc == 'add' ? 
            tempJumlah++ 
            : tempJumlah > 1 ?
             tempJumlah-- 
             : false
            jumlah.text(tempJumlah)
        }

        function removeDetail(id){
            $('#detail'+id).remove()
            detail.splice(detail.findIndex(item => item.id == id), 1)
            setRingkasan()
            setDetailTransaksi()
        }

        function setRingkasan(){
            $('#jumlah_item').text(detail.length)
            $('#_total_harga').val(detail.reduce((total, num) => total + num.totalHarga, 0))
            $('#total_harga_keseluruhan').text($('#_total_harga').val())
            $('#__total_harga').text($('#_total_harga').val())
        }

        function setTanggal(){
            const months = ["Januari", "Februari", "Maret", "April", "Mai", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
            const d = new Date()                                    
            $('#set_tanggal').text(d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear())
        }

        $('#nominal_bayar').on('input', function(e){
            let total_harga = parseInt($('#_total_harga').val())
            if(total_harga <= parseInt($(e.target).val())){
                $('#btn_bayar').prop('disabled', false)
            }else{
                $('#btn_bayar').prop('disabled', true)
            }
        })

        function bayar(){         
            $('#_nominal_bayar').val($('#nominal_bayar').val())               
            $('#submitTransaksi').submit()
        }
    </script>
@endpush