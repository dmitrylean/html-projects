<?php
/* Template Name: Contacts Page */
get_header(); ?>

<main class="site-main">
  <div class="container">
    <!-- Map -->
    <div class="contacts">
      <div class="container">
        <h2>Контакты</h2>

        <!-- Карта -->
        <div class="map">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.png" alt="Цены">
        </div>

        <!-- Contacts -->
        <div class="contacts-grid">
          <div class="contact-item">
            <h3>Контакты</h3>
            <p>+7 (812) 123-45-67</p>
            <p>+7 (911) 123-45-67</p>
            <p>Новостроевский проспект, дом 36 лит. С</p>
          </div>

          <div class="contact-item">
            <h3>Режим работы</h3>
            <p>С 10:00 до 21:00 (Пн-Пт)</p>
            <p>С 11:00 до 20:00 (Сб-Вс)</p>
          </div>

          <div class="contact-item">
            <h3>Контакты</h3>
            <p>+7 (812) 123-45-67</p>
            <p>+7 (911) 123-45-67</p>
            <p>Новостроевский проспект, дом 36 лит. С</p>
          </div>

          <div class="contact-item">
            <h3>Режим работы</h3>
            <p>С 10:00 до 21:00 (Пн-Пт)</p>
            <p>С 11:00 до 20:00 (Сб-Вс)</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>

<?php get_footer(); ?>