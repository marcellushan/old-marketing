<div class="well">
    @if($comments)
    <div class="row">
        <div class="col-sm-6 category">Comments</div>
        <div class="col-sm-2 category">Status</div>
    </div>
    <div class="row">
            @foreach($comments as $comment)
                <div class="row">
                    <div class="col-md-6">
                        {{$comment->comment or "No Comment"}}
                    </div>
                    <div class="col-md-2">
                        {{$comment->status}}
                    </div>
                    <div class="col-md-2">
                    {{date_format($comment->created_at, 'm/d/y')}}
                    </div>
                    <div class="col-md-2">
                        {{$comment->users_id or "No ID"}}
                    </div>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
    @endif