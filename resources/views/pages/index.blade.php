@extends('layouts/blog')
@section('main-content')
    <section>
        <div class="container">
            <article id="post1">
                <img src="post1.jpg"/>
                <div>
                    <h2>Post 1</h2>
                    <p class="post-title">Title description, <span class="date">August 25, 2018</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                    <button>Read More <span>&raquo</span></button>
                    <span class="comments">Comments <span class="black-box">0</span></span>
                <div>
            </article>	


            <article id="post2">
                <img src="post2.jpeg"/>
                <div>
                    <h2>Title Heading</h2>
                    <p class="post-title">Title description, <span class="date">August 18, 2018</span></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                    <button>Read More <span>&raquo</span></button>
                    <span class="comments">Comments <span class="black-box">2</span></span>
                </div>
            </article>
            <article id="my-info">
                <img src="person.jpeg"/>
                <div>
                    <h3>John Doe</h3>
                    <p>This is real, this is me. I'm exactly where I'm supposed to be. I'm gonna let the light shine on me.</p>
                </div>
            </article>	

            <article id="popular">
                    <h4 class="grey-box">Popular posts</h4>
                    <ul>
                        <li>
                            <img src="pop1.jpeg"/> 
                            <span class="post-title">Title one</span><br/>
                            <span>Description one</span> <br/>
                        </li>

                        <li>
                            <img src="pop2.jpg"/><span class="post-title">Title two</span><br/>
                            <span>Description two</span><br/>
                        </li>

                        <li>
                            <img src="pop3.jpeg"/><span class="post-title">Title three</span><br/>
                            <span>Description three</span><br/>
                        </li>

                        <li id="last-post">
                            <img src="pop4.jpeg"/><span class="post-title">Title four</span><br/>
                            <span>Description four</span><br/>
                        </li>
                    </ul>

            </article>	

            <article id="tags">
                <h4 class="grey-box">Tags</h4>
                <div>
                    <ul>
                        <li id ="current">Travel</li>
                        <li>New York</li>
                        <li>London</li>
                        <li>IKEA</li>
                        <li>Norway</li>
                        <li>DIY</li>
                        <li>Ideas</li>
                        <li>Baby</li>
                        <li>Family</li>
                        <li>News</li>
                        <li>Clothing</li>
                        <li>Shopping</li>
                        <li>Sports</li>
                        <li>Games</li>
                    </ul>
                </div>
            </article>	
        </div>
    </section>
@endsection