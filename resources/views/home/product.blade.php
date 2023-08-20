<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">

            <div class="col-sm-6 col-md-4 col-lg-4">
                <form action="{{ route('home.addtocart') }}" method="POST">
                    @csrf
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <button type='submit' class='option1'>Add To Cart</button>
                                <a href="/cart" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="images/cute.jpeg" alt="">
                        </div>
                        <div class="detail-box" style='disply:flex;justify-content:space-evenly'>

                            <input type="hidden" name='name' value="Girls Top"> Girl's top
                            <br>

                            <input type="hidden" name='price' value="75"> $75


                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <form action="{{ route('home.addtocart') }}" method="POST">
                    @csrf
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <button type='submit' class='option1'>Add To Cart</button>
                                <a href="/cart" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="images/shoe.jpeg" alt="">
                        </div>
                        <div class="detail-box" style='disply:flex;justify-content:space-evenly'>

                            <input type="hidden" name='name' value="Shoes"> Shoes
                            <br>

                            <input type="hidden" name='price' value="75"> $75


                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <form action="{{ route('home.addtocart') }}" method="POST">
                    @csrf
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <button type='submit' class='option1'>Add To Cart</button>
                                <a href="/cart" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="images/dumbell.jpeg" alt="">
                        </div>
                        <div class="detail-box" style='disply:flex;justify-content:space-evenly'>

                            <input type="hidden" name='name' value="Dumbell"> Dumbell
                            <br>

                            <input type="hidden" name='price' value="75"> $75


                        </div>
                    </div>
                </form>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4">
                <form action="{{ route('home.addtocart') }}" method="POST">
                    @csrf
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <button type='submit' class='option1'>Add To Cart</button>
                                <a href="/cart" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="images/set.jpeg" alt="">
                        </div>
                        <div class="detail-box" style='disply:flex;justify-content:space-evenly'>

                            <input type="hidden" name='name' value="Girl's gym set"> Girl's gym set
                            <br>

                            <input type="hidden" name='price' value="80"> $80


                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                
                <form action="{{ route('home.addtocart') }}" method="POST">
                    @csrf
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <button type='submit' class='option1'>Add To Cart</button>
                                <a href="/cart" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="images/p2.png" alt="">
                        </div>
                        <div class="detail-box" style='disply:flex;justify-content:space-evenly'>

                            <input type="hidden" name='name' value="Women's Dress"> Women's Dress
                            <br>

                            <input type="hidden" name='price' value="80"> $80


                        </div>
                        
                    </div>
                </form>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <form action="{{ route('home.addtocart') }}" method="POST">
                    @csrf
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <button type='submit' class='option1'>Add To Cart</button>
                                <a href="/cart" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="images/jp.jpeg" alt="">
                        </div>
                        <div class="detail-box" style='disply:flex;justify-content:space-evenly'>

                            <input type="hidden" name='name' value="Jumping Rope"> Jumping Rope
                            <br>

                            <input type="hidden" name='price' value="75"> $75


                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <form action="{{ route('home.addtocart') }}" method="POST">
                    @csrf
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <button type='submit' class='option1'>Add To Cart</button>
                                <a href="/cart" class="option2">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        <div class="img-box">
                            <img src="images/pp.jpeg" alt="">
                        </div>
                        <div class="detail-box" style='disply:flex;justify-content:space-evenly'>

                            <input type="hidden" name='name' value="Protein Powder"> Protein Powder
                            <br>

                            <input type="hidden" name='price' value="75"> $75


                        </div>
                    </div>
                </form>
            </div>






        </div>
        <div class="btn-box">
            <a href="">
                View All products
            </a>
        </div>
    </div>
   
</section>
