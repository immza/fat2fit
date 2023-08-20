
<style>
    .lawra{
    margin:10px 20px
}
</style>

<header class="header_section">
            <div class="lawra">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="/"><img width="250" src="images/zz.jpeg" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  
        <!-- Your navigation bar goes here -->
        <!-- Cart Icon -->
        <!-- <a href="{{ route('home.show') }}">
            <i class="fas fa-shopping-cart"></i>
            @php
                $cartItemCount = count(session('cart', []));
            @endphp
            @if($cartItemCount > 0)
                <span class="cart-badge">{{ $cartItemCount }}</span>
            @endif
        </a> -->
    
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
                        <li class="nav-item active">
                           <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                  
                        <li class="nav-item">
                           <a class="nav-link" href="/buy">Products</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/bmi">BMI</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/plan">Plan</a>
                        </li>
                        
                        <li class="nav-item">
                           <a class="nav-link" href="/blog">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="/contact">Contact</a>
                        </li>
                        <form class="form-inline">
                           <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button>
                        </form>
                        <li class="nav-item">
                           <a class="btn btn-primary" id='logincss' href="/login">Login</a>
                        </li>
                        
                        

                        <li class="nav-item">
                           <a class="btn btn-success" href="/reg">Register</a>
                        </li>

                        
                     <!-- <a href="/addtocart"> <p>Total: $<span id="cart-total">0</span></p></a>   -->

                        
                        
                     </ul>
                  </div>
               </nav>
            </div>
         </header>