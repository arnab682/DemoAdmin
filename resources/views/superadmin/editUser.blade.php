@extends('layouts.admin')

@section('title') Edit User @endsection

@section('content')

<div class="content">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header bg-light">
                      Edit User :
                  </div>
                  
                  <form class="" action="{{route('userUpdate', $user->id)}}" method="post">@csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="normal-input" class="form-control-label">Name</label>
                                    <input name="name" class="form-control" value="{{ $user->name }}" >
                                </div>
                            </div>


                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="normal-input" class="form-control-label">Email</label>
                                    <input name="email" class="form-control" value="{{ $user->email }}" >
                                </div>
                            </div>


                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="normal-input" class="form-control-label">Permition :</label>
                                    <input type="checkbox" class="form-control" name="superadmin" value=1 {{ $user->superadmin == true ? 'checked' : '' }} > SuperAdmin
                                    <br>
                                    <input type="checkbox" class="form-control" name="admin" value=1 {{ $user->admin == true ? 'checked' : '' }} >Admin
                                </div>
                            </div>

                          </div>

                      <button class="btn btn-success" type="submit">Update User</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>

  </div>
</div>

@endsection
