@extends('layouts.master')

@section('title')
  Blade
@endsection

@section('body')
<div class="jumbotron">
  <h1>
      Your gender is
      @if($gender == 'male')
        male
      @elseif($gender == 'female')
        female
      @else
        unknown
      @endif
  </h1>
  <p class="lead">
      @unless(empty($text))
        {{ $text }}
      @endunless

      (true) ? This is true : This is false

      @if(!empty($text))
        {{$text}}
      @endif
  </p>
  <p>{{isset($text)? $text :'The variabledoesnotexist'}}</p>
  <p>{{isset($variabledoesnotexist)? $variabledoesnotexist :'The variabledoesnotexist'}}</p>
  <p>{{$variabledoesnotexist or 'they not exists'}}</p>
</div>

<div class="row marketing">
  <div class="col-lg-6">
    <h4>Subheading</h4>
    <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

    <h4>Subheading</h4>
    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

    <h4>Subheading</h4>
    <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
  </div>

  <div class="col-lg-6">
    <h4>Subheading</h4>
    <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

    <h4>Subheading</h4>
    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

    <h4>Subheading</h4>
    <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
  </div>
</div>
@endsection
