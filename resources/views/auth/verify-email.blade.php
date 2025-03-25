<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>تأكيد البريد الإلكتروني</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
  <div class="w-full max-w-lg bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">تأكيد البريد الإلكتروني</h2>

    <p class="text-gray-700 text-sm mb-6 leading-relaxed text-center">
      قبل المتابعة، يرجى تأكيد عنوان بريدك الإلكتروني من خلال النقر على الرابط الذي أرسلناه للتو إلى بريدك. <br/>
      إذا لم يصلك البريد الإلكتروني، يمكنك إعادة إرساله.
    </p>

    <!-- إشعار في حال تم إرسال رابط جديد -->
    <!-- يمكنك إظهاره حسب حالة معينة -->
    <!-- <div class="mb-4 text-green-600 text-sm font-medium text-center">
      تم إرسال رابط تحقق جديد إلى بريدك الإلكتروني.
    </div> -->

    <form method="POST" action="{{ route('verification.send') }}" class="flex justify-center mb-4">
      <!-- إذا كنت تستخدم Laravel، أضف @csrf هنا -->
      <button type="submit" class="bg-orange-600 text-white px-6 py-2 rounded hover:bg-orange-700 transition">
        إعادة إرسال رابط التحقق
      </button>
    </form>

    <div class="text-center text-sm space-y-2">
      <a href="{{ route('profile.show') }}" class="text-orange-600 hover:underline">تعديل الملف الشخصي</a>
      <form method="POST" action="{{ route('logout') }}" class="inline-block ml-2">
        <!-- إذا كنت تستخدم Laravel، أضف @csrf هنا -->
        <button type="submit" class="text-orange-600 hover:underline">تسجيل الخروج</button>
      </form>
    </div>
  </div>
</body>
</html>
