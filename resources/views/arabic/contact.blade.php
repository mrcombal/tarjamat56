@extends('arabic.master')

@section('content')
    <section class="hero-section text-white text-left contact ar" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="display-5" style="font-weight: 100; margin-bottom: 20px; margin-top: 30px;">دعنا <span class="fw-bold">نساعدك</span>.<br>نحن دائما على بعد <span class="fw-bold">رسالة</span> واحدة.</h1>
                    <p class="lead" style="font-size: 16px; line-height: 24px; text-align: right;">{{ $contentsArray['hero_contact'] ?? '' }}</p>
                </div>
                <div class="col-md-5">
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5" dir="rtl">
        <div class="row">
            <div class="col-md-7">
                <h2 style="font-size: 32px; color: #362E2E; margin-bottom: 20px; font-weight: 500;">
قم <span class="text-custom fw-bold">مراسلتنا</span>
                </h2>
                @if(session('success'))
    				<div class="alert alert-success">
شكرًا لرسالتك. سنتواصل معك في أقرب وقت ممكن.
				    </div>
				@endif
                <p style="font-weight: 600;">هل أنت مستعد للخطوة التالية؟</p>
                <p>سواء كنت بحاجة إلى عرض أسعار، أو لديك سؤال، أو ترغب في الانضمام إلى فريقنا، ما عليك سوى ملء النموذج وسنكون على اتصال قريبًا.</p>
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <select class="form-control" name="assist_type" aria-label="How can we assist?" required>
							<option selected disabled>كيف يمكننا مساعدتك؟</option>
							<option value="1">الحصول على عرض أسعار</option>
							<option value="2">الانضمام إلى الفريق</option>
							<option value="3">استفسار عام</option>
                        </select>
                    </div>
                    <div class="form-group row mt-4">
                    	<div class="col">
                    		<input type="text" class="form-control" name="name" placeholder="الاسم *" required>
						</div>
						<div class="col">
							<input type="email" class="form-control" name="email" placeholder="عنوان البريد الإلكتروني *" required>
						</div>
					</div>
					<div class="form-group my-4">
					    <textarea class="form-control" name="message" rows="5" placeholder="الرسالة" required></textarea>
					</div>
					<p class="mb-0">بمجرد ملء النموذج، اضغط على إرسال، وسنتولى الباقي.</p>
					<button type="submit" class="btn btn-primary mt-4">إرسال الآن</button>
                </form>
                

            </div>
            <div class="col-md-4 offset-md-1">
                <div class="contact-info">
			        <div class="contact-item">
					    <h4><i class="fa fa-map-pin"></i> مكتب ترجمات:</h4>
					    <p>ص.ب 172<br>كليفتون بارك، نيويورك 12065<br>الولايات المتحدة الأمريكية</p>
					</div>
					<div class="contact-item">
					    <h4><i class="fa fa-phone"></i> هل ترغب في الاتصال؟</h4>
					    <p dir="ltr">+1 (226) 224-8395</p>
					</div>
					<div class="contact-item">
					    <h4><i class="fa fa-envelope"></i> البريد الإلكتروني:</h4>
					    <p>الاستفسارات العامة<br><a href="mailto:info@arabictarjamat.com">info@arabictarjamat.com</a></p>
					    <p>طلب عرض أسعار<br><a href="mailto:quote@arabictarjamat.com">quote@arabictarjamat.com</a></p>
					</div>
					<div class="contact-item">
					    <h4><i class="fab fa-linkedin"></i> لينكد إن:</h4>
					    <p><a href="https://www.linkedin.com/in/tarjamatllc/" target="_blank" dir="ltr">linkedin.com/in/tarjamatllc</a></p>
					</div>
                </div>
            </div>
        </div>
    </section>
@endsection
