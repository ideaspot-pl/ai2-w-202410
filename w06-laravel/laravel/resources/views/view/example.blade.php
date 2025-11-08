<main>
    <h1>Welcome to the Example View</h1>
    <p>This is a sample Blade template in Laravel.</p>
    @if($foo)
        <div>
            <p>The value of <code>$foo</code> is:</p>
            <pre>{{ $foo }}</pre>
        </div>
    @endif
</main>
