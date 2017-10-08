<div class="post-preview">
                    <a href="/post/{{ $post->slug }}">
                        <h2 class="post-title">
                            {{$posts->title}}
                        </h2>
                        <h3 class="post-subtitle">
                            {{$posts->excerpt}} 
                        </h3>

                    </a>
                    <p class="post-meta">Posted by <a href="#">{{$posts->author->name}}</a> on {{$posts->updated_at->format('F d,Y')}}</p>
                </div>
                <hr>



<!--include('partials.post_1')-->