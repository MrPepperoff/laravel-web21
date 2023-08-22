@extends("layouts.{$layout}")


@section('content')

<div class="container container-240">
    @if(Session::has('error'))
        <p>{{ Session::get('error') }}</p>
    @endif
    @if(Session::has('success'))
        <p>{{ Session::get('success') }}</p>
    @endif
    <form action="/db2" method="POST">

        @csrf <!-- token -->

        <input type="text" name="name">
        <button>Отправить</button>
    </form>
</div>


@endsection