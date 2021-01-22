@foreach ($comments as $comment)
    {{-- <div class="display-comment">
        <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->comment }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('reply.add') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="comment" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;"
                    value="Reply" />
            </div>
        </form>
        @include('post.partials.replies', ['comments' => $comment->replies])
    </div> --}}
    <div class="comments-area">
        <div class="group-title">
            <h3>Comments</h3>
        </div>
        <div class="comment-box">
            <div class="comment">
                <div class="author-thumb"><img class="lazy-image"
                        src="{{ asset('asset2/images/resource/image-spacer-for-validation.png') }}"
                        data-src="/storage/{{ Auth::user()->image }}" alt=""></div>
                <div class="comment-info">
                    <h4 class="name">{{ $comment->user->firstname }}</h4>
                    <div class="time">{{ $comment->created_at->format('F j, Y') }}</div>
                </div>
                <div class="text">{{ $comment->comment }}</div>
                <a href="#" class="reply-btn" id="reply"><span class="arrow_back"></span> Reply</a>
                <br>
                {{-- Reply form --}}
                <div class="comment-form default-form">
                    @include('partials.user.messages')
                    <form method="post" action="{{ route('reply.add') }}" class="d-none replyForm">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="Your response *" required></textarea>
                                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                                <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                            </div>

                            <div class="col-md-12 col-sm-12 form-group">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form"
                                    id="replyForm"><span class="btn-title">Reply</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="comment-box reply-comment">
            <div class="comment">
                <div class="comment-info">
                    @include('partials.site.replies', ['comments' => $comment->replies])
                </div>
            </div>
        </div>
    </div>
@endforeach

<script>
    let reply = document.getElementById('reply');
    reply.addEventListener('click', replyForm, false);

    function replyForm() {
        $('.replyForm').removeClass('d-none');
    }

</script>
