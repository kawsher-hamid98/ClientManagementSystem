<!DOCTYPE html>
<html>
<head>
	<title></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

	@include('others.css_files')
	@include('others.js_files')
</head>
<body>
	@include('others.nav')

	@yield('login')
	@yield('home')
	@yield('dash')
	@yield('register')
	@yield('file')
	@yield('adminLogin')
	@yield('adminPanel')

	<!-- majumde -->

	@yield('majumder_furniture')
	@yield('majumder_season')
	@yield('majumder_timber')
	@yield('majumder_real')
	@yield('majumder_plaza')
	@yield('majumder_market')
	@yield('about_us')
	@yield('our_vision')
	@yield('career')
	@yield('chairman_message')
	@yield('corporate_profile')
	@yield('text')
	@yield('contact')
	@yield('home_file')
	@yield('door')
	@yield('door_file')
	@yield('double_door_file')
	@yield('double_door')
	@yield('single_door')
	@yield('almirah_file')
	@yield('single_almirah')
	@yield('double_almirah')

	@yield('chome')
	@yield('chomelist')
	@yield('cedit')
	@yield('cinstallment')
	@yield('uinstallment')
	@yield('wpage')


			<footer class="footer4">

				<div class="row">

					<div class="col-md-4">
						<p>Corporate Office</p>
						<div class="heading"></div>
						13/E, Sanarpar, Muktisoroni<br>
						(Biswa Road), Siddirganj, Narayanganj.<br>
						Mobile 1: +88-01817-530353<br>
						Mobile 2: +88-01552-340955<br>
						Mobile 3: +88-01711-665636
					</div>

					<div class="col-md-4">
						<p>Industrial Headquater 1</p>
						<div class="heading"></div>
						350, North Dania(Biswa Road)<br>
						Jatrabari, Dhaka-1236.<br>
						Mobile 1: +88-01812-544361<br>
						Mobile 2: +88-01910-401449<br>
						Mobile 3: +88-01971-665636
					</div>

					<div class="col-md-4">
						<p>Industrial Headquater 2</p>
						<div class="heading"></div>
						13/E, Sanarpar, Muktisoroni<br>
						(Biswa Road), Siddirganj, Narayanganj.<br>
						Mobile 1: +88-01817-530353<br>
						Mobile 2: +88-01552-340955<br>
						Mobile 3: +88-01711-665636
					</div>

			</div>

			</footer>

	<footer class="footer3 col-md-12">Majumder global &copy; 2019 / All rights reserved.</footer>
	<footer class="footer2 col-md-12"></footer>
	<footer class="footer1 col-md-12">Privacy & Policy - Developed By Tanz IT</footer>

</body>
</html>
