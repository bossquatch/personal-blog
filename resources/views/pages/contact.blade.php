@extends('layouts.default')
@section('content')

              <div class="page-title">
                <h1>Contact</h1>
                <div class="page-subtitle">
                    <h4> Get in Touch</h4>
                </div>
              </div>

              <div id="content" class="page-content site-content single-post" role="main">

                <div class="row">
                  <div class="col-xs-12 col-sm-12 pb-5">
                    <img src="/images/mailboxes.jpg" alt="Mailboxes">
                  </div>
                </div>

                <div class="row">
                  <div class=" col-xs-12 col-sm-4 ">

                    <div id="info_list_1" class="info-list-w-icon">

                      <div class="info-block-w-icon">
                        <div class="ci-icon">
                          <i class="linecons linecons-phone"></i>
                        </div>
                        <div class="ci-text">
                          <h4><a href="tel:(813) 699-0060" class="text-decoration-none">(813) 699-0060</a></h4>
                          <p>Call, text, try to sell me an extended warranty for my car.</p>
                        </div>
                      </div>

                      <div class="info-block-w-icon">
                        <div class="ci-icon">
                          <i class="linecons linecons-location"></i>
                        </div>
                        <div class="ci-text">
                          <h4>Polk County, FL</h4>
                          <p>... upon this rock I will build my church, and all the powers of hell will not conquer it.</p>
                            <p class="font-italic text-muted">Matthew 16:18</p>
                        </div>
                      </div>

                      <div class="info-block-w-icon">
                        <div class="ci-icon">
                          <i class="linecons linecons-mail"></i>
                        </div>
                        <div class="ci-text">
                          <h6>douglascockerham@eloquence.digital</h6>
                          <p>Send me something, I may even reply.</p>
                        </div>
                      </div>
                    </div>

                  </div>


                  <div class=" col-xs-12 col-sm-8">

                    <div class="block-title">
                      <h2>How Can I Help You?</h2>
                    </div>

                    <form id="contact_form" class="contact-form" action="../contact_form/contact_form.blade.php" method="post">

                      <div class="messages"></div>

                      <div class="controls two-columns">
                        <div class="fields clearfix">
                          <div class="left-column">
                            <div class="form-group form-group-with-icon">
                              <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                              <div class="form-control-border"></div>
                              <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group form-group-with-icon">
                              <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                              <div class="form-control-border"></div>
                              <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group form-group-with-icon">
                              <input id="form_name" type="text" name="subject" class="form-control" placeholder="Subject" required="required" data-error="Subject is required.">
                              <div class="form-control-border"></div>
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                          <div class="right-column">
                            <div class="form-group form-group-with-icon">
                              <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                              <div class="form-control-border"></div>
                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI" data-theme="dark"></div>

                        <input type="submit" class="button btn-send disabled" value="Send message">
                      </div>
                    </form>

                  </div>


                </div>

              </div>
@stop
