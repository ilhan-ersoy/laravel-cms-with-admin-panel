@isset($categories)
<div class="col-md-3">
        <div class="card">
          <div class="card-header">
            Kategoriler
          </div>
          <div class="list-group active">
              @foreach($categories as $category  )
              <li class="list-group-item @if(Request::segment(2)==$category->slug) active @endif">
                <a href="{{route('category',$category->slug)}}">{{$category->name}}</a>
                <span class="badge bg-danger float-right text-white">{{$category->articleCount()}}</span>
              </li>
              @endforeach
              
          </div>
        </div>
        
      </div>
@endif