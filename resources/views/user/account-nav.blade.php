<ul class="account-nav">
        <li><a href="{{route('user.index')}}" class="menu-link menu-link_us-s">Dashboard</a></li>
        <li><a href="account-orders.html" class="menu-link menu-link_us-s">Orders</a></li>
        <li><a href="account-address.html" class="menu-link menu-link_us-s">Addresses</a></li>
        <li><a href="account-details.html" class="menu-link menu-link_us-s">Account Details</a></li>
        <li><a href="account-wishlist.html" class="menu-link menu-link_us-s">Wishlist</a></li>
        <li>
                <form action="{{route('user.logout')}}" method="POST" id="logout-form" class="text-left">
                @csrf
                <button type="submit" 
                    class="btn btn-secondary rounded-pill btn-sm" 
                    onmouseover="this.classList.add('btn-dark'); this.classList.remove('btn-secondary');" 
                    onmouseout="this.classList.remove('btn-dark'); this.classList.add('btn-secondary');">
                Logout
                </button>
        </li></form>
</ul>