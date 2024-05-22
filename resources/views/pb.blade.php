@extends('layouts.app')

@section('content')
    <h1>Progressbar.tw 123</h1>
@endsection

@section('inline_js')
    @parent
    alertHook('pb.blade.php')
@endsection
