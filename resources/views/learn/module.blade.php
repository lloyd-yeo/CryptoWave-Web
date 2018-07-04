<div class="content-wrap">
    <div class="container clearfix">
        <div class="heading-block topmargin-lg center">
            <h2 id="section-header">{{ $module->title }}</h2>
            <span class="divcenter" id="section-desc">{{ $module->description }}</span>
        </div>

        <div id="posts">
            @foreach ($module_video as $video)
                <div class="related-posts clearfix">
                    <div class="col_full" style="margin-bottom:10px;">
                        <div class="mpost clearfix" style="height: 235px;">
                            <div class="entry-image" style="width: 400px;">
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
                                    <a href="#" style="margin-top:15px;" class="button button-border button-rounded button-fill button-aqua"><span>Attempt Quiz</span></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <center>
            <a href="#unlock" id="unlock-module-{{ $module->id }}" data-module="{{ $module->id }}" class="button button-3d button-xlarge button-rounded"><i class="icon-lock3"></i> Unlock Next Section</a>
        </center>

    </div>

</div>