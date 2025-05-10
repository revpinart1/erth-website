@extends('layouts.app')

@section('content')
<div class="container py-5">
  <h2 class="text-center" style="font-size: 2rem; font-weight: 700; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); margin-bottom: 20px;">
    الأسئلة الشائعة
  </h2>
  <hr class="mb-4">

  <div class="accordion" id="faqAccordion">
    <!-- سؤال 1 -->
    <div class="accordion-item mb-3">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
          aria-expanded="false" aria-controls="collapseOne">
          كيف يمكنني حجز تذكرة لزيارة المتحف؟
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          يمكنك حجز التذكرة بسهولة من خلال صفحة المتاحف في الموقع، ثم اختيار المتحف والتاريخ المناسب، وإتمام عملية الحجز.
        </div>
      </div>
    </div>

    <!-- سؤال 2 -->
    <div class="accordion-item mb-3">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          هل يمكن إلغاء أو تعديل الحجز بعد إتمامه؟
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          نعم، يمكنك تعديل أو إلغاء الحجز قبل موعد الزيارة بـ24 ساعة من خلال صفحة "حجوزاتي".
        </div>
      </div>
    </div>

    <!-- سؤال 3 -->
    <div class="accordion-item mb-3">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          ما هي وسائل الدفع المتاحة؟
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
        data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          حالياً، نقبل الدفع عند الوصول أو عبر مدى / فيزا (حسب توفر الخدمة).
        </div>
      </div>
    </div>

    <!-- سؤال 4 -->
    <div class="accordion-item mb-3">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          هل هناك متاحف مجانية؟
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
        data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          نعم، بعض المتاحف تقدم زيارات مجانية في أيام محددة، وسيتم توضيح ذلك في تفاصيل كل متحف على الموقع.
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
