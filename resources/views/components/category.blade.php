<div>
    <h5>
        {{$category->title}}
    </h5>
    @foreach($category->children as $child)
        <div class="ml-4">
            <x-category :category="$child"/>
        </div>
    @endforeach

</div>
