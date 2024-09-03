@extends('layouts.aap')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1>Job </h1>
                            <a href="{{ route('job.create') }}" class="btn btn-light">Create new job</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="" method="GET" class="mb-4">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>title</th>
                                        <th>image</th>
                                        <th>short_description</th>
                                        <th>description</th>
                                        <th>location</th>
                                        <th>skills</th>
                                        <th>qualification</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($jobData as $job)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>

                                            <td>{{ $job->title }}</td>
                                            <td><img src="{{ asset('storage/'.$job->image) }}" alt="{{ $job->title }}" style="max-width: 100px;"></td>
                                            <td>{{ $job->short_description }}</td>
                                            <td>{!! $job->description !!}</td>
                                            <td>{{ $job->skills }}</td>
                                            <td>{{ $job->qualification}}</td>
                                            {{--                                        <td>{{ $job->date ? $job->date->format('Y-m-d') : 'Not specified' }}</td> --}}

                                            <td>
                                                <a href="{{ route('job.edit', $job->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('job.delete', $job->id) }}"
                                                    class="btn btn-danger">Delete</a>
                                                <!-- Add delete button if needed -->
                                                <a href="{{ route('job.duplicate', $job->id) }}"
                                                    class="btn btn-warning">Duplicate</a>

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">No posts found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        <!-- Pagination links can be added here if needed -->
                        {{ $jobData->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
