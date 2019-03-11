<div class="col-md-9">

    {{--{{ $bvar or $title }}--}}
    @if(count($data)<3)
        В массиве меньше 3 эелементов

    @elseif(count($data)>10)
        В массиве больше 10 эелементов

    @else
        В массиве неизвестное количество элементов

    @endif
    <hr>
    <ul>
        @for($i = 0; $i < count($dataI);  $i++ )
            <li>{{$dataI[$i]}}</li>
        @endfor
    </ul>
    <hr>

    <ul>
        @foreach($data as $k=>$value)
            <li>{{$k.' - '.$value}}</li>
        @endforeach
    </ul>
    <hr>
    <ul>
        @forelse($data as $k=>$value)
            <li>{{$k.' - '.$value}}</li>
        @empty
            <p>Пусто...</p>
        @endforelse
    </ul>
    <hr>
    @while (false)
        <p>I'm looping forever</p>
    @endwhile
    <hr>
    <ul>
        @each('default.list', $dataI, 'value')
    </ul>
    <hr>
    @myDir('Hello!')
    <div class="col-md-6">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
            condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
            Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-md-6">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
            condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod.
            Donec sed odio dui. </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>

    <div style="clear:both"></div>
    <div class="blog-post">
        <div class="page-header">
            <h1>Sample blog post</h1>
        </div>

        <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic
            typography, images, and code are all supported.</p>
        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean
            eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at
            lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
        <blockquote>
            <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu
                leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </blockquote>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum.
            Aenean lacinia bibendum nulla sed consectetur.</p>
    </div><!-- /.blog-post -->

</div>