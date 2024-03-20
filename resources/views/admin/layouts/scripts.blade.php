<script src="{{ asset('assets/admin/js/jquery-3.2.1.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
{{-- <script src="{{ asset('assets/admin/js/canvasjs.min.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/admin/js/chart.js') }}"></script> --}}
<script src="{{ asset('assets/admin/js/counterup.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.slicknav.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/admin/js/tingle/tingle.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/dashboard-custom.js') . '?v' . time() }}"></script>
<script src="{{ asset('assets/admin/js/js.js') . '?v' . time() }}" defer></script>

@if (session('error'))
    <script defer>
        $(document).ready(function() {

            function(toastr) {
                toastr["error"]("{{ session('error') }}", "Oops!", {
                    closeButton: true,
                    progressBar: true,
                    timeOut: 10000
                });
            }
        })
    </script>
@endif

@if (session('warning'))
    <script defer>
        $(document).ready(function() {

            function(toastr) {

                toastr["warning"]("{{ session('warning') }}", "Warning", {
                    closeButton: true,
                    progressBar: true,
                    timeOut: 10000
                });
            }
        })
    </script>
@endif

@if (session('success'))
    <script defer>
        $(document).ready(function() {

            function(toastr) {
                toastr["success"]("{{ session('success') }}", "Success", {
                    closeButton: true,
                    progressBar: true,
                    timeOut: 10000
                });
            }
        })
    </script>
@endif

@if (session('info'))
    <script defer>
        $(document).ready(function() {

            function(toastr) {
                toastr["info"]("{{ session('info') }}", "Info", {
                    closeButton: true,
                    progressBar: true,
                    timeOut: 10000
                });

            }
        })
    </script>
@endif
