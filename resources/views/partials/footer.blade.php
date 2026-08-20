<footer class="site-footer">
    <div class="container">
        <div class="site-footer__main">
            <div class="site-footer__brand">
                <a class="site-footer__identity" href="{{ route('home') }}" aria-label="Rugby For Education home">
                    <span class="site-footer__logo-wrap">
                        <img src="{{ asset('img/logo.jpg') }}" alt="Rugby For Education logo">
                    </span>
                    <span>
                        <strong>Rugby For Education</strong>
                        <small>Education through sport</small>
                    </span>
                </a>

                <p>
                    Helping talented young rugby players stay in school, develop their potential and build brighter futures.
                </p>

                <a class="site-footer__support" href="{{ route('support') }}">
                    Support our work <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
            </div>

            <div class="site-footer__newsletter">
                <h3>Stay connected</h3>
                <p>Get occasional updates about players, events and our work.</p>
                @if(session('newsletter_success'))<p class="newsletter-form__success">{{ session('newsletter_success') }}</p>@endif
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="newsletter-form">
                    @csrf
                    <input type="hidden" name="source" value="footer">
                    <input type="text" name="website" tabindex="-1" autocomplete="off" aria-hidden="true" class="newsletter-form__honeypot">
                    <label class="visually-hidden" for="footer-newsletter-email">Email address</label>
                    <div><input id="footer-newsletter-email" type="email" name="email" placeholder="Your email address" required autocomplete="email"><button type="submit" aria-label="Subscribe to newsletter"><i class="fa fa-arrow-right"></i></button></div>
                    @error('email')<small class="newsletter-form__error">{{ $message }}</small>@enderror
                </form>
            </div>

            <nav class="site-footer__column" aria-label="Footer navigation">
                <h3>Quick links</h3>
                <ul class="site-footer__links">
                    <li><a href="{{ route('about') }}">About us</a></li>
                    <li><a href="{{ route('announcements') }}">Announcements</a></li>
                    <li><a href="{{ route('events') }}">Events</a></li>
                    <li><a href="{{ route('stories') }}">Stories</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </nav>

            <div class="site-footer__column">
                <h3>Contact</h3>
                <ul class="site-footer__contact">
                    <li>
                        <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                        <span>Kabwabwa Area 25 B, Lilongwe</span>
                    </li>
                    <li>
                        <i class="fa fa-phone-alt" aria-hidden="true"></i>
                        <span>
                            <a href="tel:+265992816663">+265 992 816 663</a><br>
                            <a href="tel:+265985543434">+265 985 543 434</a>
                        </span>
                    </li>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a href="mailto:rugbyforeducation23@gmail.com">rugbyforeducation23@gmail.com</a>
                    </li>
                </ul>

                <div class="site-footer__socials" aria-label="Social media links">
                    <a href="https://www.facebook.com/people/Rugby-For-Education/100092776007978/" target="_blank" rel="noopener noreferrer" aria-label="Rugby For Education on Facebook">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.youtube.com/@R4E-z8p" target="_blank" rel="noopener noreferrer" aria-label="Rugby For Education on YouTube">
                        <i class="fab fa-youtube" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="site-footer__bottom">
            <p>&copy; {{ date('Y') }} Rugby For Education. All rights reserved.</p>
            <p>Education. Opportunity. Community.</p>
        </div>
    </div>
</footer>
