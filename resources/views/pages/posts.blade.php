@extends("layouts.{$layout}")

@section('content')
<div class="container container-240">
    <h1>POST's</h1>
    @if(Session::has('error'))
        <p>{{ Session::get('error') }}</p>
    @endif
    @if(Session::has('success'))
        <p>{{ Session::get('success') }}</p>
    @endif
    <form action="/obr" method="POST">
        @csrf
        <input type="text" name="field">
        <button>Отправить</button>
    </form>
</div>
@endsection