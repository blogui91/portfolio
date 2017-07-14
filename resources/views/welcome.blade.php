@extends('layouts.app')

@section('content')
<div class=" welcome flex-center position-ref full-height">
    <header class="banner" url-image="{{asset('images/banner.jpg')}}"></header>
    <section class="content">
        <div class="personal-information">
            <div class="img" url-image="{{asset('images/profile.png')}}">
                <img src="{{asset('images/profile.png')}}" alt="Cesar Santana">
            </div>

            <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Descargar CV</button>

            <h1>{{$user->name}}</h1>
            <h3>{{$user->career}}</h3>
            <h4>{{$user->tagline}}</h4>

            <ul class="pi-items">
                <li class="pi-item">
                    <i class="fa fa-2x fa-male" aria-hidden="true"></i> 
                </li>
                <li class="pi-item">
                    <i class="fa fa-2x fa-map-marker" aria-hidden="true"></i>
                </li>
                <li class="pi-item">
                    <i class="fa fa-2x fa-graduation-cap" aria-hidden="true"></i>
                </li>
                <li class="pi-item">
                    <i class="fa fa-2x fa-mobile" aria-hidden="true"></i>
                </li>
                <li class="pi-item">
                    <i class="fa fa-2x fa-envelope" aria-hidden="true"></i>
                </li>
                <li class="pi-item"><i class="fa fa-2x fa-users" aria-hidden="true"></i></li>
            </ul>
        </div>

        <div class="about-me left-align">
            <blockquote>
                <h3>Sobre mí</h3>
                <p>{{$user->description}}</p>
                <small>Cesar Santana</small>
            </blockquote>
        </div>

        <div class="technologies left-align">
            <blockquote>
                <h3>Frameworks & Librerías</h3>
                <ul>
                    <li><img src="{{asset('images/angularjs.png')}}" alt=""></li>
                    <li><img src="{{asset('images/vuejs.png')}}" alt=""></li>
                    <li><img style="background-color:#777;padding:5px;" src="{{asset('images/angular.png')}}" alt=""></li>
                    <li><img src="{{asset('images/react-webpack.png')}}" alt=""></li>
                    
                    <li><img src="{{asset('images/adonisjs.jpg')}}" alt=""></li>
                    <li><img src="{{asset('images/expressjs.png')}}" alt=""></li>
                    <li><img src="{{asset('images/mongoose.png')}}" alt=""></li>
                    <li><img src="{{asset('images/nuxtjs.png')}}" alt=""></li>
                    <li><img src="{{asset('images/sass.svg')}}" alt=""></li>
                    <li><img src="{{asset('images/cordova.png')}}" alt=""></li>
                    <li><img src="{{asset('images/laravel.svg')}}" alt=""></li>
                    <li><img src="{{asset('images/laravelmix.svg')}}" alt=""></li>
                    
                    
                    
                    
                </ul>
            </blockquote>
        </div>

        <div class="abilities left-align">
            <blockquote>
                <h3>Habilidades y Conocimientos</h3>
                <span class="label label-success">API Rest</span>
                <span class="label label-success">Aplicaciones Híbridas</span>
                <span class="label label-success">JWTs</span>
                <span class="label label-success">Single Page Applications</span>
                <span class="label label-success">Trabajo en equipo</span>
                <span class="label label-success">Scrum Daily</span>
                <span class="label label-success">Git</span>
                <span class="label label-success">Material Design</span>
                <span class="label label-success">PHP Cartalyst</span>
                <span class="label label-success">Laravel Repository Pattern</span>
                <span class="label label-success">Vuex</span>
                <span class="label label-success">EcmaScript6</span>
                <span class="label label-success">TypeScript</span>
                <span class="label label-success">Quasar</span>
                <span class="label label-success">Webcomponents</span>
            </blockquote>
        </div>

        <div class="libraries left-align">
            <blockquote>
                <h3>Librerías propias</h3>
                
                <div class="row">
                    <div class="col col-md-6 col-sm-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Easy Requests</h3>
                            </div>
                            <div class="panel-body">
                                <p class="description">
                                    Realización de peticiones ajax de manera sencilla, inspirado en los Modelos de Laravel y Servicios de Angular.
                                </p>
                                <a href="https://github.com/blogui91/easy-requests" class="btn btn-link">Github</a>
                                <a href="https://www.npmjs.com/package/easy-requests" class="btn btn-link">NPM</a>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-6 col-sm-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Laravalidator</h3>
                            </div>
                            <div class="panel-body">
                                <p class="description">
                                    Validador de datos, inspirado en la clase Validator de Laravel.
                                </p>
                                <a href="https://github.com/blogui91/laravalidator-js" class="btn btn-link">Github</a>
                                <a href="https://www.npmjs.com/package/laravalidator-js" class="btn btn-link">NPM</a>
                            </div>
                        </div>
                    </div>
                </div>
            </blockquote>
        </div>
    </section>
</div>
@endsection
