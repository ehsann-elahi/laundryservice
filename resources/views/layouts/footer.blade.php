<style>
    .popover-box {
        position: relative;
        padding: 8px;
        background-color: #fff;
        text-align: center;
        margin-bottom: 20px;
        font-size: 14px;
    }

    .popover-box::after {
        content: "";
        position: absolute;
        bottom: -20px;
        left: 50%;
        transform: translateX(-50%);
        border-width: 10px;
        border-style: solid;
        border-color: #fff transparent transparent transparent;
        display: block;
        width: 0;
    }

    .footer-popover a {
        color: #fff;
        text-align: center;
        font-size: 20px;
        text-decoration: underline;
        font-weight: bold;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* Apply white color to all footer text elements */
    .footer-widget,
    .footer-widget a,
    .footer-widget span,
    .footer-widget i {
        color: #fff !important;
    }

    /* Anchor tags inside footer widget */
    .footer-widget a {
        text-decoration: none;
        transition: color 0.3s ease;
    }

    /* Hover effect for all footer links */
    .footer-widget a:hover {
        color: #FFD06D !important;
        text-decoration: underline;
    }

    /* Optional: icons hover color (if needed) */
    .footer-widget .footer-info_icon:hover i {
        color: #FFD06D !important;
    }

    /* Optional: Add smooth hover to spans too if needed */
    .footer-widget span {
        transition: color 0.3s ease;
    }

    .footer-widget span:hover {
        color: #FFD06D !important;
    }

    .okay {
        margin-bottom: -10px !important;
    }
</style>


<footer class="footer-wrapper footer-layout1" data-bg-src="{{asset('/assets/front/img/bg/footer_bg_1.jpg')}}">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-xl-4 col-12 col-sm-12">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Our Services</h3>
                        <div class="menu-all-pages-container">
                            <ul>
                                <li>
                                    <a href="{{ route('partner') }}" target="_blank">Become a Partner</a>
                                </li>
                                <li>
                                    <a href="{{ route('index') }}" target="_blank">Per KG Package</a>
                                </li>
                                <li>
                                    <a href="{{ route('washnFold') }}" target="_blank">Wash & Fold</a>
                                </li>
                                <li>
                                    <a href="{{ route('pressing') }}" target="_blank">Steam Pressing</a>
                                </li>
                                <li>
                                    <a href="{{ route('washNPress') }}" target="_blank">Wash & Press</a>
                                </li>
                                <li>
                                    <a href="{{ route('dryCleaning') }}" target="_blank">Dry Cleaning</a>
                                </li>
                                <li>
                                    <a href="{{ route('curtain-cleaning') }}" target="_blank">Curtain Cleaning</a>
                                </li>
                                <li>
                                    <a href="{{ route('carpet') }}" target="_blank">Carpets Cleaning</a>
                                </li>
                                <li>
                                    <a href="{{ route('carpet') }}" target="_blank">Sofa Cleaning</a>
                                </li>
                                <li>
                                    <a href="{{ route('carpet') }}" target="_blank">Mattress Cleaning</a>
                                </li>
                                <li>
                                    <a href="{{ route('healthcareLaundry') }}" target="_blank">Healthcare Laundry</a>
                                </li>
                                <li>
                                    <a href="{{ route('healthcareLaundry') }}" target="_blank">Hotel & Restaurants</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-12 col-sm-12">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">About</h3>
                        <div class="menu-all-pages-container">
                            <ul>
                                <li>
                                    <a href="{{ route('price_dubai') }}" target="_blank">Price List Dubai</a>
                                </li>
                                <li>
                                    <a href="{{ route('price_abuDhabi') }}" target="_blank">Price List Abu Dhabi</a>
                                </li>
                                <li>
                                    <a href="{{ route('price_ajman') }}" target="_blank">Price List Ajman</a>
                                </li>
                                <li>
                                    <a href="{{ route('sharjah') }}" target="_blank">Price List Sharjah</a>
                                </li>
                                <li>
                                    <a href="{{ route('EHSPolicy') }}" target="_blank">EHS Policy</a>
                                </li>
                                <li>
                                    <a href="{{ route('returnPolicy') }}" target="_blank">Term & Conditions</a>
                                </li>
                                <li>
                                    <a href="{{ route('privacyPolicy') }}" target="_blank">Privacy Policy </a>
                                </li>
                                <li>
                                    <a href="{{ route('booking-form') }}" target="_blank">Book Online</a>
                                </li>
                                <li>
                                    <a href="{{ route('faq') }}" target="_blank">FAQs</a>
                                </li>
                                <li>
                                    <a href="{{ route('jobs') }}" target="_blank">Apply for Jobs</a>
                                </li>
                                <li>
                                    <a href="https://www.laundryservice.ae/laundry-near-me" target="_blank">Laundry
                                        near me</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-12 col-sm-12">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Laundry Near Me</h3>
                        <div class="menu-all-pages-container">
                            <ul>
                                <li>
                                    <a href="https://www.laundryservice.ae/laundry-near-me/khalifa-city"
                                        target="_blank">Khalifa City</a>
                                </li>
                                <li>
                                    <a href="https://www.laundryservice.ae/laundry-near-me/al-reef"
                                        target="_blank">Al-Reef</a>
                                </li>
                                <li>
                                    <a href="https://www.laundryservice.ae/laundry-near-me/reem-island"
                                        target="_blank">Reem Island</a>
                                </li>
                                <li>
                                    <a href="https://www.laundryservice.ae/laundry-near-me/yas-island"
                                        target="_blank">Yas Island</a>
                                </li>
                                <li>
                                    <a href="https://www.laundryservice.ae/laundry-near-me/al-raha-beach"
                                        target="_blank">Al-Raha Beach</a>
                                </li>
                                <li>
                                    <a href="https://www.laundryservice.ae/laundry-near-me" target="_blank">Laundry
                                        near me</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-between">
                    <div class="mx-auto mb-3">
                        <img loading="lazy" src="{{ asset('/assets/images/master-card.png') }}" id="masterCard" width="145"
                            height="50" loading="lazy" alt="online payment">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-popover">
                            <div class="popover-box">
                                <h2 class="mb-0 text-center" style="font-size: 22px;">
                                    We Cover All Over UAE (Abu Dhabi - Dubai - Sharjah - Ajman)
                                </h2>
                            </div>
                            <p class="text-center mb-5"><a href="https://www.laundryservice.ae/"
                                    style="font-size: 16px; color: white">laundryservice.ae</a></p>
                        </div>
                    </div>
                </div>


                <div class="row justify-content-between">
                    <div class="col-lg-3 col-xl-3 col-12 col-sm-12">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="{{route('index')}}"><img loading="lazy" src="{{asset('/assets/images/logo1.png')}}"
                                            style="height: 100px" alt="Laun" /></a>
                                </div>
                                <h3 class="widget_title"><a href="https://www.google.com/maps/place/SunCity+Laundry/@24.326122,54.5318142,17z/data=!3m1!4b1!4m6!3m5!1s0x3e5e39950a5a9e43:0x34cf71b6aefd2232!8m2!3d24.3261172!4d54.5366851!16s%2Fg%2F11lgkxn3f4?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D">LaundryService</h3></a>
                                <div class="footer-info-wrapper">
                                    <div class="footer-info">
                                        <div class="footer-info_icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
                                        <a class="text-inherit" href="tel:+256214203215">+971 52 273 2873</a>
                                    </div>
                                    <div class="footer-info">
                                        <div class="footer-info_icon"><i class="fas fa-envelope"></i></div>
                                        <a class="text-inherit" href="mailto:info@laun.com">support@laundryservice.ae</a>
                                    </div>
                                    <div class="footer-info">
                                        <div class="footer-info_icon"><i class="fa-solid fa-clock"></i></div>
                                        <span>Feel Free to Contact Us 24/7</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 col-12 col-sm-12">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">

                                <h3 style="font-size: 26px" class="text-white mt-5">Visit Us Abu Dhabi</h3>
                                <h3 class="widget_title mt-5"> <a href="https://www.google.com/maps/search/+Shop+No:02,+Building+157+-+Mohamed+Bin+Zayed+City+-+ME-11+-+Abu+Dhabi+-+United+Arab+Emirates/@24.3294094,54.5251991,15z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D">LaundryService</a></h3>

                                <div class="footer-info-wrapper">
                                    <div class="footer-info">
                                        <div class="footer-info_icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
                                        <a class="text-inherit" href="tel:+256214203215">+971 52 273 2873</a>
                                    </div>
                                    <div class="footer-info">
                                        <div class="footer-info_icon"><i class="fas fa-envelope"></i></div>
                                        <a class="text-inherit" href="mailto:info@laun.com">support@laundryservice.ae</a>
                                    </div>
                                    <div class="footer-info">
                                        <div class="footer-info_icon"><i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <a href="https://www.google.com/maps/dir//Landmark+Trading+LLC+Shabiya+11+-+1680+Naseem+Al+Barr+St+-+Mohamed+Bin+Zayed+City+-+ME11+-+Abu+Dhabi+-+United+Arab+Emirates/@24.3477258,54.5140745,14z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3e5e393179af5443:0xe6835261b1392aa7!2m2!1d54.535654!2d24.324863?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D"><span>Shop No:02, Building 157 - Mohamed Bin Zayed City - ME-11 - Abu Dhabi - United
                                                Arab Emirates</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 col-6 col-sm-6">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">

                                <h3 style="font-size: 26px" class="text-white mt-5">Visit Us Dubai</h3>
                                <h3 class="widget_title mt-5"><a href="https://www.google.com/maps/search/48a+27+street+-+Al+Muwaihat+3+-+Ajman/@25.3777877,55.4699838,13z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D">LaundryService</a></h3>

                                <div class="footer-info-wrapper">
                                    <div class="footer-info">
                                        <div class="footer-info_icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
                                        <a class="text-inherit" href="tel:+256214203215">+971 52 273 2873</a>
                                    </div>
                                    <div class="footer-info">
                                        <div class="footer-info_icon"><i class="fas fa-envelope"></i></div>
                                        <a class="text-inherit" href="mailto:info@laun.com">support@laundryservice.ae</a>
                                    </div>
                                    <div class="footer-info">
                                        <div class="footer-info_icon"><i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <a href="https://www.google.com/maps/search/48a+27+street+-+Al+Muwaihat+3+-+Ajman/@25.3777877,55.4699838,13z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D"><span>48a 27 street - Al Muwaihat 3 - Ajman</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-3 col-12 col-sm-12">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">

                                <h3 style="font-size: 26px" class="text-white mt-5">Visit Us Dubai</h3>
                                <h3 class="widget_title mt-5"><a href="https://www.google.com/maps/search/Ware+House+No+-+36,+Near+Al+Qusais+-+Dubai/@25.2885431,55.3851494,15z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D">LaundryService</h3></a>

                                <div class="footer-info-wrapper">
                                    <div class="footer-info">
                                        <div class="footer-info_icon"><i class="fa-sharp fa-solid fa-phone"></i></div>
                                        <a class="text-inherit" href="tel:+256214203215">+971 52 273 2873</a>
                                    </div>
                                    <div class="footer-info">
                                        <div class="footer-info_icon"><i class="fas fa-envelope"></i></div>
                                        <a class="text-inherit" href="mailto:info@laun.com">support@laundryservice.ae</a>
                                    </div>
                                    <div class="footer-info">
                                        <div class="footer-info_icon"><i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <a href="https://www.google.com/maps/search/Ware+House+No+-+36,+Near+Al+Qusais+-+Dubai/@25.2885431,55.3851494,15z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D"><span>Ware House No - 36, Near Al Qusais - Dubai</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-2 align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2025 All Rights Reserved | <a style="color: #FFD06D ;"
                                href="https://metadigitalmarketing.ae/">MetaDigital</a></p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="th-social">
                            <a href="https://www.facebook.com/laundryservicesae/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.twitter.com/Laundry_uae"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/laundryserviceuae/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/@laundryserviceuae" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="https://www.tiktok.com/@laundryservice_uae" target="_blank">
                                <i class="fab fa-tiktok"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/laundry-service-uae" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="animation-bubble">
            <div class="bubble-1"></div>
            <div class="bubble-2"></div>
            <div class="bubble-3"></div>
            <div class="bubble-4"></div>
            <div class="bubble-5"></div>
            <div class="bubble-6"></div>
            <div class="bubble-7"></div>
            <div class="bubble-8"></div>
            <div class="bubble-9"></div>
            <div class="bubble-10"></div>
        </div>
        <div class="shape-mockup jump d-none d-xl-block" data-bottom="0%" data-left="0%">
            <img src="{{asset('/assets/front/img/shape/footer_shape_1.png')}}" alt="shape" />
        </div>
        <div class="shape-mockup jump d-none d-xl-block" data-bottom="0%" data-right="0%">
            <img src="{{asset('/assets/front/img/shape/footer_shape_2.png')}}" alt="shape" />
        </div>

    </div>
</footer>

<!-- Chatbox Button -->
<div id="chatButton" onclick="toggleChatbox()" style="position: fixed; bottom: 20px; right: 20px; background-color: #0890F1; border-radius: 50%; width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; box-shadow: 0px 6px 18px rgba(0,0,0,0.18); cursor: pointer; z-index: 1000;">
    <img loading="lazy" src="{{ asset('/assets/images/bubble-chat.png') }}" alt="Chat" style="width: 28px; height: 28px;">
</div>

<!-- CHATBOX HTML -->
<div id="chatboxModal" style="position: fixed; bottom: 90px; right: 20px; width: 360px; height: 520px; background-color: white; border-radius: 15px; box-shadow: 0px 8px 30px rgba(0,0,0,0.25); display: none; flex-direction: column; z-index: 1001; overflow: hidden;">
    <div style="background: #0890F1; color: white; padding: 14px 16px; border-top-left-radius: 15px; border-top-right-radius: 15px; display:flex; justify-content:space-between; align-items:center;">
        <div style="display:flex;align-items:center;gap:10px">
            <img src="{{ asset('/assets/images/bubble-chat.png') }}" alt="bot" style="width:28px;height:28px">
            <strong>Laundry Support</strong>
        </div>
        <button onclick="toggleChatbox()" style="background:none;border:none;color:white;font-size:20px;line-height:1;">&times;</button>
    </div>

    <!-- CUSTOMER INFO -->
    <div id="customerInfoSection" style="flex: 1; padding: 14px;">
        <div id="chatErrorMsg" style="color: red; margin-bottom: 10px; display:none;"></div>
        <input type="text" id="customerName" placeholder="Your Name" style="width:100%;margin-bottom:10px;padding:10px;border-radius:6px;border:1px solid #ddd">
        <input type="text" id="customerPhone" placeholder="Phone Number" style="width:100%;margin-bottom:10px;padding:10px;border-radius:6px;border:1px solid #ddd">
        <button id="startChatBtn" onclick="startChat()" style="width:100%;background-color:#0890F1;color:white;padding:10px;border:none;border-radius:8px;font-weight:600;cursor:pointer">Start Chat</button>
        <div style="margin-top:12px;color:#666;font-size:13px">By continuing you agree to receive messages regarding your service.</div>
    </div>

    <!-- CHAT MESSAGES -->
    <div id="chatSection" style="flex: 1; padding: 12px; overflow-y: auto; display: none; flex-direction: column; gap:8px; background: #f7f9fb;">
        <!-- messages will be appended here -->
    </div>

    <!-- CHAT INPUT -->
    <div id="chatInputSection" style="padding: 12px; border-top: 1px solid #eee; display: none; flex-direction: column; gap:8px;">
        <div id="typingIndicator" style="display:none;color:#666;font-size:13px;">Typing…</div>
        <div style="display:flex;gap:8px;align-items:center">
            <input type="text" id="chatInput" placeholder="Ask us anything..." style="flex:1;padding:10px;border-radius:22px;border:1px solid #ddd;" />
            <button id="sendBtn" onclick="sendMessage()" style="background:#0890F1;border:none;color:white;padding:9px 12px;border-radius:22px;font-weight:700;cursor:pointer;">→</button>
            <button id="locBtn" onclick="sendLocation()" title="Send Location" style="background:#0890F1;border:none;color:white;padding:8px 10px;border-radius:22px;cursor:pointer;">📍</button>
        </div>
    </div>
</div>

<script>
    /*
  Smart chatbox client:
  - Uses your Laravel routes to start/send chat (which forward to FastAPI)
  - Displays AI reply + dynamic suggestions (buttons)
  - Accepts typed messages or suggestion button clicks
  - Shows typing indicator, disables input while waiting
  - Sends location messages when requested
  - Expects response JSON: { reply: "...", suggestions: ["...","..."] }
*/

    let chatId = null;
    let pollingInterval = null;
    let waitingForBot = false;

    // Helpers
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

    function appendBubble(text, opts = {}) {
        // opts: { from: "bot" | "user" | "system", asHtml: bool }
        const chat = document.getElementById('chatSection');
        const bubble = document.createElement('div');
        bubble.style.maxWidth = '82%';
        bubble.style.padding = '10px 12px';
        bubble.style.borderRadius = '12px';
        bubble.style.marginBottom = '6px';
        bubble.style.wordBreak = 'break-word';
        bubble.style.fontSize = '14px';
        bubble.style.lineHeight = '1.4';

        if (opts.from === 'user') {
            bubble.style.background = '#E1F5FE';
            bubble.style.alignSelf = 'flex-end';
            bubble.style.textAlign = 'right';
        } else if (opts.from === 'system') {
            bubble.style.background = '#fff3cd';
            bubble.style.color = '#856404';
            bubble.style.alignSelf = 'center';
        } else {
            // bot or default
            bubble.style.background = '#fff';
            bubble.style.alignSelf = 'flex-start';
            bubble.style.boxShadow = '0 1px 0 rgba(0,0,0,0.04)';
        }

        if (opts.asHtml) bubble.innerHTML = text;
        else bubble.textContent = text;

        chat.appendChild(bubble);
        chat.scrollTop = chat.scrollHeight;
        return bubble;
    }

    function clearSuggestionsContainer() {
        const existing = document.getElementById('suggestionContainer');
        if (existing) existing.remove();
    }

    function showSuggestions(suggestions = []) {
        clearSuggestionsContainer();
        if (!suggestions || !suggestions.length) return;
        const chat = document.getElementById('chatSection');
        const container = document.createElement('div');
        container.id = 'suggestionContainer';
        container.style.display = 'flex';
        container.style.flexWrap = 'wrap';
        container.style.gap = '8px';
        container.style.margin = '6px 0 14px';
        container.style.alignSelf = 'flex-start';

        suggestions.forEach(s => {
            const btn = document.createElement('button');
            btn.textContent = s;
            btn.style.background = '#0890F1';
            btn.style.color = '#fff';
            btn.style.border = 'none';
            btn.style.padding = '7px 12px';
            btn.style.borderRadius = '20px';
            btn.style.cursor = 'pointer';
            btn.style.fontSize = '13px';
            btn.onclick = () => {
                // when suggestion clicked — send it as a message
                clearSuggestionsContainer();
                sendMessage(s);
            };
            container.appendChild(btn);
        });

        chat.appendChild(container);
        chat.scrollTop = chat.scrollHeight;
    }

    // UI toggles
    function toggleChatbox() {
        const modal = document.getElementById('chatboxModal');
        const isHidden = window.getComputedStyle(modal).display === 'none';
        modal.style.display = isHidden ? 'flex' : 'none';

        if (isHidden) {
            // show proper section depending on chatId
            if (!chatId) {
                document.getElementById('customerInfoSection').style.display = 'block';
                document.getElementById('chatSection').style.display = 'none';
                document.getElementById('chatInputSection').style.display = 'none';
            } else {
                document.getElementById('customerInfoSection').style.display = 'none';
                document.getElementById('chatSection').style.display = 'flex';
                document.getElementById('chatInputSection').style.display = 'flex';
                loadMessages(); // initial load
                startPolling();
            }
        } else {
            stopPolling();
        }
    }

    // Start chat (create chat in Laravel)
    async function startChat() {
        const name = document.getElementById('customerName').value.trim();
        const phone = document.getElementById('customerPhone').value.trim();
        const errDiv = document.getElementById('chatErrorMsg');
        errDiv.style.display = 'none';
        errDiv.textContent = '';

        if (!name || !phone) {
            errDiv.textContent = 'Please enter your name and phone number.';
            errDiv.style.display = 'block';
            return;
        }

        document.getElementById('startChatBtn').disabled = true;
        document.getElementById('startChatBtn').textContent = 'Starting…';

        try {
            const res = await fetch("{{ route('chat.start') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    name,
                    phone
                })
            });
            const data = await res.json();
            if (!res.ok) throw data;
            chatId = data.chat_id;
            // switch UI
            document.getElementById('customerInfoSection').style.display = 'none';
            document.getElementById('chatSection').style.display = 'flex';
            document.getElementById('chatInputSection').style.display = 'flex';
            document.getElementById('chatSection').innerHTML = '';
            appendBubble('👋 Hello! How can we assist you today?', {
                from: 'bot'
            });
            // show initial suggestions (local quick ones while backend reply is fetched)
            showSuggestions(["🧺 Book Laundry", "🚚 Track Order", "💬 Contact Support"]);
            startPolling();
            // also trigger a "hello" message to initiate backend flow
            await sendMessage('hello');
        } catch (err) {
            errDiv.textContent = (err && err.error) ? err.error : 'Unable to start chat.';
            errDiv.style.display = 'block';
        } finally {
            document.getElementById('startChatBtn').disabled = false;
            document.getElementById('startChatBtn').textContent = 'Start Chat';
        }
    }

    // Load messages from Laravel DB (optional)
    async function loadMessages() {
        if (!chatId) return;
        try {
            const res = await fetch(`/chat/${chatId}/messages`);
            const messages = await res.json();
            const chat = document.getElementById('chatSection');
            chat.innerHTML = '';
            if (!messages || messages.length === 0) {
                appendBubble('👋 Hello! How can we assist you today?', {
                    from: 'bot'
                });
                showSuggestions(["🧺 Book Laundry", "🚚 Track Order", "💬 Contact Support"]);
                return;
            }
            messages.forEach(m => {
                appendBubble(m.message, {
                    from: m.sender === 'admin' ? 'bot' : 'user',
                    asHtml: false
                });
            });
            // after loading, ask backend for suggestions for last message to ensure UI synced
            const last = messages[messages.length - 1];
            if (last && last.sender === 'admin') {
                // try fetch suggestions for last admin message by re-calling send with a special route? skip for now
            }
        } catch (e) {
            console.warn('Could not load messages', e);
        }
    }

    // Polling
    function startPolling() {
        stopPolling();
        pollingInterval = setInterval(loadMessages, 4000);
    }

    function stopPolling() {
        if (pollingInterval) clearInterval(pollingInterval);
        pollingInterval = null;
    }

    // Typing indicator
    function setTyping(on) {
        document.getElementById('typingIndicator').style.display = on ? 'block' : 'none';
        document.getElementById('sendBtn').disabled = on;
        document.getElementById('chatInput').disabled = on;
        document.getElementById('locBtn').disabled = on;
    }

    // Send message to Laravel (which forwards to FastAPI)
    async function sendMessage(optionalMessage = null) {
        if (!chatId) return;

        const input = document.getElementById('chatInput');
        const raw = optionalMessage || input.value.trim();
        if (!raw) return;

        // append user bubble
        appendBubble(raw, {
            from: 'user'
        });
        input.value = '';
        clearSuggestionsContainer();

        // show typing
        setTyping(true);
        setTyping(true); // twice to be safe
        appendTemporaryTyping();

        try {
            const res = await fetch("{{ route('chat.send') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify({
                    message: raw,
                    chat_id: chatId
                })
            });
            const data = await res.json();

            // remove temporary typing bubble if present
            removeTemporaryTyping();
            setTyping(false);

            if (data.error) {
                appendBubble('⚠️ ' + (data.error || 'Bot error'), {
                    from: 'system'
                });
                return;
            }

            // Bot reply
            if (data.reply) {
                // allow HTML (bot might return HTML link). We sanitize minimally by allowing only <a> and line breaks.
                // NOTE: if you want stricter sanitization, use a proper sanitizer.
                const sanitized = sanitizeBotHtml(data.reply);
                appendBubble(sanitized, {
                    from: 'bot',
                    asHtml: true
                });
            }

            // Suggestions
            if (data.suggestions && Array.isArray(data.suggestions) && data.suggestions.length) {
                showSuggestions(data.suggestions);
            } else {
                // If no suggestions, show fallback quick options so user can continue flow
                showSuggestions(["🧺 Book Laundry", "🚚 Track Order", "💬 Contact Support"]);
            }

            // If the bot reply indicates booking done and returns special token (e.g., contains Order ID),
            // Laravel saved that chat message so it's visible in DB; additional logic not required here.

        } catch (err) {
            removeTemporaryTyping();
            setTyping(false);
            appendBubble('⚠️ Something went wrong. Please try again.', {
                from: 'system'
            });
            console.error('sendMessage error', err);
        }
    }

    // small temporary typing bubble to improve UX
    function appendTemporaryTyping() {
        const chat = document.getElementById('chatSection');
        if (document.getElementById('__tmp_typing')) return;
        const tmp = document.createElement('div');
        tmp.id = '__tmp_typing';
        tmp.style.background = '#fff';
        tmp.style.padding = '8px 12px';
        tmp.style.borderRadius = '12px';
        tmp.style.alignSelf = 'flex-start';
        tmp.style.marginBottom = '6px';
        tmp.style.opacity = '0.85';
        tmp.innerHTML = '<em>Typing…</em>';
        chat.appendChild(tmp);
        chat.scrollTop = chat.scrollHeight;
    }

    function removeTemporaryTyping() {
        const tmp = document.getElementById('__tmp_typing');
        if (tmp) tmp.remove();
    }

    // basic sanitizer for bot HTML (allows <a href> and <br>)
    function sanitizeBotHtml(html) {
        // escape then reintroduce anchors and <br>
        const div = document.createElement('div');
        div.textContent = html;
        let escaped = div.innerHTML;
        // allow simple <a href="...">text</a> patterns in bot reply (very small heuristic)
        escaped = escaped.replace(/&lt;a href=&quot;(https?:\/\/[^&]+)&quot;&gt;([^&]+)&lt;\/a&gt;/g, '<a href="$1" target="_blank" rel="noopener">$2</a>');
        // allow line breaks encoded as \n
        escaped = escaped.replace(/\\n/g, '<br>');
        // also allow real newlines to <br>
        escaped = escaped.replace(/\n/g, '<br>');
        return escaped;
    }

    // Send location
    function sendLocation() {
        if (!navigator.geolocation) {
            alert("Geolocation not supported in your browser.");
            return;
        }
        navigator.geolocation.getCurrentPosition(async pos => {
            const lat = pos.coords.latitude;
            const lng = pos.coords.longitude;
            const link = `https://www.google.com/maps?q=${lat},${lng}`;
            appendBubble('📍 My Location: ' + link, {
                from: 'user',
                asHtml: false
            });

            // send to backend as plain message (bot will parse location)
            await sendMessage(`📍 My location: ${link}`);
        }, () => {
            alert("Unable to get your location. Please allow location access.");
        });
    }

    /* Utilities for end session / cleanup */
    function endChat() {
        stopPolling();
        chatId = null;
        document.getElementById('chatboxModal').style.display = 'none';
        document.getElementById('chatSection').innerHTML = '';
        document.getElementById('chatInput').value = '';
        document.getElementById('customerName').value = '';
        document.getElementById('customerPhone').value = '';
        document.getElementById('customerInfoSection').style.display = 'block';
        document.getElementById('chatSection').style.display = 'none';
        document.getElementById('chatInputSection').style.display = 'none';
    }

    /* Keyboard Enter to send */
    document.getElementById('chatInput').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            sendMessage();
        }
    });
</script>