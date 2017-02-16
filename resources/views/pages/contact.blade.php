@extends('layouts.master-2')

@section('content')

<!-- start: Container -->	
		<div class="container contact" style="margin-top: 20px;">
			
			<!-- start: Row -->
			<div class="row">
			
				<!-- start: Contact Info -->
				<div class="col-lg-5 col-md-5">
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
					<p>いただいた個人情報について、不正アクセス、紛失、漏洩等が発生しないよう管理責任者を定め、個人情報取り扱い規定を整備し、これらの危険に対する安全対策を積極的に実施します。入力していただいた個人情報は、ご本人の同意がない限り第三者には提供いたしません。入力していただいた個人情報は当社にて厳重に管理し、プレゼントの発送以外の目的では使用いたしません。入力していただいた個人情報は、法律に基づいた、警察等の行政機関や司法機関からの要請があった場合を除き、第三者には提供いたしません。個人情報の取り扱いの全てもしくはその一部を外部に委託する場合、委託を受けた者に対して適切な監督を実施します。</p>
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
									<label for="name"><span>Name(</span> <span style="color: red">*</span>)</label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="name" type="text" value="" class="form-control">
									</div>
								</div>

								<div class="clearfix">
									<label for="email"><span>Email(</span> <span style="color: red">*</span>)</label>
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
									<label for="message"><span>Message(</span> <span style="color: red">*</span>)</label>
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
				<div class="col-lg-3 col-md-3">
					<div class="title"><h3>Follow US!</h3></div>
					<ul class="social-bookmarks">
						<li class="aim"><a href="#">aim</a></li>
						<li class="apple"><a href="#">apple</a></li>
						<li class="behance"><a href="#">behance</a></li>
					</ul>
				</div>
				<!-- end: Social Sites -->
			
			</div>
			<!-- end: Row -->

		</div>
		<!-- end: Container -->
		@endsection