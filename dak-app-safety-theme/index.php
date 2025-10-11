<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1>
            <?php if (get_theme_mod('hero_title')) : ?>
                <?php echo esc_html(get_theme_mod('hero_title')); ?>
            <?php else : ?>
                See Exactly Which Apps Are Putting Your Kids at Risk
            <?php endif; ?>
        </h1>
    </div>
</section>

<!-- Video Demo Section -->
<section class="video-section">
    <div class="container">
        <h2 class="section-title">
            <?php if (get_theme_mod('video_section_title')) : ?>
                <?php echo esc_html(get_theme_mod('video_section_title')); ?>
            <?php else : ?>
                Watch the Live Demo
            <?php endif; ?>
        </h2>
        <p class="section-subtitle">
            <?php if (get_theme_mod('video_section_subtitle')) : ?>
                <?php echo esc_html(get_theme_mod('video_section_subtitle')); ?>
            <?php else : ?>
                See the App Safety Search Engine in action - discover dangerous apps in under 2 minutes
            <?php endif; ?>
        </p>
        
        <div class="video-container">
            <div class="video-placeholder" onclick="playVideo()">
                <div class="play-button"></div>
                <div class="video-text">
                    <strong>Click to watch the demo</strong><br>
                    See how easy it is to protect your kids online
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <h2 class="section-title">
            <?php if (get_theme_mod('features_title')) : ?>
                <?php echo esc_html(get_theme_mod('features_title')); ?>
            <?php else : ?>
                Everything You Need to Protect Your Kids
            <?php endif; ?>
        </h2>
        <p class="section-subtitle">
            <?php if (get_theme_mod('features_subtitle')) : ?>
                <?php echo esc_html(get_theme_mod('features_subtitle')); ?>
            <?php else : ?>
                Comprehensive app safety analysis backed by real FBI data and academic research
            <?php endif; ?>
        </p>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🔍</div>
                <h3 class="feature-title">Instant App Analysis</h3>
                <p class="feature-description">Search any app instantly and get detailed safety information. Our database covers 120+ popular apps that kids use daily.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">⚠️</div>
                <h3 class="feature-title">Predator Risk Assessment</h3>
                <p class="feature-description">Get customized risk levels based on 10,000+ FBI child predator press releases. See which apps are most dangerous for your child's age group.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3 class="feature-title">Academic Research Backing</h3>
                <p class="feature-description">Our findings are validated by the latest academic research on child online safety and predator behavior patterns.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3 class="feature-title">Demographic-Based Alerts</h3>
                <p class="feature-description">Receive targeted warnings based on your child's specific demographics - age, gender, and interests that predators typically target.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h3 class="feature-title">Easy-to-Use Interface</h3>
                <p class="feature-description">Simple search functionality that any parent can use. No technical knowledge required - just type in an app name and get instant results.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔄</div>
                <h3 class="feature-title">Regular Updates</h3>
                <p class="feature-description">Our database is updated every 7 to 14 days with new threats and app safety information as new dangers emerge online.</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <h2 class="section-title">The Numbers Don't Lie</h2>
        <p class="section-subtitle">Real data that shows why this protection is critical</p>
        
        <div class="stats-grid">
            <div class="stat-card">
                <span class="stat-number">10,000+</span>
                <span class="stat-label">FBI Reports Analyzed</span>
            </div>
            <div class="stat-card">
                <span class="stat-number">120+</span>
                <span class="stat-label">Apps in Database</span>
            </div>
            <div class="stat-card">
                <span class="stat-number">89%</span>
                <span class="stat-label">of Parents Unaware</span>
            </div>
            <div class="stat-card">
                <span class="stat-number">24/7</span>
                <span class="stat-label">Protection Coverage</span>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <h2 class="section-title">What Parents Are Saying</h2>
        <p class="section-subtitle">Real stories from parents who are protecting their kids</p>
        
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="testimonial-content">
                    "I had no idea that the apps my 12-year-old was using were such high-risk for predators. This tool opened my eyes and probably saved my daughter from a dangerous situation."
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">S</div>
                    <div class="author-info">
                        <h4>Sarah M.</h4>
                        <p>Mother of 2, Teacher</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-content">
                    "The FBI-backed data gives me confidence that this isn't just fear-mongering. It's real, actionable information that helps me make informed decisions about my kids' digital safety."
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">M</div>
                    <div class="author-info">
                        <h4>Michael R.</h4>
                        <p>Father of 3, IT Professional</p>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card">
                <div class="testimonial-content">
                    "Easy to use, incredibly informative. I check every new app my teens want to download. It's become an essential part of our family's digital safety routine."
                </div>
                <div class="testimonial-author">
                    <div class="author-avatar">J</div>
                    <div class="author-info">
                        <h4>Jennifer L.</h4>
                        <p>Mother of 4, Nurse</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="pricing-section">
    <div class="container">
        <h2 class="section-title">Protect Your Kids Today</h2>
        <p class="section-subtitle">For less than a latte.</p>
        
        <div class="pricing-card">
            <div class="pricing-badge">Most Popular</div>
            <div class="price">
                <?php if (get_theme_mod('price_amount')) : ?>
                    <?php echo esc_html(get_theme_mod('price_amount')); ?>
                <?php else : ?>
                    $5/month
                <?php endif; ?>
            </div>
            
            <ul class="features-list">
                <li>Complete access to App Safety Search Engine</li>
                <li>Search 120+ apps instantly</li>
                <li>FBI-backed predator risk analysis</li>
                <li>Demographic-specific safety alerts</li>
                <li>Bi-weekly app database updates</li>
                <li>30-day money-back guarantee</li>
                <li>Instant access after purchase</li>
            </ul>
            
            <a href="#" class="cta-button" onclick="handlePurchase()">Get Instant Access Now</a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2 class="section-title">Frequently Asked Questions</h2>
        
        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    How current is the FBI data?
                    <span>+</span>
                </div>
                <div class="faq-answer" style="display: none;">
                    Our database is built from over 10,000 FBI child predator press releases and is regularly updated as new cases and patterns emerge. The academic research component ensures we're using the most current methodologies for risk assessment.
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    What devices does this work on?
                    <span>+</span>
                </div>
                <div class="faq-answer" style="display: none;">
                    The App Safety Search Engine is web-based and works on any device with internet access - computers, tablets, and smartphones. No installation required.
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    Is there a money-back guarantee?
                    <span>+</span>
                </div>
                <div class="faq-answer" style="display: none;">
                    Yes! We offer a 30-day money-back guarantee. If you're not completely satisfied with the App Safety Search Engine, contact us within 30 days for a full refund.
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    How often is the database updated?
                    <span>+</span>
                </div>
                <div class="faq-answer" style="display: none;">
                    We update our database monthly with new app safety information, emerging threats, and the latest research findings. All updates are included in your one-time purchase.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer CTA -->
<section class="hero" style="padding: 60px 0; background: rgba(255, 255, 255, 0.02);">
    <div class="container">
        <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Don't Wait - Protect Your Kids Now</h2>
        <p class="hero-subtitle" style="margin-bottom: 40px;">Every day you wait is another day your children could be at risk. Get instant access to the protection they need.</p>
        <a href="#" class="cta-button" onclick="handlePurchase()">
            <?php if (get_theme_mod('cta_button_text')) : ?>
                <?php echo esc_html(get_theme_mod('cta_button_text')); ?>
            <?php else : ?>
                Get Started Today - $5
            <?php endif; ?>
        </a>
    </div>
</section>

<?php get_footer(); ?>
