<div class="container pt-70 pb-40">
			<div class="row border-bottom-black">
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<img class="mt-10 mb-20" alt="" src="img/hilltop_logo_only.png" width="40%">
						
						<ul class="list-inline mt-5">
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-map-marker text-theme-colored mr-5"></i> 
                                <a class="text-gray" href="">405 Lan Street, New York, USA
                                </a> 
                            </li>
                            <li class="m-0 pl-10 pr-10"> <i class="fa fa-map-marker text-theme-colored mr-5"></i>
                                <a class="text-gray" href="">203, Envato Labs, Behind Alis Steet, Melbourne, Australia
                                </a>
                            </li>
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> 
                                <a class="text-gray" href="#">
                                    inquiry@hilltopmedicaltech.com
                                </a> 
                            </li>
							<li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">www.hilltopmedicaltech.com</a> </li>
						</ul>
					</div>
					<div class="widget dark">
						<h5 class="widget-title mb-10">Connect With Us</h5>
						<ul class="styled-icons icon-dark icon-circled icon-sm">
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Useful Links</h5>
						<ul class="list-border">
							<li><a href="Home">Home</a></li>
							<li><a href="Products">Our Products</a></li>
							<li><a href="Contact-us">Contact</a></li>
						</ul>
					</div>
				</div>
                
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Call Us Now</h5>
						<div class="text-gray">
							<strong>United States:</strong> +19174102553<br>
                            <strong>Australia:</strong> +61488894091
						</div>
					</div>
				</div>
                
				<div class="col-sm-6 col-md-3">
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Opening Hours</h5>
						<div class="opening-hours">
							<ul class="list-border">
								<li class="clearfix"> <span> Mon - Friday :  </span>
									<div class="value pull-right flip"> 6.00 am - 10.00 pm </div>
								</li>
								<li class="clearfix"> <span> Sun : </span>
									<div class="value pull-right flip"> Closed </div>
								</li>
								<li class="clearfix"> <span> Sat : </span>
									<div class="value pull-right flip"> 10.00 am - 2.00 pm </div>
								</li>
							</ul>
						</div>
					</div>
					<div class="widget dark">
						<h5 class="widget-title line-bottom">Subscribe Us</h5>
						<!-- Mailchimp Subscription Form Starts Here -->
						<form id="mailchimp-subscription-form-footer" class="newsletter-form">
							<div class="input-group">
								<input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer">
								<span class="input-group-btn">
									<button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Subscribe</button>
								</span>
							</div>
						</form>
						<!-- Mailchimp Subscription Form Validation-->
						<script type="text/javascript">
							$('#mailchimp-subscription-form-footer').ajaxChimp({
									callback: mailChimpCallBack,
									url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
							});

							function mailChimpCallBack(resp) {
									// Hide any previous response text
									var $mailchimpform = $('#mailchimp-subscription-form-footer'),
											$response = '';
									$mailchimpform.children(".alert").remove();
									if (resp.result === 'success') {
											$response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
									} else if (resp.result === 'error') {
											$response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
									}
									$mailchimpform.prepend($response);
							}
						</script>
						<!-- Mailchimp Subscription Form Ends Here -->
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom bg-black-222">
			<div class="container pt-10 pb-0">
				<div class="row">
					<div class="col-md-6 sm-text-center">
						<p class="font-13 text-black-777 m-0">Copyright &copy;<?php echo date('Y'); ?> Hilltop Healthcare Technologies. All Rights Reserved</p>
					</div>
					<div class="col-md-6 text-right flip sm-text-center">
						<div class="widget no-border m-0">
							<ul class="styled-icons icon-dark icon-circled icon-sm">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>