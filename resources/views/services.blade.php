@extends('master')
@section('content')
    <section class="hero-section text-white text-left services">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 style="font-weight: 100; margin-bottom: 20px; margin-top: 30px;">Crafting <span class="fw-bold">words</span> ..<br>.. bridging <span class="fw-bold">worlds</span></h1>
                    <p class="lead" style="font-size: 16px; line-height: 24px;">From translation to transcription, we connect cultures and deliver precise communication globally. Let’s bring your message to the world.</p>
                </div>
                <div class="col-md-5">
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <h2 style="font-size: 32px; color: #362E2E; margin-bottom: 20px; font-weight: 500;">
            Choose your <span class="text-custom fw-bold">service</span>
        </h2>
        <p style="font-weight: 600;">Looking for expert translations, editing, or something more specialized?</p>
        <p>Whatever your project needs, explore our range of services and let our team of<br>professionals help bring your words to life with accuracy and care.</p>

        <ul class="service-list">
            <li class="service-item teal">
                <div class="row">
                    <div class="col-md-2">
                        <div class="service-icon">
                            <img src="{{asset('images/services/translation.svg')}}"/>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="service-details">
                            <h3>Translation</h3>
                            <p>Accurate and culturally relevant translation of written content between languages, ensuring the message retains its original meaning while adapting to the target culture and context.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="service-item olive">
                <div class="row">
                    <div class="col-md-2">
                        <div class="service-icon">
                            <img src="{{asset('images/services/editing.svg')}}"/>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="service-details">
                            <h3>Editing & Proofreading</h3>
                            <p>Enhancing translated texts by improving clarity, grammar, and flow while ensuring consistency and accuracy across documents. Our team of editors ensures that the final product is polished and free from errors.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="service-item bronze">
                <div class="row">
                    <div class="col-md-2">
                        <div class="service-icon">
                            <img src="{{asset('images/services/subtitling.svg')}}"/>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="service-details">
                            <h3>Subtitling & Transcription</h3>
                            <p>Creating subtitles for visual content and transcribing audio/video files into written format. This includes language localization and technical accuracy to match tone, timing, and context.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="service-item crimson">
                <div class="row">
                    <div class="col-md-2">
                        <div class="service-icon">
                            <img src="{{asset('images/services/interpretation.svg')}}"/>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="service-details">
                            <h3>Interpretation</h3>
                            <p>Accurate and culturally relevant translation of written content between languages, ensuring the message retains its original meaning while adapting to the target culture and context.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="service-item violet">
                <div class="row">
                    <div class="col-md-2">
                        <div class="service-icon">
                            <img src="{{asset('images/services/dtp.svg')}}"/>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="service-details">
                            <h3>Multilingual DTP (Desktop Publishing)</h3>
                            <p>Designing and formatting translated documents in various languages to ensure they maintain their professional appearance across different formats and platforms.</p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="service-item magenta">
                <div class="row">
                    <div class="col-md-2">
                        <div class="service-icon">
                            <img src="{{asset('images/services/mtp.svg')}}"/>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="service-details">
                            <h3>Machine Translation Post Editing</h3>
                            <p>Optimizing machine-generated translations by human editors, ensuring the highest level of accuracy, fluency, and cultural appropriateness for the final product.</p>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </section>
@endsection
