@php
    $navStyle = 'display:flex;flex-direction:column;align-items:center;justify-content:center;padding:10px 4px 8px;text-decoration:none;color:#6b7280;font-weight:500;';
    $iconStroke = '#6b7280';
@endphp

<div
    id="mobile-bottom-nav"
    style="position:fixed;bottom:0;left:0;right:0;z-index:1000;background:#fff;border-top:1px solid #e5e7eb;padding-bottom:env(safe-area-inset-bottom);"
>
    <div style="display:grid;grid-template-columns:repeat(4,1fr);align-items:stretch;">

        {{-- HOME --}}
        <a
            href="{{ route('shop.home.index') }}"
            aria-label="Home"
            style="{{ $navStyle }}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="{{ $iconStroke }}" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
            <span style="font-size:9px;margin-top:4px;font-family:Montserrat,sans-serif;letter-spacing:0.04em;text-transform:uppercase;white-space:nowrap;">Home</span>
        </a>

        {{-- CATEGORIES --}}
        <a
            href="{{ route('shop.all-categories.index') }}"
            aria-label="Categories"
            style="{{ $navStyle }}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="{{ $iconStroke }}" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="7" height="7"/>
                <rect x="14" y="3" width="7" height="7"/>
                <rect x="14" y="14" width="7" height="7"/>
                <rect x="3" y="14" width="7" height="7"/>
            </svg>
            <span style="font-size:9px;margin-top:4px;font-family:Montserrat,sans-serif;letter-spacing:0.04em;text-transform:uppercase;white-space:nowrap;">Categories</span>
        </a>

        {{-- FLASH SALE --}}
        <a
            href="{{ route('shop.flash-sale.index') }}"
            aria-label="Flash Sale"
            style="{{ $navStyle }}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="{{ $iconStroke }}" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
            <span style="font-size:9px;margin-top:4px;font-family:Montserrat,sans-serif;letter-spacing:0.04em;text-transform:uppercase;white-space:nowrap;">Flash Sale</span>
        </a>

        {{-- ACCOUNT --}}
        @guest('customer')
            <a
                href="{{ route('shop.customer.session.create') }}"
                aria-label="Account"
                style="{{ $navStyle }}"
            >
        @endguest
        @auth('customer')
            <a
                href="{{ route('shop.customers.account.index') }}"
                aria-label="Account"
                style="{{ $navStyle }}"
            >
        @endauth
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="{{ $iconStroke }}" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                <circle cx="12" cy="7" r="4"/>
            </svg>
            <span style="font-size:9px;margin-top:4px;font-family:Montserrat,sans-serif;letter-spacing:0.04em;text-transform:uppercase;white-space:nowrap;">Account</span>
        </a>

    </div>
</div>
