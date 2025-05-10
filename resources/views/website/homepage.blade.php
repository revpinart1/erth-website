@extends('layouts.app')

@section('styles')
    <style>
        /* Hero Section */
    
        /* Counter Section */
        .counter-section {
            padding: 200px 0;
            text-align: center;
            /* background-image: url('/images/sadu.webp'); */
             background-size: cover;
            background-position: center;
            background-color:#cab9a3;
         
        }
        .counter-section-map {
            padding: 400px 0;
            text-align: center;
            background-image: url('/images/map.png');
             background-size: 800px;

            background-position: center;
            background-repeat: no-repeat; /* أو repeat لو تبيها تتكرر */
            transition: background-size 0.5s ease-in-out; /* 👈 ترانزشن سموذ */


        }
        .counter-section-map:hover {
    background-size: 60%; /* 👈 يكبر الصورة عند الهوفر */
}
.overlay-text {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0,0,0,0.5); /* بوكس شفاف */
    color: white;
    padding: 20px;
    transform: translateY(100%);
    transition: transform 0.4s ease;
    text-align: center;
    font-size: 1rem;
}

.counter-section-map:hover .overlay-text {
    transform: translateY(0);
}
        .counter-box {
            background: #f3e8db;
            color: #cab9a3;
            border-radius: 20px;
            padding: 50px;
            margin: 0 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: inline-block;
            width: 250px;
        }
        .counter-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }
        .counter-box i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #ffd700;
        }
        .counter-box h3 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .counter-box p {
            font-size: 1.1rem;
            margin: 0;
            text-transform: uppercase;
        }
        /* Cards Section */
        .cards-section {
           
        }
        .cards-container {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 10px 0;
            gap: 20px;
            scrollbar-width: thin;
            scrollbar-color: #28a745 transparent;
        }
        .cards-container::-webkit-scrollbar {
            height: 8px;
        }
        .cards-container::-webkit-scrollbar-thumb {
            background-color: #28a745;
            border-radius: 10px;
        }
        .cards-container::-webkit-scrollbar-track {
            background: transparent;
        }
        .card {
            transition: all 0.3s ease-in-out;
              position: relative;
             z-index: 1;
        }
        
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 10;
        }
        .card:active {
            transform: translateX(-10px);
        }
        .card-img-top {
            height: 150px;
            width: 100%;
            object-fit: cover;
        }
        .card-body {
            text-align: center;
            padding: 15px;
        }
        .card-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        .card-text {
            font-size: 0.9rem;
            margin-bottom: 15px;
        }
        .nav-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 50%;
            font-size: 1.5rem;
            z-index: 10;
            transition: background-color 0.3s ease;
        }
        .nav-arrow.left {
            left: 10px;
        }
        .nav-arrow.right {
            right: 10px;
        }
        .nav-arrow:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }
        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2rem;
            }
            .hero-section p {
                font-size: 1rem;
            }
            .counter-box {
                width: 200px;
                padding: 20px;
                margin: 10px;
            }
            .counter-box h3 {
                font-size: 2rem;
            }
            .counter-box i {
                font-size: 2rem;
            }
            .card {
                flex: 0 0 200px;
            }
            .card-img-top {
                height: 120px;
            }
            .nav-arrow {
                font-size: 1.2rem;
                padding: 8px;
            }
        }
    </style>
@endsection

@section('content')

   <!-- Hero Section -->
   <section class="hero-section d-flex text-align-center justify-content-center" style=" text-align: center; padding: 100px 0;color:#5f4c34; margin-top:150px;margin-bottom:150px; ">
        <div class="container mt-5">
            <h1 style=" font-size: 3rem;font-weight: 700;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);margin-bottom: 20px;">
                مرحبًا بك في عالم المتاحف</h1>
            <p style="font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);">
                استكشف مجموعة من المتاحف الرائعة التي تحكي قصص التاريخ والثقافة.  </br>  احجز تذكرتك الآن وانطلق في رحلة لا تُنسى!</p>
         
        </div>
    </section>

 

<!-- Cards Slider Section -->
<section class="cards-section mb-4">
    <div class="container position-relative">
        <h2 class="text-center mb-5" style="font-size: 2rem; font-weight: 700; color: #ffffff;">استكشف متاحفنا</h2>

        <div class="position-relative">
        <!-- زر يسار -->
        <button class="btn btn-light position-absolute start-0 top-50 translate-middle-y z-3 shadow" 
                style="width: 40px; height: 40px; border-radius: 50%;" 
                onclick="scrollSlider(-1)">
            <i class="bi bi-chevron-left"></i>
        </button>

        <!-- السلايدر -->
        <div id="museum-slider" class="d-flex overflow-auto gap-3 px-5 py-3">
            @foreach($museums as $museum)
            <div class="card flex-shrink-0" style="width:400px; height:400px">
            
                <div class="card-body">
                <img src="{{ asset('storage/' . $museum->museum_image) }}" 
     alt="{{ $museum->museum_name }}" 
     class="rounded mb-4 mx-auto d-block" 
     style="width:330px;height:270px">
                    <h5 class="card-title">{{ $museum->museum_name }}</h5>
                    <!-- <p class="card-text">{{$museum->museum_description}}</p> -->
                    <a href="{{route('website.details',['id'=>$museum->id])}}" class="btn btn-primary btn-sm">زور المتحف</a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- زر يمين -->
        <button class="btn btn-light position-absolute end-0 top-50 translate-middle-y z-3 shadow" 
                style="width: 40px; height: 40px; border-radius: 50%;" 
                onclick="scrollSlider(1)">
            <i class="bi bi-chevron-right"></i>
        </button>
    </div>
    </div>
</section>


<!-- قسم العدادات مع النص المتحرك -->
  <!-- Counter Section -->
  <section class="counter-section mt-5 ">
        <div class="container d-flex align-items-center justify-content-center mt-5">
        <h1 style=" font-size: 3rem;font-weight: 700;text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);margin-bottom: 20px;">
        اكثر من ...</h1>
            <div class="counter-box" data-count="{{ \App\Models\Museums::count() }}" data-duration="2000">
                <i class="fas fa-university"></i>
                <h3 class="counter-value">0</h3>
                <p>متحف حول المملكة</p>
            </div>
            <div class="counter-box" data-count="{{\App\Models\User::count()}}" data-duration="2000">
                <i class="fas fa-users"></i>
                <h3 class="counter-value">0</h3>
                <p>زائر للموقع</p>
            </div>
        </div>
    </section>


    <!-- map -->
  <!-- Counter Section -->
  <section class="counter-section-map position-relative my-5" >
  <div class="position-absolute top-50 start-50 translate-middle text-center text-white px-5 py-5 rounded" 
  style="background: linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0,0.9), rgba(0,0,0,0))">
    <p class="m-0 fs-4">تُعد المتاحف من أبرز دعائم التنمية الثقافية في المملكة العربية السعودية، حيث تلعب دوراً حيوياً في الحفاظ على التراث الوطني بمكوناته المادية وغير المادية، وتعزيز الهوية الوطنية، وإثراء المشهد الثقافي، وتعزيز الروابط الاجتماعية.</p>
  </div>
</section>


@endsection


@section('script')
<!-- slider -->
<script>
    function scrollSlider(direction) {
        const slider = document.getElementById('museum-slider');
        const scrollAmount = 270; // عرض الكرت + margin
        slider.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }


        // Counter Animation
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.counter-value');
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.parentElement.getAttribute('data-count');
                    const duration = +counter.parentElement.getAttribute('data-duration');
                    const increment = target / (duration / 16); // 60fps
                    let count = +counter.innerText;

                    const animate = () => {
                        count += increment;
                        if (count >= target) {
                            counter.innerText = target.toLocaleString();
                        } else {
                            counter.innerText = Math.ceil(count).toLocaleString();
                            requestAnimationFrame(animate);
                        }
                    };
                    animate();
                };

                // Start counter when section is in view
                const section = document.querySelector('.counter-section');
                const observer = new IntersectionObserver(entries => {
                    if (entries[0].isIntersecting) {
                        updateCount();
                        observer.disconnect();
                    }
                }, { threshold: 0.5 });
                observer.observe(section);
            });

            // Cards Scroll
            const container = document.querySelector('.cards-container');
            const leftArrow = document.querySelector('.nav-arrow.left');
            const rightArrow = document.querySelector('.nav-arrow.right');

            rightArrow.addEventListener('click', () => {
                container.scrollBy({ left: 270, behavior: 'smooth' });
            });

            leftArrow.addEventListener('click', () => {
                container.scrollBy({ left: -270, behavior: 'smooth' });
            });

            const updateArrows = () => {
                leftArrow.style.display = container.scrollLeft <= 0 ? 'none' : 'block';
                rightArrow.style.display = container.scrollLeft >= container.scrollWidth - container.clientWidth - 1 ? 'none' : 'block';
            };

            container.addEventListener('scroll', updateArrows);
            updateArrows();
        });
</script>
@endsection
