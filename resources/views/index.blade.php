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
            <swiper-container pagination="true" pagination-clickable="true" slides-per-view="1">
                <swiper-slide>
                    <article class="bnr_slide">
                        <div class="text">
                            <div class="text_wrapper">
                                <p>Этнографический <br>комплекс</p>
                                <h2>«Парк мельниц»</h2>
                            </div>

                        </div>
                        <div class="img">
                            <img src="{{ asset('img/melnitsa.webp') }}" alt="">
                        </div>
                    </article>
                </swiper-slide>

                <swiper-slide>
                    <article class="bnr_slide">
                        <div class="text">
                            <div class="text_wrapper">
                                <p>Этнографический <br>комплекс</p>
                                <h2>«Парк мельниц»</h2>
                            </div>

                        </div>
                        <div class="img">
                            <img src="{{ asset('img/melnitsa.webp') }}" alt="">
                        </div>
                    </article>
                </swiper-slide>

            </swiper-container>
        </div>
    </section>

    <section class="events_section">
        <h2>События и мероприятия</h2>
        <div class="carusel_wrapper">
            <div class="control">
                <div class="btns">
                    <button class = "next_event_btn"></button>
                    <div class="circle"></div>
                    <button class = "prev_event_btn"></button>
                </div>
            </div>
            <div class="slodes">
                    <swiper-container slides-per-view="5" space-between="30" >
                        @for ($i=0; $i<10; $i++)
                            <swiper-slide>
                                <x-event
                                    :img="asset('img/events/'.rand(1,4).'.webp')"
                                    name="День семьи любви и верности"
                                    :date="date('d.m.Y')"
                                    time="11:34"
                                ></x-event>
                            </swiper-slide>
                        @endfor
                    </swiper-container>
            </div>
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
