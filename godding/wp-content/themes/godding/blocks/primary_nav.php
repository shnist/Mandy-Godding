<!-- MENU TOGGLE BUTTON -->
<a href="#nav" class="nav__toggle" role="button" aria-expanded="false" aria-controls="menu">
  <svg class="menuicon" xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 50 50">
    <title>Toggle Menu</title>
    <g>
      <line class="menuicon__bar" x1="13" y1="16.5" x2="37" y2="16.5" />
      <line class="menuicon__bar" x1="13" y1="24.5" x2="37" y2="24.5" />
      <line class="menuicon__bar" x1="13" y1="24.5" x2="37" y2="24.5" />
      <line class="menuicon__bar" x1="13" y1="32.5" x2="37" y2="32.5" />
      <circle class="menuicon__circle" r="23" cx="25" cy="25" />
    </g>
  </svg>
</a>
<nav id="nav" class="nav" role="navigation">
  <!-- ACTUAL NAVIGATION MENU -->
  <ul class="nav__menu" id="menu" tabindex="-1" aria-label="main navigation" hidden>
    <li class="nav__item"><a class="nav__link" href="<?php echo get_permalink(6); ?>">Home</a></li>
    <li class="nav__item"><a class="nav__link" href="<?php echo get_permalink(27); ?>">News</a></li>
    <li class="nav__item"><a class="nav__link" href="<?php echo get_permalink(123); ?>">Blog</a></li>
    <li class="nav__item"><a class="nav__link" href="<?php echo get_permalink(9); ?>">Dance</a></li>
    <li class="nav__item"><a class="nav__link" href="<?php echo get_permalink(12); ?>">Singing</a></li>
    <li class="nav__item"><a class="nav__link" href="<?php echo get_permalink(14); ?>">Drama</a></li>
    <li class="nav__item"><a class="nav__link" href="<?php echo get_permalink(16); ?>">Teachers</a></li>
<<<<<<< HEAD
    <li class="nav__item"><a class="nav__link" href="http://mandygodding.co.uk/wp-content/uploads/2018/09/MGTA_Timetable_2018.pdf">Timetable</a></li>
=======
    <li class="nav__item">
      <a href="#" class="nav__link" aria-haspopup="true">The School</a>
      <ul class="dropdown" aria-label="submenu">
        <li><a href="/wp-content/uploads/2020/09/autumn-2020-timetable.pdf">Autumn 2020 Timetable</a></li>
        <li><a href="/wp-content/uploads/2020/09/mgta-covid-policy-2020.pdf">Covid-19 Policy</a></li>
        <li><a href="/wp-content/uploads/2020/09/mgta-terms-conditions-2020.pdf">Terms &amp; Conditions</a></li>
      </ul>
    </li>
>>>>>>> Updated docker-compose to get it working
    <li class="nav__item"><a class="nav__link" href="<?php echo get_permalink(18); ?>">Contact</a></li>
  </ul>

  <!-- ANIMATED BACKGROUND ELEMENT -->
  <div class="splash"></div>
</nav>
<<<<<<< HEAD
=======

>>>>>>> Updated docker-compose to get it working
