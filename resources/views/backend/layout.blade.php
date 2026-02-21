
@include('sweetalert2::index')
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>{{ $metaTitle }}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ $siteSetting && $siteSetting->favicon
                ? asset('storage/' . $siteSetting->favicon)
                : asset('frontend/assets/image/fav.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />

    @stack('backend_css')

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    @stack('backend_css')
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{ route('dashboard') }}"><img src="{{ $siteSetting && $siteSetting->logo_dark
                ? asset('storage/' . $siteSetting->logo_dark)
                : asset('frontend/assets/image/logo_dark.png') }}" alt="Logo"></a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item {{ Route::is('dashboard') ? 'active': '' }}">
              <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Role and Permissions -->
            @canany(['create', 'edit', 'delete'])
              <li class="menu-item {{ Route::is('dashboard.rolePermission.*') ? 'active open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-lock-alt"></i>
                  <div data-i18n="RolesPermissions">Role & Permissions</div>
                </a>

                <ul class="menu-sub">
                  <li class="menu-item {{ Route::is('dashboard.rolePermission.create.user') ? 'active' : ''}}">
                    <a href="{{ route('dashboard.rolePermission.create.user') }}" class="menu-link">
                      <div data-i18n="Without menu">Create Users</div>
                    </a>
                  </li>

                  <li class="menu-item {{ Route::is('dashboard.rolePermission.list.users') ? 'active' : ''}}">
                    <a href="{{ route('dashboard.rolePermission.list.users') }}" class="menu-link">
                      <div data-i18n="Without menu">List Of Users</div>
                    </a>
                  </li>

                  <li class="menu-item {{ Route::is('dashboard.rolePermission.create.role') ? 'active' : ''}}">
                    <a href="{{ route('dashboard.rolePermission.create.role') }}" class="menu-link">
                      <div data-i18n="Without menu">Create Roles</div>
                    </a>
                  </li>

                  <li class="menu-item {{ Route::is('dashboard.rolePermission.role.all') ? 'active' : ''}}">
                    <a href="{{ route('dashboard.rolePermission.role.all') }}" class="menu-link">
                      <div data-i18n="Without menu">Role List</div>
                    </a>
                  </li>

                </ul>
              </li>
            @endcanany

            <!-- Settings -->
            <li class="menu-item {{ Route::is('dashboard.settings.index') ? 'active': '' }}">
              <a href="{{ route('dashboard.settings.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Analytics">Settings</div>
              </a>
            </li>

            <!-- Contact -->
            <li class="menu-item {{ Route::is('dashboard.contact.index') ? 'active': '' }}">
              <a href="{{ route('dashboard.contact.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-phone"></i>
                <div data-i18n="Analytics">Contact</div>
              </a>
            </li>

            <!-- Terms & Conditions -->
            <li class="menu-item {{ Route::is('dashboard.terms.index') || Route::is('dashboard.terms.edit') ? 'active' : '' }}">
              <a href="{{ route('dashboard.terms.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Analytics">Terms & Conditions</div>
              </a>
            </li>

            <!-- Privacy Policy -->
            <li class="menu-item {{ Route::is('dashboard.privacy.edit') ? 'active' : '' }}">
              <a href="{{ route('dashboard.privacy.edit') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-shield-quarter"></i>
                <div data-i18n="Analytics">Privacy Policy</div>
              </a>
            </li>

            <!-- FAQs -->
            <li class="menu-item {{ Route::is('dashboard.faq.index') || Route::is('dashboard.faq.show') || Route::is('dashboard.faq.edit') ? 'active' : '' }}">
              <a href="{{ route('dashboard.faq.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-help-circle"></i>
                <div data-i18n="Analytics">FAQs</div>
              </a>
            </li>

            <!-- About Page -->
            <li class="menu-item {{ Route::is('dashboard.about.index') || Route::is('dashboard.about.edit') || Route::is('dashboard.about.show') ? 'active' : '' }}">
                <a href="{{ route('dashboard.about.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-info-circle"></i>
                    <div data-i18n="About">About</div>
                </a>
            </li>

            <!-- Personnel Page -->
            <li class="menu-item {{ Route::is('dashboard.personnel.index') || Route::is('dashboard.personnel.create') || Route::is('dashboard.personnel.edit') ? 'active' : '' }}">
                <a href="{{ route('dashboard.personnel.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user-circle"></i>
                    <div data-i18n="Personnel">Personnel</div>
                </a>
            </li>

            <!-- Customer Page -->
            <li class="menu-item {{ Route::is('dashboard.customers.index') || Route::is('dashboard.customers.show') ? 'active' : '' }}">
                <a href="{{ route('dashboard.customers.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Customers">Customers</div>
                </a>
            </li>


            <!-- Orders -->
            <li class="menu-item {{ Route::is('dashboard.orders.index') || Route::is('dashboard.orders.show') ? 'active' : '' }}">
                <a href="{{ route('dashboard.orders.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-cart"></i>
                    <div data-i18n="Analytics">Orders</div>
                </a>
            </li>

            <!-- Categories -->
            <li class="menu-item {{ Route::is('dashboard.category.index') || Route::is('dashboard.category.show') || Route::is('dashboard.category.edit') ? 'active': '' }}">
              <a href="{{ route('dashboard.category.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div data-i18n="Analytics">Category</div>
              </a>

            <!-- Products -->
            <li class="menu-item {{ Route::is('dashboard.product.index') || Route::is('dashboard.product.image.edit') || Route::is('dashboard.product.image.show') || Route::is('dashboard.product.edit') || Route::is('dashboard.product.image') || Route::is('dashboard.product.show') ? 'active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Product</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item {{ Route::is('dashboard.product.index') ? 'active' : ''}}">
                  <a href="{{ route('dashboard.product.index') }}" class="menu-link">
                    <div data-i18n="Without menu">Add Product +</div>
                  </a>
                </li>
                <li class="menu-item {{ Route::is('dashboard.product.show') ? 'active' : ''}}">
                  <a href="{{ route('dashboard.product.show') }}" class="menu-link">
                    <div data-i18n="Without menu">Show Products</div>
                  </a>
                </li>
                <li class="menu-item {{ Route::is('dashboard.product.image') ? 'active' : ''}}">
                  <a href="{{ route('dashboard.product.image') }}" class="menu-link">
                    <div data-i18n="Without menu">Product Image Upload</div>
                  </a>
                </li>
                <li class="menu-item {{ Route::is('dashboard.product.image.show') ? 'active' : ''}}">
                  <a href="{{ route('dashboard.product.image.show') }}" class="menu-link">
                    <div data-i18n="Without menu">Product Images</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ Auth::user()->image ? env('http://127.0.0.1:8000'). '/storage/profile/' . Auth::user()->image : 'https://api.dicebear.com/9.x/initials/svg?seed=' . Auth::user()->name }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{ Auth::user()->image ? env('http://127.0.0.1:8000'). '/storage/profile/' . Auth::user()->image : 'https://api.dicebear.com/9.x/initials/svg?seed=' . Auth::user()->name }}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('dashboard.profile.index') }}">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>

                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                          <button type="submit" class="dropdown-item">
                            <i class="bx bx-power-off me-2"></i>
                              {{ __('Log Out') }}
                          </button>
                      </form>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="card">
                @yield('backend_content')
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('assets/vendor/js/core.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>

    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>

    <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>


    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
      $(document).ready(function() {
          $('.js-example-basic-multiple').select2();
      });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('tag-inputs-container');
        const addButton = document.getElementById('add-tag-btn');

        /**
         * Finds the parent group of a remove button and removes it from the DOM.
         * @param {HTMLElement} removeButton - The 'X' button element.
         */
        function removeTagGroup(removeButton) {
            const inputGroup = removeButton.closest('.tag-input-group');
            if (inputGroup) {
                inputGroup.remove();
            }
        }

        /**
         * Attaches the remove listener to a specific button.
         * @param {HTMLElement} button - The button to listen to.
         */
        function setupRemoveListener(button) {
            button.addEventListener('click', function() {
                removeTagGroup(this);
            });
        }

        container.querySelectorAll('.remove-tag-btn').forEach(setupRemoveListener);

        function createNewTagInput() {
            const inputGroup = document.createElement('div');
            inputGroup.className = 'tag-input-group d-flex mb-3';

            const tagInput = document.createElement('input');
            tagInput.type = 'text';
            tagInput.name = 'tags[]';
            tagInput.className = 'form-control p-2 me-2';
            tagInput.placeholder = 'Enter new tag';
            tagInput.required = true;

            const removeButton = document.createElement('button');
            removeButton.type = 'button';
            removeButton.className = 'btn btn-danger remove-tag-btn';
            removeButton.innerHTML = 'X';

            setupRemoveListener(removeButton);

            inputGroup.appendChild(tagInput);
            inputGroup.appendChild(removeButton);
            container.appendChild(inputGroup);
        }

        addButton.addEventListener('click', createNewTagInput);
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function () {

        const addEmailBtn = document.getElementById('add-email-btn');
        const emailContainer = document.getElementById('email-inputs-container');

        addEmailBtn.addEventListener('click', function () {
            const emailGroup = document.createElement('div');
            emailGroup.classList.add('email-input-group', 'mb-3');
            emailGroup.innerHTML = `
                <input type="email" name="emails[]" class="form-control p-2" placeholder="Email address" required>
                <button type="button" class="btn btn-danger btn-sm mt-1 remove-email">Remove</button>
            `;
            emailContainer.appendChild(emailGroup);
        });

        emailContainer.addEventListener('click', function(e){
            if(e.target && e.target.classList.contains('remove-email')){
                e.target.parentElement.remove();
            }
        });

        const addNumberBtn = document.getElementById('add-number-btn');
        const numberContainer = document.getElementById('number-inputs-container');

        addNumberBtn.addEventListener('click', function () {
            const numberGroup = document.createElement('div');
            numberGroup.classList.add('number-input-group', 'mb-3');
            numberGroup.innerHTML = `
                <input type="text" name="numbers[]" class="form-control p-2" placeholder="Phone number" required>
                <button type="button" class="btn btn-danger btn-sm mt-1 remove-number">Remove</button>
            `;
            numberContainer.appendChild(numberGroup);
        });

        numberContainer.addEventListener('click', function(e){
            if(e.target && e.target.classList.contains('remove-number')){
                e.target.parentElement.remove();
            }
        });
    });
  </script>


  @stack('backend_js')
  </body>
</html>
