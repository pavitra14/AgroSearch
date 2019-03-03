@extends('layouts.panel')
@section('title')
Edit Listing | AgroSearch
@endsection

@section('heading')
<!--************************************
                    Dashboard Banner Start
            *************************************-->
<div class="tg-dashboardbanner">
    <h1>Post Listing</h1>
    <ol class="tg-breadcrumb">
        <li><a href="{{route('home')}}">Main</a></li>
        <li><a href="{{route('dashboard')}}">Dashboard</li></a>
        <li class="tg-active">Edit Listing</li>
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
        <form class="tg-formtheme tg-formdashboard" method="POST" action="{{url('/')}}/edit/{{$listing->id}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="listing_type" id="listing_category" value="{{$listing->listing_type}}">
            <fieldset>
                <div class="tg-postanad">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
                        <div class="tg-dashboardbox">
                            <div class="tg-dashboardboxtitle">
                                <h2>Ad Detail</h2>
                            </div>
                            <div class="tg-dashboardholder">
                                <div class="form-group text-center">
                                    <a href="#" class="tg-btn" id="category_button" data-toggle="modal" data-target=".tg-categorymodal">Selected Category: {{category($listing->listing_type)}}</a>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="listing_title" class="form-control" placeholder="Enter Ad Title*" value="{{$listing->listing_title}}" required>
                                </div>
                                <div class="form-group tg-priceformgroup">
								<input type="number" name="listing_rate" class="form-control" placeholder="Price*" value="{{$listing->listing_rate}}" required>

                                    <div class="tg-checkbox">
                                        <select name="listing_mode" id="listing_mode">
                                            @if ($listing->listing_mode == 'hour')
											<option value="hour" selected="selected">Hour</option>
                                            <option value="day">Day</option>
                                            <option value="week">Week</option>
                                            <option value="month">Month</option>
											@endif
											@if ($listing->listing_mode == 'day')
											<option value="hour">Hour</option>
                                            <option value="day" selected="selected">Day</option>
                                            <option value="week">Week</option>
                                            <option value="month">Month</option>
											@endif
                                            @if ($listing->listing_mode == 'week')
											<option value="hour">Hour</option>
                                            <option value="day">Day</option>
                                            <option value="week" selected="selected">Week</option>
                                            <option value="month">Month</option>
											@endif
                                            @if ($listing->listing_mode == 'month')
											<option value="hour">Hour</option>
                                            <option value="day">Day</option>
                                            <option value="week">Week</option>
                                            <option value="month" selected="selected">Month</option>
											@endif
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea id="tg-ckeditor" class="tg-tinymceeditor" name="listing_desc" required>{{$listing->listing_desc}}</textarea>
                                </div>
                                <div class="form-group">

                                    <input type='text' class="form-control" id="datetimepicker1" placeholder="Available from" name="listing_date_from-x"/>
                                </div>
                                <div class="form-group">

                                    <input type='text' class="form-control" id="datetimepicker2" placeholder="Available till" name="listing_date_to-x" />

                                </div>
                                <label class="tg-fileuploadlabel" for="tg-photogallery">
                                    <span>Maximum upload file size: 10MB</span>
                                    <input id="tg-photogallery" class="tg-button" type="file" name="listing_img_file">
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
                                    <select name="listing_sell_mode" id="listing_sell_mode" class="form-control">
										<option disabled="true">----Select Share, Rent or Sell----</option>
										@if ($listing->listing_sell_mode == 'Share')
										<option value="Share" selected="selected">Share</option>
                                        <option value="Rent">Rent</option>
                                        <option value="Sell">Sell</option>
										@endif
                                        @if ($listing->listing_sell_mode == 'Rent')
										<option value="Share">Share</option>
                                        <option value="Rent" selected="selected">Rent</option>
                                        <option value="Sell">Sell</option>
										@endif
										@if ($listing->listing_sell_mode == 'Sell')
										<option value="Share">Share</option>
                                        <option value="Rent">Rent</option>
                                        <option value="Sell" selected="selected">Sell</option>
										@endif
                                    </select>
                                </div>
                                <div class="form-group">
                                        <select name="listing_display_mode" id="listing_display_mode" class="form-control" >
                                                <option selected="true" disabled="true">----Listing Type---</option>
                                                @if ($listing->listing_display_mode == 1)
												<option value="1" selected="selected">Normal</option>
                                                <option value="2">Featured</option>
                                                <option value="3" disabled>Boosted</option>
												@endif
												@if ($listing->listing_display_mode == 2)
												<option value="1">Normal</option>
                                                <option value="2" selected="selected">Featured</option>
                                                <option value="3" disabled>Boosted</option>
												@endif
												@if ($listing->listing_display_mode == 3)
												<option value="1">Normal</option>
                                                <option value="2">Featured</option>
                                                <option value="3" selected="selected">Boosted</option>
												@endif
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
    $('#datetimepicker1').datetimepicker();
    $('#datetimepicker2').datetimepicker();
    
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
