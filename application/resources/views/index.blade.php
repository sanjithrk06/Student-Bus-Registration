@extends('layouts.main')
@section('title','VrinVrog - Home')
        @section('main-content')
            <!-- Body: Body -->
            <div class="body d-flex py-lg-3 py-md-2">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <div class="container-xxl">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="row align-items-center">
                                <div class="col-lg-6" style="height: auto; padding: 2rem;">
                                    <div class="product-details-content mt-45">
                                        <div class="card-body text-center " style="padding:0.5rem; padding-bottom: 0.8em;">
                                    
                                            <div class="" style="text-align: center; display: flex; justify-content: flex-start; flex-direction: column; border-radius: 20px; overflow: hidden;">
                                                <div class="content">
                                                    <img class="logo-icon" style="width: 100%;" src="{{asset('images/logo1.png')}}" alt="">
                                                    <h3 class="fw-bold fs-3" style="color:rgb(0, 0, 0); margin-bottom:0; text-transform: lowercase;"><span class="fs-3">W</span>elcome,<span class="fs-3 user text-capitalize">{{ session('name') }}</span></h3>
                                                    <span style="color:white;">
                                                        <p class="fw-bold fs-5" style="margin: 0;color:rgba(0, 0, 0, 0.66); padding: 1rem;">Your Destination for Online Auction</p>
                                                        <div class="card-body text-center d-flex" style="justify-content: center; gap: 1rem;">
                                                             <a href="guide.html" class="btn btn-primary" style="border-radius: 20px;">Get Guide</a>
                                                             <a href="" class="btn btn-primary" style="border-radius: 20px;">Auction Hub</a>
                                                        </div>
                                                        @if(session('role') == 0)  
                                                        <button href="" class="btn btn-primary" style=" border-radius: 20px;">Update Your Profile</button>
                                                        @endif
                                                    </span>
                                                </div>

                                                  <style>
                                                    @media screen and (max-width: 998px) {
                                                        #auction-img{
                                                            display: none;
                                                        }
                                                    }
                                                    button:hover{
                                                        background-color:  linear-gradient(90deg, var(#814096), var(#f83292));
                                                    }
                                                    .content h3 {
                                                        font-size: 3rem;
                                                        text-transform: uppercase;
                                                    }

                                                    .content h3 span {
                                                        text-transform: uppercase;
                                                    }
                                                    .content h3 .user {
                                                        color:#7258db;
                                                        text-transform: uppercase;
                                                    }

                                                    .content p {
                                                        font-size: 1rem;
                                                        color: #666;
                                                        padding: 1rem 0;
                                                    }
                                                  </style>
                                        </div>
        
                                    </div>

                                    </div>
                                </div> 
                                <div id="auction-img" class="col-lg-6" style="padding-right: 2rem;">
                                    <div class="product-details-image mt-50">
                                        <div class="product-image">
                                            <div class="product-image-active tab-content" id="v-pills-tabContent">
                                                <a class="single-image tab-pane fade active show" id="v-pills-three" role="tabpanel" aria-labelledby="v-pills-three-tab">
                                                    <img style="width: 80%; height: auto;" src="{{asset('images/auction-final.jpg')}}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="card mb-3">

                        <!--Bids on live-->
                        <section class="pt-1" style="padding:0;">
                            <div class="containe">
                                <div class="row" style="padding: 0rem 1.5rem 2rem;">
                                    <div class="col-12">
                                    <h6 class="mb-0 fw-bold fs-4">Ongoing Bids</h6><br>                     
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!--Upcoming Bids-->
                        <section class="pt-1" style="padding:0;">
                            <div class="containe">
                                <div class="row" style="padding: 0rem 1.5rem 2rem;">
                                    <div class="col-12">
                                    <h6 class="mb-0 fw-bold fs-4">Upcoming Bids</h6><br>                     
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            </div>

        @endsection
      
  <!--Countdown Style-->
  <style>

.text-color{
color: white;
}
.time-color{
color: rgb(0, 0, 0);
}
.flip-card {
position: relative;
display: inline-flex;
flex-direction: column;
box-shadow: 0 2px 3px 0 rgb(255, 255, 255);
border-radius: .1em;
}

.top,
.bottom,
.flip-card .top-flip,
.flip-card .bottom-flip {
height: .75em;
line-height: 1;
padding: .25em;
overflow: hidden;
}

.top,
.flip-card .top-flip {
background-color: #7969e1;
border-top-right-radius: .1em;
border-top-left-radius: .1em;
border-bottom: 1px solid rgb(255, 255, 255);
}

.bottom,
.flip-card .bottom-flip {
background-color: #7969e1;
display: flex;
align-items: flex-end;
border-bottom-right-radius: .1em;
border-bottom-left-radius: .1em;
}

.flip-card .top-flip {
position: absolute;
width: 100%;
animation: flip-top 250ms ease-in;
transform-origin: bottom;
}

@keyframes flip-top {
100% {
transform: rotateX(90deg);
}
}

.flip-card .bottom-flip {
position: absolute;
bottom: 0;
width: 100%;
animation: flip-bottom 250ms ease-out 250ms;
transform-origin: top;
transform: rotateX(90deg);
}

@keyframes flip-bottom {
100% {
transform: rotateX(0deg);
}
}

.container {
display: flex;
gap: .2em;
justify-content: flex-start;
}

.container-segment {
display: flex;
flex-direction: column;
gap: .1em;
align-items: center;
}

.segment {
display: flex;
gap: .1em;
}

.segment-title {
font-size: 1rem;
}
</style>

