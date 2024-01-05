<!-- Scripts -->
<script src="{{ asset('public/js/app.js') }}"></script>

<!-- Optional JS -->
<script src="{{ asset('public/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('public/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>

<!-- Argon JS -->
<script src="{{ asset('public/js/argon.js') }}"></script>
<script src="{{ asset('public/js/custom.js') }}"></script>

<script src="{{ asset('public/plugin/calentim/js/moment.min.js')}}"></script>
<script src="{{ asset('public/plugin/calentim/js/calentim.min.js')}}"></script>

<script src="{{ asset('public/plugin/rateyo/js/jquery.rateyo.min.js') }}"></script>
<script src="{{ asset("public/plugin/tinymce/js/tinymce/tinymce.min.js") }}"></script>
<script src="{{ asset('public/plugin/jquery-confirm/js/jquery-confirm.min.js') }}"></script>
<!-- Dynamic Add script-->
@include('partials._dynamic_script')

<!-- Global Message -->
@include('helper.app_mesage')


