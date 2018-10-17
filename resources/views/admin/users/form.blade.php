<?php
  $allowedRoles = config('variables.role');
  if (Auth::user()->rolename() !== "Superadmin") {
    foreach ($allowedRoles as $key => $value ) {
      if ($key >= Auth::user()->role) {
          unset($allowedRoles[$key]);
      }
    }
  }

  //$img_url = (isset($item) ? $item->avatar : "http://placehold.it/160x160");
  $img_url = (isset($item) ? $item->avatar : url('/') . config('variables.avatar.public') . 'avatar0.png');
?>

{!! Form::mySelect('id_empresa', 'Empresa', App\Empresa::pluck('nombre', 'id')->toArray(), null, ['class'=>'chosen']) !!}

{!! Form::myInput('text', 'name', 'Nombre') !!}

{!! Form::myInput('email', 'email', 'Email') !!}

{!! Form::myInput('password', 'password', 'Clave') !!}

{!! Form::myInput('password', 'password_confirmation', 'Confirmación clave') !!}

{!! Form::mySelect('role', 'Rol', $allowedRoles) !!}

{!! Form::mySelect('active', 'Activo', config('variables.boolean')) !!}

{!! Form::myFileImage('avatar', 'Avatar', $img_url) !!}
