<div class="row">
    <div class="col s12">
        <h4 class="center-align">Обратная связь</h4>
    </div>
</div>
@if (Session::has('success'))
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Спасибо!</h4>
            <p>{{ Session::get('success') }}</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Хорошо</a>
        </div>
    </div>
@endif
<div class="row">
    <div class="col m3"></div>
    <form class="col s12 m6" action="{{ route('feedback') }}" method="POST">
        @csrf
        <div class="row">
            <div class="input-field col s12 r">
                <i class="material-icons prefix">account_circle</i>
                <input required id="name" name="name" type="text" class="validate" value="{{ old('name') }}">
                <label for="name">Имя *</label>
                <span class="helper-text" data-error="Имя обязательно для заполения" data-success="Верно"></span>
                @if ($errors->has('name'))
                    <span class="helper-text red-text">
                        {{ $errors->first('name') }}
                    </span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input required id="email" name="email" type="email" class="validate"
                    value="{{ old('email') }}">
                <label for="email">Email *</label>
                <span class="helper-text" data-error="Email должен содержать значок @" data-success="Верно"></span>
                @if ($errors->has('email'))
                    <span class="helper-text red-text">
                        {{ $errors->first('email') }}
                    </span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <textarea required row="12" id="text" name="text" class="materialize-textarea validate">{{ old('text') }}</textarea>
                <label for="text">Сообщение *</label>
                <span class="helper-text" data-error="Сообщение обязательно для заполения" data-success="Верно">
                </span>
                @if ($errors->has('text'))
                    <span class="helper-text red-text">
                        {{ $errors->first('text') }}
                    </span>
                @endif
            </div>
        </div>
        <div class="row center">
            <button class="btn waves-effect waves-light btn-large red" type="submit" name="action">
                Отправить
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
    <div class="col m3"></div>
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
            M.AutoInit();
        });
    </script>
    @if (Session::has('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var modalEl = document.getElementById('modal1');
                var modal = M.Modal.getInstance(modalEl);
                modal.open();
            });
        </script>
    @endif
@endsection
