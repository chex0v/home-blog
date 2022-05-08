<div class="carousel carousel-slider center">
    <a class="carousel-item" href="#one!">
        <img src="/img/certificate_css.jpg" alt="Certificate CSS" />
    </a>
    <a class="carousel-item" href="#two!">
        <img src="/img/certificate_js.jpg" alt="Certificate JS" />
    </a>
</div>
@section('footer_js')
    @parent
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems, {
                fullWidth: true,
                indicators: true
            });
        });
    </script>
@endsection
