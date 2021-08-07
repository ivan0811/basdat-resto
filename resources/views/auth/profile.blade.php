@extends('layouts.app')
@section('content')    
<div class="d-flex h-100">        
<div class="container-fluid py-4 px-5 h-100">                        
    <h4 class="mb-3 headline-text">Profile</h4>
    <h4 class="mb-4 body-text">Kelola data diri anda</h4>
    <div class="container p-5 bg-white">
        <div class="row">
            <div class="col-6">
                <div class="d-flex flex-column mb-3">
                    <img src="{{ asset('img/profile.jpg')}}" width="200" class="text-center align-self-center mb-3" alt="">
                    <p class="h3-text align-self-center">Argya Aulia Fauzandika</p>
                </div>
                <div class="container-form mb-4">
                    <p class="grey-dark-text subBody-text align-self-center mb-1">Bergabung sejak</p>
                    <p class="body-text align-self-center">30 Mei 2019</p>
                </div>
                <div class="container-form mb-4">
                    <p class="grey-dark-text subBody-text align-self-center mb-1">Role</p>
                    <p class="body-text align-self-center">Admin</p>
                </div>
                
                
            </div>
            <div class="col-6">
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">No Telp</label>
                      <input type="email" class="form-control custom-textfield" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder="No Hp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control custom-textfield" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kelamin</label>
                        <div class="custom-control custom-radio mb-2">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                            <label class="custom-control-label" for="customRadio1">Laki-Laki</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Perempuan</label>
                          </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="email" class="form-control custom-textfield" id="exampleInputEmail1" value="" aria-describedby="emailHelp" placeholder="Alamat">
                      </div>
                  </form>
                <div class="d-flex flex-row justify-content-end mt-5">
                    <a href="#" class="btn color-primary">Edit Profile</a>
                </div>
            </div>
        </div>
        </div>                    
</div>      
</div> 
@endsection