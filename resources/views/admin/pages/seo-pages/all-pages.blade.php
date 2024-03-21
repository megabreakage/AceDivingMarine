@extends('admin.layouts.master')

@section('content')
    <div class="db-info-wrap db-package-wrap">

        <div class="dashboard-box table-opp-color-box">
            <div class="row">

                @include('admin.pages.components.errors-section')

                <div class="col-md-12 text-right">
                    <a href="{{ route('dashboard.destination.create') }}" class="btn btn-outline-primary btn-rct"> <i
                            class="fas fa-plus"></i>
                        Add Page</a>
                </div>
            </div>
            <h4>SEO Pages</h4>
            <p>List of All SEO Pages</p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Page</th>
                            <th>description</th>
                            <th>URL</th>
                            <th class="text-center">Sections</th>
                            <th class="text-center">Position</th>
                            <th>status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $index => $page)
                            <tr>
                                <td> {{ $index + 1 }}. </td>
                                <td>
                                    <a href="{{ route('dashboard.content.about', $page['id']) }}">
                                        <span class="list-item-name">{{ $page['name'] }}</span>
                                    </a>
                                </td>
                                <td>
                                    {{ strlen($page['description']) > 70 ? substr($page['description'], 0, 70) . ' ...' : $page['description'] }}
                                </td>
                                <td>{{ $page['url'] }}</td>
                                <td class="text-center">{{ count($page['contents']) }}</td>
                                <td class="text-center">{{ $page['link_position'] }}</td>
                                <td><span class="badge badge-{{ $page['active'] ? 'success' : 'danger' }}"
                                        style="background-color: #006EB6">{{ $page['active'] ? 'Active' : 'In-Active' }}</span>
                                </td>
                                <td> {{ $page['created_at']->format('j M, Y h:i A') }} </td>
                                <td>
                                    <a href="{{ route('dashboard.seo-page.show', $page['id']) }}">
                                        <i class="far fa-eye text-rct-secondary"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

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
