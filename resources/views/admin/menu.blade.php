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
                <div class="d-flex justify-content-between">
                    <h4 class="my-4">Makanan</h4>                    
                    <button class="btn color-primary button-text my-4" data-toggle="modal" data-target="#addMenuModal">Tambah Menu</button>
                </div> 
                    <div class="row">
                        @foreach ($menu as $item)
                        @if ($item->kategori == 'Makanan')
                        <div class="col-3">
                            <div class="card border-0 d-flex justify-content-between"> 
                                <div id="box_detail{{$item->id}}">                    
                                    <input type="hidden" value="{{$item->kategori}}">
                                    <input type="hidden" value="{{$item->nama}}">
                                    <input type="hidden" value="{{$item->harga}}">
                                    <input type="hidden" value="{{$item->id}}">
                                </div>                 
                                <div class="container">
                                    <img src="" alt="" id="gambar{{$item->id}}">                
                                    <div>
                                        <h6 id="nama{{$item->id}}">{{$item->nama}}</h6>
                                        <p class="primary-text-color">Rp <span id="harga{{$item->id}}">{{$item->harga}}</span></p>
                                    </div>
                                    <div class="d-flex justify-content-end mb-3">  
                                        <button type="button" class="btn color-primary-outline mr-2" onclick="editMenu({{$item->id}})">Ubah</button>                           
                                        <form action="{{route('destroy_menu', $item->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn color-primary-outline" type="submit">Hapus</button>                            
                                        </form>                                                         
                                    </div>
                                </div>                    
                            </div>
                        </div>
                        @endif            
                        @endforeach            
                    </div>    
            </div>
 
            <div class="" id="minuman" role="tabpanel">
                <div class="d-flex justify-content-between">
                    <h4 class="my-4">Minuman</h4>
                    <button class="btn color-primary button-text my-4" data-toggle="modal" data-target="#addMenuModal">Tambah Menu</button>
                </div> 
                    <div class="row">
                        @foreach ($menu as $item)
                        @if ($item->kategori == 'Minuman')
                        <div class="col-3">
                            <div class="card border-0 d-flex justify-content-between">                
                                <div class="container">
                                    <img src="" alt="" id="gambar{{$item->id}}">                
                                    <div>
                                        <h6 id="nama{{$item->id}}">{{$item->nama}}</h6>
                                        <p class="primary-text-color">Rp <span id="harga{{$item->id}}">{{$item->harga}}</span></p>
                                    </div>
                                    <div class="d-flex justify-content-end mb-3">                            
                                        <button class="btn color-primary-outline mr-2">Ubah</button>                                                        
                                        <button class="btn color-primary-outline">Hapus</button><form action="{{route('destroy_menu', $item->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn color-primary-outline" type="submit">Hapus</button>                            
                                        </form> 
                                    </div>
                                </div>                    
                            </div>
                        </div>
                        @endif            
                        @endforeach            
                    </div>    
            </div>
 
            <div class="" id="cemilan" role="tabpanel">
                <div class="d-flex justify-content-between">
                    <h4 class="my-4">Cemilan</h4>
                    <button class="btn color-primary button-text my-4" data-toggle="modal" data-target="#addMenuModal">Tambah Menu</button>
                </div> 
                    <div class="row">
                        @foreach ($menu as $item)
                        @if ($item->kategori == 'Cemilan')
                        <div class="col-3">
                            <div class="card border-0 d-flex justify-content-between">                
                                <div class="container">
                                    <img src="" alt="" id="gambar{{$item->id}}">                
                                    <div>
                                        <h6 id="nama{{$item->id}}">{{$item->nama}}</h6>
                                        <p class="primary-text-color">Rp <span id="harga{{$item->id}}">{{$item->harga}}</span></p>
                                    </div>
                                    <div class="d-flex justify-content-end mb-3">                            
                                        <button class="btn color-primary-outline mr-2">Ubah</button>                                                        
                                        <form action="{{route('destroy_menu', $item->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn color-primary-outline" type="submit">Hapus</button>                            
                                        </form>                             
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
  
</div> 
 
<div class="modal fade" id="addMenuModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title">Tambah Menu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('store_menu')}}" method="POST">
            @csrf            
        <div class="modal-body">
            <div class="container">
            <div class="mb-3">
                <label for="">Kategori</label>
                <input type="text" name="kategori" value="{{ old('kategori') }}" placeholder="Kategori" class="form-control custom-textfield @error('nama') is-invalid @enderror">                
                @error('kategori')                                
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror            
            </div>                  
            <div class="mb-3">
                <label for="">Nama Menu</label>
                <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Nama Menu" class="form-control custom-textfield @error('nama') is-invalid @enderror">                
                @error('nama')                                
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror            
            </div>                  
            <div class="mb-3">
                <label for="">Harga</label>
                <input type="text" name="harga" value="{{ old('harga') }}" placeholder="Harga Menu" class="form-control custom-textfield @error('harga') is-invalid @enderror">
                @error('harga')                                
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror            
            </div>                                                                    
        </div>
    </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn color-primary-outline" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn color-primary">Simpan</button>
        </div>
    </form>
      </div>
    </div>
  </div>
 
  <div class="modal fade" id="editMenuModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title">Edit Menu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="edit_form" method="POST">
            @csrf            
            @method('PATCH')
            <div class="modal-body">
                <div class="container">
                <div class="mb-3">
                    <label for="">Kategori</label>
                    <input type="text" id="kategori" name="kategori" value="{{ old('kategori') }}" placeholder="Kategori" class="form-control custom-textfield @error('nama') is-invalid @enderror">                
                    @error('kategori')                                
                        <div id="" class="invalid-feedback">
                            {{$message}}
                        </div>    
                    @enderror            
                </div>                  
                <div class="mb-3">
                    <label for="">Nama Menu</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Nama Menu" class="form-control custom-textfield @error('nama') is-invalid @enderror">                
                    @error('nama')                                
                        <div id="" class="invalid-feedback">
                            {{$message}}
                        </div>    
                    @enderror            
                </div>                  
                <div class="mb-3">
                    <label for="">Harga</label>
                    <input type="text" id="harga" name="harga" value="{{ old('harga') }}" placeholder="Harga Menu" class="form-control custom-textfield @error('harga') is-invalid @enderror">
                    @error('harga')                                
                        <div id="" class="invalid-feedback">
                            {{$message}}
                        </div>    
                    @enderror            
                </div>                                                                    
            </div>
    </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn color-primary-outline" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn color-primary">Simpan</button>
        </div>
    </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="addMenuModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title">Tambah Menu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('store_menu')}}" method="POST">
            @csrf            
        <div class="modal-body">
            <div class="container">
            <div class="mb-3">
                <label for="">Kategori</label>
                <input type="text" name="kategori" value="{{ old('kategori') }}" placeholder="Kategori" class="form-control custom-textfield @error('nama') is-invalid @enderror">                
                @error('kategori')                                
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror            
            </div>                  
            <div class="mb-3">
                <label for="">Nama Menu</label>
                <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Nama Menu" class="form-control custom-textfield @error('nama') is-invalid @enderror">                
                @error('nama')                                
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror            
            </div>                  
            <div class="mb-3">
                <label for="">Harga</label>
                <input type="text" name="harga" value="{{ old('harga') }}" placeholder="Harga Menu" class="form-control custom-textfield @error('harga') is-invalid @enderror">
                @error('harga')                                
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror            
            </div>                                                                    
        </div>
    </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn color-primary-outline" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn color-primary">Simpan</button>
        </div>
    </form>
      </div>
    </div>
  </div>
 
  <div class="modal fade" id="editMenuModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title">Edit Menu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="edit_form" method="POST">
            @csrf            
            @method('PATCH')
            <div class="modal-body">
                <div class="container">
                <div class="mb-3">
                    <label for="">Kategori</label>
                    <input type="text" name="kategori" value="{{ old('kategori') }}" placeholder="Kategori" class="form-control custom-textfield @error('nama') is-invalid @enderror">                
                    @error('kategori')                                
                        <div id="" class="invalid-feedback">
                            {{$message}}
                        </div>    
                    @enderror            
                </div>                  
                <div class="mb-3">
                    <label for="">Nama Menu</label>
                    <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Nama Menu" class="form-control custom-textfield @error('nama') is-invalid @enderror">                
                    @error('nama')                                
                        <div id="" class="invalid-feedback">
                            {{$message}}
                        </div>    
                    @enderror            
                </div>                  
                <div class="mb-3">
                    <label for="">Harga</label>
                    <input type="text" name="harga" value="{{ old('harga') }}" placeholder="Harga Menu" class="form-control custom-textfield @error('harga') is-invalid @enderror">
                    @error('harga')                                
                        <div id="" class="invalid-feedback">
                            {{$message}}
                        </div>    
                    @enderror            
                </div>                                                                    
            </div>
    </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn color-primary-outline" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn color-primary">Simpan</button>
        </div>
    </form>
      </div>
    </div>
  </div>
 
@endsection
@push('scripts')
    <script>  
       function editMenu(key){            
            $('#kategori').val($($('#box_detail'+key).find('input').get(0)).val()) 
            $('#nama').val($($('#box_detail'+key).find('input').get(1)).val()) 
            $('#harga').val($($('#box_detail'+key).find('input').get(2)).val())            
            $('#edit_form').attr('action', '/menu/update/'+$($('#box_detail'+key).find('input').get(3)).val())
            $('#editMenuModal').modal('show')
        }  

        function showDetail(key){
            $('#detail_kategori').text($($('#box_detail'+key).find('input').get(0)).val()) 
            $('#detail_nama').text($($('#box_detail'+key).find('input').get(0)).val()) 
            $('#detail_harga').text($($('#box_detail'+key).find('input').get(0)).val()) 
        }

        setActiveTab()                      
 
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
    </script>
@endpush