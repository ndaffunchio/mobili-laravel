<div id="search-modal" style="display: none;">
    <div class="search-box">
        <a href="javascript:void(0)" id="close"><i class="fas fa-times"></i></a>
        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="query" value="{{request()->input('query')}}" id="query" autofocus>
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>