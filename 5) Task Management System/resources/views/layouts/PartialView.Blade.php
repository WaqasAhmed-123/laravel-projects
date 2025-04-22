<div class="category-content no-padding">
    <ul class="navigation navigation-main navigation-accordion">

        <!-- Main -->

        <li class="active">
            <a href="{{ url('/adminIndex') }}"><i class="icon-home4"></i> <span>Dashboard</span></a>
        </li>

        <li>
            <a href="#"><i class="icon-users"></i> <span>Manage Users</span></a>
            <ul>
                <li><a href="{{ url('/addUser') }}">Add User</a></li>
                <li><a href="{{ url('/viewUser') }}">View Users</a></li>
                
            </ul>
        </li>


    </ul>
</div>