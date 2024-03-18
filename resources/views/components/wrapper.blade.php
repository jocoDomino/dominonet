<div id="wrapper">
    @if (Route::has('login'))
        <livewire:welcome.navigation/>
    @endif
    <!-- Intro -->
    <x-section-wrapper id="intro" class="wrapper style1 fullscreen fade-up">
        <div class="inner">
            <h1>DominoNet</h1>
            <p>Just another fine responsive site template designed by <a href="http://html5up.net">HTML5
                    UP</a><br/>
                and released for free under the <a href="http://html5up.net/license">Creative Commons</a>.</p>
            <x-button url="#one" class="scrolly" button-text="Learn more"></x-button>
        </div>
    </x-section-wrapper>

    <!-- One -->
    <x-section-wrapper id="one" class="wrapper style2 spotlights">
        <x-section
                image-src="images/pic01.jpg"
                title="Sed ipsum dolor"
                description="Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus."
                url="generic"
                button-text="Click me"
                position="center center"
        ></x-section>
        <x-section
                image-src="images/pic02.jpg"
                title="Feugiat consequat"
                description="Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus."
                url="elements"
                button-text="Learn more"
                position="top center"
        ></x-section>
        <x-section
                image-src="images/pic03.jpg"
                title="Ultricies aliquam"
                description="Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus."
                url="generic"
                button-text="Visit"
                position="25% 25%"
        ></x-section>
    </x-section-wrapper>

    <!-- Two -->
    <x-section-wrapper id="two" class="wrapper style3 fade-up">
        <div class="inner">
            <h2>What we do</h2>
            <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat
                malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet
                imperdiet est velit quis lorem.</p>
            <div class="features">
                <x-card class="icon solid major fa-code" title="Lorem ipsum amet" text="Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, sed ultricies erat dapibus."></x-card>
                <x-card class="icon solid major fa-lock" title="Aliquam sed nullam" text="Phasellus convallis elit id ullam corper amet et pulvinar. Duis aliquam turpis mauris, ultricies erat dapibus."></x-card>
            </div>
            <x-button url="generic" button-text="Learn more"></x-button>
        </div>
    </x-section-wrapper>

    <!-- Three -->
    <x-section-wrapper id="three" class="wrapper style1 fade-up">
        <div class="inner">
            <h2>Get in touch</h2>
            <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat
                malesuada quis. Aliquam dapibus, lacus eget hendrerit bibendum, urna est aliquam sem, sit amet
                imperdiet est velit quis lorem.</p>
            <div class="split style1">
                <section>
                    <form method="post" action="#">
                        <div class="fields">
                            <div class="field half">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name"/>
                            </div>
                            <div class="field half">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email"/>
                            </div>
                            <div class="field">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" rows="5"></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><a href="" class="button submit">Send Message</a></li>
                        </ul>
                    </form>
                </section>
                <section>
                    <ul class="contact">
                        <li>
                            <h3>Address</h3>
                            <span>12345 Somewhere Road #654<br/>
											Nashville, TN 00000-0000<br/>
											USA</span>
                        </li>
                        <li>
                            <h3>Email</h3>
                            <a href="#">user@untitled.tld</a>
                        </li>
                        <li>
                            <h3>Phone</h3>
                            <span>(000) 000-0000</span>
                        </li>
                        <li>
                            <h3>Social</h3>
                            <ul class="icons">
                                <li><a href="#" class="icon brands fa-twitter"><span
                                                class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon brands fa-facebook-f"><span
                                                class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a>
                                </li>
                                <li><a href="#" class="icon brands fa-instagram"><span
                                                class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon brands fa-linkedin-in"><span
                                                class="label">LinkedIn</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </x-section-wrapper>

</div>
