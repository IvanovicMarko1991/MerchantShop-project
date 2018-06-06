<nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a href="{{url('/')}}">
            <img src="{{asset('img/logo.png')}}" width="60" > 
           </a>
           
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        Menu  <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
                <li class="nav-item" class="contacts">     
                        <a class="nav-link" href="/contact">
                       Contacts
                       </a>
                       </li>
            <div class="dropdown show">
                    <li class="nav-item" class="products">     
                       
                     <a class="nav-link dropdown-toggle" href="/products" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Products
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item active"  href="{{route('phones')}}">Phones</a>
                    <a class="dropdown-item active" href="{{route('tv')}}">TV</a>
                          <a class="dropdown-item active" href="{{route('tablet')}}">Tablets</a>
                        </div>
                  
                    </li>
                
                  
            
          </ul>
          
        
            @guest
            <ul class="navbar-nav align-right">
                
            <li class="search" id="search"><form action="{{route('search')}}" class="form-inline my-2 my-lg-0">
            <input  class="form-control mr-sm-2" type="text" name="query" id="query" value="{{request()->input('query')}}" placeholder="Search Product" aria-label="Search">
                      <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
                    </form></li>
                 <li><a class="nav-link" href="/shopping-cart"><i class="fas fa-shopping-cart"> </i>{{ __('Shopping Cart') }}</a></li>
                    <li class="nav-item"><a class=" nav-item nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li class="nav-item"><a class=" nav-item  nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
               
                    
      
                </ul>
            
                @else
                
                        
                <ul class="navbar-nav align-right">
      
                      <li class="search" id="search">
 
                          <form action="{{route('search')}}" class="form-inline my-2 my-lg-0">
                              <input class="form-control mr-sm-2" type="text" name="query" id="query" value="{{request()->input('query')}}" placeholder="Search Product" aria-label="Search">
                              <button class="btn btn-light my-2 my-sm-0" type="submit">Search</button>
                            </form>
                            
                        </li>
                    <li><a class="nav-link" href="/shopping-cart"><i class="fas fa-shopping-cart"> </i>{{ __('Shopping Cart') }}</a></li>
                    <li> <a  class=" nav-link" href="{{route('login.profile')}}">
                          Profile                       
                      </a></li>
      
                      <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      {{ Auth::user()->name }}
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item nav-link " href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                                   </a>
                                   
             
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                   </form>
                                     
                              </div>
                            </div>
                        </ul>
                        </div>
                        
                                 @endguest
                        
                                
                                
                      </div>
                
            </div>
        
      </nav>