  <div class="wrapper">
      <aside id="sidebar" class="expand">
          <div class="d-flex flex-column">
              <div class="sidebar-logo align-items-center d-flex flex-column mt-3 gap-2">
                  <img src="https://sanjayanbu.in/images/profile.jpg" width="100" height="100"
                      class="img-fluid rounded-circle" />
                  <a href="https://sanjayanbu.in" target="_blank" class="d-block">Sanjay Anbu</a>
              </div>
          </div>
          <ul class="sidebar-nav">
              <li class="sidebar-item">
                  <a href="{{ url('/students') }}"
                      class="{{ \Request::is('students', 'students/*') ? 'sidebar-link active' : 'sidebar-link' }}">
                      <i class="las la-graduation-cap sidebar-icon"></i>
                      <span>Students</span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a href="{{ url('/teachers') }}"
                      class="{{ \Request::is('teachers', 'teachers/*') ? 'sidebar-link active' : 'sidebar-link' }}">
                      <i class="las la-chalkboard-teacher"></i>
                      <span>Teachers</span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a href="{{ url('/courses') }}"
                      class="{{ \Request::is('courses', 'courses/*') ? 'sidebar-link active' : 'sidebar-link' }}">
                      <i class="las la-book"></i>
                      <span>Courses</span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a href="{{ url('/batches') }}"
                      class="{{ \Request::is('batches', 'batches/*') ? 'sidebar-link active' : 'sidebar-link' }}">
                      <i class="lar la-clock"></i>
                      <span>Batches</span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a href="{{ url('/enrollments') }}"
                      class="{{ \Request::is('enrollments', 'enrollments/*') ? 'sidebar-link active' : 'sidebar-link' }}">
                      <i class="las la-user-friends"></i>
                      <span>Enrollments</span>
                  </a>
              </li>
              <li class="sidebar-item">
                  <a href="{{ url('/payments') }}"
                      class="{{ \Request::is('payments', 'payments/*') ? 'sidebar-link active' : 'sidebar-link' }}">
                      <i class="las la-money-bill"></i>
                      <span>Payments</span>
                  </a>
              </li>
          </ul>
      </aside>
      <div class="main p-3">
          @if (Session::has('flash_message'))
              <div class="alert alert-success">
                  {{ Session::get('flash_message') }}
              </div>
          @endif
          <div class="text-center">
              @yield('content')
          </div>
      </div>
  </div>
  </div>
