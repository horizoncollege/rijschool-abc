<div class="contact-form">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Naam</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="message">Bericht</label>
            <textarea name="message" class="form-control" rows="5" required></textarea>
        </div>

        <div class="menu-buttons-404">
            <button class="yellow-button">Verzenden</button></a>
        </div>
    </form>
</div>
