@extends('layouts.master-2')

@section('content')

<!-- start: Container -->	
		<div class="container contact" style="margin-top: 20px;">
			
			<!-- start: Row -->
			<div class="row">
			
				<!-- start: Contact Info -->
				<div class="col-lg-5 col-md-5">
					<div class="title"><h3>{{ trans('user.contact_info') }}</h3></div>
					<p>
						<b>{{ trans('user.Company_Name') }}</b>
					</p>
					<p>
						{{($contact->company_name != null) ? $contact->companyname : ''}}
					</p>	
					<p>	
						<b>{{ trans('user.phone_number') }}:</b> {{($contact->phone_number != null) ? $contact->phone_number : ''}}
					</p>
					<p>	
						<b>{{ trans('user.fax') }}: </b>{{($contact->fax != null) ? $contact->fax : ''}}
					</p>
					<p>
						<b>{{ trans('user.Email') }}:</b> {{($contact->email != null) ? $contact->email : ''}}
					</p>
					<p>{{($contact->rule != null) ? $contact->rule : ''}}</p>
				</div>
				<!-- end: Contact Info -->		

{!! Form::open(array('route' =>'post.contact', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}
				<!-- start: Contact Form -->
				<div class="col-lg-4 col-md-4">
					<div class="title"><h3>{{ trans('user.contact_form') }}</h3></div>
					@if ($errors->any())
			        	<div class="alert alert-danger">
			        	    <ul>
			                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
			                </ul>
			        	</div>
			        @endif
			        @if ( session()->has('message') )
    <div class="alert alert-success alert-dismissable">{{ session()->get('message') }}</div>
@endif

					<!-- start: Contact Form -->
					<div id="contact-form">

						<form method="post" action="">

							<fieldset>
								<div class="clearfix">
									<label for="name"><span>{{ trans('user.Name') }}(</span> <span style="color: red">*</span>)</label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="name" type="text" value="" class="form-control">
									</div>
								</div>

								<div class="clearfix">
									<label for="email"><span>{{ trans('user.Email') }}(</span> <span style="color: red">*</span>)</label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="form-control">
									</div>
								</div>
								<div class="clearfix">
									<label for="adress"><span>{{ trans('user.Adress') }}:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="address" type="text" value="" class="form-control">
									</div>
								</div>

								<div class="clearfix">
									<label for="message"><span>{{ trans('user.Message') }}(</span> <span style="color: red">*</span>)</label>
									<div class="input">
										<textarea tabindex="3" class="form-control" id="message" name="message" rows="7"></textarea>
									</div>
								</div>

								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-succes btn-large">{{trans('user.send_message')}}</button>
								</div>
							</fieldset>

						</form>

					</div>
					<!-- end: Contact Form -->
	{!! Form::close() !!}
				</div>
				<!-- end: Contact Form -->

				<!-- start: Social Sites -->
				<div class="col-lg-3 col-md-3 ">
					<div class="title"><h3>{{ trans('user.follow_me') }}</h3></div>
					<ul class="social-bookmarks text-center">
						<li class="facebook"><a href="https://www.facebook.com/dotrsg/?pnref=lhc">facebook</a></li>
						<li class="twitter"><a href="https://twitter.com/dotrsgroup">twitter</a></li>
						<li class="youtube"><a href="https://www.youtube.com/channel/UCCShskWVwR5_3wX49TJiD_w">youtube</a></li>
					</ul>
				</div>
				<!-- end: Social Sites -->
			
			</div>
			<!-- end: Row -->

		</div>
		<!-- end: Container -->
		@endsection