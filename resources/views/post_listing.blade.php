@extends('layouts.panel')
@section('title')
Post Listing | AgroSearch
@endsection

@section('heading')
<!--************************************
                    Dashboard Banner Start
            *************************************-->
<div class="tg-dashboardbanner">
    <h1>{!!GoogleTranslate::translate('Post Listing', get_locale())!!}</h1>
    <ol class="tg-breadcrumb">
        <li><a href="{{route('home')}}">Main</a></li>
        <li><a href="{{route('dashboard')}}">Dashboard</li></a>
        <li class="tg-active">Post Listing</li>
    </ol>
</div>
<!--************************************
                        Dashboard Banner End
                *************************************-->
@endsection

@section('content')

<!--************************************
					Section Start
			*************************************-->
<section class="tg-dbsectionspace tg-haslayout">
    <div class="row">
        <form class="tg-formtheme tg-formdashboard" method="POST" action="{{route('post_listing')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="listing_type" id="listing_category" value="0">
            <fieldset>
                <div class="tg-postanad">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                        <div class="tg-dashboardbox">
                            <div class="tg-dashboardboxtitle">
                                <h2>Ad Detail</h2>
                            </div>
                            <div class="tg-dashboardholder">
                                <div class="form-group text-center">
                                    <a href="#" class="tg-btn" id="category_button" data-toggle="modal" data-target=".tg-categorymodal">Select
                                        Category Here</a>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="listing_title" class="form-control" placeholder="Enter Ad Title*" required>
                                </div>
                                <div class="form-group tg-priceformgroup">
                                    <input type="number" name="listing_rate" class="form-control" placeholder="Price*" required>

                                    <div class="tg-checkbox">
                                        <select name="listing_mode" id="listing_mode">
                                            <option value="hour">Hour</option>
                                            <option value="day">Day</option>
                                            <option value="week">Week</option>
                                            <option value="month">Month</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea id="tg-ckeditor" class="tg-tinymceeditor" name="listing_desc" required></textarea>
                                </div>
                                <div class="form-group">

                                    <input type='text' class="form-control" id="datetimepicker1" placeholder="Available from" name="listing_date_from-x" required/>
                                    <input type="hidden" name="listing_date_from" id="listing_date_from" required>

                                </div>
                                <div class="form-group">

                                    <input type='text' class="form-control" id="datetimepicker2" placeholder="Available till" name="listing_date_to-x" required/>
                                    <input type="hidden" name="listing_date_to" id="listing_date_to" required>

                                </div>
                                <label class="tg-fileuploadlabel" for="tg-photogallery">
                                    <span>Maximum upload file size: 10MB</span>
                                    <input id="tg-photogallery" class="tg-button" type="file" name="listing_img_file" required>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                        <div class="tg-dashboardbox">
                            <div class="tg-dashboardboxtitle">
                                <h2>Miscellaneous</h2>
                            </div>
                            <div class="tg-dashboardholder datetime">
                                <div class="form-group">
                                    <select name="listing_sell_mode" id="listing_sell_mode" class="form-control" required>
                                        <option selected="true" disabled="true">----Select Share, Rent or Sell----</option>
                                        <option value="Share">Share</option>
                                        <option value="Rent">Rent</option>
                                        <option value="Sell">Sell</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                        <select name="listing_display_mode" id="listing_display_mode" class="form-control" required>
                                                <option selected="true" disabled="true">----Listing Type---</option>
                                                <option value="1">Normal</option>
                                                <option value="2">Featured</option>
                                                <option value="3" disabled>Boosted</option>
                                        </select> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                        <div class="tg-dashboardbox">
                            <div class="tg-dashboardboxtitle">
                                <h2>Enable Offers/Messages (Make the ad active)</h2>
                            </div>
                            <div class="tg-dashboardholder">
                                <div class="tg-checkbox">
                                    <input id="tg-enablemessages" type="checkbox" name="listing_status" value="1">
                                    <label for="tg-enablemessages">Enable offers/messages option in this Post</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                        <div class="tg-dashboardbox">
                            <div class="tg-dashboardholder">
                                <h2>
                                    <button class="tg-btn" type="submit">Post Ad</button>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</section>
<!--************************************
                        Section End
                *************************************-->
@endsection

@section('before_body')
<!--************************************
			Theme Modal Box Start
	*************************************-->
<div class="modal fade tg-thememodal tg-categorymodal" tabindex="-1" role="dialog" id="category_modal">
    <div class="modal-dialog tg-thememodaldialog" role="document">
        <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="modal-content tg-thememodalcontent">
            <div class="tg-title">
                <strong>Select Category</strong>
            </div>
            <div id="tg-dbcategoriesslider" class="tg-dbcategoriesslider tg-categories owl-carousel">
                @php
                for($i = 1; $i <= category_count() ; $i++) { echo '<div class="tg-category">' ; echo
                    '<div class="tg-categoryholder" onclick="set_category(' .$i.', this)">';
                    echo '<figure><img src="'.asset('images/categories/'.$i.'.png').'" alt="'.category($i).'"></figure>';
                    echo '<h3>'.category($i).'</h3>';
                    echo '</div>';
            echo '
        </div>';
        }
        @endphp
    </div>
</div>
</div>
</div>
<!--************************************
                Theme Modal Box End
        *************************************-->
@endsection

@section('script')
<script>
    CKEDITOR.replace('tg-ckeditor');
    $('#datetimepicker1').datetimepicker({
    format: 'YYYY-MM-DD HH:mm:ss'
    });
    $('#datetimepicker2').datetimepicker({
    format: 'YYYY-MM-DD HH:mm:ss'
    });
    
    function set_category(id, el) {
        $('#listing_category').val(id);
        $('#category_button').html('Selected Category: ' + $(el).children('h3').html());
        $('#category_modal').modal('toggle');
    }
    function getValue(id) 
    {
        var date = $('#datetimepicker' + id).data("DateTimePicker").date();
        if( date ){
            return date.unix();
        }
    }
</script>
@endsection
