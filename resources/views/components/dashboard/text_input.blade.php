@props([
    'label' => 'label',
    'name' => 'name',
    'placeholder' => 'placeholder'
])

<div class="form-group">
    <label for="exampleInputUsername1">{{ $label }}</label>
    <input type="text" class="form-control" id="exampleInputUsername1" placeholder="{{$placeholder?? ''}}" name="{{$name}}">
</div>
@error($name)
<div class="label -mt-4 mb-2">
    <span class="label-text-alt text-error text-danger">{{ $message }}</span>
</div>
@enderror
