@extends('layouts.admin')
@section('page_title', 'Kelola Partner')
@section('content')

    <div class="mb-4 text-right">
        <a href="{{ route('admin.partners.create') }}"
            class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold hover:bg-indigo-700 transition">+
            Tambah Partner</a>
    </div>

    @foreach($partners as $partner)
        <div class="flex items-center gap-4 p-4 bg-white rounded-xl mb-4 shadow-sm">
            <img src="{{ $partner->logo_url }}" class="w-16 h-16 rounded-xl">
            <p class="font-bold text-slate-800">{{ $partner->name }}</p>
        </div>
    @endforeach
@endsection