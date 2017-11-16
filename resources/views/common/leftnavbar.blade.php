
<ul class="left-hand">


<li class="@if($uril=='dashboard') active @endif"><a href="{{url('/dashboard')}}">Dashboard</a></li>
<li class="@if($uril=='profile') active @endif"><a href="{{url('/profile')}}">Current Admin Profile</a></li>
<li class="@if($uril=='admin') active @endif"><a href="{{url('/admin')}}">Admin info</a></li>
<li class="@if($uril=='addadmin') active @endif"><a href="{{url('/addadmin')}}">Add new admin</a></li>
<li class="@if($uril=='categorypost') active @endif"><a href="{{url('/categorypost')}}">Create new category Post</a></li>
<li class="@if($uril=='category') active @endif"><a href="{{url('/category')}}">Show category Post</a></li>
 <li class="@if($uril=='blogpost') active @endif"><a href="{{url('/blogpost')}}">Create new blog Post</a></li>
<li class="@if($uril=='blog') active @endif"><a href="{{url('/blog')}}">Show blog Post</a></li>

</ul>
