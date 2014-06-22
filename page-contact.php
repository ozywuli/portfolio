<?php get_header(); ?>


<header class="page-header">
  <h2 class="h2 page-title grid">Contact Me</h2>
</header>

<div class="grid">
  <div class="contact-form-container">
    <ul class="contact-addresses">
      <li><a href="">ozy.wu.li@gmail.com</a></li>
      <li><a href="">twitter</a></li>
    </ul>
    <p class="contact-message">Interested in working with me or just want to say hello? You can contact me via any of the addresses I've provided, or you can reach me by filling out the form below. I will do my best to respond within 24 hours.</p>
    <form method="POST" class="contact-form">
      <fieldset>
        <label for="contact-name">Name <span class="required">*</span></label>
          <input type="text" name="name" id="contact-name" class="contact-field" placeholder="Henry" required aria-required="true" />
        <label for="contact-email">Email <span class="required">*</span></label>
          <input type="email" name="email" id="contact-email" class="contact-field" placeholder="Song" required aria-required="true" />
        <label for="contact-subject">Subject <span class="required">*</span></label>
          <input type="text" name="subject" id="contact-subject" class="contact-field" placeholder="Henry wants to say hi" required aria-required="true" />
        <label for="contact-message">Message <span class="required">*</span></label>
          <textarea name="message" id="contact-message" class="contact-field" placeholder="Hi" required aria-required="true"></textarea>
        <label for="contact-verification">Anti-Spam Security Check <span class="required">*</span><br /><span>9 x 9 = ?</span></label>
          <input type="number" name="verification" id="contact-verification" class="contact-field" placeholder="0" required aria-required="true">
      </fieldset>
      <input type="submit" name="submit" value="Send Message">
      <p class="success">Thank you. Your message has been sent.</p>
      <p class="error">Error: please check that you have correctly filled in all the required fields.</p>
    </form>
  </div>
</div>

<div class="contact-sm">
  
</div>

<iframe width='100%' height='100%' frameBorder='0' src='http://a.tiles.mapbox.com/v3/aosika.idj21kb7/attribution,geocoder,share.html' class="map"></iframe>

<?php get_footer(); ?>