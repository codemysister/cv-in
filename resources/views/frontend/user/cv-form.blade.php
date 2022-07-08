@extends('frontend.master')
@section('content')

@livewire('formcv', ['template' => $template, 'currentTime' => now()])


@endsection