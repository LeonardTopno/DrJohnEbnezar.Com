<!-- START FOOTER -->
<style>
	.floating-whatsapp {
		align-items: center;
		background: #25d366;
		border-radius: 50%;
		bottom: 5px;
		box-shadow: 0 12px 28px rgba(0, 0, 0, 0.22);
		color: #fff;
		display: none;
		height: 57px;
		justify-content: center;
		opacity: 0;
		padding: 0;
		position: fixed;
		left: 24px;
		text-decoration: none;
		transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
		width: 57px;
		z-index: 9999;
	}
	.floating-whatsapp.is-visible {
		display: flex;
		opacity: 1;
	}
	.floating-whatsapp i {
		font-size: 31px;
		line-height: 1;
	}
	.floating-whatsapp:hover,
	.floating-whatsapp:focus {
		background: #1ebe5d;
		box-shadow: 0 14px 34px rgba(0, 0, 0, 0.28);
		color: #fff;
		text-decoration: none;
		transform: translateY(-2px);
	}
	@media (max-width: 575px) {
		.floating-whatsapp {
			bottom: 5px;
			height: 44px;
			left: 18px;
			width: 44px;
		}
		.floating-whatsapp i {
			font-size: 24px;
		}
	}
	.single_footer.follow-socials .social_profile ul li a:before {
		content: "" !important;
		display: none !important;
		margin: 0 !important;
		width: 0 !important;
	}
</style>
<a class="floating-whatsapp" href="https://wa.me/919986015128" target="_blank" rel="noreferrer" aria-label="Chat on WhatsApp with Dr. John Ebnezar">
	<i class="fa fa-whatsapp" aria-hidden="true"></i>
</a>
<script>
	(function () {
		function toggleWhatsAppButton() {
			var button = document.querySelector('.floating-whatsapp');
			if (!button) {
				return;
			}
			if (window.pageYOffset >= 100) {
				button.classList.add('is-visible');
			} else {
				button.classList.remove('is-visible');
			}
		}
		document.addEventListener('DOMContentLoaded', toggleWhatsAppButton);
		window.addEventListener('scroll', toggleWhatsAppButton);
		window.addEventListener('resize', toggleWhatsAppButton);
	})();
</script>
<div class="footer" style="background-image: url(assets/img/bg/footer.png); background-size:cover;">
	<div class="container">
		<div class="footer_bg footer_columns">
			<div class="footer_column">
				<div class="footer_logo">
					<div class="brand-text brand-text-footer">Padma Shri Rtn. Dr. John Ebnezar</div>
					<p>A multidimensional legacy in orthopaedics<br>
					Surgeon, researcher, author, educationist, entrepreneur, publisher, social activist, and pioneer of wholistic orthopaedics.</p>
				</div>
			</div>
			<div class="footer_column">
				<div class="single_footer">
					<h4>Frequently Asked Questions</h4>
					<ul>
						<li><a href="#">Privacy &amp; Securty</a></li>
						<li><a href="#">Terms of Service</a></li>
						<li><a href="#">Communications</a></li>
						<li><a href="#">Referral Terms</a></li>
						<li><a href="#">Disclaimers</a></li>
					</ul>
				</div>
			</div>
			<div class="footer_column">
				<div class="single_footer">
					<h4>Dr. John's Medical Centers</h4>
					<ul>
						<li><a href="#">Parimala Health Care Services</a></li>
						<li><a href="#">Dr. John's Orthopedic Center</a></li>
						<li><a href="#">Dr. John's Orthopedic Clinic</a></li>
						<li><a href="#">Ayush Ayurvedic Center</a></li>
						<li><a href="#">Bangalore Wholistic Orthopedic Center</a></li>
						<li><a href="#">Dr. Ebnezar's Medical Institute</a></li>
					</ul>
				</div>
			</div>
			<div class="footer_column">
				<div class="single_footer follow-socials">
					<h4>Follow Dr. John on socials</h4>
					<div class="social_profile footer_social_profile">
						<ul>
							<li><a href="https://www.facebook.com/john.ebnezar" class="f_facebook" target="_blank" rel="noreferrer"><i class="fa fa-facebook" title="Facebook"></i></a></li>
							<li><a href="https://x.com/johnebnezar" class="f_twitter" target="_blank" rel="noreferrer"><i class="fa fa-twitter" title="X"></i></a></li>
							<li><a href="https://www.youtube.com/@johnebnezar" class="f_twitter" target="_blank" rel="noreferrer"><i class="fa fa-youtube" title="YouTube"></i></a></li>
							<li><a href="https://www.researchgate.net/profile/John-Ebnezar" class="f_researchgate" target="_blank" rel="noreferrer" title="ResearchGate"><span class="rg-badge">RG</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row footer_bottom align-items-center">
			<div class="col-lg-12 col-sm-12">
				<div class="footer_copyright">
					<p>&copy; 2026 Dr. John Ebnezar.</p>
					<p>Website Developed &amp; Maintained by <a href="https://www.leonardtopno.com" target="_blank" rel="noreferrer">Leonard TOPNO</a>.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END FOOTER -->
