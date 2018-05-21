<label for="">Статус</label>
<select name="published" class="form-control" id="">
        <option value="0" >Не опубликовано</option>
        <option value="1" >Опубликовано</option>
</select>

<label for="">Название</label>
<input type="text" class="form-control" name="product_name" placeholder="Загаловок категории" value="{{$product->product_name or ''}}" required>


<label for="">Краткое описание</label>
<textarea class="form-control" id="description_short" name="description_short">{{$product->description_short or ""}}</textarea>

<label for="">Полное описание</label>
<textarea class="form-control" id="description" name="description">{{$product->description or ""}}</textarea>

<hr />

<label for="">Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{$product->meta_title or ""}}">

<label for="">Мета описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{$product->meta_description or ""}}">

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Ключевые слова, через запятую" value="{{$product->meta_keyword or ""}}">
<input type="hidden" name="product_id" value="">

<hr />


<input type="submit" class="btn btn-primary" name='product_create' value="Сохранить">