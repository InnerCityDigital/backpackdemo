<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

@if ( $user->isAdmin() )
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('posts') }}'><i class='nav-icon la la-question'></i> Posts</a></li>
@endif