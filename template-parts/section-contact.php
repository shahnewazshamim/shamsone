<?php
/**
 * The template part for displaying contact content.
 *
 * @package    WordPress
 * @subpackage Shamim_Ninja
 * @since      Shamim Ninja 1.0.0
 */
?>

<section id="contact" class="section contact">
    <div class="display-table">
        <div class="display-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center title">
                            <h2 class="text-dark">Get <span class="base-color">in Touch</span></h2>
                            <p class="text-muted mb-5 max-width-450">In a professional context it often happens that private clients corder a publication to be made.</p>
                        </div>
                    </div>
                </div>
                <div class="row contact-info">
                    <div class="col-lg-4 mt-5">
                        <div class="text-center">
                            <div class="base-color">
                                <img src="<?php echo DIR_MSS_IMG ?>phone.svg" alt="">
                            </div>
                            <div class="mt-3">
                                <h5 class="text-dark mb-0">Call Us On</h5>
                                <small class="text-muted">+123 456 7890</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5">
                        <div class="text-center">
                            <div class="base-color">
                                <img src="<?php echo DIR_MSS_IMG ?>location.svg" alt="">
                            </div>
                            <div class="mt-3">
                                <h5 class="text-dark mb-0 contact_detail-title">Visit Office</h5>
                                <small class="text-muted">24 Street, New York, United State.</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5">
                        <div class="text-center">
                            <div class="base-color">
                                <img src="<?php echo DIR_MSS_IMG ?>send.svg" alt="">
                            </div>
                            <div class="mt-3">
                                <h5 class="text-dark mb-0">Email Us At</h5>
                                <small class="text-muted"><a href="https://retrina.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c3d3e3f1c3b313d3530723f3331">[email&#160;protected]</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-5 contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 form-item">
                                    <div class="form-group">
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Your Name*" required >
                                    </div>
                                </div>
                                <div class="col-lg-6 form-item">
                                    <div class="form-group">
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Your Email*" required >
                                    </div>
                                </div>
                                <div class="col-12 form-item">
                                    <div class="form-group">
                                        <input name="subject" id="subject" type="text" class="form-control" placeholder="Your Subject*" required >
                                    </div>
                                </div>
                                <div class="col-12 form-item">
                                    <div class="form-group">
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-4 text-left">
                                    <div class="button-border">
                                        <a href="javascript:void(0)" class="pill-button" id="submit-btn" onclick="sendEmail()">Send Message</a>
                                    </div>
                                    <div id="message" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000" >
                                        <div class="toast-body d-inline-block"></div>
                                        <button type="button" class="pr-3 close" data-dismiss="toast" aria-label="Close">
                                            <span aria-hidden="true" class="lni-close size-xs "></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row copy-right">
                    <div class="col-12 text-center">
                        <p>Copyright © 2019. Template has been designed by <span class="base-color">Retrina</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
