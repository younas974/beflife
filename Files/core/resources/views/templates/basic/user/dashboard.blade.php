 <?php use App\Http\Controllers\UserController ?>; 
@extends($activeTemplate . 'user.layouts.app')

@section('panel')
    <div class="row mb-none-30">
        @if($general->notice != null)
            <div class="col-lg-12 col-sm-6 mb-30">
                <div class="card border--light">
                    <div class="card-header">@lang('Notice')</div>
                    <!-- <div id="scroll-container">
  <div id="scroll-text">This is scrolling text.<div>
</div> -->
                    <div class="" id="scroll-container" > 
                    <div class="card-body"  id="scroll-text">
                        <p  class="card-text">@php echo $general->notice; @endphp</p>
                    </div>
                    </div>
                </div>
            </div>
        @endif
        @if($general->free_user_notice != null)
            <div class="col-lg-12 col-sm-6 mb-30">
                <div class="card border--light">
                    @if($general->notice == null)
                        <div class="card-header">@lang('Notice')</div>   @endif
                    <div class="card-body">
  
  <div class="gallery js-flickity" id="carasoulid"  data-flickity='{ "autoPlay": true }'> @php echo $general->free_user_notice; @endphp </div>
</div>
                </div>
            </div>
        @endif

       
    <!-- Rank Rewards  -->

        @if(auth()->user()->userExtra->bv_left<50 ||  (auth()->user()->userExtra->bv_right<50) )
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
        <p>{{ auth()->user()->firstname}}   {{ auth()->user()->lastname}} me <p/>
                <div class="dashboard-reward-rank b-radius--10 box-shadow">
                <img src="/assets/images/norank.jpeg" />
                </div>
            </div>
            @endif

            @if(auth()->user()->userExtra->bv_left>50 && auth()->user()->userExtra->bv_right>50 && (auth()->user()->userExtra->bv_left<200 || auth()->user()->userExtra->bv_right<200) )
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <p>{{ auth()->user()->firstname}}   {{ auth()->user()->lastname}} <p/>
                <div class="dashboard-reward-rank b-radius--10 box-shadow">
                    <img class="rotate" src="/assets/images/1st.jpeg" />
                </div>
            </div>
            @endif 

            
            @if(auth()->user()->userExtra->bv_left>200 && auth()->user()->userExtra->bv_right>200 && (auth()->user()->userExtra->bv_left<500 || auth()->user()->userExtra->bv_right<500) )
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <p>{{ auth()->user()->firstname}}   {{ auth()->user()->lastname}} <p/>
                <div class="dashboard-reward-rank b-radius--10 box-shadow">
                    <img  class="rotate" src="/assets/images/2nd.jpeg" />
                </div>
            </div>
            @endif
            
            @if((auth()->user()->userExtra->bv_left>500 && auth()->user()->userExtra->bv_right>500) && (auth()->user()->userExtra->bv_left<1000 || auth()->user()->userExtra->bv_right<1000) )
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <p>{{ auth()->user()->firstname}}   {{ auth()->user()->lastname}} <p/>
                <div class="dashboard-reward-rank b-radius--10 box-shadow">
                    <img class="rotate" src="/assets/images/3rd.jpeg" />
                </div>
            </div>
            @endif 

         
            @if(auth()->user()->userExtra->bv_left>1000 && auth()->user()->userExtra->bv_right>1000 && (auth()->user()->userExtra->bv_left<2500 || auth()->user()->userExtra->bv_right<2500) )
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <p>{{ auth()->user()->firstname}}   {{ auth()->user()->lastname}} <p/>
                <div class="dashboard-reward-rank b-radius--10 box-shadow">
                    <img class="rotate" src="/assets/images/4th.jpeg" />
                </div>
            </div>
            @endif 

            @if(auth()->user()->userExtra->bv_left>2500 && auth()->user()->userExtra->bv_right>2500 && (auth()->user()->userExtra->bv_left<6000 || auth()->user()->userExtra->bv_right<6000) )
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <p>{{ auth()->user()->firstname}}   {{ auth()->user()->lastname}} <p/>
                <div class="dashboard-reward-rank b-radius--10 box-shadow">
                    <img class="rotate" src="/assets/images/5th.jpeg" />
                </div>
            </div>
            @endif 

            
            
            @if(auth()->user()->userExtra->bv_left>6000 && auth()->user()->userExtra->bv_right>6000 && (auth()->user()->userExtra->bv_left<15000 || auth()->user()->userExtra->bv_right<15000) )
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <p>{{ auth()->user()->firstname}}   {{ auth()->user()->lastname}} <p/>
                <div class="dashboard-reward-rank b-radius--10 box-shadow">
                    <img class="rotate" src="/assets/images/6th.jpeg" />
                </div>
            </div>
            @endif 

                        
            @if(auth()->user()->userExtra->bv_left>15000 && auth()->user()->userExtra->bv_right>15000  )
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <p>{{ auth()->user()->firstname}}   {{ auth()->user()->lastname}} <p/>
                <div class="dashboard-reward-rank b-radius--10 box-shadow">
                    <img  class="rotate" src="/assets/images/7nth.jpeg" />
                </div>
            </div>
            @endif 
     <!-- 3 Dollar memebership card -->

    @if(auth()->user()->plan_id===1)
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
     
                <div class="dashboard-w1 bg-membership b-radius--10 box-shadow">
                <!-- <p class="mbmcrd">Member Ship Card: </p> -->
                <!-- <img src="/assets/images/3dollar.jpeg" /> -->
                <span class="mmberShipCard"> Member Ship </span>
                    <div class="icon">
                        <i class="las la-wallet"></i>
                    </div>
                  
                    <div class="details">
                        <div class="numbers">
                            <!-- <span class="amount">{{ auth()->user()->username }}</span> -->
                        </div>
                        <div class="desciption">
                        <div class="round">
                        <input type="checkbox" checked id="checkbox" />
                        <label for="checkbox"></label>
                         </div>
                         &nbsp;  &nbsp; <span class="text--small mr-10">Active</span>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        @if(auth()->user()->plan_id===2)
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
     
                <div class="dashboard-w1 bg-membership b-radius--10 box-shadow">
                <!-- <p class="mbmcrd">Member Ship Card: </p> -->
                <img src="/assets/images/6dollar.jpeg" />
                    <div class="icon">
                        <i class="las la-wallet"></i>
                        
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <!-- <span class="amount">{{ auth()->user()->username }}</span> -->
                        </div>
                        <div class="desciption">
                            <span class="text--small">Active</span>
                        </div>
                        <div class="round">
                        <input type="checkbox" checked id="checkbox" />
                        <label for="checkbox"></label>
                         </div>
                    </div>
                </div>
            </div>
            @endif

            @if(auth()->user()->plan_id===3)
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
     
                <div class="dashboard-w1 bg--success b-radius--10 box-shadow">
                <!-- <p class="mbmcrd">Member Ship Card: </p> -->
                <img src="/assets/images/12dollar.jpeg" />

                    <div class="icon">
                        <i class="las la-wallet"></i>
                        
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <!-- <span class="amount">{{ auth()->user()->username }}</span> -->
                        </div>
                        <div class="desciption">
                            <span class="text--small">Active</span>
                        </div>
                        <div class="round">
                        <input type="checkbox" checked id="checkbox" />
                        <label for="checkbox"></label>
                         </div>
                    </div>
                </div>
            </div>
            @endif

            @if(auth()->user()->plan_id===4)
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
     
                <div class="dashboard-w1 bg--success b-radius--10 box-shadow">
                <!-- <p class="mbmcrd">Member Ship Card: </p> -->
                <img src="/assets/images/18dollar.jpeg" />

                    <div class="icon">
                        <i class="las la-wallet"></i>
                        
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <!-- <span class="amount">{{ auth()->user()->username }}</span> -->
                        </div>
                        <div class="desciption">
                            <span class="text--small">Active</span>
                        </div>
                        <div class="round">
                        <input type="checkbox" checked id="checkbox" />
                        <label for="checkbox"></label>
                         </div>
                    </div>
                </div>
            </div>
            @endif



       
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--19 b-radius--10 box-shadow cust_bg_19">
                <div class="icon">
                    <i class="las la-arrow-alt-circle-left"></i>
                </div>
                <div class="row mx-auto"> 
                <div class="details col-md-6 col-sm-6 col-6 text-center">
                <span>
                        <img class="icon_w rotate" src="{{asset('assets/images/rward_icon.png')}}">
                        </span>
                    <div class="numbers">
                        <span class="amount">{{getAmount(auth()->user()->userExtra->bv_left)}}</span>
                    </div>
                    <div class="desciption">
                        
                        <span class="text--small">@lang('Left Reward Points')</span>
                    </div>
                    <!-- <a href="{{route('user.bv.log')}}?type=leftBV"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a> -->
                </div>  

                <div class="details col-md-6 col-sm-6 col-6 text-center">
                <span>
                        <img class="icon_w rotate" src="{{asset('assets/images/rward_icon.png')}}">
                        </span>
                    <div class="numbers">
                        <span class="amount">{{getAmount(auth()->user()->userExtra->bv_right)}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Right Reward Points')</span>
                    </div>
                    <!-- <a href="{{route('user.bv.log')}}?type=rightBV"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a> -->
                </div>
                </div>
            </div>

        </div>
        
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--success b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-wallet"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">{{ auth()->user()->clicks->count() }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Total Clicks')</span>
                        </div>
                        <a href="{{ route('user.ptc.clicks') }}"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--primary b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-cloud-upload-alt "></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">{{ auth()->user()->dpl - auth()->user()->clicks->where('vdt',Date('Y-m-d'))->count() }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Remain clicks for today')</span>
                        </div>
                        <a href="{{ route('user.ptc.index') }}"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--10 b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-cloud-download-alt"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount">{{ auth()->user()->clicks->where('vdt',Date('Y-m-d'))->count() }}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Today\'s Clicks')</span>
                        </div>
                        <a href="{{ route('user.ptc.clicks') }}"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-w1 bg--teal b-radius--10 box-shadow">
                    <div class="icon">
                        <i class="las la-check"></i>
                    </div>
                    <div class="details">
                        <div class="numbers">
                            <span class="amount" id="counter">{{$completeWithdraw}}</span>
                        </div>
                        <div class="desciption">
                            <span class="text--small">@lang('Next Reminder')</span>
                        </div>
                        <a href="#0"
                           class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                    </div>
                </div>
            </div>

        <!-- <div class="col-lg-12 mb-30">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">@lang('Click & Earn Report')</h5>
                <div id="apex-bar-chart"></div>
                </div>
            </div>
        </div> -->


        

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--success b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-wallet"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount(auth()->user()->balance)}}</span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    <div class="numbers">
                        <span class="amount">{{(getAmount(auth()->user()->balance)*(180))}}</span>
                        <span class="currency-sign">PKR</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Current Balance')</span>
                    </div>
                    <a href="{{route('user.report.transactions')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                       <a href="{{ route('user.withdraw') }}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('Withdraw')</a>
                </div>
            </div>
        </div>

        <!-- total earning -->
        
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--success b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-wallet"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{((getAmount(auth()->user()->balance))+(getAmount($totalWithdraw)))}}</span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    <div class="numbers">
                        <span class="amount">{{(((getAmount(auth()->user()->balance))+(getAmount($totalWithdraw)))*(180))}}</span>
                        <span class="currency-sign">PKR</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Earnings')</span>
                    </div>
                    <a href="{{route('user.report.transactions')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--primary b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-cloud-upload-alt "></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount($totalDeposit)}}</span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    <div class="numbers">
                        <span class="amount">{{(getAmount($totalDeposit)*(180))}}</span>
                        <span class="currency-sign">PKR</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Deposit')</span>
                    </div>
                    <a href="{{route('user.report.deposit')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--10 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-cloud-download-alt"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount($totalWithdraw)}}</span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    
                    <div class="numbers">
                        <span class="amount">{{(getAmount($totalWithdraw)*180)}}</span>
                        <span class="currency-sign">PKR</span>
                    </div>
                    
                    <div class="desciption">
                        <span class="text--small">@lang('Total Withdraw')</span>
                    </div>
                    <a href="{{route('user.report.withdraw')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--teal b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-check"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{$completeWithdraw}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Complete Withdraw')</span>
                    </div>
                    <a href="{{route('user.report.withdraw')}}?type=complete"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--warning b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-spinner"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{$pendingWithdraw}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Pending Withdraw')</span>
                    </div>
                    <a href="{{route('user.report.withdraw')}}?type=complete"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--danger b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-ban"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{$rejectWithdraw}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Reject Withdraw')</span>
                    </div>
                    <a href="{{route('user.report.withdraw')}}?type=reject"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--cyan b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-money-bill-wave"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount(auth()->user()->total_invest)}}</span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    <div class="numbers">
                        <span class="amount">{{(getAmount(auth()->user()->total_invest)*180)}}</span>
                        <span class="currency-sign">PKR</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Invest')</span>
                    </div>
                    <a href="{{route('user.report.invest')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--12 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-money-bill"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount(auth()->user()->total_ref_com)}}</span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    <div class="numbers">
                        <span class="amount">{{(getAmount(auth()->user()->total_ref_com*180))}}</span>
                        <span class="currency-sign">PKR</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Referral Commission')</span>
                    </div>
                    <a href="{{route('user.report.refCom')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--info b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-tree"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount(auth()->user()->total_binary_com)}}</span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    <div class="numbers">
                        <span class="amount">{{(getAmount(auth()->user()->total_binary_com*180))}}</span>
                        <span class="currency-sign">PKR</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Binary Commission')</span>
                    </div>
                    <a href="{{route('user.report.binaryCom')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--3 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-users"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{$total_ref}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Referral')</span>
                    </div>
                    <a href="{{route('user.my.ref')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--15 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-arrow-circle-left"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                            <span class="amount">{{auth()->user()->userExtra->free_left + auth()->user()->userExtra->paid_left}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Left')</span>
                    </div>
                    <a href="{{route('user.my.tree')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--10 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="fa fa-arrow-circle-right"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span
                            class="amount">{{auth()->user()->userExtra->free_right + auth()->user()->userExtra->paid_right}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total Right')</span>
                    </div>
                    <a href="{{route('user.my.tree')}}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

<!-- 
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--17 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-cart-arrow-down"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span
                            class="amount">{{auth()->user()->userExtra->bv_left + auth()->user()->userExtra->bv_right}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Total BV')</span>
                    </div>
                    <a href="{{route('user.bv.log')}}?type=paidBV"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>
         -->


<!-- 
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--11 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-arrow-alt-circle-right"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount(auth()->user()->userExtra->bv_right)}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Right Reward Points')</span>
                    </div>
                    <a href="{{route('user.bv.log')}}?type=rightBV"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div> -->

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--11 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-arrow-alt-circle-right"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                    @if(getAmount(auth()->user()->userExtra->bv_left>getAmount(auth()->user()->userExtra->bv_right)))         
                    <span class="amount">
                            {{getAmount(auth()->user()->userExtra->bv_left)-getAmount(auth()->user()->userExtra->bv_right)}}</span>
                    @else
                    <span class="amount">
                            0</span>
                         
                        @endif
                        
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Left Waiting')</span>
                    </div>
                    <a href="{{route('user.bv.log')}}?type=rightBV"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--11 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-arrow-alt-circle-right"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                    @if(getAmount(auth()->user()->userExtra->bv_right>getAmount(auth()->user()->userExtra->bv_left)))         
                    <span class="amount">
                            {{getAmount(auth()->user()->userExtra->bv_right)-getAmount(auth()->user()->userExtra->bv_left)}}</span>
                    @else
                    <span class="amount">
                            0</span>
                         
                        @endif
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Right Waiting')</span>
                    </div>
                    <a href="{{route('user.bv.log')}}?type=rightBV"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('View All')</a>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
            <div class="dashboard-w1 bg--13 b-radius--10 box-shadow">
                <div class="icon">
                    <i class="las la-hand-holding-usd"></i>
                </div>
                <div class="details">
                    <div class="numbers">
                        <span class="amount">{{getAmount($totalBvCut)}}</span>
                        <span class="currency-sign">{{$general->cur_text}}</span>
                    </div>
                    <div class="desciption">
                        <span class="text--small">@lang('Rank Reward')</span>
                    </div>
                    <a href="{{ route('ticket') }}"
                       class="btn btn-sm text--small bg--white text--black box--shadow3 mt-3">@lang('Collect Reward')</a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6 mb-30">
                <div class="dashboard-reward-rank b-radius--10 box-shadow">
                <button>update BV {{ UserController::addRefferelCommission(auth()->user()->id)}} </button>
                </div>
        </div>
    </div>

@endsection

@push('script')
<script src="{{asset($activeTemplateTrue.'users/js/vendor/apexcharts.min.js')}}"></script>
<script>
(function ($) {
    "use strict";
    // apex-bar-chart js
    var options = {
      series: [{
      name: 'Clicks',
      data: [
        @foreach($chart['click'] as $key => $click)
            {{ $click }},
        @endforeach
      ]
    }, {
      name: 'Earn Amount',
      data: [
            @foreach($chart['amount'] as $key => $amount)
                {{ $amount }},
            @endforeach
      ]
    }],
      chart: {
      type: 'bar',
      height: 580,
      toolbar: {
        show: false
      }
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '55%',
        endingShape: 'rounded'
      },
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      show: true,
      width: 2,
      colors: ['transparent']
    },
    xaxis: {
      categories: [
      @foreach($chart['amount'] as $key => $amount)
                '{{ $key }}',
            @endforeach
    ],
    },
    fill: {
      opacity: 1
    },
    tooltip: {
      y: {
        formatter: function (val) {
          return val
        }
      }
    }
    };
    var chart = new ApexCharts(document.querySelector("#apex-bar-chart"), options);
    chart.render();
        function createCountDown(elementId, sec) {
            var tms = sec;
            var x = setInterval(function() {
                var distance = tms*1000;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById(elementId).innerHTML =days+"d: "+ hours + "h "+ minutes + "m " + seconds + "s ";
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById(elementId).innerHTML = "{{__('COMPLETE')}}";
                }
                tms--;
            }, 1000);
        }
      createCountDown('counter', {{\Carbon\Carbon::tomorrow()->diffInSeconds()}});
})(jQuery);
</script>
@endpush
