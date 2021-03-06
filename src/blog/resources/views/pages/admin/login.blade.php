@extends('layouts.admin')
@section('content')
    <div class="login">
        <form
            class="login__form"
            action="{{ route('admin.login.authenticate') }}"
            method="post"
        >
            @csrf
            <label class="login__label">
                <span class="login__text_label">Логин</span>
                <input
                    class="login__input_text"
                    type="text"
                    name="name"
                    placeholder="Введите логин"
                    value="{{ old('name') }}"
                />
                @error('name')
                    <span class="login__error">{{ $message }}</span>
                @enderror
            </label>
            <label class="login__label">
                <span class="login__text_label">Пароль</span>
                <input
                    class="login__input_text"
                    type="password"
                    name="password"
                    placeholder="Введите пароль"
                />
                @error('password')
                    <span class="login__error">{{ $message }}</span>
                @enderror
            </label>
            <input
                class="login__btn"
                type="submit"
                value="Войти"
            />
        </form>
    </div>
@endsection
