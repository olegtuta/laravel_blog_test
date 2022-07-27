@extends("layouts.app")

@section('content')
    <livewire:pages.more-page :postId="$postId" :userId="$userId"/>
@endsection
