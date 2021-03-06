@extends('layouts.app')

@section('content')
<div class="banner-outer">
    <div id="banner" class="element"> <img src="{{asset('images/banner-img-1.png')}}" alt="banner"> </div>
    <div class="caption">
      <div class="holder">
        <h1>Search for Volunteers Positions!</h1>
        <form action="#">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <input type="text" placeholder="Enter Job Title, Skills or Company">
              </div>
              <div class="col-md-4 col-sm-4">
                <input type="text" placeholder="Enter City, State, Province or Country">
              </div>
              <div class="col-md-3 col-sm-3">
                <input type="text" placeholder="Category">
              </div>
              <div class="col-md-1 col-sm-1">
                <button type="submit"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </form>
        <div class="banner-menu">
          <ul>
            <li><a href="index.html#">Berlin</a></li>
            <li><a href="index.html#">Hamburg</a></li>
            <li><a href="index.html#">Munich</a></li>
            <li><a href="index.html#">Amsterdam</a></li>
            <li><a href="index.html#">Rotterdam</a></li>
            <li><a href="index.html#">Paris</a></li>
          </ul>
        </div>
        <div class="btn-row"> <a href="job-seekers.html"><i class="fa fa-user"></i>Looking for tasks</a> <a href="employers.html"><i class="fa fa-building-o"></i>I’m an Nonprofit</a> </div>
      </div>
    </div>
    <div class="browse-job-section">
      <div class="container">
        <div class="holder"> <a href="jobs.html" class="btn-brows">Browse Jobs</a> <strong class="title">Finds Volunteers in Berlin, Amsterdan, Paris</strong> </div>
      </div>
    </div>
  </div>
  <div id="main">
    <section class="popular-categories">
      <div class="container">
        <div class="clearfix">
          <h2>Popular Categories</h2>
          <a href="index.html#" class="btn-style-1">Explore All Jobs</a> </div>
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="box"> <img src="images/categories-icon-1.png" alt="img">
              <h4><a href="index.html#">Art, Design &amp; Multimedia</a></h4>
              <strong>6,213 Jobs</strong>
              <p>Available in Design &amp; Multimedia</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box"> <img src="images/categories-icon-2.png" alt="img">
              <h4><a href="index.html#">Restaurant, Food, Hotels</a></h4>
              <strong>3,750 Jobs</strong>
              <p>Available in Restaurant &amp; Hotels</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box"> <img src="images/categories-icon-3.png" alt="img">
              <h4><a href="index.html#">Transporation</a></h4>
              <strong>1,265 Jobs</strong>
              <p>Available in Transportation</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box"> <img src="images/categories-icon-4.png" alt="img">
              <h4><a href="index.html#">Healthcare &amp; Medicine</a></h4>
              <strong>5,913 Jobs</strong>
              <p>Available in Medical</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box"> <img src="images/categories-icon-5.png" alt="img">
              <h4><a href="index.html#">Software &amp; Development</a></h4>
              <strong>7,418 Jobs</strong>
              <p>Available in IT</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box"> <img src="images/categories-icon-6.png" alt="img">
              <h4><a href="index.html#">Accounting &amp; Finance</a></h4>
              <strong>8,045 Jobs</strong>
              <p>Available in Accounts &amp; Finance</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box"> <img src="images/categories-icon-7.png" alt="img">
              <h4><a href="index.html#">Education &amp; Academia</a></h4>
              <strong>3,891 Jobs</strong>
              <p>Available in Education</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="box"> <img src="images/categories-icon-8.png" alt="img">
              <h4><a href="index.html#">Construction, Engineering</a></h4>
              <strong>9,942 Jobs</strong>
              <p>Available in Architect</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection