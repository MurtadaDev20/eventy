<nav dir="ltr" class="bg-gray-800 text-white sticky top-0 z-50 shadow-md">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
      <!-- شعار الموقع -->
      <div class="text-2xl font-bold">فعاليات العراق</div>
      <!-- زر قائمة الجوال -->
      <button id="menu-toggle" class="md:hidden focus:outline-none">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
      <!-- قائمة التنقل الرئيسية (للشاشات المتوسطة والكبيرة) -->
      <ul id="menu" class="hidden md:flex space-x-8 text-lg">
        <li><a href="{{ route('events') }}  " wire:navigate class="hover:text-gray-300 transition">الرئيسية</a></li>
        <li><a href="#latest" class="hover:text-gray-300 transition">الفعاليات</a></li>
        <li><a href="#about" class="hover:text-gray-300 transition">من نحن</a></li>
        <li><a href="#contact" class="hover:text-gray-300 transition">تواصل معنا</a></li>
        <li>
            @auth
              @include('events.body.header-auth')
            @else
                @include('events.body.header-guest')
            @endauth
        </li>
      </ul>
    </div>
    <!-- قائمة التنقل للجوال -->
    <div id="mobile-menu" class="md:hidden hidden bg-gray-800">
      <ul class="px-4 pt-2 pb-4 space-y-4">
        <li><a href="{{ route('events') }}  " wire:navigate class="block hover:text-gray-300 transition">الرئيسية</a></li>
        <li><a href="#latest" class="block hover:text-gray-300 transition">الفعاليات</a></li>
        <li><a href="#about" class="block hover:text-gray-300 transition">من نحن</a></li>
        <li><a href="#contact" class="block hover:text-gray-300 transition">تواصل معنا</a></li>
        <li>
          @auth
          <div name="content">
            <!-- Account Management -->
            <div class="block px-4 py-2 text-xs text-gray-200">
                {{ __('ادادرة الحساب') }}
            </div>

            <x-dropdown-link wire:navigate href="{{ route('profile.show') }}">
                {{ __('الصفحة الشخصية') }}
            </x-dropdown-link>

            <div class="border-t border-gray-200"></div>
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf

                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                    {{ __('تسجيل الخروج') }}
                </x-dropdown-link>
            </form>
          </div>
          @else
          <div class="flex space-x-5">
            <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                {{ __('تسجيل الدخول') }}
            </x-nav-link>
            <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                {{ __('التسجيل') }}
            </x-nav-link>
        </div>
          @endauth
      </li>
      </ul>
    </div>
    <script>
      document.getElementById('menu-toggle').addEventListener('click', function(){
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
      });
    </script>
  </nav>