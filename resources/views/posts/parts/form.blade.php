<div class="form-group">
  <input name="title" type="text" class="form-control" placeholder="Заголовок - мin 3 символа / мах 50 символов" required value="{{ old('title') ?? $post->title ?? '' }}">
</div>
<div class="form-group">
  <textarea name="descr" rows="10" class="form-control" placeholder="Описание- мin 10 символа / мах 990 символов" required>{{ old('descr') ?? $post->descr ?? '' }}</textarea>
</div>
<div class="form-group">
  <input type="file" name="img" placeholder="5Mb">
</div>
