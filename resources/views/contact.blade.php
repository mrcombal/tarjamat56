@extends('master')

@section('content')
    <section class="hero-section text-white text-left contact">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="display-5" style="font-weight: 100; margin-bottom: 20px; margin-top: 30px;">Let us <span class="fw-bold">help</span> you.<br>We’re just a <span class="fw-bold">message</span> away.</h1>
                    <p class="lead" style="font-size: 16px; line-height: 24px;">From translations to team inquiries, we’re here to support you. Let’s start a conversation that moves your project forward.</p>
                </div>
                <div class="col-md-5">
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">
            <div class="col-md-7">
                <h2 style="font-size: 32px; color: #362E2E; margin-bottom: 20px; font-weight: 500;">
                    Send us an <span class="text-custom fw-bold">email</span>
                </h2>
                <p style="font-weight: 600;">Ready to take the next step?</p>
                <p>Whether you need a quote, have a question, or want to join our team, simply fill out<br>the form and we’ll be in touch shortly.</p>
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <select class="form-control" name="assist_type" aria-label="How can we assist?" required>
                            <option selected disabled>How can we assist?</option>
                            <option value="1">Get a Quote</option>
                            <option value="2">Join the Team</option>
                            <option value="3">General Inquiry</option>
                        </select>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col">
                            <input type="text" class="form-control" name="name" placeholder="Name *" required>
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" name="email" placeholder="Email address *" required>
                        </div>
                    </div>
                    <div class="form-group my-4">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <p class="mb-0">Once you’ve filled out the form, hit send, and we’ll take care of the rest.</p>
                    <button type="submit" class="btn btn-primary mt-4">Send now</button>
                </form>
                

            </div>
            <div class="col-md-4 offset-md-1">
                <div class="contact-info">
                    <div class="contact-item">
                        <h4><i class="fa fa-map-pin"></i> Tarjamat Office:</h4>
                        <p>PO Box 172<br>Clifton Park, NY 12065<br>USA</p>
                    </div>
                    <div class="contact-item">
                        <h4><i class="fa fa-phone"></i> Need to call?</h4>
                        <p>+1 (226) 224-8395</p>
                    </div>
                    <div class="contact-item">
                        <h4><i class="fa fa-envelope"></i> Email:</h4>
                        <p>General Inquiries<br><a href="mailto:info@arabictarjamat.com">info@arabictarjamat.com</a></p>
                        <p>Request a quote<br><a href="mailto:quote@arabictarjamat.com">quote@arabictarjamat.com</a></p>
                    </div>
                    <div class="contact-item">
                        <h4><i class="fab fa-linkedin"></i> LinkedIn:</h4>
                        <p><a href="https://www.linkedin.com/in/tarjamatllc/" target="_blank">linkedin.com/in/tarjamatllc/</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
