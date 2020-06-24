@extends('layouts.main')


@section('content')

<div class="col-md-11" style="background-color:white; margin:0 auto; padding:15px">
<div class="row">
  <div class="col-md-12"
       style="margin: 0 auto">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h4 style="text-transform:uppercase">
      
          <strong>Users</strong>
        </h4>
      </div>
      <div class="pull-right" style="padding:15px 0">
        <a class="btn btn-success btn-sm"
           href="{{ route('users.create') }}"> <i class="fa fa-plus"></i> Create New User</a>
      </div>
    </div>


    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="col-md-12"
         style="margin:0 auto">
      <table class="table table-sm table-striped table-bordered">
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Email</th>
          <th>Roles</th>
          <th>Action</th>
        </tr>
        @foreach ($data as $key => $user)
        <tr>
          <td>{{ ++$i }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
            <label class="badge badge-success">{{ $v }}</label>
            @endforeach
            @endif
          </td>
          <td>
            <a class="btn btn-info btn-sm"
               href="{{ route('users.show',$user->id) }}">
               <i class="fa fa-eye"></i>
              </a>
            <a class="btn btn-success btn-sm"
               href="{{ route('users.edit',$user->id) }}">
                <i class="fa fa-pencil"></i>
            </a>
            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::button('<i class="fa fa-pencil"></i>', [
              'class' => 'btn btn-danger btn-sm',
              'type' =>  'submit'
              ]) !!}
            {!! Form::close() !!}
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
</div>
{!! $data->render() !!}

@endsection