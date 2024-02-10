<footer class="footer mt-auto py-3 bg-body-tertiary">
    <div class="container">
        <span class="text-body-secondary">Время по Гринвичу:
            @php
                use Carbon\Carbon;
                print(Carbon::now()->format('H:i'));
            @endphp
        </span>
    </div>
    <div class="container">
        <span class="text-body-secondary">Powered by Колясик & Dimas</span>
    </div>
</footer>
