@extends('layouts.app')

@section('content')
<div class="container">
    <form action="" method="post">
        {{ csrf_field() }}
        <input type="text" name="title" class="form-control" placeholder="Título">
        <textarea name="body" class="form-control" placeholder="Mensagem"></textarea>
        <input type="hidden" name="user_id" class="form-control" placeholder="Id do usuário" value="{{ \Auth::user()->id }}">
        <input type="submit" value="Salvar" class="btn btn-primary" />
    </form>
</div>
@endsection 