<!--=============== CONTACT US ===============-->
<div class="contact-us-container">
    <div class="contact-us-title">
        <h2 class="title">Contact Us</h2>
    </div>
    <div class="contact-us-wrapper">
        <div class="contact-us">
            <div class="contact-us-links-container">
                <div class="contact-us-para">
                    <p><b>
                        <span style="color: red">*</span>Currently, we are accepting orders exclusively through phone
                        calls, Reach out to us today to place your order and enjoy our
                        exceptional service.
                    </b></p>
                </div>
                <div class="contact-us-link">
                    <ion-icon name="call-outline"></ion-icon>
                    <div class="box phone">
                        <h5>Phone</h5>
                        <small>+918918974840</small>
                    </div>
                </div>
                <div class="contact-us-link">
                    <ion-icon name="mail-outline"></ion-icon>
                    <div class="box phone">
                        <h5>Email</h5>
                        {{-- Professional Enhancement: Use mailto for a clickable link --}}
                        <a href="mailto:underskyexports@gmail.com">underskyexports@gmail.com</a>
                    </div>
                </div>
                <div class="contact-us-link">
                    <ion-icon name="location-outline"></ion-icon>
                    <div class="box phone">
                        <h5>Meet Us better At</h5>
                        <small>C/O Mahabir Prasad Agarwal,Banarhat Bazar,Jalpaiguri,West Bengal,India - 735225</small>
                    </div>
                </div>
            </div>
            <div class="form">
                <div class="desc-contact-form">
                    <p>
                        Don’t hesitate to reach out with the contact information
                        below, or send a message using the form.
                    </p>
                </div>
                
                {{-- THE FORM IS MODIFIED FOR LARAVEL --}}
                <form method="POST" action="{{ route('contact.submit') }}" id="contact-form">
                    @csrf  {{-- CSRF Token for security --}}
                    
                    <input type="text" placeholder="Name" required name="name" id="name" />
                    <span class="error-text" id="name-error"></span>

                    <input type="email" placeholder="Email" required name="email" id="email" />
                    <span class="error-text" id="email-error"></span>

                    <input type="text" placeholder="Phone Number" name="phoneNumber" id="phoneNumber" />
                    <span class="error-text" id="phoneNumber-error"></span>

                    <textarea name="message" id="message" cols="5" rows="3" placeholder="Message" required></textarea>
                    <span class="error-text" id="message-error"></span>

                    <button type="submit" id="submit-button">Send</button>
                    <div id="form-status"></div> {{-- For success/error messages --}}
                </form>
            </div>
        </div>
    </div>
</div>