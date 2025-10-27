    <script>
        function handlePurchase() {
            // Get the purchase URL from WordPress customizer or use default with success redirect
            <?php 
            $base_purchase_url = get_theme_mod('purchase_url', 'https://buy.stripe.com/9B68wQcXm03vf9wc9n04801');
            $success_url = 'https://app-safety-search-engine.streamlit.app/';
            
            // Check if URL already has success_url parameter
            if (strpos($base_purchase_url, 'success_url=') === false) {
                $separator = strpos($base_purchase_url, '?') !== false ? '&' : '?';
                $purchase_url = $base_purchase_url . $separator . 'success_url=' . urlencode($success_url);
            } else {
                $purchase_url = $base_purchase_url;
            }
            ?>
            window.location.href = '<?php echo esc_url($purchase_url); ?>';
        }

        function playVideo() {
            console.log('Play button clicked!');
            const placeholder = document.querySelector('.video-placeholder');
            if (!placeholder) {
                console.error('Video placeholder not found');
                return;
            }
            
            console.log('Embedding Tella.tv video...');
            
            // Get video URL from WordPress customizer or use default with autoplay
            <?php $video_url = get_theme_mod('video_url', 'https://www.tella.tv/video/cmgbg6bz400dm0bl9a1u3e309/embed?b=1&title=1&a=1&loop=0&t=0&muted=0&wt=1&autoplay=1'); ?>
            
            placeholder.innerHTML = `
                <iframe 
                    style="width: 100%; height: 100%; border: 0; border-radius: 16px;" 
                    width="800" 
                    height="450" 
                    src="<?php echo esc_url($video_url); ?>" 
                    allowfullscreen 
                    allowtransparency>
                </iframe>
            `;
            
            console.log('Video embedded successfully');
        }

        // Auto-load video when page loads
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Page loaded, auto-playing video...');
            playVideo();
        });

        function toggleFAQ(element) {
            const answer = element.nextElementSibling;
            const icon = element.querySelector('span');
            
            if (answer.style.display === 'none' || !answer.style.display) {
                answer.style.display = 'block';
                icon.textContent = '−';
            } else {
                answer.style.display = 'none';
                icon.textContent = '+';
            }
        }
    </script>

    <?php wp_footer(); ?>
</body>
</html>
