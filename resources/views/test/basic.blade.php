@extends('layouts.app')
@section('content')
    <div class="pt-12">
        <h1 class="text-center text-black text-5xl font-semibold">Live Anywhere</h1>
        <h2 class="text-center text-gray-500 text-3xl font-light mt-1 mb-10">Keep calm & travel on</h2>
        <div class="grid grid-cols-3 gap-x-8 max-w-7xl mx-auto">
            <image-box
                url="https://images.unsplash.com/photo-1563911302283-d2bc129e7570?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                title="Enjoy the great cold"
                description="1200 properties"
                ></image-box>
            <image-box
                url="https://images.unsplash.com/photo-1582719508461-905c673771fd?q=80&w=1925&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                title="Pick up the earliest sunrise"
                description="2613 properties"
                ></image-box>
            <image-box
                url="https://images.unsplash.com/photo-1498503182468-3b51cbb6cb24?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                title="Unique story"
                description="1113 properties"
                ></image-box>
        </div>
    </div>
@endsection
