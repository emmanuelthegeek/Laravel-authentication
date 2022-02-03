<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register | Login </title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sourcesanspro-font.css') }}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
</head>
<body class="form-v8">
	<div class="page-content">
		<div class="form-v8-content">
			<div class="form-left">
				<img src="assets/images/bg-laravel.jfif" alt="form">
			</div>
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Sign Up</button>
					</div>
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'Login')">Login</button>
					</div>
				</div>
				<form class="form-detail" action="{{ route('register') }}" method="POST">
					@csrf
					<div class="tabcontent" id="sign-up">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="name" :value="old('name')" id="name" class="input-text" required>
								<span class="label">Username</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="email" name="email" :value="old('email')" id="email" class="input-text" required>
								<span class="label">E-Mail</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required autocomplete="new-password">
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password_confirmation" id="password_confirmation" class="input-text" required autocomplete="new-password">
								<span class="label">Confirm Password</span>
								<span class="border"></span>
							</label>
						</div>
						@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                			<div class="mt-4">
                    			<x-jet-label for="terms">
                        			<div class="flex items-center">
                            			<x-jet-checkbox name="terms" id="terms"/>

										<div class="ml-2">
											{!! __('I agree to the :terms_of_service and :privacy_policy', [
													'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
													'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
											]) !!}
										</div>
                        			</div>
                    			</x-jet-label>
                			</div>
            			@endif
						<div class="form-row-last">
							<input type="submit" name="register" class="register" value="Register">
						</div>
					</div>
				</form>
				<form class="form-detail" action="{{ route('login') }}" method="POST">
					@csrf
					<div class="tabcontent" id="Login">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="email" name="email" :value="old('email')" id="email" class="input-text" required autofocus>
								<span class="label">E-Mail</span>
		  						<span class="border"></span>
							</label>
						</div>
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required autocomplete="current-password">
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						<div class="form-row-last">
							<input type="submit" name="login" class="login" value="Login">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
</body>
</html>