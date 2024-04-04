<div class="background">
    <div class="container-nav">
        <nav>
            <div class="menubar-mobiel">
                <div class="menu-icon" onclick="toggleMenu()">
                    <i class="material-icons">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </i>
                </div>
                <div class="logo">
                    <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo"></a>
                </div>
            </div>
            <div class="menu-items">
                <a href="{{ url('') }}">Home</a>
                <a href="{{ url('autorijles-bij-ons') }}">Autorijles bij ons</a>
                <a href="{{ url('lespakketten') }}">Lespakketten</a>
                <a href="{{ url('over-ons') }}">Over ons</a>
                <a href="{{ url('contact') }}">Contact</a>
            </div>
            <div class="menu-buttons">
                <a href="{{ url('gratis-proefrijles') }}"><button class="blue-button">Gratis proefrijles
                    </button></a>
            </div>
        </nav>
    </div>
</div>
