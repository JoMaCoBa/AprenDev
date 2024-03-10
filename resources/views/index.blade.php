@extends('layouts.app')

@section('title', 'Todos los cursos')

@section('content')
    <div class="container flex justify-center items-center h-auto">
        <div class="w-full max-w-4xl">
            <h1 class="text-3xl font-bold text-center mb-8 mt-5">Todos los cursos</h1>
            @foreach ($categories as $category)
                <div class="mb-8">
                    <h2 class="text-2xl font-semibold mb-4">{{ $category->name }}</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                        @foreach ($category->courses as $course)
                            <div class="bg-white shadow-md rounded-md p-4">
                                <img src="{{ asset($course->image_url) }}" alt="{{ $course->name }}" class="w-full h-32 object-cover mb-4">
                                <h3 class="text-lg font-semibold mb-2">{{ $course->name }}</h3>
                                <p class="text-sm text-gray-600">{{ $course->description }}</p>
                                <a href="{{ route('course.index', $course->slug) }}" class="block mt-4 text-blue-500 hover:text-blue-700">Ver más</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
