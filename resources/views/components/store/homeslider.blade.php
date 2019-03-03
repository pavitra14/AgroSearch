<!--************************************
				Home Slider Start
		*************************************-->
		<div id="tg-homebanner" class="tg-homebanner tg-haslayout">
			<figure class="item" data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 50% 50%">
				<figcaption>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-bannercontent">
									<h1>{!!GoogleTranslate::translate('World\'s Largest Market Place for Farmers', get_locale())!!}</h1>
									<h2>{!!GoogleTranslate::translate('Search from', get_locale())!!} {{$total_count}}  {!!GoogleTranslate::translate('Verified Ads.', get_locale())!!}</h2>
									<form class="tg-formtheme tg-formbannersearch" method="GET" action="{{url('/')}}/search">
										@csrf
										<fieldset>
											<div class="form-group tg-inputwithicon">
												<i class="icon-bullhorn"></i>
												<input type="text" name="slug" class="form-control" placeholder="What are you looking for">
											</div>
											<div class="form-group tg-inputwithicon">
												<i class="icon-location"></i>
												<a class="tg-btnsharelocation fa fa-crosshairs" href="javascript:void(0);"></a>
												<input type="text" name="location" class="form-control" id="location" placeholder="Your Location">
											</div>
											<div class="form-group tg-inputwithicon">
												<i class="icon-layers"></i>
												<div class="tg-select">
													<select>
														<option value="category">{!!GoogleTranslate::translate('Select Category', get_locale())!!}</option>
														@php
															for($i = 1; $i <= category_count() ; $i++)
															{
																echo "<option value='$i'>".GoogleTranslate::translate(category($i), get_locale())."</option>";
															}
														@endphp
													</select>
												</div>
											</div>
											<button class="tg-btn" type="submit">{!!GoogleTranslate::translate('Search Now', get_locale())!!}</button>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</figcaption>
			</figure>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->