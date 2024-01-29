@extends("layouts.blog-master",['title'=>"Saved comment"])
@section("content")
    <div class='text-center'>
        <h3>¡Muchas gracias! Tu comentario ha sido guardado</h3>

        @if(!config("binshopsblog.comments.auto_approve_comments",false) )
            <p>Tu comentario será revisado por un administrador antes de ser mostrado en el blog.</p>
        @endif

        <a href='{{$blog_post->url(app('request')->get('locale'))}}' class='btn btn-primary'>Regresar a la publicación</a>
    </div>

@endsection