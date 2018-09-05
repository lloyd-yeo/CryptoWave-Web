<div class="content-wrap">
    <div class="container clearfix">
        <div class="heading-block topmargin-lg center">
            <h2 id="section-header">{{ $module->title }}</h2>
            <span class="divcenter" id="section-desc">{{ $module->description }}</span>
        </div>

        <div id="posts">
            @foreach ($module_video as $video)
                <div class="related-posts clearfix">
                    <div class="col_full" style="margin-bottom:10px; overflow-x:auto;">
                        <div class="mpost clearfix" style="height: 235px;">
                            <div class="entry-image" style="min-width: 400px;">
                                <iframe width="400" height="235" src="{{ $video->embed_url }}" frameborder="0" allowfullscreen></iframe>
                                {{--<a href="#"><img src="canvas/images/blog/small/10.jpg" alt="Blog Single"></a>--}}
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="#">{{ $video->title }}</a></h4>
                                </div>
                                <ul class="entry-meta clearfix">
                                    {{--<li><i class="icon-calendar3"></i> 10th July 2014</li>--}}
                                    <li><span style="font-size:14px;" class="badge badge-pill badge-info">Uncompleted</span></li>
                                </ul>
                                <div class="entry-content" style="font-size:18px;" >
                                    {{ $video->description }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{--<center>--}}
            {{--<br/>--}}
            {{--<a href="#" style="margin-top:15px;" class="button button-border button-rounded button-fill button-aqua"><span>Attempt Quiz</span></a>--}}
        {{--</center>--}}

        <center>
            <a href="#unlock"
               data-toggle="modal"
               data-target="#myModal"
               id="unlock-module-{{ $module->id }}" data-module="{{ $module->id }}" class="button button-3d button-xlarge button-rounded">
                <i class="icon-lock3"></i> Unlock Next Section</a>
        </center>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-body">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">"Decrypting the Future" Quiz Time</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <div class="col-lg-12">
                                @foreach ($questions as $question)
                                    <h4>{{ $question->question }}</h4>
                                    @foreach ($answers[$question->id] as $answer)
                                        <div>
                                            <input id="radio-{{ $answer->id }}" class="radio-style question-{{ $question->id }}"
                                                   name="radio-group-1" type="radio" checked="">
                                            <label for="radio-{{ $answer->id }}" class="radio-style-1-label">{{ $answer->answer }}</label>
                                        </div>
                                    @endforeach

                                    @if(!$loop->last)
                                        <div class="line"></div>
                                    @endif
                                @endforeach
                            </div>

                            {{--<h4>Text in a modal</h4>--}}
                            {{--<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>--}}

                            {{--<h4>Popover in a modal</h4>--}}
                            {{--<p>This <a href="#" role="button" class="btn btn-secondary" data-toggle="popover" title="" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="A Title">button</a> should trigger a popover on click.</p>--}}

                            {{--<h4>Tooltips in a modal</h4>--}}
                            {{--<p><a href="#" data-toggle="tooltip" title="" data-original-title="Tooltip">This link</a> and <a href="#" data-toggle="tooltip" title="" data-original-title="Tooltip">that link</a> should have tooltips on hover.</p>--}}
                            {{--<hr>--}}
                            {{--<h4>Overflowing text to show scroll behavior</h4>--}}
                            {{--<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>--}}
                            {{--<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>--}}
                            {{--<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>--}}
                            {{--<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>--}}
                            {{--<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>--}}
                            {{--<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>--}}
                            {{--<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>--}}
                            {{--<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>--}}
                            {{--<p class="nobottommargin">Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>--}}
                        {{--</div>--}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Submit Answers!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>