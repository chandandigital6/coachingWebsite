@extends('layouts.aap')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit  </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <form action="{{route('course.update',$course->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Image -->
                            <div class="form-group">
                                <label for="image">Course Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                                @if($course)
                                    <img src="{{asset('storage/'.$course->image)}}" alt="" width="100">
                                @endif
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Title -->
                            <div class="form-group">
                                <label for="title">Course Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') . "$course->title" }}">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Short Description -->
                            <div class="form-group">
                                <label for="sort_description">Short Description</label>
                                <textarea class="form-control @error('sort_description') is-invalid @enderror" id="sort_description" name="sort_description" rows="3">{{ old('sort_description'). "$course->sort_description" }}</textarea>
                                @error('sort_description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Number of Students -->
                            <div class="form-group">
                                <label for="number_of_student">Number of Students</label>
                                <input type="number" class="form-control @error('number_of_student') is-invalid @enderror" id="number_of_student" name="number_of_student" value="{{ old('number_of_student'). "$course->number_of_student" }}">
                                @error('number_of_student')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Duration -->
                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="text" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" value="{{ old('duration') ."$course->duration" }}">
                                @error('duration')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Message -->
                            <div class="form-group">
                                <label for="msg">Message</label>
                                <textarea class="form-control textarea @error('msg') is-invalid @enderror" id="msg" name="msg" rows="3">{{ old('msg') ."$course->msg"}}</textarea>
                                @error('msg')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Rating -->
                            <div class="form-group">
                                <label for="rating">Rating</label>
                                <input type="number" step="0.1" max="5" class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" value="{{ old('rating') . "$course->rating"}}">
                                @error('rating')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Price -->
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') . "$course->price" }}">
                                @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
