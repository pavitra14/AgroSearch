                <!--************************************
                        Dashboard Alerts Start
                *************************************-->
                <div class="tg-dbsectionspace tg-haslayout tg-alertexamples">
                    @if (session()->has('info'))    
                    <div class="tg-alert alert alert-info fade in">
                            <p><strong>Info: </strong> {{session('info')}}</p>
                            <div class="tg-anchors">
                                {{-- <a class="tg-btndoaction" href="dashboard.html#">Do Action Now</a> --}}
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                            </div>
                        </div>
                        @php
                            session()->forget('info');
                        @endphp
                    @endif
                    @if (session()->has('warning'))
                    <div class="tg-alert alert alert-warning fade in">
                            <p><strong>Warning:</strong> {{session('warning')}}</p>
                            <div class="tg-anchors">
                                {{-- <a class="tg-btndoaction" href="dashboard.html#">Do Action Now</a> --}}
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                            </div>
                        </div>
                        @php
                            session()->forget('warning');
                        @endphp
                    @endif
                    @if (session()->has('danger'))
                    <div class="tg-alert alert alert-danger fade in">
                            <p><strong>Danger:</strong> {{session('danger')}}</p>
                            <div class="tg-anchors">
                                {{-- <a class="tg-btndoaction" href="dashboard.html#">Do Action Now</a> --}}
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                            </div>
                        </div>
                        @php
                            session()->forget('danger');
                        @endphp
                    @endif
                    @if (session()->has('success'))
                    <div class="tg-alert alert alert-success fade in">
                            <p><strong>Success:</strong> {{session('success')}}</p>
                            <div class="tg-anchors">
                                {{-- <a class="tg-btndoaction" href="dashboard.html#">Do Action Now</a> --}}
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                            </div>
                        </div>
                        @php
                            session()->forget('success');
                        @endphp
                    @endif    
                    
                    </div>
                    <!--************************************
                            Dashboard Alerts End
                    *************************************-->