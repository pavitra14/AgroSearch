@extends('layouts.panel')

@section('title')
    My Ads | AgroSearch
@endsection 

@section('content')
    <!--************************************
				Dashboard Banner Start
		*************************************-->
		<div class="tg-dashboardbanner">
                <h1>My Ads</h1>
                <ol class="tg-breadcrumb">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="tg-active">My Ads</li>
                </ol>
            </div>
            <!--************************************
                    Dashboard Banner End
            *************************************-->
            <!--************************************
					Section Start
			*************************************-->
			<section class="tg-dbsectionspace tg-haslayout">
                    <div class="row">
                        <form class="tg-formtheme tg-formdashboard">
                            <fieldset>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="tg-dashboardbox">
                                        <div class="tg-dashboardboxtitle">
                                            <h2>My Ads</h2>
                                        </div>
                                        <div class="tg-dashboardholder">
                                            
                                            <table id="tg-adstype" class="table tg-dashboardtable tg-tablemyads">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <span class="tg-checkbox">
                                                                <input id="tg-checkedall" type="checkbox" name="myads" value="checkall">
                                                                <label for="tg-checkedall"></label>
                                                            </span>
                                                        </th>
                                                        <th>Photo</th>
                                                        <th>Title</th>
                                                        <th>Category</th>
                                                        <th>Featured</th>
                                                        <th>Ad Status</th>
                                                        <th>Price &amp; Location</th>
                                                        <th>Date</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($all as $listing)
                                                        @php
                                                            $data_cat='';
                                                            if($listing->listing_status == '1' && $listing->listing_type == '2')
                                                            {
                                                                $data_cat = 'Featured';
                                                            } else if($listing->listing_status == '1')
                                                            {
                                                                $data_cat = 'Active';
                                                            } else {
                                                                $data_cat = 'Inactive';
                                                            }
                                                        @endphp
                                                        <tr data-category="{{$data_cat}}">
                                                            <td data-title="">
                                                                <span class="tg-checkbox">
                                                                    <input id="tg-adone" type="checkbox" name="myads" value="{{$listing->id}}">
                                                                    <label for="tg-adone"></label>
                                                                </span>
                                                            </td>
                                                            <td data-title="Photo"><img src="{{$listing->listing_img}}" alt="{{$listing->listing_title}}"></td>
                                                            <td data-title="Title">
                                                                <h3>{{$listing->listing_title}}</h3>
                                                            </td>
                                                            <td data-title="Category"><span class="tg-adcategories">{{category($listing->listing_type)}}</span></td>
                                                            <td data-title="Featured">
                                                                @if ($listing->listing_display_mode == '2')
                                                                    Yes
                                                                @else
                                                                    No
                                                                @endif
                                                            </td>
                                                            <td data-title="Ad Status">
                                                                @if ($listing->listing_status == '1')
                                                                <span class="tg-adstatus tg-adstatusactive">active</span>
                                                                @else
                                                                <span class="tg-adstatus tg-adstatusinactive">Inactive</span>
                                                                <em>Under Review</em>
                                                                @endif
                                                            </td>
                                                            <td data-title="Price &amp; Location">
                                                                <h3>Rs. {{$listing->listing_rate}}/{{$listing->listing_mode}}</h3>
                                                                <address>Location  {{$listing->user()->firstOrFail()->city}}, {{$listing->user()->firstOrFail()->state}}, {{$listing->user()->firstOrFail()->zipcode}}</address>
                                                            </td>
                                                            <td data-title="Date">
                                                                <time datetime="{{$listing->created_at}}">{{date('M d, Y', strtotime($listing->created_at))}}</time>
                                                                @if ($listing->listing_status == '1')
                                                                <span>Published</span>
                                                                @else
                                                                <span>Not Published</span>
                                                                @endif
                                                            </td>
                                                            <td data-title="Action">
                                                                <div class="tg-btnsactions">
                                                                    <a class="tg-btnaction tg-btnactionview" href="{{url('/')}}/listing/{{$listing->id}}" target="_blank"><i class="fa fa-eye"></i></a>
                                                                    <a class="tg-btnaction tg-btnactionedit" href="{{url('/')}}/edit/{{$listing->id}}"><i class="fa fa-pencil"></i></a>
                                                                    <a class="tg-btnaction tg-btnactiondelete" href="{{url('/')}}/delete/{{$listing->id}}" onclick="if(!confirm('Are you sure?')){event.preventDefault();}"><i class="fa fa-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                            <nav class="tg-pagination">
                                                {{$all->links()}}
                                            </nav>
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