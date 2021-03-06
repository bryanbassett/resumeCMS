@extends('layouts.app')

@section('content')

  <?php use App\Item;$ItemX = new Item();?>
  <?php use App\Settings;$Setting = new Settings();?>

    <div class="container">
        <div class="jumbotron">



            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1 class="display-1 text-hide invisible">
                            Bryan James Bassett
                        </h1>
                        <div class="topper"  >
                            <svg id="bjb" height="260" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 270.8 142.72"><defs></defs><title>bjb_logo</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M0,44.08,7.63,0l14,0Q29.95.06,34,3.18a9.54,9.54,0,0,1,3.72,8.75q-.45,7-7.63,9.87a7.45,7.45,0,0,1,4,3.28,9.62,9.62,0,0,1,1.23,5.71,12.66,12.66,0,0,1-5,9.84q-4.62,3.45-12.64,3.45ZM13.62,25.34,11.78,35.87l6.2,0a7.92,7.92,0,0,0,4.85-1.43,5.68,5.68,0,0,0,2.3-3.82q.84-5-3.88-5.28Zm1.18-7,4.88,0q6.75-.15,7.57-5.2t-5.15-5l-5.51,0Z"/><path class="cls-1" d="M57.91,28.49H52.16L49.44,44.08H39.08L46.71,0,62.27,0q7.49,0,11.52,3.49t3.62,9.54A14.14,14.14,0,0,1,74.65,21a16.14,16.14,0,0,1-6.78,5l5.94,17.64v.52H62.76Zm-4.36-8.18,6.06.06a7.62,7.62,0,0,0,4.31-1.21,6.69,6.69,0,0,0,2.62-3.32A7.81,7.81,0,0,0,67,11.75q-.61-3.36-4.3-3.55l-7,0Z"/><path class="cls-1" d="M97,19.07,108.11,0h11.65l-19,28.73L98.12,44.08H87.58l2.85-16.35L81.62,0,92.39,0Z"/><path class="cls-1" d="M136.56,35.81H122.49l-3.91,8.27H107.17L130.51,0h9.75l8.14,44.08H137.62Zm-10.2-8.17h9.14l-1.93-15.2Z"/><path class="cls-1" d="M187.7,44.08h-10L167.14,16.26,162.3,44.08H151.94L159.57,0h10.11l10.51,27.82L185,0h10.35Z"/><path class="cls-1" d="M24.76,49H35.12L30,79.24a16.37,16.37,0,0,1-5.65,10.61,16,16,0,0,1-11.06,3.86Q6.87,93.59,3.38,90T.06,79.73l10.44,0v2.09q.13,3.6,3.49,3.69,4.53.09,5.69-6.63Z"/><path class="cls-1" d="M59.31,84.81H45.23l-3.91,8.27H29.91L53.25,49H63l8.14,44.08H60.37ZM49.1,76.64h9.15l-1.94-15.2Z"/><path class="cls-1" d="M95.75,49,100,79.58,114.74,49h13.8l-7.63,44.08H110.5l1.88-10.81,4.48-19.92L101.42,93.08H94.54l-5-31.88L86.76,83.3,85,93.08H74.68L82.31,49Z"/><path class="cls-1" d="M157.51,74.37H141.32L139.47,84.9h19.16l-1.42,8.18H127.69L135.32,49H164.9l-1.42,8.2h-19.2l-1.63,9.3h16.23Z"/><path class="cls-1" d="M185.88,81.15q.66-3.42-3.69-5.3l-5-2.06Q166.78,69.11,167.29,61a11.32,11.32,0,0,1,2.54-6.59,15.23,15.23,0,0,1,6.45-4.49,23.74,23.74,0,0,1,9-1.55q6.54.13,10.52,3.82a12.65,12.65,0,0,1,3.92,9.9H189.42A6.2,6.2,0,0,0,188.35,58a4.66,4.66,0,0,0-3.83-1.59,8,8,0,0,0-4.6,1.21,4.93,4.93,0,0,0-2.37,3.42q-.57,3,4.5,5a51,51,0,0,1,7.37,3.33q7.23,4.34,6.78,11.69a12,12,0,0,1-2.45,6.69,14.16,14.16,0,0,1-6.13,4.45,22.64,22.64,0,0,1-8.79,1.51,21,21,0,0,1-6.63-1.12A14.48,14.48,0,0,1,167,89.51a13.42,13.42,0,0,1-4.24-10.75l10.38,0a7.11,7.11,0,0,0,1.31,5.13c1,1.16,2.65,1.74,5,1.74a7.52,7.52,0,0,0,4.34-1.19A5,5,0,0,0,185.88,81.15Z"/><path class="cls-1" d="M0,142.08,7.63,98l14,0q8.3,0,12.38,3.15a9.54,9.54,0,0,1,3.72,8.75q-.45,7-7.63,9.87a7.45,7.45,0,0,1,4,3.28,9.62,9.62,0,0,1,1.23,5.71,12.66,12.66,0,0,1-5,9.84q-4.62,3.45-12.64,3.45Zm13.62-18.74-1.84,10.53,6.2,0a7.92,7.92,0,0,0,4.85-1.43,5.68,5.68,0,0,0,2.3-3.82q.84-5-3.88-5.28Zm1.18-7,4.88,0q6.75-.15,7.57-5.2t-5.15-5l-5.51,0Z"/><path class="cls-1" d="M65,133.81H50.89L47,142.08H35.57L58.91,98h9.75l8.14,44.08H66Zm-10.21-8.17h9.15L62,110.44Z"/><path class="cls-1" d="M104.56,130.15q.68-3.42-3.69-5.3l-5-2.06Q85.46,118.11,86,110a11.32,11.32,0,0,1,2.54-6.59A15.11,15.11,0,0,1,95,98.94a23.7,23.7,0,0,1,9-1.55q6.54.14,10.52,3.82a12.68,12.68,0,0,1,3.92,9.9H108.11A6.14,6.14,0,0,0,107,107a4.65,4.65,0,0,0-3.83-1.59,8,8,0,0,0-4.6,1.21,4.92,4.92,0,0,0-2.36,3.42c-.38,2,1.11,3.67,4.49,5a51.26,51.26,0,0,1,7.38,3.33q7.23,4.34,6.78,11.69a12,12,0,0,1-2.45,6.69,14.22,14.22,0,0,1-6.13,4.45,22.7,22.7,0,0,1-8.8,1.51,21.13,21.13,0,0,1-6.63-1.12,14.57,14.57,0,0,1-5.24-3.08,13.41,13.41,0,0,1-4.23-10.75l10.38,0a7.11,7.11,0,0,0,1.3,5.13c1,1.16,2.65,1.74,5,1.74a7.55,7.55,0,0,0,4.34-1.19A5,5,0,0,0,104.56,130.15Z"/><path class="cls-1" d="M142.53,130.15q.66-3.42-3.7-5.3l-5-2.06q-10.44-4.68-9.93-12.77a11.32,11.32,0,0,1,2.54-6.59,15.23,15.23,0,0,1,6.45-4.49,23.74,23.74,0,0,1,9-1.55q6.54.14,10.52,3.82a12.65,12.65,0,0,1,3.92,9.9H146.07A6.14,6.14,0,0,0,145,107a4.63,4.63,0,0,0-3.82-1.59,8,8,0,0,0-4.61,1.21,4.92,4.92,0,0,0-2.36,3.42q-.57,3,4.5,5a51,51,0,0,1,7.37,3.33q7.23,4.34,6.78,11.69a12,12,0,0,1-2.45,6.69,14.22,14.22,0,0,1-6.13,4.45,22.7,22.7,0,0,1-8.8,1.51,21.13,21.13,0,0,1-6.63-1.12,14.53,14.53,0,0,1-5.23-3.08,13.42,13.42,0,0,1-4.24-10.75l10.38,0a7.11,7.11,0,0,0,1.3,5.13q1.48,1.74,5,1.74a7.55,7.55,0,0,0,4.34-1.19A5,5,0,0,0,142.53,130.15Z"/><path class="cls-1" d="M186.09,123.37h-16.2l-1.84,10.53h19.16l-1.42,8.18H156.27L163.9,98h29.58l-1.43,8.2H172.86l-1.63,9.3h16.22Z"/><path class="cls-1" d="M230.68,106.2H217.85l-6.21,35.88H201.26l6.23-35.88H194.87l1.45-8.2h35.79Z"/><path class="cls-1" d="M269.37,106.2H256.54l-6.21,35.88H240l6.23-35.88H233.56L235,98H270.8Z"/></g></g></svg>
                        </div>
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-3">
                    </div>
                </div>
            </div>

            @if( ($Setting->find(1))->enabled == 0)
            <p class="lead text-center">
                Portfolio currently being modified, check back later.
            </p>
            @else
            <p class="lead top-title">
               Full-Stack Developer
            </p>
            @endif
            <p class="lead ">

            @if(request()->get('pdf') == true)
                    <a href="#mailgo" aria-label="Email" data-address="bryan" data-domain="bjbassett.org">bryan@bjbassett.org</a> - <a  class="mailgo" data-tel="2168028141">216.802.8141</a>
            @else
                    <a  class="red-tooltip" aria-label="Email" href="#mailgo" data-address="bryan" data-domain="bjbassett.org" data-placement="bottom" data-toggle="tooltip" data-original-title="email"><i class="fa fa-envelope"></i></a> - <a data-placement="bottom" data-toggle="tooltip" data-original-title="call"  aria-label="Phone" class="mailgo red-tooltip"   data-tel="2168028141"><i class="fa fa-phone"></i></a> -
                    <a   data-placement="bottom" data-toggle="tooltip" data-original-title="twitter" class="pdfprint red-tooltip" href="https://bjbassett.org/s/twitter" aria-label="Tweet" >
                        <i class="fa fa-twitter"></i>
                    </a> -
                    <a   data-placement="bottom" data-toggle="tooltip" data-original-title="linkedin" class="pdfprint red-tooltip" href="https://bjbassett.org/s/in" aria-label="LinkedIn" >
                        <i class="fa fa-linkedin"></i>
                    </a> -
                    <a   data-placement="bottom" data-toggle="tooltip" data-original-title="generate printable resume" class="pdfprint red-tooltip" href="/pdf" aria-label="Print" >
                        <i class="fa fa-print"></i>
                    </a>
            @endif

            </p>
        </div>
    </div>
    @if( ($Setting->find(1))->enabled == 0 && Auth::check())
        <div class="alert alert-primary" role="alert">
            FYI: The following content is currently being hidden.
        </div>
        @endif
    @if( ($Setting->find(1))->enabled == 1 || Auth::check())
        <div class="container">
            <div class="row first-row">
                <div class="col-sm  sec-1">
                    @foreach($section1 as $sec1)
                        @if($sec1->noParent())
                            <div class="field-group">
                                <h3 class="field-group">
                                    {{ $sec1->name  }}
                                </h3>
                                <div class="{{strtolower(str_replace(' ', '_', $sec1->name)) }}">
                                    @foreach($sec1->allItems() as $item)

                                            @foreach($ItemX->deCode($item->fullContent) as $it_id => $item2)
                                                <items :item-identity="{{$item->id}}" ref="item-{{$item->id}}"  :items-data="{{ json_encode($ItemX->figureIt($it_id,$item2)) }} "></items>
                                            @endforeach
                                                <div style="clear:both"></div>
                                                @auth
                                                    <a class="badge badge-light" href="/edititem/{{$item->id}}">edit</a>
                                                @endauth


                                    @endforeach
                                </div>
                                @foreach($sec1->children as $children1)
                                    <h4>
                                        {{ $children1->name }}
                                    </h4>
                                    <div class="{{strtolower(str_replace(' ', '_', $children1->name)) }}">
                                        @foreach($children1->allItems() as $item)

                                                @foreach($ItemX->deCode($item->fullContent) as $it_id => $item2)
                                                    <items :item-identity="{{$item->id}}" ref="item-{{$item->id}}"  :items-data="{{ json_encode($ItemX->figureIt($it_id,$item2)) }} "></items>

                                                @endforeach
                                                    <div style="clear:both"></div>
                                                    @auth
                                                        <a class="badge badge-light" href="/edititem/{{$item->id}}">edit</a>
                                                    @endauth

                                        @endforeach
                                    </div>
                                    @foreach($children1->children as $grandChildren1)
                                        <h5>
                                            {{ $grandChildren1->name }}
                                        </h5>
                                        <div class="{{strtolower(str_replace(' ', '_', $grandChildren1->name)) }}">
                                            @foreach($grandChildren1->allItems() as $item)

                                                    @foreach($ItemX->deCode($item->fullContent) as $it_id => $item2)
                                                        <items :item-identity="{{$item->id}}" ref="item-{{$item->id}}"  :items-data="{{ json_encode($ItemX->figureIt($it_id,$item2)) }} "></items>

                                                    @endforeach
                                                        <div style="clear:both"></div>
                                                        @auth
                                                            <a class="badge badge-light" href="/edititem/{{$item->id}}">edit</a>
                                                        @endauth

                                            @endforeach
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="row second-row">
                <div class="col-xs-12 col-sm-5   sec-2">
                    @foreach($section2 as $sec2)
                        @if($sec2->noParent())
                            <div class="field-group">
                                <h3 class="field-group">
                                    {{ $sec2->name  }}
                                </h3>
                                <div class="{{strtolower(str_replace(' ', '_', $sec2->name)) }}">
                                    @foreach($sec2->allItems() as $item)

                                            @foreach($ItemX->deCode($item->fullContent) as $it_id => $item2)
                                                <items :item-identity="{{$item->id}}"  :items-data="{{ json_encode($ItemX->figureIt($it_id,$item2)) }} "></items>

                                            @endforeach
                                                <div style="clear:both"></div>

                                                @auth
                                                    <a class="badge badge-light" href="/edititem/{{$item->id}}">edit</a>
                                                @endauth

                                    @endforeach
                                </div>
                                @foreach($sec2->children as $children2)
                                    <h4>
                                        {{ $children2->name }}
                                    </h4>
                                    <div class="{{strtolower(str_replace(' ', '_', $children2->name)) }}">
                                        @foreach($children2->allItems() as $item)

                                                @foreach($ItemX->deCode($item->fullContent) as $it_id => $item2)
                                                    <items :item-identity="{{$item->id}}" ref="item-{{$item->id}}"  :items-data="{{ json_encode($ItemX->figureIt($it_id,$item2)) }} "></items>

                                                @endforeach
                                                    <div style="clear:both"></div>
                                                    @auth
                                                        <a class="badge badge-light" href="/edititem/{{$item->id}}">edit</a>
                                                    @endauth

                                        @endforeach
                                    </div>
                                    @foreach($children2->children as $grandChildren2)
                                        <h5>
                                            {{ $grandChildren2->name }}
                                        </h5>
                                        <div class="{{strtolower(str_replace(' ', '_', $grandChildren2->name)) }}">
                                            @foreach($grandChildren2->allItems() as $item)

                                                    @foreach($ItemX->deCode($item->fullContent) as $it_id => $item2)
                                                        <items :item-identity="{{$item->id}}" ref="item-{{$item->id}}"  :items-data="{{ json_encode($ItemX->figureIt($it_id,$item2)) }} "></items>

                                                    @endforeach
                                                        <div style="clear:both"></div>
                                                        @auth
                                                            <a class="badge badge-light" href="/edititem/{{$item->id}}">edit</a>
                                                        @endauth

                                            @endforeach
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="col-xs-12 col-sm-7 sec-3">
                    @foreach($section3 as $sec3)
                        @if( $sec3->noParent())
                            <div class="field-group">
                                <h3 class="field-group">
                                    {{ $sec3->name  }}
                                </h3>
                                <div class="{{strtolower(str_replace(' ', '_', $sec3->name)) }}">
                                    @foreach($sec3->allItems() as $item)

                                            @foreach($ItemX->deCode($item->fullContent) as $it_id => $item2)
                                                <items :item-identity="{{$item->id}}" ref="item-{{$item->id}}"  :items-data="{{ json_encode($ItemX->figureIt($it_id,$item2)) }} "></items>

                                            @endforeach
                                                <div style="clear:both"></div>
                                                @auth
                                                    <a class="badge badge-light" href="/edititem/{{$item->id}}">edit</a>
                                                @endauth

                                    @endforeach
                                </div>

                                @foreach($sec3->children as $children3)
                                    <h4>
                                        {{ $children3->name }}
                                    </h4>
                                    <div class="{{strtolower(str_replace(' ', '_', $children3->name)) }}">
                                        @foreach($children3->allItems() as $item)

                                                @foreach($ItemX->deCode($item->fullContent) as $it_id => $item2)
                                                    <items :item-identity="{{$item->id}}" ref="item-{{$item->id}}"  :items-data="{{ json_encode($ItemX->figureIt($it_id,$item2)) }} "></items>

                                                @endforeach
                                                    <div style="clear:both"></div>
                                                    @auth
                                                        <a class="badge badge-light" href="/edititem/{{$item->id}}">edit</a>
                                                    @endauth

                                        @endforeach
                                    </div>
                                    @foreach($children3->children as $grandChildren3)
                                        <h5>
                                            {{ $grandChildren3->name }}
                                        </h5>
                                        <div class="{{strtolower(str_replace(' ', '_', $grandChildren3->name)) }}">
                                            @foreach($grandChildren3->allItems() as $item)

                                                    @foreach($ItemX->deCode($item->fullContent) as $it_id => $item2)
                                                        <items :item-identity="{{$item->id}}" ref="item-{{$item->id}}"  :items-data="{{ json_encode($ItemX->figureIt($it_id,$item2)) }} "></items>

                                                    @endforeach
                                                        <div style="clear:both"></div>
                                                        @auth
                                                            <a class="badge badge-light" href="/edititem/{{$item->id}}">edit</a>
                                                        @endauth

                                            @endforeach
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

        </div>
    @endif
        <div class="bottombarrel"><a href="https://bjbassett.org/s/this" class="text-center">Resume/resumeCMS created by Bryan James Bassett using Laravel & VueJS</a></div>

  <div class="modal " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <modalpopper ref="mp"></modalpopper>
      </div>
  </div>
    <!--  data-toggle="modal" data-target="#exampleModal" -->
@endsection

