
  
@extends('../layouts.resident')
@section('sub-title','HOME')

@section('navbar')
    @include('../partials.resident.navbar')
@endsection

@section('content')
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>BARANGAY PEMBO</h1>
          <h2>ANG SERBISYONG MAY KABULUHAN ❤️</h2>
          

          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="/register" class="btn-get-started scrollto">Register Now</a>
            
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="resident/img/barangay pembo.gif" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>

  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>
		<div class="row">
			<div class="col-md-12">
				<div class="commonTab">
					<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="home-tab" data-toggle="tab" href="#philosophy" role="tab" aria-controls="philosophy"
							  aria-selected="true">Barangay Profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="profile-tab" data-toggle="tab" href="#mission" role="tab" aria-controls="mission"
							  aria-selected="false">mission</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="vision"
							  aria-selected="false">vision</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="philosophy" role="tabpanel" aria-labelledby="home-tab">
							<div class="row">
								<div class="col-md-6 align-self-center">
									<h2>Pembo</h2>
									<p> is part of the Second District of Makati. It belongs to the Cluster 5 or the Eastside Cluster along with Comembo, East Rembo and Rizal. The War Tunnel at Morning Glory Street is considered as a heritage site in the Barangay Pembo which is connected to the Fort Bonifacio War Tunnel.  </p>
									<p>Also, Barangay Pembo accommodates the Ospital ng Makati as its well-known landmark.
Pembo is a residential and commercial area and is second to the largest in the district in terms of population. Based on the 2010 Census of Population conducted by the National Statistics Office, Pembo has a total of 44,803 population and percentage share of 2.34% versus the city’s population with an estimate of at least 8,961 households. By population density on the other hand, considering  its land area and population count, the barangay has 70 per 1,000 square meters</p>
								</div>
								<div class="col-md-6">
									<img class="img-fluid rounded shadow " src="{{asset('website2/images/company/pembo-1.jpg')}}" alt="">
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="profile-tab">
							<div class="row">
								<div class="col-md-6 align-self-center">
									<h2>Our Mission</h2>
									<p>Barangay PEMBO’s mission is transformation, global change through adopting modernization and open sourcing, sustainably holistic, morally self-replicating. Highest of Good of All solutions founded on comprehensive and modifiable community, models duplicated globally that include sustainable solutions for infrastructure, food, education and arts, peace and order, disaster resilience, economics, fulfilled living and more.</p>
								</div>
								<div class="col-md-6">
									<img class="img-fluid rounded shadow mt-20" src="{{asset('website2/images/company/pem.jpg')}}" alt="">
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="contact-tab">
							<div class="row">
								<div class="col-md-6 align-self-center">
									<h2>Our Vision</h2>
									<p>Barangay Pembo’s vision is to facilitate the creation of a new age of cooperation, collaboration, innovation, creativity and increased happiness for the community by demonstrating what’s possible, open sourcing, free- sharing and best practices, accessible public service and making modular or total duplication easy, affordable and attractive to its constituents so that community development will spread for its own.</p>
								</div>
								<div class="col-md-6">
									<img class="img-fluid rounded shadow mt-20" src="{{asset('website2/images/company/AMP2.jpg')}}" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

    </section><!-- End About Us Section -->

    <!-- Announcement Section -->
    <section id="announcement" class="announcement">
    <div id="announcement" class="announcement d-flex flex-column">
      <div class="m-5">
        <h2>Announcement Board</h2>
        <div class="table-responsive">
            <input class="form-control mb-5" type="search" placeholder="Search" aria-label="Search" id="search-input" autocomplete="off">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Date_Posted</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($announcements as $announcement)
                    <tr data-title="{{ $announcement->title }}" data-content="{{ $announcement->content }}">
                        <td>{{ $announcement->title }}</td>
                        <td>{{ $announcement->description }}</td>
                        <td>
                            <img src="{{ asset('storage/' . $announcement->image) }}" class="card-img-top w-50 h-50" alt="{{ $announcement->title }}">
                        </td>
                        <td>{{ $announcement->created_at->format('F j, Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                {{$announcements->links('layouts.pagination')}}
            </div>
        </div>
      </div>
    <div>
    
   <!-- ======= End Announcement Section ======= -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3><strong>Frequently Asked Questions</strong></h3>
              
            </div>

            <div class="accordion-list">
              <ul>
                <div class="row">
                      <li>
                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> I’m a new user. How do I make a document request?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                          <p>
                          Request document in just 3 easy steps! First, register an account by clicking the ‘Register now’ button found on the top of the homepage. Input the required information and insert a profile picture. (Please make sure your profile picture is really you with no filters and edits with your face fully visible.) Finally, click submit and wait for the staff to verify the information you submitted and you will receive an email notification once your account is already approved. Once approved, you’re all good to go in requesting a document.
                          </p>
                        </div>
                      </li>
                      <li>
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>  I already have an account. How do I make a document request? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                          <p>
                          Log in to your account by clicking the Login button found on the upper right corner under Accounts. Click the request document on your profile dashboard and there, you will see the documents available for request as well as the price and requirements needed for requesting.
                          </p>
                        </div>
                      </li>
                      <li>
                          <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> What are the payment options and how can I submit a proof of payment? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                          <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                            <p>
                            You can pay your requested documents through GCash or Paymaya. Just click on Pay Bills>Government>E-Barangay and input the amount you need to pay. Download a receipt or take a screenshot of your payment and attach it to the proof of payment section that will appear once you click on the ‘Request Now’ button. Please wait for 24-48 hours for the confirmation of your payment and you will be notified on your account dashboard once your document is ready for claiming.
                            </p>
                          </div>
                      </li>
                      <li>
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span> How long will I wait for my requested document to be claimed?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                          <p>
                          Once payment has been made and verified, please wait for 2-7 business days for claiming your documents as it may vary depending on your preferred claiming option as well as your address and the requirements you have submitted. (See reminders to remember when submitting requirements here.)
                          </p>
                        </div>
                      </li>
                      <li>
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"><span>05</span> What are the payment options and how can I submit a proof of payment? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                          <p>
                          If your document request has been declined, it may be because the requirements you have submitted are wrong, incomplete or unclear. Your proof of payment as well may be unverified. Please make sure to note the things you should remember when submitting your requirements as well as your proof of payment. (See reminders to remember when submitting requirements here.)
                          </p>
                        </div>
                      </li>
                      <li>
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-6" class="collapsed"><span>06</span> I forgot my password. Can I make another account?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-6" class="collapse" data-bs-parent=".accordion-list">
                          <p>
                              If you have forgotten your password, you can click on the Login button and there, you will see a “Forgot your password?” button. Just click on it and enter the email address you used in registering and you will receive a reset password link on your email. If problem still persists, feel free to reach out on our email: ebrangayassistance@gmail.com
                          </p>
                        </div>
                      </li>
                      <li>
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-7" class="collapsed"><span>07</span> What is the age requirement for registering an account and requesting a document? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-7" class="collapse" data-bs-parent=".accordion-list">
                          <p>
                          The age requirement should be 18 years old above. For residents 17 years old below, please provide a letter of consent from your parents/guardian and attach the document on the requirements.
                          </p>
                        </div>
                      </li>
                      <li>
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-8" class="collapsed"><span>08</span>Can I make two or more requests at a time?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-8" class="collapse" data-bs-parent=".accordion-list">
                          <p>
                            Yes, there is no limit for document requests. However, please take note that the claiming date may take longer than usual if you have multiple requests to give enough time to process your documents.
                          </p>
                        </div>
                      </li>
                      <li>
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-9" class="collapsed"><span>09</span>I’m an elder woman/man, I don’t know how to navigate through your website and I don’t have anyone with me to assist with my document request. Is there any other way to make a request?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-9" class="collapse" data-bs-parent=".accordion-list">
                          <p>
                            No worries! If you are not able to request documents by our portal, feel free to call us on this number: 123-456-789/09123456789/0987654321 and we’ll set up your account and help you throughout your document requests.
                          </p>
                        </div>
                      </li>
                      <li>
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-10" class="collapsed"><span>10</span>  I mistakenly requested a wrong document and have paid for it already. Will I be able to get a refund?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-10" class="collapse" data-bs-parent=".accordion-list">
                          <p>
                              If you have mistakenly requested a wrong document, you can cancel your request and your payment will be refunded to you via GCash or Paymaya once our team messaged you on your portal, but please take note that once claiming date has already appeared on your portal, we can no longer issue a refund as the document has already been made.
                          </p>
                        </div>
                      </li>
                </div>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Register/Log In</a></h4>
              <p>With this Barangay portal, you are able to create and manage your account online and keep track of your records and transactions.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Hassle-free</a></h4>
              <p>No more waiting in lines – We’ve got you! With this barangay portal, you can finally request and process documents without the need of going personally to the barangay</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Easy Payments</a></h4>
              <p>We provide an easy way of paying your documents through GCash or Paymaya.</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Claiming Options</a></h4>
              <p>We provide you three claiming options to choose from depending on your preference! You can claim it directly on your Barangay, have it delivered on your own doorstep or just print it readily.</p>
            </div>
          </div>
        

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Pricing Section ======= -->
    
    <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row">
          @foreach($documents as $document)
            <div class="col-lg-3 mt-2" data-aos="fade-up" data-aos-delay="200">
              <div class="box featured">
                <h3 class="text-uppercase">{{$document->name ?? ''}}</h3>
                <h4><sup>₱</sup>{{$document->amount ?? ''}}<span>per request</span></h4>
                
                <ul style="min-height: 170px;">
                    <span class="text-dark">Requirements</span>
                    @foreach($document->requirements()->get() as $requirement)
                        <li><i class="bx bx-file"></i>{{$requirement->name ?? ''}}</li>
                    @endforeach
                    
                </ul>
                <div class="text-center mb-0">
                  <a href="/resident/request_document/{{$document->id}}" class="buy-btn mx-auto">Request Now</a>
                </div>
                

              </div>

                
            </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Pricing Section -->

    
     <section id="officials" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Barangay Officials</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 mt-2">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100" style="height: 250px;">
              <div class="pic"><img src="resident/img/team/abbangskie1.jpg" class="img-fluid"  alt=""></div>
              <div class="member-info">
                <h4>KIM M. ABBANG </h4>
                <span>Barangay Chairman</span>
                <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>                
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-2">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100" style="height: 250px;">
              <div class="pic"><img src="resident/img/team/diaz.jpg" class="img-fluid" alt="jas.png"></div>
              <div class="member-info">
                <h4>KEITH DIAZ</h4>
                <span>SK Chairman</span>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-2">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100" style="height: 250px;">
              <div class="pic"><img src="resident/img/team/ellorin.jpg" class="img-fluid" alt="neil.png"></div>
              <div class="member-info">
                <h4>LALAINE E. ASIDAO</h4>
                <span>Barangay Secretary</span>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-2">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100" style="height: 250px;">
              <div class="pic"><img src="resident/img/team/bautista.jpg" class="img-fluid" alt="neil.png"></div>
              <div class="member-info">
                <h4>CRISTY M. LICUANAN</h4>
                <span>Barangay Treasurer</span>
                <div class="social">
                  <a href=""><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                  <a href=""><i class="ri-instagram-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
         
        </div>

      </div>
    </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Blk. 204 L-1&2 Plaza Carriaga Street cor. Sampaguita Street</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>barangaypembo@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>(02) 85530846</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.9691450139926!2d121.05573171483961!3d14.543757189838706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c89203f79909%3A0xe2e126b97cc3c32b!2sPembo%20Barangay%20Hall!5e0!3m2!1sen!2sph!4v1676696660722!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form method="post" id="myForm" class="myform">
              @csrf
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name<span class="text-danger"> * </span></label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email<span class="text-danger"> * </span></label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject">
              </div>
              <div class="form-group">
                <label for="name">Message<span class="text-danger"> * </span></label>
                <textarea class="form-control" name="message" style="height: 180px;" required></textarea>
              </div>
              <div class="my-3">
                <div class="sent-message sent">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center">
              <button type="submit" id="btn-action">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Announcement Section ======= -->
<!-- <section id="announcement" class="announcement">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Announcements</h2>


<div class="page-wrapper">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="post">
  <div class="post-media post-thumb">
    <a href="blog-single.html">
      <img src="{{asset('website/images/blog/blog-post-1.jpg')}}" alt="">
    </a>
  </div>
  <h3 class="post-title"><a href="blog-single.html">How To Wear Bright Shoes</a></h3>
  <div class="post-meta">
    <ul>
      <li>
        <i class="ion-calendar"></i> 20, MAR 2020
      </li>
      <li>
        <i class="ion-android-people"></i> POSTED BY ADMIN
      </li>
      <li>
        <a href="blog-grid.html"><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href="blog-left-sidebar.html"> TRAVEL</a>, <a href="blog-right-sidebar.html">FASHION</a>
      </li>

    </ul>
  </div>
  <div class="post-content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores
      vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem
      ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a
      perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere. </p>
    <a href="blog-single.html" class="btn btn-main">Continue Reading</a>
  </div>

</div>
<div class="post">
  <div class="post-media post-thumb">
    <a href="blog-single.html">
      <img src="{{asset('website/images/blog/blog-post-2.jpg')}}" alt="">
    </a>
  </div>
  <h3 class="post-title"><a href="blog-single.html">Two Ways To Wear Straight Shoes</a></h3>
  <div class="post-meta">
    <ul>
      <li>
        <i class="ion-calendar"></i> 20, MAR 2020
      </li>
      <li>
        <i class="ion-android-people"></i> POSTED BY ADMIN
      </li>
      <li>
        <a href="blog-grid.html"><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href="blog-left-sidebar.html"> TRAVEL</a>, <a href="blog-right-sidebar.html">FASHION</a>
      </li>

    </ul>
  </div>
  <div class="post-content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores
      vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem
      ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a
      perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere</p>
    <a href="blog-single.html" class="btn btn-main">Continue Reading</a>
  </div>
</div>
<div class="post">
  <div class="post-media post-thumb">
    <a href="blog-single.html">
      <img src="{{asset('website/images/blog/blog-post-3.jpg')}}" alt="">
    </a>
  </div>
  <h3 class="post-title"><a href="blog-single.html">Making A Denim Statement</a></h3>
  <div class="post-meta">
    <ul>
      <li>
        <i class="ion-calendar"></i> 20, MAR 2020
      </li>
      <li>
        <i class="ion-android-people"></i> POSTED BY ADMIN
      </li>
      <li>
        <a href="blog-grid.html"><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href="blog-left-sidebar.html"> TRAVEL</a>, <a href="blog-right-sidebar.html">FASHION</a>
      </li>

    </ul>
  </div>
  <div class="post-content">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores
      vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem
      ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a
      perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere</p>
    <a href="blog-single.html" class="btn btn-main">Continue Reading</a>
  </div>
</div>
			</div>
		</div>
	</div>
</div> -->

   <!-- ======= End Announcement Section ======= -->

  </main>
@endsection

@section('footer')
    @include('../partials.resident.footer')
@endsection

@section('script')
<script> 
$('#myForm').on('submit', function(event){
    event.preventDefault();
    $.ajax({
          url: "/send_msg",
          method:"POST",
          data:$(this).serialize(),
          dataType:"json",
          beforeSend:function(){
            $('#btn-action').text('Sending..')
            $('#btn-action').attr('disabled', true)
          },
          success:function(data){
              $('#btn-action').text('Send Message')
              $('#btn-action').attr('disabled', false)
              $('.sent-message').removeClass('sent');
              $('#myForm')[0].reset();
          }
      });
  
});
</script>

<script>
    document.getElementById('search-input').addEventListener('input', function () {
        const searchQuery = this.value.trim().toLowerCase();
        const tableRows = document.querySelectorAll('[data-title], [data-content]');

        tableRows.forEach(row => {
            const title = row.getAttribute('data-title').toLowerCase();
            const content = row.getAttribute('data-content').toLowerCase();
            
            if (title.includes(searchQuery) || content.includes(searchQuery)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });
    </script>
@endsection
 