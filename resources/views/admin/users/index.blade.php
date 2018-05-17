@extends('layouts.master')
@section('body')
<div>
    <div col-md-6 col-md-offset-3>
      <h3>{{$users->total()}} Total Users</h3>
      <b>In This page ({{$users->count()}} users)</b>
      <ul class="list-group">
        @forelse($users as $user)
            <li class="list-group-item" style="margin-top:20px">
              <span>{{$user->name}}
              </span>
              <span class="pull-right clearfix">
                  Joined({{$user->created_at->diffForHumans()}})
                  <button class="btn btn-xs btn-primary"> Follow
                  </button>
              </span>
            </li>
        @empty
            <p> No Users Available</p>
        @endforelse
          {{ $users->links() }} <!--create page-->
      </ul>

      <div>
</div>
@endsection
