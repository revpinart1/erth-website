@extends('layouts.app')
@section('content')

<div class="container py-5" style="margin-top:70px; margin-bottom:100px">
<h2 class="text-center"style=" font-size: 2rem;font-weight: 700;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);margin-bottom: 20px;">
 تواصل معنا</h2>
    <hr class="mb-4   " >

    <div class="row">
        <!-- معلومات التواصل -->


        <!-- نموذج المراسلة -->
        <div class="col-md-6 mt-4">
            <h5 style=" font-size: 1.3rem;font-weight: 700;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);margin-bottom: 20px;">أرسل رسالة لنا </h5>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">الاسم</label>
                    <input type="text" class="form-control" id="name" placeholder="اكتب اسمك">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">البريد الإلكتروني</label>
                    <input type="email" class="form-control" id="email" placeholder="اكتب بريدك الإلكتروني">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">الرسالة</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="اكتب رسالتك هنا"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">إرسال</button>
            </form>
        </div>

        <div class="col-md-4 mt-4 mx-5">
            <h5 class="" style=" font-size: 1.3rem;font-weight: 700;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);margin-bottom: 20px;">معلومات الاتصال</h5>
           
               <p><strong>البريد الإلكتروني:</strong> info@museum.com</p> 
             <p>  <strong>رقم الهاتف:</strong> 0501010101</p> 
             <p>  <strong>الموقع:</strong> مكة، المملكة العربية السعودية</p> 
          
        </div>
    </div>
</div>
@endsection


