@extends('templates')
@section('content')
<style>
.sender {
  float: right;
  width: auto !important;
  background: #dcf8c6;
  border-radius: 10px 10px 0 10px;
  padding: 4px 10px 7px !important;
  font-size: 12px;
  display: inline-block;
  word-wrap: break-word;
  margin-top: 10px;
}
.receiver {
    width: auto !important;
    padding: 4px 10px 7px !important;
    border-radius: 10px 10px 10px 0;
    background: #f2f2f2;
    font-size: 12px;
    word-wrap: break-word;
    display: inline-block;
    margin-top: 10px;
}
.reply {
    height: 60px;
    width: 100%;
    margin-top: 12px !important;
    z-index: 1000;
}
.message-time {
    margin: 0 !important;
    float: right;
    font-size: 12px;
    text-align: right;
    color: #9a9a9a;
}
    </style>
<div id="page-content">
    <div class="collection-header">
        <div class="collection-hero">
            <div class="collection-hero__image blur-up lazyloaded"></div>
            <div class="collection-hero__title-wrapper container">
                <h1 class="collection-hero__title">Chat</h1>
            </div>
        </div>
    </div>
<div class="container pt-2">

        @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                    </button>
                    <strong>Information!</strong> {{session()->get("success")}}.
                </div>
        @endif
                    <div class="row mb-4 mb-lg-5 pb-lg-5">

                        <div class="col-xl-3 col-lg-2 col-md-12 mb-4 mb-lg-0">
                            <!-- Nav tabs -->
                            @if(Auth::user()->level == 'admin')
                            <ul class="nav flex-column bg-light h-100 dashboard-list" role="tablist">
                                <input type="hidden" id="senderid" value="0">
                                @foreach($sender as $s)
                                <li><a class="nav-link sendername" id='{{$s->sender_id}}' >{{$s->sender_name}}</a></li>
                                @endforeach
                            </ul>
                            @endif
                            <!-- End Nav tabs -->
                        </div>
                        <div class="col-xl-9 col-lg-10 col-md-12">
                            <!-- Tab panes -->
                            <div class="tab-content dashboard-content" style="">
                                <!-- Dashboard -->
                                <div id="dashboard" class="tab-pane fade active show">
                                    <form action="{{url('chat/send/2')}}" method="post">
                                        @csrf
                                        <div class="row" id="cpesan">
                                        </div>
                                        <div class="row reply">
                                            <div class="col-sm-11 col-xs-11 reply-main"><textarea name="message" class="form-control" rows="1" id="comment"></textarea></div>
                                            <div class="col-sm-1 col-xs-1 reply-send"><button type="button" style="border-radius:25px" class="btn btn-info save-data">Send</button></div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Dashboard -->

                                <!-- Orders -->
                                <div id="orders" class="product-order tab-pane fade">
                                    <h3>Orders</h3>
                                    <div class="table-responsive order-table">

                                    </div>
                                </div>
                                <!-- End Orders -->

                            </div>
                            <!-- End Tab panes -->
                        </div>
                    </div>
                    <!--End Main Content-->
                </div>
            </div>
@endsection
