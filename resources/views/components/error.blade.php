@props(['name'])
@error($name)
<p class="text-red-600 text-[12px] lg:text-[14px]" style="font-family: MTNBrighterSans-Light">
    {{$message}}
</p>
@enderror
