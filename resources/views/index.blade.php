@extends('layouts.all')

@php
    $title = "Заголовок";
    $description = "Дескрипшен";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <section class="ban_er">
        <div class="container">
            <h1 class="no_show">АНО "Центр развития туристических кластеров Курской Области"</h1>
        </div>
    </section>

    <section class="events_section">
        <h2>События и мероприятия</h2>
        <div class="carusel_wrapper">
            <article class="event">

            </article>
        </div>
    </section>

    <section class="presentation_section">
        <div class="message">
            <div class="icon"></div>
            <div class="text">
                <h2>Презентация этнографического комплекса «Парк мельниц»</h2>
                <a href="#">Прейти к презентации</a>
            </div>
        </div>
    </section>

@endsection
