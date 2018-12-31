<label>Статус</label>
<select class="form-control" name="published">
    @if (isset($article->id))
        <option value="0" @if ($article->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($article->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label>Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости"
       value="{{$article->title ?? ""}}" required>

<label>Slug (уникальное значение)</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация"
       value="{{$article->slug ?? ""}}" readonly>

<label>Родительская категория</label>
<select class="form-control" name="categories[]" multiple="">
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label>Краткое описание</label>
<textarea class="form-control" id="description_short" name="description_short">{{$article->description_short ?? ""}}</textarea>

<label>Полный текст</label>
<textarea class="form-control" id="description" name="description">{{$article->description ?? ""}}</textarea>

<hr>

<label>Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$article->meta_title ?? ""}}">

<label>Мета описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$article->meta_description ?? ""}}">

<label>Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова (через запятую)" value="{{$article->meta_keyword ?? ""}}">

<hr>

<button class="btn btn-primary" type="submit">Сохранить</button>



