<style>
:root {
  --clr-gray-light: #d7dfe2;
  --clr-gray-med: #616b74;
  --clr-gray-dark: #414b56;
  --clr-link: #4d97b2;
  --clr-popular: #ff6b6b;
}

* {
  box-sizing: border-box;
  font-family: "Inter", sans-serif;
  margin: 0;
  padding: 0;
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
  background: red;
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
  color: var(--clr-link);
}

.blog-title {
  line-height: 1.5rem;
  margin: 1rem 0 0.5rem;
}

.blog-description {
  color: var(--clr-gray-med);
  font-size: 0.9rem;
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
  color: var(--clr-gray-med);
  font-size: 0.9rem;
}


</style>



    <div class="wrapper">
        <div class="card">
          <div class="card-banner">
            <p class="category-tag popular"><a class="text-light fw-bold" href="{{route('filter.category', ['category' =>$article->category->id])}}">{{$article->category->name}}</a></p>
            <img class="banner-img" src='{{Storage::url($article->image)}}' alt=''>
          </div>
          <div class="card-body">
            <h2 class="blog-title">{{$article->title}}</h2>
            <p class="blog-description"> {{$article->subtitle}}</p>
            <p>{{$article->body}}</p>
            <a href="{{route('article.show', compact('article'))}}" class="text-uppercase text-dark fw-bold">Continua a leggere...</a>
            <div class="card-profile">
              <img class="profile-img" src='https://images.unsplash.com/photo-1554780336-390462301acf?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ' alt=''>
              
              <div class="card-profile-info">
                <h3 class="profile-name">Redatto il: {{$article->created_at->format('d/m/Y')}} </h3> 
               
                <h3 class="profile-followers">Da: <a class="fw-bold" href="{{route('filter.user', ['user' =>$article->user->id])}}">{{$article->user->name}}</a></h3>
                
              </div>
            </div>
          </div>
        </div>
    </div>
 