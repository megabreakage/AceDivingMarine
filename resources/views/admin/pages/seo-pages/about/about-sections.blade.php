@extends('admin.layouts.master')

@section('content')
    <div class="db-info-wrap db-package-wrap">

        <div class="dashboard-box table-opp-color-box">
            <div class="row">

                @include('admin.pages.components.errors-section')

                <div class="col-md-12 text-right">
                    <a href="{{ route('dashboard.destination.create') }}" class="btn btn-outline-primary"> <i
                            class="fas fa-plus"></i>
                        Add Destination</a>
                </div>
            </div>
            <h4>Destinations List</h4>
            <p>List of All destinations</p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Section</th>
                            <th>description</th>
                            <th>Action Button</th>
                            <th>URL</th>
                            <th>Position</th>
                            <th>status</th>
                            <th>Created At</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($about_sections as $index => $section)
                            <tr>
                                <td> {{ $index + 1 }}. </td>
                                <td>
                                    <a href="{{ route('dashboard.content.about', $section['id']) }}">
                                        <span class="destination-name">{{ $section['title'] }}</span>
                                    </a>
                                </td>
                                <td>{{ substr($section['description'], 0, 70) . ' ...' }}</td>
                                <td>{{ $section['action_button'] }}</td>
                                <td>{{ $section['button_url'] }}</td>
                                <td>{{ $section['content_position'] }}</td>
                                <td><span
                                        class="badge badge-{{ $section['active'] ? 'success' : 'danger' }}">{{ $section['active'] ? 'Active' : 'In-Active' }}</span>
                                </td>
                                <td> {{ $section['created_at']->format('j M, Y h:i A') }} </td>
                                <td>
                                    <a href="{{ route('dashboard.content.about', $section['id']) }}">
                                        <span class="badge badge-success"><i class="far fa-edit"></i></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- pagination html -->
        <div class="pagination-wrap">
            <nav class="pagination-inner">
                <ul class="pagination disabled">
                    <li class="page-item"><span class="page-link"><i class="fas fa-chevron-left"></i></span></li>
                    <li class="page-item"><a href="#" class="page-link active">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
