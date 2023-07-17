<style>
:root {
  --clr-gray-light: #d7dfe2;
  --clr-gray-med: #616b74;
  --clr-gray-dark: #414b56;
  --clr-link: #4d97b2;
  --clr-popular: #ff6b6b;
}

.category-custom {
    font-size: 25px;
    
}
.text-custom-show {
    font-size: 20px;
}

.auth-show{
    font-size: 20px;
    color: black;
}
.details-custom {
    font-size: 20px;
    color: black;
}
.buttom-custom-rev{
    height: 38px;
}





/* CSS */
.button-62 {
  background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
  border: 0;
  border-radius: 12px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 500;
  line-height: 2.5;
  outline: transparent;
  padding: 0 1rem;
  text-align: center;
  text-decoration: none;
  transition: box-shadow .2s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
}

.button-62:not([disabled]):focus {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

.button-62:not([disabled]):hover {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}


.wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.card {
  overflow: hidden;
  box-shadow: 0px 2px 20px var(--clr-gray-light);
  background: white;
  border-radius: 0.5rem;
  position: relative;
  width: 350px;
  margin: 1rem;
  transition: 250ms all ease-in-out;
  cursor: pointer;
}

.card:hover {
  transform: scale(1.05);
  box-shadow: 0px 2px 40px var(--clr-gray-light);
}

.banner-img {
  position: absolute;
  object-fit: cover;
  height: 14rem;
  width: 100%;
}

.category-tag {
  font-size: 0.8rem;
  font-weight: bold;
  color: white;
  background: #ff6b6b;
  padding: 0.5rem 1.3rem 0.5rem 1rem;
  text-transform: uppercase;
  position: absolute;
  z-index: 1;
  top: 1rem;
  border-radius: 0 2rem 2rem 0;
}

.popular {
  background: var(--clr-popular);
}

.card-body {
  margin: 15rem 1rem 1rem 1rem;
}

.blog-hashtag {
  font-size: 0.9rem;
  font-weight: 500;
  color: black;
}

.blog-title {
  line-height: 1.5rem;
  margin: 1rem 0 0.5rem;
}

.blog-description {
  color: black;
  font-size: 1.2rem;
}

.card-profile {
  display: flex;
  margin-top: 2rem;
  align-items: center;
}

.profile-img {
  width: 60px;
  height: 60px;
  object-fit: cover;
  border-radius: 50%;
}

.card-profile-info {
  margin-left: 1rem;
}

.profile-name {
  font-size: 1rem;
}

.profile-followers {
  color: black;
  font-size: 0.9rem;
}

.trunc-body{
 overflow: hidden;
 display: -webkit-box;
 -webkit-line-clamp: 4;
 -webkit-box-orient: vertical;
}


</style>



<div class="wrapper">
  <div class="card">
    <div class="card-banner">
      <p class="category-tag popular"><a class="text-light fw-bold" href="{{route('filter.category', ['category' =>$article->category->id])}}">{{$article->category->name}}</a></p>
      <img class="banner-img" src='{{Storage::url($article->image)}}' alt=''></a>
      
    </div>
    <div class="card-body">
      <a href="{{route('article.show', compact('article'))}}"><h3 class="blog-title ">{{$article->title}}</h3></a>
      <a href="{{route('article.show', compact('article'))}}"><h5 class="blog-description display-3 fw-bold border-top border-bottom border-dark py-2"> {{$article->subtitle}}</h5></a>
      <a href="{{route('article.show', compact('article'))}}"><p class="blog-description trunc-body display-5">{{$article->body}}</p></a>
      <a href="{{route('article.show', compact('article'))}}" class="text-touppercase mt-2 text-dark fw-bold">Continua a leggere...</a>
      <div class="card-profile">
        <img class="profile-img" src='https://images.unsplash.com/photo-1554780336-390462301acf?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
        
        <div class="card-profile-info row">
          <div class="col-6 col-md-12 d-flex justify-content-start align-items-end">
          <h3 class="profile-name">Redatto il: {{$article->created_at->format('d/m/Y')}} </h3> 
        </div>
        <div class="col-6 col-md-12 d-flex justify-content-start align-items-start">
          <h3 class="profile-name">Da: <a class="fw-bold text-capitalize"  href="{{route('filter.user', ['user' =>$article->user->id])}}">{{$article->user->name}}</a></h3>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>



    {{-- <div class="wrapper">
        <div class="card">
          <div class="card-banner">
            <p class="category-tag popular"><a class="text-light fw-bold" href="{{route('filter.category', ['category' =>$article->category->id])}}">{{$article->category->name}}</a></p>
            <img class="banner-img" src='{{Storage::url($article->image)}}' alt=''>
          </div>
          <div class="card-body">
            <h3 class="blog-title ">{{$article->title}}</h3>
            <h5 class="blog-description display-3 fw-bold border-top border-bottom border-dark p-2"> {{$article->subtitle}}</h5>
            <p class="blog-description display-5">{{$article->body}}</p>
            <a href="{{route('article.show', compact('article'))}}" class="text-touppercase mt-2 text-dark fw-bold">Continua a leggere...</a>
            <div class="card-profile">
              <img class="profile-img" src='https://images.unsplash.com/photo-1554780336-390462301acf?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
              
              <div class="card-profile-info row">
                <div class="col-6 col-md-6 d-flex justify-content-start align-items-end">
                <h3 class="profile-name">Redatto il: {{$article->created_at->format('d/m/Y')}} </h3> 
              </div>
              <div class="col-6 col-md-6 d-flex justify-content-end align-items-end">
                <h3 class="profile-followers">Da: <a class="fw-bold text-black text-capitalize"  href="{{route('filter.user', ['user' =>$article->user->id])}}">{{$article->user->name}}</a></h3>
              </div>
              </div>
            </div>
          </div>
        </div>
    </div> --}}
 