@extends('layouts.app')
@section('content')    
<div class="d-flex h-100">        
<div class="container-fluid py-4 px-5 h-100">                                        
        <div class="d-flex justify-content-between">
            <h4 class="my-4">Makanan</h4>
            <button class="btn color-primary button-text my-4" data-toggle="modal" data-target="#addPegawaiModal">Tambah Pegawai</button>
        </div>        
        <div class="row">
            @foreach ($user as $key => $item)
            @if ($item->id == 1)
                @continue
            @endif
            <div class="col-4 mb-4">
                <div id="box_detail{{$key}}">                    
                    <input type="hidden" value="{{$item->pegawai[0]->nama}}">
                    <input type="hidden" value="{{$item->role}}">
                    <input type="hidden" value="{{$item->username}}">
                    <input type="hidden" value="{{$item->email}}">
                    <input type="hidden" value="{{$item->pegawai[0]->no_telp}}">
                    <input type="hidden" value="{{$item->pegawai[0]->jk}}">
                    <input type="hidden" value="{{$item->pegawai[0]->alamat}}">
                    <input type="hidden" value="{{$item->id}}">
                </div>                
                <div onclick="showDetail({{$key}})" class="card border-0 d-flex justify-content-between click-card">                                    
                    <div class="container">
                        <img src="" alt="">                
                        <div>
                            <h6>{{$item->pegawai[0]->nama}}</h6>
                            <p class="primary-text-color">{{$item->role}}</p>
                        </div>                      
                        <div class="d-flex justify-content-end mb-3">                            
                            <button type="button" class="btn color-primary-outline mr-2" onclick="editPegawai({{$key}})">Ubah</button>                                                        
                            <form action="{{route('destroy_pegawai', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn color-primary-outline" type="submit">Hapus</button>                            
                            </form>                            
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
                    <h4 id="detail_nama"></h4>         
                    <div class="mb-3">
                        <p class="mb-0 secondary-text-color">Username</p>
                        <p class="mb-0" id="detail_username"></p>                    
                    </div>                                               
                    <div class="mb-3">
                        <p class="mb-0 secondary-text-color">Email</p>
                        <p class="mb-0" id="detail_email"></p>                    
                    </div>                                               
                    <div class="mb-3">
                        <p class="mb-0 secondary-text-color">Role</p>
                        <p class="mb-0" id="detail_role"></p>                    
                    </div>                                               
                    <div class="mb-3">
                        <p class="mb-0 secondary-text-color">No Telp</p>
                        <p class="mb-0" id="detail_no_telp"></p>                    
                    </div>       
                    <div class="mb-3">
                        <p class="mb-0 secondary-text-color">Jenis Kelamin</p>
                        <p class="mb-0" id="detail_jk"></p>                    
                    </div>                                                
                    <div class="mb-3">
                        <p class="mb-0 secondary-text-color">Alamat</p>
                        <p class="mb-0" id="detail_alamat"></p>                    
                    </div>                                                                   
                </div>                               
            </div>
        </div>
    </aside>
</div>     
</div> 
<div class="modal fade" id="editPegawaiModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title">Edit Pegawai</h5>
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
                <label for="">Nama Pegawai</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Nama Lengkap" class="form-control custom-textfield @error('nama') is-invalid @enderror" required>                
                @error('nama')                                
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror            
            </div>                  
            <div class="mb-3">
                <label for="">Username</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}" placeholder="Username harus berbeda" class="form-control custom-textfield @error('username') is-invalid @enderror" required>
                @error('username')                                
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror            
            </div>                    
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control custom-textfield @error('email') is-invalid @enderror" required>
                @error('email')                                
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror      
            </div>                 
            <div class="mb-3">
                <label for="">Role</label>
                <select name="role" id="role" class="form-control selectpicker" required>
                    <option value="admin">Admin</option>
                    <option value="kasir">Kasir</option>                                        
                  </select>
                  
            </div>                                                   
            <div class="mb-3">
                <label for="">No Telp</label>                
                <input name="no_telp" id="no_telp" value="{{ old('no_telp') }}" type="text" class="form-control custom-textfield @error('no_telp') is-invalid @enderror" required>
                @error('no_telp')                                
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Jenis Kelamin</label>     
                <div class="d-flex">
                    <div class="custom-control custom-radio mb-2 mr-3">
                        <input type="radio" value="L" id="jkL" name="jk" class="custom-control-input" checked>
                        <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" value="P" id="jkP" name="jk" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">Perempuan</label>
                      </div>
                </div>                           
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control custom-textfield @error('alamat') is-invalid @enderror" id="" cols="10" rows="10" required>{{ old('alamat') }}</textarea>                
                @error('alamat')                                
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Reset Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control custom-textfield @error('password') is-invalid @enderror">                
                <small class="form-text text-muted">
                    Jika tidak mengganti password kosongkan saja
                  </small>
                @error('password')                                
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

<div class="modal fade" id="addPegawaiModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title">Tambah Pegawai</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('store_pegawai')}}" method="POST">
            @csrf            
        <div class="modal-body">
            <div class="container">
            <div class="mb-3">
                <label for="">Nama Pegawai</label>
                <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Nama Lengkap" class="form-control custom-textfield @error('nama') is-invalid @enderror" required>                
                @error('nama')                                
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror            
            </div>                  
            <div class="mb-3">
                <label for="">Username</label>
                <input type="text" name="username" value="{{ old('username') }}" placeholder="Username harus berbeda" class="form-control custom-textfield @error('username') is-invalid @enderror" required>
                @error('username')                                
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror            
            </div>                    
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control custom-textfield @error('email') is-invalid @enderror" required>
                @error('email')                                
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror      
            </div>     
            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control custom-textfield @error('password') is-invalid @enderror" required>
                @error('password')                                
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror
            </div>     
            <div class="mb-3">
                <label for="">Role</label>
                <select name="role" class="form-control selectpicker" required>
                    <option value="admin">Admin</option>
                    <option value="kasir">Kasir</option>                                        
                  </select>
                  
            </div>                                                   
            <div class="mb-3">
                <label for="">No Telp</label>                
                <input name="no_telp" value="{{ old('no_telp') }}" type="text" class="form-control custom-textfield @error('no_telp') is-invalid @enderror" required>
                @error('no_telp')                                
                    <div id="" class="invalid-feedback">
                        {{$message}}
                    </div>    
                @enderror
            </div>
            <div class="mb-3">
                <label for="">Jenis Kelamin</label>     
                <div class="d-flex">
                    <div class="custom-control custom-radio mb-2 mr-3">
                        <input type="radio" value="L" id="customRadio1" name="jk" class="custom-control-input" checked>
                        <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" value="P" id="customRadio2" name="jk" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">Perempuan</label>
                      </div>
                </div>                           
            </div>
            <div class="mb-3">
                <label for="">Alamat</label>
                <textarea name="alamat" class="form-control custom-textfield @error('alamat') is-invalid @enderror" id="" cols="10" rows="10" required>{{ old('alamat') }}</textarea>                
                @error('alamat')                                
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
        $('select').selectpicker()      
        function editPegawai(key){            
            $('#nama').val($($('#box_detail'+key).find('input').get(0)).val()) 
            $('#username').val($($('#box_detail'+key).find('input').get(2)).val())           
            $('#email').val($($('#box_detail'+key).find('input').get(3)).val())            
            $('#role').val($($('#box_detail'+key).find('input').get(1)).val())
            $('#no_telp').val($($('#box_detail'+key).find('input').get(4)).val())            
            $($('#box_detail'+key).find('input').get(5)).val() == 'L' ? $('#jkL').prop('checked', true) : $('#jkP').prop('checked', true)
            $('#alamat').text($($('#box_detail'+key).find('input').get(6)).val())                        
            $('#edit_form').attr('action', '/pegawai/update/'+$($('#box_detail'+key).find('input').get(7)).val())
            $('#editPegawaiModal').modal('show')
        }
        
        function showDetail(key){
            $('#detail_nama').text($($('#box_detail'+key).find('input').get(0)).val()) 
            $('#detail_username').text($($('#box_detail'+key).find('input').get(2)).val())           
            $('#detail_email').text($($('#box_detail'+key).find('input').get(3)).val())            
            $('#detail_role').text($($('#box_detail'+key).find('input').get(1)).val())
            $('#detail_no_telp').text($($('#box_detail'+key).find('input').get(4)).val())            
            $('#detail_jk').text($($('#box_detail'+key).find('input').get(5)).val() == 'L' ? 'Laki-laki' : 'Perempuan')
            $('#detail_alamat').text($($('#box_detail'+key).find('input').get(6)).val()) 
        }
    </script>
@endpush