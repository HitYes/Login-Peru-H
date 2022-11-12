extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-header">{{ __('Lista de Registro') }}</div>
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Cell</td>
        <td>Id</td>
    </tr>
</div>
@endsection