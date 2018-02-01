<header id="mainHeader">
<h1 class="hide">Header</h1>
  <div id="headerInner">

    <img src="img/clearview-logo-white.png" alt="Clearview Logo" id="mainLogo">
      <nav id="headerNav">
          <h3 class="hide">Header Nav</h3>
          <ul>
            <li><a class="headerLink" href="{{ url('/') }}">HOME</a></li>
            <li><a class="headerLink" href="{{ url('/equipment') }}">EQUIPMENT</a></li>
            <li><a class="headerLink" href="{{ url('/about') }}">ABOUT</a></li>
            <li><a class="headerLink" href="#/">CONTACT</a></li>
            <li><a class="headerLink" href="{{ url('/#projectSection') }}">PROJECTS</a></li>
            <li><a class="headerLink" href="{{ url('/about#trainingCon') }}">SAFETY</a></li>
            <li><a class="headerLink" href="{{ url('/about#newsSection') }}">NEWS</a></li>
            <li><a href="#/" class="headerButton">RENT NOW</a></li>
          </ul>
      </nav>

      <button class="hamburger">
        <span>toggle menu</span>
      </button>
  </div>
</header>
      