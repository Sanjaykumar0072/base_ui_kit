<?php include('header.php'); ?>

<body>
	<div class="row">
		<div class="col-xs-12">
			<div class="header">
				<h1>Base UI</h1>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php include('sidebar.php'); ?>
			<div class="col-xs-12 col-sm-10">
				<div class="cover-notify">
					<h2>Notifications</h2>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12">
						<div class="cover-notify1">
							<a href="#" class="notification-trigger" data-notification="notification-name1-1">Normal
								notification</a> <!-- Trigger notification. -->
							<a href="#" class="notification-trigger notification-auto"
								data-notification="notification-name1-2">Auto FadeOut notification</a>
							<!-- Trigger notification. -->
							<div class="notification-container notification-pos-right1 notification-pos-bottom">
								<!-- notification -->
								<div class="notification" id="notification-name1-1">
									<a href="#" class="close-notification">&#10006;</a>
									<b>Normal notification!</b> Lorem ipsum dolor sit amet, consectetur adipisicing
									elit.
								</div>
								<!-- notification -->
								<div class="notification" id="notification-name1-2">
									<a href="#" class="close-notification">✔</a>
									<b>Auto FadeOut notification!</b> Lorem ipsum dolor sit amet, consectetur
									adipisicing elit.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="footer"></div>
		</div>
	</div>
	
	<script>
		jQuery(function ($) {
			$(".notification-trigger").on("click", function (e) {
				e.preventDefault();
				datanotification = $(this).attr("data-notification");

				if (
					$(this).hasClass("notification-auto") &&
					!$("#" + datanotification).is(":visible")
				) {
					$("#" + datanotification)
						.fadeIn(400)
						.delay(2000)
						.fadeOut(400);
				} else if (!$("#" + datanotification).is(":visible")) {
					$("#" + datanotification).fadeIn(400);
				}
			});

			$(".close-notification").on("click", function (e) {
				e.preventDefault();
				closenotification = $(this).parent().attr("id");
				$("#" + closenotification).fadeOut(400);
			});
		})
	</script>
</body>

</html>