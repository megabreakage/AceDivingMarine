<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>{{ $title }}</title>

        @include('admin.layouts.styles')

        <script src="https://cdn.tiny.cloud/1/vv8apksknxjr9ulqtvdsogtvlp458xoxcf9zynfdz6jx46qy/tinymce/6/tinymce.min.js">
        </script>

    </head>

    <body>
        <div id="container-wrapper">
            <div id="dashboard" class="dashboard-container">
                @include('admin.layouts.header')

                @yield('content')

                @include('admin.layouts.footer')
            </div>
        </div>

        @include('admin.layouts.scripts')

        @yield('scripts')
    </body>

</html>
