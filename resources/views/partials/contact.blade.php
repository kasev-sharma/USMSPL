<!--=============== UPGRADED ORIGINAL CONTACT FORM ===============-->
<div class="contact-us-container">
    <div class="contact-us-title">
        <h2 class="title">Contact Us</h2>
    </div>
    <div class="contact-us-wrapper">
        <div class="contact-us">
            <div class="contact-us-links-container">
                <div class="contact-us-para">
                    <!-- <p><b>
                        <span style="color: red">*</span>Currently, we are accepting orders exclusively through phone
                        calls, Reach out to us today to place your order and enjoy our
                        exceptional service.
                    </b></p> -->
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
                        <a href="mailto:underskyexports@gmail.com">underskyexports@gmail.com</a>
                    </div>
                </div>
                <div class="contact-us-link">
                    <ion-icon name="location-outline"></ion-icon>
                    <div class="box phone">
                        <h5>Meet Us Better At</h5>
                        <small>C/O Mahabir Prasad Agarwal, Banarhat Bazar, Jalpaiguri, West Bengal, India - 735225</small>
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
                
                <form method="POST" action="{{ route('contact.submit') }}" id="contact-form">
                    @csrf
                    
                    <input type="text" placeholder="Name*" required name="name" id="name" />
                    <span class="error-text" id="name-error"></span>

                    <input type="email" placeholder="Email*" required name="email" id="email" />
                    <span class="error-text" id="email-error"></span>

                    <input type="text" placeholder="Phone Number" name="phoneNumber" id="phoneNumber" />
                    <span class="error-text" id="phoneNumber-error"></span>
                    
                    <!-- NEW (Optional but Recommended) Inquiry Type Dropdown -->
                    <select name="inquiry_type" id="inquiry_type" required>
                        <option value="" disabled selected>Select Inquiry Type*</option>
                        <option value="Quote for Minerals">Quote for Minerals</option>
                        <option value="Jewelry Catalog Request">Jewelry Catalog Request</option>
                        <option value="Tea Samples/Pricing">Tea Samples/Pricing</option>
                        <option value="Partnership Opportunities">Partnership Opportunities</option>
                        <option value="General Inquiry">General Inquiry</option>
                    </select>
                    <span class="error-text" id="inquiry_type-error"></span>

                    <!-- IMPROVEMENT: Larger message box (rows="6") -->
                    <textarea name="message" id="message" cols="5" rows="6" placeholder="Message*" required></textarea>
                    <span class="error-text" id="message-error"></span>
                    
                    <!-- IMPROVEMENT: New styled button -->
                    <button type="submit" id="submit-button" class="btn-submit">Send Message</button>
                    <div id="form-status"></div>
                </form>
            </div>
        </div>
    </div>
</div>