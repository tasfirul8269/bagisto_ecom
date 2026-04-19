<x-shop::layouts
    :has-header="true"
    :has-feature="false"
    :has-footer="false"
>
    <x-slot:title>
        Flash Sale
    </x-slot>

    <div style="min-height: 100vh; background: #fff; display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 40px 24px 100px;">

        <!-- Lightning bolt icon -->
        <div style="margin-bottom: 24px;">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 2L4.5 13.5H11L10 22L20.5 10.5H14L13 2Z" fill="#14284a" stroke="#14284a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>

        <!-- Heading -->
        <h1 style="font-size: 32px; font-weight: 400; letter-spacing: 0.1em; text-transform: uppercase; color: #14284a; margin: 0 0 12px 0; font-family: 'DM Serif Display', Georgia, serif; text-align: center; line-height: 1.2;">
            Flash Sale
        </h1>

        <!-- Subtext -->
        <p style="font-size: 14px; font-weight: 500; letter-spacing: 0.12em; text-transform: uppercase; color: #9ca3af; margin: 0; font-family: Montserrat, sans-serif; text-align: center;">
            Coming Soon
        </p>

    </div>

</x-shop::layouts>
