@php
    $settings = app(\Astrogoat\Tolstoy\Settings\TolstoySettings::class)
@endphp

@if($settings->enabled && $settings->key)
    <script>tolstoyAppKey="{{ $settings->key }}"</script>
    <script type="module" async src="https://widget.gotolstoy.com/we/widget.js"></script>
    <script type="text/javascript" nomodule async src="https://widget.gotolstoy.com/widget/widget.js"></script>
@endif
