@extends('layouts.app')

@section('content')
    <div class=" welcome flex-center position-ref full-height">
        <header class="banner"  >
            <div class="personal-information">
                <div class="img" url-image="{{asset('images/profile.jpg')}}">
                    <img src="{{asset('images/profile.png')}}" alt="Cesar Santana">
                </div>

                {{--  <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Descargar CV</button>  --}}
                <h1> {{$user->tagline}}</h1>
                <div class="pi-item-texts">
                    <h2 item-name="name" class="pi-item-text active">{{$user->name}} <br> 26 Años</h2>
                    <h2 item-name="location" class="pi-item-text">Monterrey, Nuevo Léon, México</h2>
                    <h2 item-name="career" class="pi-item-text">{{$user->career}}</h2>
                    <h2 item-name="phone" class="pi-item-text">+52 311 260 1548</h2>
                    <h2 item-name="email" class="pi-item-text">{{$user->email}}</h2>
                    <h2 item-name="github" class="pi-item-text"> <a class="white-text" target="_blank" href="https://github.com/blogui91">https://github.com/blogui91</a>  </h2>
                    <h2 item-name="medium" class="pi-item-text"> <a class="white-text" target="_blank" href="https://medium.com/@blogui91">https://medium.com/@blogui91</a>  </h2>
                </div>

                <ul class="pi-items">
                    <li item-name="name" class="pi-item ">
                        <a href="#">          
                            <i item-name="name" class="fa fa-2x fa-male active" aria-hidden="true"></i> 
                        </a>
                    </li>
                    <li item-name="location" class="pi-item">
                        <a href="#">          
                            <i item-name="location" class="fa fa-2x fa-map-marker" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li item-name="career" class="pi-item">
                        <a href="#">          
                            <i item-name="career" class="fa fa-2x fa-graduation-cap" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li item-name="phone" class="pi-item">
                        <a href="#">          
                            <i item-name="phone" class="fa fa-2x fa-mobile" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li item-name="email" class="pi-item">
                        <a href="#">          
                            <i item-name="email" class="fa fa-2x fa-envelope" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li item-name="github" class="pi-item">
                        <a href="#">          
                            <i item-name="github" class="fa fa-2x fa-github" aria-hidden="true"></i>
                        </a>
                    </li>

                    <li item-name="medium" class="pi-item">
                        <a href="#">          
                            <i item-name="medium" class="fa fa-2x fa-medium" aria-hidden="true"></i>
                        </a>
                    </li>


                        
                </ul>
            </div>
        </header>
        <div class="content">

            <section class="about-me left-align">
                <div class="container">
                    <h3 class="bold">Sobre mí</h3>
                    <p>{{$user->description}}</p>
                    <small>Cesar Santana</small>
                </div>
            </section>

            <section class="abilities left-align">
                <div class="container">
                    <h3 class="bold">Habilidades y Conocimientos</h3>
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
                </div>
            </section>

            <section class="technologies left-align">
                <div class="container">
                    <h3 class="bold">Frameworks & Librerías</h3>
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
                </div>

            </section>

            <section class="projects left-align">
                <div class="container">
                    <h3 class="bold">Proyectos</h3>

                        <div class="project-list">
                            @foreach($projects as $project)
                                <div class="project-card">
                                    <div class="project-img" url-image="{{asset($project->image)}}">
                                        <div class="project-content" >
                                            <div class="project-logo" url-image="{{asset($project->logo)}}"></div>
                                            <p>{{$project->description}}</p>
                                            <a target="_blank" href="{{$project->url}}" class="btn btn-sm btn-primary">Ver</a>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-sm btn-success hide" data-toggle="modal" data-target="#project-{{$project->id}}">
                                                Tecnologias usadas
                                            </button>

                                            


                                            <div class="technologies">
                                                <!-- Modal -->
                                                <div class="modal fade" id="project-{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="project-{{$project->id}}Label">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="project-{{$project->id}}Label">Modal title</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            
                                                            <ul class="technologies-list">
                                                                @foreach($project->technologies as $technology)
                                                                    <li>
                                                                        <img src="{{$technology->image}}" alt="">
                                                                    </li>
                                                                @endforeach
                                                            </ul>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="project-footer">
                                        <small><b>{{$project->name}}</b></small><br>
                                        <div class="project-technologies">
                                            <ul class="technologies-list">
                                                @foreach($project->technologies as $technology)
                                                    <li>
                                                        <img src="{{$technology->image}}" alt="">
                                                    </li>
                                                @endforeach
                                            </ul>
                                        
                                        </div> 
                                    </div>
                                </div>
                            @endforeach
                        </div>

                </div>
            </section>

            <section class="libraries left-align">
                <div class="container">
                    <h3 class="bold">Librerías propias</h3>
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
                </div>
            </section>

            <section class="cv left-align bg-img" url-image="{{asset('images/bg-footer.jpeg')}}" >
                <div class="container">
                    <h3 class="bold white-text">Descargar CV</h3>
                    <div class="center md-padding">
                        <a href="" class="btn btn-success btn-lg">Descargar</a> 
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
