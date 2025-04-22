<div class="category-content no-padding">
    <ul class="navigation navigation-main navigation-accordion">

        <!-- Main -->

        <li class="active">
            <a href="{{ url('/') }}"><i class="icon-home4"></i> <span>Dashboard</span></a>
        </li>

        <li>
            <a href="#"><i class="icon-list"></i> <span>Manage Tasks</span></a>
            <ul>
                <li><a href="{{ url('addTask') }}">Add Task</a></li>
                <li><a href="{{ url('/viewTask') }}">View Tasks</a></li>
                
            </ul>
        </li>

        <!-- <li>
            <a href="#"><i class="icon-cash3"></i> <span>Manage Cost</span></a>
            <ul>
                <li><a href=#>Cost Code</a></li>
                <li><a href=#>Cost Items</a></li>
            </ul>
        </li>

        

        <li>
            <a href="#"><i class="icon-task"></i> <span>Manage Proposals</span></a>
            <ul>
                <li><a href=#>Add Proposal Worksheet</a></li>
                <li><a href=#>Proposal List</a></li>
            </ul>
        </li> -->



    </ul>
</div>