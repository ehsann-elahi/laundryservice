@push('footer')
@if (session('message'))
<script>
	setTimeout(function () {
		let msg = document.getElementById('msg');
		msg.style.display = 'none';
	}, 9000);
</script>
@endif
@endpush

@extends('layouts.app')

@section('title', 'Laundry Service Privacy Policy | Dubai & Abu Dhabi')
@section('description','Your clothes are protected with us! We have adopted a very transparent policy to facilitate our valued launder customers in case of any undesired situation. Our Laundry staff is trained & having experience of more than 12 years.')
@section('og:title', 'Laundry Service Privacy Policy | Dubai & Abu Dhabi')
@section('og:description','Your clothes are protected with us! We have adopted a very transparent policy to facilitate our valued launder customers in case of any undesired situation. Our Laundry staff is trained & having experience of more than 12 years.')
@section('canonical', url()->current())
@section('content')
<!-- breadcrum -->
<section class="w3l-breadcrum">
	<div class="breadcrum">
		<div class="container">
			<p><a href="{{route('index')}}">Home</a> &nbsp; / &nbsp; Privacy Policy</p>
		</div>
	</div>
</section>
<!-- //breadcrum -->

<!-- privacy policy -->
<div class="w3-services1 py-5">
	<div class="container py-lg-3">
		<div class="header-section text-center mb-5">
			<h1>Privacy Policy</h1>
		</div>
		<div class="row w3-services-grids mt-lg-5 mt-4">
			<div class="col-12 w3-services-left-grid">
				<h5>Privacy Policy for LaundryService Android Application</h5>
				<p><strong>Effective Date:</strong> 27 Mar. 2025</p>
				<p>LaundryService ("we", "our", or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you use our LaundryService Android application ("the App"). Please read this policy carefully to understand our views and practices regarding your personal data.</p>

				<hr>
				<h6>1. Information We Collect</h6>
				<p><strong>a) Personal Information</strong></p>
				<ul>
					<li>Name</li>
					<li>Phone Number</li>
					<li>Email Address</li>
					<li>Address (for pickup & delivery)</li>
					<li>Payment information (processed securely via third-party payment processors)</li>
				</ul>
				<p><strong>b) Usage Information</strong></p>
				<ul>
					<li>App usage statistics</li>
					<li>Service history</li>
					<li>Order details</li>
					<li>Device information (model, OS version)</li>
				</ul>
				<p><strong>c) Location Information</strong></p>
				<ul>
					<li>Precise location (only when required for pickup and delivery)</li>
				</ul>

				<hr>
				<h6>2. How We Use Your Information</h6>
				<ul>
					<li>Provide laundry pickup, cleaning, and delivery services.</li>
					<li>Manage orders and payments.</li>
					<li>Communicate with you regarding your orders, updates, and promotions.</li>
					<li>Improve the functionality and performance of the App.</li>
					<li>Respond to customer service requests.</li>
				</ul>

				<hr>
				<h6>3. Sharing of Information</h6>
				<p>We do not sell, rent, or trade your personal information. However, we may share your information with:</p>
				<ul>
					<li>Service providers (delivery staff, payment processors, customer support).</li>
					<li>Authorities if required by law.</li>
				</ul>

				<hr>
				<h6>4. Data Security</h6>
				<p>We implement reasonable administrative, technical, and physical safeguards to protect your personal data. However, please be aware that no security system is impenetrable.</p>

				<hr>
				<h6>5. Your Rights and Choices</h6>
				<ul>
					<li>Access, update, or delete your account information from within the app.</li>
					<li>Opt-out of promotional communications.</li>
					<li>Request the deletion of your data by contacting us at <a href="mailto:support@laundryservice.ae">support@laundryservice.ae</a>.</li>
				</ul>

				<hr>
				<h6>6. Third-Party Services</h6>
				<p>Our App may contain links or integrations with third-party services (e.g., payment gateways). Their privacy practices are governed by their respective privacy policies.</p>

				<hr>
				<h6>7. Children's Privacy</h6>
				<p>Our services are not intended for individuals under the age of 13. We do not knowingly collect data from children.</p>

				<hr>
				<h6>8. Changes to This Privacy Policy</h6>
				<p>We may update this policy periodically. We will notify you of significant changes via the App or email.</p>

				<hr>
				<h6>9. Contact Us</h6>
				<p>If you have any questions or concerns about this Privacy Policy, please contact us at:</p>
				<ul>
					<li>Email: <a href="mailto:support@laundryservice.ae">support@laundryservice.ae</a></li>
					<li>Phone: 971522732873</li>
				</ul>

				<hr>
				<h5 class="mt-5">Terms and Conditions</h5>
				<p><strong>Effective Date:</strong> [Insert Date]</p>
				<p>Welcome to LaundryService! By using our Android application ("the App"), you agree to the following Terms and Conditions. Please read them carefully.</p>

				<h6>1. Acceptance of Terms</h6>
				<p>By downloading, installing, or using the App, you agree to be bound by these Terms. If you do not agree, please do not use the App.</p>

				<h6>2. Services</h6>
				<p>LaundryService provides laundry pickup, cleaning, and delivery services via the App.</p>

				<h6>3. User Responsibilities</h6>
				<ul>
					<li>You agree to provide accurate information.</li>
					<li>You agree not to misuse the App.</li>
					<li>You agree to pay for all services requested.</li>
				</ul>

				<h6>4. Payments</h6>
				<p>All payments are securely processed through trusted third-party payment gateways. Prices are subject to change, but you will always be notified before confirming an order.</p>

				<h6>5. Cancellation & Refunds</h6>
				<p>Cancellation is permitted before the pickup is made. Refunds, if applicable, will be processed as per our refund policy displayed within the App.</p>

				<h6>6. Limitation of Liability</h6>
				<p>LaundryService is not liable for:</p>
				<ul>
					<li>Any indirect or consequential damages.</li>
					<li>Losses due to service delays or unavailability.</li>
					<li>Damage or loss of items beyond the terms specified in our refund policy.</li>
				</ul>

				<h6>7. Termination</h6>
				<p>We reserve the right to suspend or terminate your account for any misuse or violation of these Terms.</p>

				<h6>8. Governing Law</h6>
				<p>These Terms shall be governed by the laws of [Your Country/Region].</p>

				<h6>9. Contact</h6>
				<p>For questions regarding these Terms, please contact us at <a href="mailto:support@laundryservice.ae">support@laundryservice.ae</a>.</p>

				<hr>
				<h5 class="mt-5">LaundryService - Privacy Notice</h5>
				<p>We respect your privacy. LaundryService collects your name, contact details, address, and order information to provide laundry pickup and delivery services.</p>
				<p>We:</p>
				<ul>
					<li>Only collect necessary information.</li>
					<li>Do not sell your data.</li>
					<li>Use secure payment and delivery partners.</li>
				</ul>
				<p>By using LaundryService, you agree to our full Privacy Policy available here or in the App settings.</p>
				<p>For questions, contact us at <a href="mailto:support@laundryservice.ae">support@laundryservice.ae</a>.</p>
			</div>
		</div>
	</div>
</div>

<div class="space overflow-hidden" style="margin-top: -100px" id="faq-sec">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-6 text-center text-xl-start align-self-center">
                <div class="">
                    <div class="title-area text-center text-xl-start">
                        <span class="sub-title style1">FAQ</span>
                        <h2 class="sec-title">Frequently Asked Have Any Questions</h2>
                    </div>
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">What personal details do you collect when I use your laundry service?</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We collect only the basic details such as your name phone number address and order preferences so we can pick up clean and deliver your laundry on time.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    Do you share my information with anyone else?
                                </button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">No. Your information is private. We only use it to process your laundry orders and if needed with delivery staff to ensure smooth service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    How do you keep my data safe?
                                </button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">We use secure systems and strict safety measures so your personal details and payment information stay protected.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    How can I contact you for privacy concerns?
                                </button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse"
                                aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">You can always reach us through our website contact form email or customer care number if you have questions about how we handle your information.

</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="faq-img1 ps-xl-4">
                    <div class="img1"><img loading="lazy" src="{{asset('/assets/front/img/normal/faq_1_1.png')}}" alt="faq" /></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
