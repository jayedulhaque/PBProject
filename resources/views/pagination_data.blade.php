<div class="col-lg-8 col-md-8 col-sm-8">
    <div class="comment_wrapper">
      @if(isset($comments))

      <div class="col-lg-12 col-md-12 col-sm-12">
        <div id="pagination-wrapper">
          <div><h1 >শুভেচ্ছা বার্তা</h1></div>
          <div >{{ $comments->links() }}</div>
        </div>
      </div>
      @foreach($comments as $comment)
      <div class="results-wrapper col-lg-6 col-md-6 col-sm-6">
        <div class="media border p-3">
          <div class="media-body" style="display: -webkit-inline-box;">
            <img src="images/admin-png-images-4.png" alt="John Doe" class="float-left mr-3 mt-3 img-rounded" style="width:60px;">
            <h4>{{ $comment->commentor_name }} <small><br><i>{{ $comment->commentor_designation }}
            </i></small><br><hr></h4>
          </div>
        </div>
        <div class="media">
          <p style="text-align: justify;">{{ $comment->commentor_comments }}</p>
        </div>
      </div>
      @endforeach
      @endif
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-4">
    <div class="video_wrapper">
      <div class="col-lg-12 col-md-12 col-sm-12">
      <div style="border-bottom: 1px solid black;"><h1>ভিডিও</h1></div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <iframe width="560" height="349" src="http://www.youtube.com/embed/n_dZNLr2cME?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>