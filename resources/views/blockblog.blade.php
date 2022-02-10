

<article class="blog_item">
    <div class="blog_item_img">
        <a href="#" class="blog_item_date">
            <h3>{{$ite->created_at->format('d H:i')}}</h3>
            {{-- <p>{{  
                    $months=
                    [
                        1=>'Янв',
                        2=>'Фев',
                        3=>'Мар',
                        4=>'Апр',
                        5=>'Май',
                        6=>'Июн',
                        7=>'Июл',
                        8=>'Авг',
                        9=>'Сен',
                        10=>'Окт',
                        11=>'Ноя',
                        12=>'Дек'
                    ];
                echo $months[$ite->created_at->format('m')] 
                }}
            </p> --}}
           
        </a>
    </div>

    <div class="blog_details">
        <a class="d-inline-block" href="single-blog.html">
            <h2>{{$ite->name}}</h2>
        </a>
        <p>{{$ite->text}}</p>
        {{-- @dump($ite) --}}
        <ul class="blog-info-link">
            <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
            <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
        </ul>
    </div>
</article>