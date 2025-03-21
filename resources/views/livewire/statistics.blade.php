<div>
      <!-- إحصائيات الفعاليات -->
<section class="bg-gray-100 py-6">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center text-white">
            
            <!-- عدد الزوار -->
            <div class="flex flex-col items-center bg-white p-4 rounded-md shadow-md w-full">
                <i class="fas fa-users text-3xl text-blue-400 mb-2"></i>
                <div class="text-2xl font-bold text-gray-800 " id="visitors">0</div>
                <p class="text-orange-500 font-bold text-sm">عدد الزوار</p>
            </div>
  
            <!-- عدد التصنيفات -->
            <div class="flex flex-col items-center bg-white p-4 rounded-md shadow-md w-full">
                <i class="fas fa-layer-group text-3xl text-green-400 mb-2"></i>
                <div class="text-2xl font-bold text-gray-800" id="categories">0</div>
                <p class="text-orange-500 font-bold text-sm">عدد التصنيفات</p>
            </div>
  
            <!-- عدد الفعاليات -->
            <div class="flex flex-col items-center bg-white p-4 rounded-md shadow-md w-full">
                <i class="fas fa-calendar-alt text-3xl text-yellow-400 mb-2"></i>
                <div class="text-2xl font-bold text-gray-800" id="events">0</div>
                <p class="text-orange-500 font-bold text-sm">عدد الفعاليات</p>
            </div>
  
        </div>
    </div>
  </section>
  
  
  
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/countup.js/2.6.2/countUp.umd.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const options = { duration: 3 };
  
      new countUp.CountUp('visitors', 720391, options).start();
      new countUp.CountUp('categories', 12, options).start();
      new countUp.CountUp('events', 340, options).start();
    });
  </script>
</div>
