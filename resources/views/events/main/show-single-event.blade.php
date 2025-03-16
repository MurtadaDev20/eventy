@extends('events.addintion')

@section('content')
  @livewire('show-single-event', ['id' => $id])
@endsection