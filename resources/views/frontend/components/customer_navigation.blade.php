
        <div class="customer_navigation">
            <div class="card ">
                    <div class="card-header">Navigation</div>
                        <ul class="menu-inner">

                            <!-- Dashboard -->
                            <li class="menu-item {{ Route::is('frontend.customer.dashboard') ? 'active' : '' }}">
                                <a href="{{ route('frontend.customer.dashboard') }}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                    <div data-i18n="Dashboard">Dashboard</div>
                                </a>
                            </li>

                            <!-- Order History -->
                            <li class="menu-item {{ Route::is('frontend.customer.order.history') ? 'active' : '' }}">
                                <a href="{{ route('frontend.customer.order.history') }}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-receipt"></i>
                                    <div data-i18n="Orders">Order History</div>
                                </a>
                            </li>

                            <!-- Wishlist -->
                            <li class="menu-item {{ Route::is('frontend.customer.wishlist') ? 'active' : '' }}">
                                <a href="{{ route('frontend.customer.wishlist') }}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-heart"></i>
                                    <div data-i18n="Wishlist">Wishlist</div>
                                </a>
                            </li>

                            <!-- Shopping Cart -->
                            <li class="menu-item {{ Route::is('frontend.customer.shoppingcart') ? 'active' : '' }}">
                                <a href="{{ route('frontend.customer.shoppingcart') }}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-cart"></i>
                                    <div data-i18n="Cart">Shopping Cart</div>
                                </a>
                            </li>

                            <!-- Settings -->
                            <li class="menu-item {{ Route::is('frontend.customer.setting') ? 'active' : '' }}">
                                <a href="{{ route('frontend.customer.setting') }}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-cog"></i>
                                    <div data-i18n="Settings">Settings</div>
                                </a>
                            </li>

                            <!-- Logout -->
                            <li class="menu-item">
                                <a href="#"
                                class="menu-link"
                                onclick="event.preventDefault(); document.getElementById('customer-logout-form').submit();">
                                    <i class="menu-icon tf-icons bx bx-log-out"></i>
                                    <div>Log out</div>
                                </a>
                            </li>

                        </ul>
                </div>
        </div>