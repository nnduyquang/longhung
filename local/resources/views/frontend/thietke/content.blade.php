<div id="posts-content" class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                {{ Html::image('images/sliders/ban-dat-nen-khu-do-thi-long-hung-cua-ngo-phia-dong.jpg','',array('class'=>'posts-content-img')) }}
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="p-w-title">
                    <h1 class="p-title">Mặt Bằng Tổng Thể</h1>
                </div>
            </div>
        </div>
        <div class="empty-space-32 col-md-12"></div>
        <div class="col-md-12">
            <div class="container">
                {!! $posts->content !!}
            </div>
        </div>
        <div class="col-md-12 p-d-bot">
            <div class="container">
                <div class="p-d-bot-w">
                    {!! $diachi->content !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="empty-space-32 col-md-12"></div>