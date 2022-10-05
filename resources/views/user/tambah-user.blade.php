@extends('layouts.main')
@section('content')
<h1 class="h3 text-gray-800" style="margin-bottom: 20px; margin-left:10px; text-align:center;">Tambah User</h1>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('insertuser') }}" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                            <div class="mb-3">
                              <label for="username" class="form-label">Nama User</label>
                              <input name ="name" type="name" class="form-control" id="username" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                              <label for="email" class="form-label">Email Address</label>
                              <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input name="password" type="password" class="form-control" id="password" aria-describedby="emailHelp" required>
                              <span style="position: absolute; right:30px; transform:translate(0,-50%); top:52%; cursor:pointer;">
                                <i class="fa-solid fa-eye" id="eye" onclick="toggle()"></i>
                              </span>
                            </div>
                            <div class="mb-3">
                              <label for="telp" class="form-label">No Telfon/Whatsapp</label>
                              <input name="phone" type="text" class="form-control" id="telp">
                            </div>
                            <div class="mb-3">
                                <label for="level">Level User :</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="level" id="level" required>
                                    <option selected>Pilih Level User</option>
                                    <option value="admin">admin</option>
                                    <option value="santri">santri</option>
                                </select>
                            </div>
                                                      
                            <a href="/user"><button type="button" class="btn btn-warning">Kembali</button></a>
                            <button type="submit" class="btn btn-success">Simpan</button>
                          </form>
                    </div>
            </div>
            </div>
        </div>
</div>
<script>
  var state=false;
  function toggle(){
    if(state){
      document.getElementById("password").setAttribute("type","password");
        document.getElementById("eye").style.color='#7a797e';
        state = false;
    }
    else{
      document.getElementById("password").setAttribute("type","text");
      document.getElementById("eye").style.color='#5887ef';
      state = true;
    }
  }
</script>
@endsection

    