@section('danhgias')
<form method="post" action="/danhgia/{{$phim->id}}">
    @csrf
    {{-- <textarea class="form-control" id="noiDung" name="noiDung" placeholder="Viết đánh giá cho phim..." rows="3"></textarea> --}}
    {{-- <input type="hidden" id="noiDung-input"> --}}
    {{-- <label for="noiDung">Nội dung:</label> --}}
    <textarea name="noiDung" id="noiDung"></textarea>
    <br>
    
    {{-- Rating Stars --}}
    <div class="rating-group">
        <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
        <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
        <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">

        <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
        <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
        
        <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
        <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
        
        <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
        <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
        
        <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
        <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio">
        
        <label aria-label="6 stars" class="rating__label" for="rating3-6"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
        <input class="rating__input" name="rating3" id="rating3-6" value="6" type="radio">

        <label aria-label="7 stars" class="rating__label" for="rating3-7"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
        <input class="rating__input" name="rating3" id="rating3-7" value="7" type="radio">

        <label aria-label="8 stars" class="rating__label" for="rating3-8"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
        <input class="rating__input" name="rating3" id="rating3-8" value="8" type="radio">

        <label aria-label="9 stars" class="rating__label" for="rating3-9"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
        <input class="rating__input" name="rating3" id="rating3-9" value="9" type="radio">

        <label aria-label="10 stars" class="rating__label" for="rating3-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
        <input class="rating__input" name="rating3" id="rating3-10" value="10" type="radio">
    </div>

    <button type="submit" class="btn btn-info pull-right">Gửi</button>
</form>
<div class="clearfix"></div>
<hr>
<ul class="media-list">
    @foreach ($danhgias as $danhgia)
        @foreach ($users as $user)
            @if ($user->id == $danhgia->idUser)
                <li class="media">
                    <a href="#" class="pull-left">
                        <img src="{{asset('images/upload')}}/{{$user->hinh}}" alt="Avatar" class="img-circle" style="width: 100px;height: 100px;object-fit:cover">
                    </a>
                    <div class="media-body">
                        <span class="text-muted pull-right">
                            <small class="text-muted">{{$danhgia->ngay}}</small>
                        </span>
                        <strong class="text-success">@ {{$user->username}}</strong>
                        <p>
                            {!! $danhgia->noiDung !!}
                        </p>
                    </div>
                </li>
            @endif
        @endforeach
    @endforeach
</ul>


{{$danhgias->links()}}

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

{{-- CKEDITOR --}}
<script>
    CKEDITOR.replace('noiDung',{
        filebrowserBrowseUrl : '/plugins/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/plugins/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/plugins/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
    });
    CKEDITOR.instances['noiDung'].setData($('#noiDung-input').val());
    CKEDITOR.config.height = '150';
</script>

@endsection