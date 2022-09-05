<div>
   <a href="/categories/{{$category->slug}}">
       <h5 class="{{ $category->depth == 0 ? 'font-bold': '' }}">
        {{$category->title}}
       </h5>
   </a>
    @foreach($category->children as $child)
        <div class="ml-4">
            <x-category :category="$child"/>
        </div>
    @endforeach

</div>
