<div class='add_comment_area'>
    <h5 class='text-center'>Añadir comentario</h5>
    <form method='post'
        action='{{ route('binshopsblog.comments.add_new_comment', [app('request')->get('locale'), $post->slug]) }}'>
        @csrf


        <div class="form-group ">
            <label id="comment_label" for="comment">Tu comentario </label>
            <textarea class="form-control" name='comment' required id="comment" placeholder="Escribe tu comentario aquí"
                rows="7">{{ old('comment') }}</textarea>
        </div>

        <div class='container-fluid'>
            <div class='row'>
                @if (config('binshopsblog.comments.save_user_id_if_logged_in', true) == false || !\Auth::check())

                    <div class='col'>
                        <div class="form-group ">
                            <label id="author_name_label" for="author_name">Tu nombre </label>
                            <input type='text' class="form-control" name='author_name' id="author_name"
                                placeholder="Tu nombre" required value="{{ old('author_name') }}">
                        </div>
                    </div>

                    @if (config('binshopsblog.comments.ask_for_author_email'))
                        <div class='col'>
                            <div class="form-group">
                                <label id="author_email_label" for="author_email">Tu correo electrónico
                                    <small>(No se mostrará publicamente)</small>
                                </label>
                                <input type='email' class="form-control" name='author_email' id="author_email"
                                    placeholder="Tu correo electrónico" required value="{{ old('author_email') }}">
                            </div>
                        </div>
                    @endif
                @endif


                @if (config('binshopsblog.comments.ask_for_author_website'))
                    <div class='col'>
                        <div class="form-group">
                            <label id="author_website_label" for="author_website">Tu sitio web
                                <small>(Sí será mostrado)</small>
                            </label>
                            <input type='url' class="form-control" name='author_website' id="author_website"
                                placeholder="URL de tu sitio web" value="{{ old('author_website') }}">
                        </div>
                    </div>
                @endif
            </div>
        </div>


        @if ($captcha)
            {{-- Captcha is enabled. Load the type class, and then include the view as defined in the captcha class --}}
            @include($captcha->view())
        @endif


        <div class="form-group ">
            <input type='submit' class="form-control input-sm btn btn-success " value='Agregar comentario'>
        </div>

    </form>
</div>
