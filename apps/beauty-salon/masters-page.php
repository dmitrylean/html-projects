<?php
/* Template Name: Masters Page */
get_header(); ?>

<main class="site-main">
  <div class="container">
    <!-- Masters -->
    <div class="masters">
      <div class="masters-title">
        <h2>Наши Мастера</h2>
      </div>

      <!-- Visual Portfolio Shortcode -->
      <div class="master-grid">
        <?php echo do_shortcode('[visual_portfolio id="109"]');
        ?>
      </div>
    </div>

    <!-- Price -->
    <div class="services">
      <h2 class="services-title">Цены на услуги</h2>
      <div class="services-content">
        <div class="services-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/price.png" alt="Цены">
        </div>

        <div class="services-list">
          <div class="service-item">
            <div class="service-text">
              <h3>Женская укладка</h3>
              <p>+ обработка кончиков волос</p>
            </div>
            <div class="service-price">1 000 ₽</div>
          </div>

          <div class="service-item">
            <div class="service-text">
              <h3>Женская укладка</h3>
              <p>+ обработка кончиков волос</p>
            </div>
            <div class="service-price">1 000 ₽</div>
          </div>

          <div class="service-item">
            <div class="service-text">
              <h3>Женская укладка</h3>
              <p>+ обработка кончиков волос</p>
            </div>
            <div class="service-price">1 000 ₽</div>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>

<?php get_footer(); ?>