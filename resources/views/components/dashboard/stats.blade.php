<!--************************************
                        Statistics Start
                *************************************-->
                <section class="tg-dbsectionspace tg-haslayout tg-statistics">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                <div class="tg-dashboardbox tg-statistic">
                                    <figure><img src="images/icons/img-32.png" alt="image description"></figure>
                                    <div class="tg-contentbox">
                                        <h2>{{$user->listings()->count()}}</h2>
                                        <h3>{!!GoogleTranslate::translate('Total Ad Posted', get_locale())!!}</h3>
                                        <a class="tg-btnviewdetail fa fa-angle-right" href="javascript:void(0);">{!!GoogleTranslate::translate('View Detail', get_locale())!!}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                <div class="tg-dashboardbox tg-statistic">
                                    <figure><img src="images/icons/img-33.png" alt="image description"></figure>
                                    <div class="tg-contentbox">
                                        <h2>{{$user->listings()->where('listing_display_mode', '2')->count()}}</h2>
                                        <h3>{!!GoogleTranslate::translate('Featured Ads', get_locale())!!}</h3>
                                        <a class="tg-btnviewdetail fa fa-angle-right" href="javascript:void(0);">{!!GoogleTranslate::translate('View Details', get_locale())!!}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                <div class="tg-dashboardbox tg-statistic">
                                    <figure><img src="images/icons/img-34.png" alt="image description"></figure>
                                    <div class="tg-contentbox">
                                        <h2>{{$user->listings()->where('listing_status', '0')->count()}}</h2>
                                        <h3>{!!GoogleTranslate::translate('Inactive Ads', get_locale())!!}</h3>
                                        <a class="tg-btnviewdetail fa fa-angle-right" href="javascript:void(0);">{!!GoogleTranslate::translate('View Details', get_locale())!!}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                                <div class="tg-dashboardbox tg-statistic">
                                    <span class="tg-badge">#</span>
                                    <figure><img src="images/icons/img-35.png" alt="image description"></figure>
                                    <div class="tg-contentbox">
                                        <h2>#</h2>
                                        <h3>{!!GoogleTranslate::translate('Offers/Messages', get_locale())!!}</h3>
                                        <a class="tg-btnviewdetail fa fa-angle-right" href="javascript:void(0);">{!!GoogleTranslate::translate('View Details', get_locale())!!}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--************************************
                            Statistics End
                    *************************************-->