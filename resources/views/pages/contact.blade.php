@extends('layouts.master-2')

@section('content')

<!-- start: Container -->	
		<div class="container contact">
			
			<!-- start: Row -->
			<div class="row">
			
				<!-- start: Contact Info -->
				<div class="col-lg-4 col-md-4">
					<div class="title"><h3>Contact Info</h3></div>
					<p>
						<b>Company Name</b>
					</p>
					<p>
						30 South Park Avenue
					</p>
					<p>	
						San Francisco, CA 94108, USA
					</p>	
					<p>	
						Phone: (123) 456-7890
					</p>
					<p>	
						Fax: +08 (123) 456-7890
					</p>
					<p>
						Email: contact@companyname.com
					</p>
					<p>
						Web: companyname.com
					</p>
				</div>
				<!-- end: Contact Info -->		

{!! Form::open(array('route' => config('quickadmin.route').'.contacts.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}
				<!-- start: Contact Form -->
				<div class="col-lg-4 col-md-4">
					<div class="title"><h3>Contact Form</h3></div>

					<!-- start: Contact Form -->
					<div id="contact-form">

						<form method="post" action="">

							<fieldset>
								<div class="clearfix">
									<label for="name"><span>Name:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="name" type="text" value="" class="form-control">
									</div>
								</div>

								<div class="clearfix">
									<label for="email"><span>Email:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="form-control">
									</div>
								</div>
								<div class="clearfix">
									<label for="adress"><span>Adress:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="address" type="text" value="" class="form-control">
									</div>
								</div>

								<div class="clearfix">
									<label for="message"><span>Message:</span></label>
									<div class="input">
										<textarea tabindex="3" class="form-control" id="message" name="message" rows="7"></textarea>
									</div>
								</div>

								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-succes btn-large">Send message</button>
								</div>
							</fieldset>

						</form>

					</div>
					<!-- end: Contact Form -->
{!! Form::close() !!}
				</div>
				<!-- end: Contact Form -->

				<!-- start: Social Sites -->
				<div class="col-lg-4 col-md-4">
					<div class="title"><h3>Follow US!</h3></div>
					<ul class="social-bookmarks">
						<li class="aim"><a href="#">aim</a></li>
						<li class="apple"><a href="#">apple</a></li>
						<li class="behance"><a href="#">behance</a></li>
						<li class="blogger"><a href="#">blogger</a></li>
						<li class="cargo"><a href="#">cargo</a></li>
						<li class="delicious"><a href="#">delicious</a></li>
						<li class="deviantart"><a href="#">deviantart</a></li>
						<li class="digg"><a href="#">digg</a></li>
						<li class="dopplr"><a href="#">dopplr</a></li>
						<li class="dribbble"><a href="#">dribbble</a></li>
						<li class="ember"><a href="#">ember</a></li>
						<li class="evernote"><a href="#">evernote</a></li>
						<li class="facebook"><a href="https://www.facebook.com/brankic1979themes">facebook</a></li>
						<li class="flickr"><a href="http://www.flickr.com/photos/brankic1979/">flickr</a></li>
						<li class="forrst"><a href="#">forrst</a></li>
						<li class="github"><a href="#">github</a></li>
						<li class="google"><a href="#">google</a></li>
						<li class="googleplus"><a href="#">googleplus</a></li>
						<li class="gowalla"><a href="#">gowalla</a></li>
						<li class="grooveshark"><a href="#">grooveshark</a></li>
						<li class="html5"><a href="#">html5</a></li>
						<li class="icloud"><a href="#">icloud</a></li>
						<li class="lastfm"><a href="#">lastfm</a></li>
						<li class="linkedin"><a href="#">linkedin</a></li>
						<li class="metacafe"><a href="#">metacafe</a></li>
						<li class="mixx"><a href="#">mixx</a></li>
						<li class="myspace"><a href="#">myspace</a></li>
						<li class="netvibes"><a href="#">netvibes</a></li>
						<li class="newsvine"><a href="#">newsvine</a></li>
						<li class="orkut"><a href="#">orkut</a></li>
						<li class="paypal"><a href="#">paypal</a></li>
						<li class="picasa"><a href="#">picasa</a></li>
						<li class="pinterest"><a href="#">pinterest</a></li>
						<li class="plurk"><a href="#">plurk</a></li>
						<li class="posterous"><a href="#">posterous</a></li>
						<li class="reddit"><a href="#">reddit</a></li>
						<li class="rss"><a href="#">rss</a></li>
						<li class="skype"><a href="#">skype</a></li>
						<li class="stumbleupon"><a href="#">stumbleupon</a></li>
						<li class="technorati"><a href="#">technorati</a></li>
						<li class="tumblr"><a href="#">tumblr</a></li>
						<li class="twitter"><a href="#">twitter</a></li>
						<li class="vimeo"><a href="#">vimeo</a></li>
						<li class="wordpress"><a href="#">wordpress</a></li>
						<li class="yahoo"><a href="#">yahoo</a></li>
						<li class="yelp"><a href="#">yelp</a></li>
						<li class="youtube"><a href="#">youtube</a></li>
						<li class="zerply"><a href="#">zerply</a></li>
						<li class="zootool"><a href="#">zootool</a></li>
					</ul>
				</div>
				<!-- end: Social Sites -->
			
			</div>
			<!-- end: Row -->

		</div>
		<!-- end: Container -->
		@endsection