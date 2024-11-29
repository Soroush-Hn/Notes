
<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?php global $uri; global$config; if (array_key_exists($uri, $config['Heading'])) echo $config['Heading'][$uri];?></h1>
    </div>
</header>
