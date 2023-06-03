<!DOCTYPE html>
<center>
<h1> Add New Product</h1>
<br>
<form method="post" action="{{ route('products.store') }}" >
    @csrf
<label for="name" > Name : </label>
<input type="text" id="name" name="name"></input>
<br><br>
<label for="category"> Category : </label>
<input type="text" id="category" name="category"></input>
<br><br>
<label for="owner"> Owner : </label>
<select name="owners[]" id="owners" multiple>
            @foreach($owners as $owner)
                <option value="{{ $owner->id }}">{{ $owner->owner_name }}</option>
            @endforeach
        </select>
<br><br>
<button type="submit"> Add </input>
</form>
</center>
