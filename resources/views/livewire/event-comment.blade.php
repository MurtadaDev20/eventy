<div>
    <div>
        <h3 class="text-xl font-semibold mb-4">التعليقات</h3>
        <!-- قائمة التعليقات -->
        <div class="space-y-4 mb-6">
          <!-- تعليق 1 -->
          @if ($this->comments->count() == 0)
            <p>لاتوجد تعليقات</p>
            @else
            @foreach ($this->comments as $comment)
          <div class="bg-gray-100 p-3 rounded text-right">
            
            <div class="flex items-center justify-between mb-2">
              <span class="font-bold text-sm">{{$comment->user->name}}</span>
              <span class="text-xs text-orange-500">{{$comment->created_at->diffForHumans()}}</span>
            </div>
            <p class="text-gray-700 text-sm">{{$comment->body}}</p>
          </div>
            @endforeach

            
            {{ $this->comments->links(data: ['scrollTo' => false]) }}
            @endif
        </div>
        <!-- نموذج إضافة تعليق جديد -->
        @auth


    <form wire:submit.prevent="submit" class="space-y-3">
        <div>
            <label class="block text-sm font-medium mb-1" for="commentContent">التعليق</label>
            <textarea 
                wire:model="commentUser"
                id="commentContent"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500"
                rows="4"
                placeholder="اكتب تعليقك هنا..."
                required
            ></textarea>
        </div>
        <button
            type="submit"
            class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700 transition-colors duration-300"
        >
          إضافة تعليق
        </button>
    </form>

    @if (session()->has('message'))
        <div class="mt-2 text-green-600">
            {{ session('message') }}
        </div>
    @endif

    @else
    <p class="text-gray-600 text-sm">يجب عليك تسجيل الدخول لتتمكن من إضافة تعليق.</p>
    <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">تسجيل الدخول</a>
    @endauth
  </div>
</div>


        
      
    
        
    

    