<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <title>
        Social Pets
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- footer -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

    <!-- Styles -->
    <style>
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }

        #content-header {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;

        }

        body {
            color: #ccc
        }

        .footer-widget p {
            margin-bottom: 27px;
        }

        p {
            font-family: 'Nunito', sans-serif;
            font-size: 16px;
            line-height: 28px;
        }

        .animate-border {
            position: relative;
            display: block;
            width: 115px;
            height: 3px;
            background: #007bff;
        }

        .animate-border:after {
            position: absolute;
            content: "";
            width: 35px;
            height: 3px;
            left: 0;
            bottom: 0;
            border-left: 10px solid #fff;
            border-right: 10px solid #fff;
            -webkit-animation: animborder 2s linear infinite;
            animation: animborder 2s linear infinite;
        }

        @-webkit-keyframes animborder {
            0% {
                -webkit-transform: translateX(0px);
                transform: translateX(0px);
            }

            100% {
                -webkit-transform: translateX(113px);
                transform: translateX(113px);
            }
        }

        @keyframes animborder {
            0% {
                -webkit-transform: translateX(0px);
                transform: translateX(0px);
            }

            100% {
                -webkit-transform: translateX(113px);
                transform: translateX(113px);
            }
        }

        .animate-border.border-white:after {
            border-color: #fff;
        }

        .animate-border.border-yellow:after {
            border-color: #F5B02E;
        }

        .animate-border.border-orange:after {
            border-right-color: #007bff;
            border-left-color: #007bff;
        }

        .animate-border.border-ash:after {
            border-right-color: #EEF0EF;
            border-left-color: #EEF0EF;
        }

        .animate-border.border-offwhite:after {
            border-right-color: #F7F9F8;
            border-left-color: #F7F9F8;
        }

        /* Animated heading border */
        @keyframes primary-short {
            0% {
                width: 15%;
            }

            50% {
                width: 90%;
            }

            100% {
                width: 10%;
            }
        }

        @keyframes primary-long {
            0% {
                width: 80%;
            }

            50% {
                width: 0%;
            }

            100% {
                width: 80%;
            }
        }

        .dk-footer {
            padding: 75px 0 0;
            background-color: #151414;
            position: relative;
            z-index: 2;
        }

        .dk-footer .contact-us {
            margin-top: 0;
            margin-bottom: 30px;
            padding-left: 80px;
        }

        .dk-footer .contact-us .contact-info {
            margin-left: 50px;
        }

        .dk-footer .contact-us.contact-us-last {
            margin-left: -80px;
        }

        .dk-footer .contact-icon i {
            font-size: 24px;
            top: -15px;
            position: relative;
            color: #007bff;
        }

        .dk-footer-box-info {
            position: absolute;

            background: #202020;
            padding: 40px;
            z-index: 2;
        }

        .dk-footer-box-info .footer-social-link h3 {
            color: #fff;
            font-size: 24px;
            margin-bottom: 25px;
        }

        .dk-footer-box-info .footer-social-link ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .dk-footer-box-info .footer-social-link li {
            display: inline-block;
        }

        .dk-footer-box-info .footer-social-link a i {
            display: block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            background: #000;
            margin-right: 5px;
            color: #fff;
        }

        .dk-footer-box-info .footer-social-link a i.fa-facebook {
            background-color: #3B5998;
        }

        .dk-footer-box-info .footer-social-link a i.fa-twitter {
            background-color: #55ACEE;
        }

        .dk-footer-box-info .footer-social-link a i.fa-google-plus {
            background-color: #DD4B39;
        }

        .dk-footer-box-info .footer-social-link a i.fa-linkedin {
            background-color: #0976B4;
        }

        .dk-footer-box-info .footer-social-link a i.fa-instagram {
            background-color: #B7242A;
        }

        .footer-awarad {
            margin-top: 285px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 100%;
            -moz-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .footer-awarad p {
            color: #fff;
            font-size: 24px;
            font-weight: 700;
            margin-left: 20px;
            padding-top: 15px;
        }

        .footer-info-text {
            margin: 26px 0 32px;
        }

        .footer-left-widget {
            padding-left: 80px;
        }

        .footer-widget .section-heading {
            margin-bottom: 35px;
        }

        .footer-widget h3 {
            font-size: 24px;
            color: #fff;
            position: relative;
            margin-bottom: 15px;
            max-width: -webkit-fit-content;
            max-width: -moz-fit-content;
            max-width: fit-content;
        }

        .footer-widget ul {
            width: 50%;
            float: left;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .footer-widget li {
            margin-bottom: 18px;
        }

        .footer-widget p {
            margin-bottom: 27px;
        }

        .footer-widget a {
            color: #878787;
            -webkit-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }

        .footer-widget a:hover {
            color: #007bff;
        }

        .footer-widget:after {
            content: "";
            display: block;
            clear: both;
        }

        .dk-footer-form {
            position: relative;
        }

        .dk-footer-form input[type=email] {
            padding: 14px 28px;
            border-radius: 50px;
            background: #2E2E2E;
            border: 1px solid #2E2E2E;
        }

        .dk-footer-form input::-webkit-input-placeholder,
        .dk-footer-form input::-moz-placeholder,
        .dk-footer-form input:-ms-input-placeholder,
        .dk-footer-form input::-ms-input-placeholder,
        .dk-footer-form input::-webkit-input-placeholder {
            color: #878787;
            font-size: 14px;
        }

        .dk-footer-form input::-webkit-input-placeholder,
        .dk-footer-form input::-moz-placeholder,
        .dk-footer-form input:-ms-input-placeholder,
        .dk-footer-form input::-ms-input-placeholder,
        .dk-footer-form input::placeholder {
            color: #878787;
            font-size: 14px;
        }

        .dk-footer-form button[type=submit] {
            position: absolute;
            top: 0;
            right: 0;
            padding: 12px 24px 12px 17px;
            border-top-right-radius: 25px;
            border-bottom-right-radius: 25px;
            border: 1px solid #007bff;
            background: #007bff;
            color: #fff;
        }

        .dk-footer-form button:hover {
            cursor: pointer;
        }

        .contact-us {
            position: relative;
            z-index: 2;
            margin-top: 65px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .contact-icon {
            position: absolute;
        }

        .contact-icon i {
            font-size: 36px;
            top: -5px;
            position: relative;
            color: #007bff;
        }

        .contact-info {
            margin-left: 75px;
            color: #fff;
        }

        .contact-info h3 {
            font-size: 20px;
            color: #fff;
            margin-bottom: 0;
        }

        .copyright {
            padding: 28px 0;
            margin-top: 55px;
            background-color: #202020;
        }

        .copyright span,
        .copyright a {
            color: #878787;
            -webkit-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear;
        }

        .copyright a:hover {
            color: #007bff;
        }

        .copyright-menu ul {
            text-align: right;
            margin: 0;
        }

        .copyright-menu li {
            display: inline-block;
            padding-left: 20px;
        }

        .back-to-top {
            position: relative;
            z-index: 2;
        }

        .back-to-top .btn-dark {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            padding: 0;
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #2e2e2e;
            border-color: #2e2e2e;
            display: none;
            z-index: 999;
            -webkit-transition: all 0.3s linear;
            -o-transition: all 0.3s linear;
            transition: all 0.3s linear;
        }

        .back-to-top .btn-dark:hover {
            cursor: pointer;
            background: #FA6742;
            border-color: #FA6742;
        }

        #acercade {
            height: 1020px;
            background: url(https://images4.alphacoders.com/130/1308624.jpeg) no-repeat center;
            background-size: cover
        }

        /* #servicios {
            height: 1020px;
            background: url(https://images2.alphacoders.com/454/454988.jpg) no-repeat center;
            background-size: cover
        } */

        #especialidades {
            height: 1020px;
            background: url(https://images2.alphacoders.com/131/1310873.jpg) no-repeat center;
            background-size: cover
        }

        #redes {
            height: 510PX;
            background: url(https://images3.alphacoders.com/130/1308626.jpeg) no-repeat center;
            background-size: cover
        }

        #contacto {
            height: 510PX;
            background: url(https://images5.alphacoders.com/130/1308629.jpeg) no-repeat center;
            background-size: cover
        }

        #content-header {
            height: 1020px;
            background: url(https://images4.alphacoders.com/130/1308624.jpeg) no-repeat center;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }


        #title {
            margin-bottom: 40px;
            font-size: 60px;
            font-weight: 600;
            text-transform: uppercase;
            color: #fff;
        }

        #lorem {
            margin-bottom: 40px;
            font-size: 18px;
            color: #fff;
            padding: 0 100px;
        }

        .slide {
            position: relative;
            box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
        }

        .slide-inner {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: calc(950px + 4.5em);
            display: flex;
            /* Establece el modelo de caja flexible */
            justify-content: center;
            /* Centra el contenido horizontalmente */
            align-items: center;
            /* Centra el contenido verticalmente */
        }

        .slide-open:checked+.slide-item {
            position: static;
            opacity: 100;
        }

        .slide-item {
            position: absolute;
            opacity: 0;
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        .slide-item img {
            display: block;
            height: auto;
            max-width: 100%;
        }

        .slide-control {
            background: rgba(0, 0, 0, 0.28);
            border-radius: 50%;
            color: #fff;
            cursor: pointer;
            display: none;
            font-size: 40px;
            height: 40px;
            line-height: 35px;
            position: absolute;
            top: 50%;
            -webkit-transform: translate(0, -50%);
            cursor: pointer;
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
            text-align: center;
            width: 40px;
            z-index: 10;
        }

        .slide-control.prev {
            left: 2%;
        }

        .slide-control.next {
            right: 2%;
        }

        .slide-control:hover {
            background: rgba(0, 0, 0, 0.8);
            color: #aaaaaa;
        }

        #slide-1:checked~.control-1,
        #slide-2:checked~.control-2,
        #slide-3:checked~.control-3,
        #slide-4:checked~.control-4,
        #slide-5:checked~.control-5,
        #slide-6:checked~.control-6,
        #slide-7:checked~.control-7,
        #slide-8:checked~.control-8,
        #slide-9:checked~.control-9,
        #slide-10:checked~.control-10,
        #slide-11:checked~.control-11,
        #slide-12:checked~.control-12 {
            display: block;
        }

        .slide-indicador {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        .slide-indicador li {
            display: inline-block;
            margin: 0 5px;
        }

        .slide-circulo {
            color: #828282;
            cursor: pointer;
            display: block;
            font-size: 35px;
        }

        .slide-circulo:hover {
            color: #aaaaaa;
        }

        #slide-1:checked~.control-1~.slide-indicador li:nth-child(1) .slide-circulo,
        #slide-2:checked~.control-2~.slide-indicador li:nth-child(2) .slide-circulo,
        #slide-3:checked~.control-3~.slide-indicador li:nth-child(3) .slide-circulo,
        #slide-4:checked~.control-4~.slide-indicador li:nth-child(4) .slide-circulo,
        #slide-5:checked~.control-5~.slide-indicador li:nth-child(5) .slide-circulo,
        #slide-6:checked~.control-6~.slide-indicador li:nth-child(6) .slide-circulo,
        #slide-7:checked~.control-7~.slide-indicador li:nth-child(7) .slide-circulo,
        #slide-8:checked~.control-8~.slide-indicador li:nth-child(8) .slide-circulo,
        #slide-9:checked~.control-9~.slide-indicador li:nth-child(9) .slide-circulo,
        #slide-10:checked~.control-10~.slide-indicador li:nth-child(10) .slide-circulo,
        #slide-11:checked~.control-11~.slide-indicador li:nth-child(11) .slide-circulo,
        #slide-12:checked~.control-12~.slide-indicador li:nth-child(12) .slide-circulo {
            color: #428bca;
        }

        #titulo {
            width: 100%;
            position: absolute;
            padding: 0px;
            margin: 0px auto;
            text-align: center;
            font-size: 27px;
            color: rgba(255, 255, 255, 1);
            font-family: 'Open Sans', sans-serif;
            z-index: 9999;
            text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33),
                -1px 0px 2px rgba(255, 255, 255, 0);
        }
        .image-container {
  display: flex;
  justify-content: space-between;
  margin-top: 20px;
  background-color: rgba(183, 231, 213, 0.5);
}

.circular-image {
  width: 400px;
  height: 400px;
  border-radius: 50%;
  margin-left: 30px;
  margin-right: 30px;
  margin-top: 100px;
  margin-bottom: 100px;
}

.fila {
  display: flex; /* Establece el diseño de la fila como flexbox */
}

.columna {
  flex: 1; /* Distribuye el espacio disponible de manera uniforme entre las columnas *//* Espacio entre las columnas */
}

.image{
    width: 470px; /* Ancho deseado */
  height: 470px;
}
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
#title{
    font-family: 'Dancing Script', cursive;
}
button {
  background: transparent;
  color: black;
  border: 3px solid black;
  border-radius: 50px;
  padding: 0.8rem 2rem;
  font: 18px "Margarine", sans-serif;
  outline: none;
  cursor: pointer;
  position: relative;
  transition: 0.2s ease-in-out;
  letter-spacing: 2px;
}
.form-content {
  position: relative;
}

.image-container {
  position: relative;
  display: inline-block;
}
.item.button-parrot {
  position: absolute;
  margin-top:50px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.name {
  width: 100%;
  text-align: center;
  padding: 0 0 3rem;
  padding-top: 4rem;
  font: 500 14px "Rubik", sans-serif;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.4);
}

.button-parrot .parrot {
  position: absolute;
  width: 50px;
  text-align: center;
  animation: blink 0.8s infinite;
  color: transparent;
}

.button-parrot .parrot:before {
  content: "Click Aqui!";
}

.button-parrot .parrot:nth-child(1) {
  top: -30px;
  left: -40px;
  font: 10px/1 "Margarine", sans-serif;
  transform: rotate(-20deg);
  animation-duration: 0.5s;
}

.button-parrot .parrot:nth-child(2) {
  font: 11px/1 "Margarine", sans-serif;
  right: -40px;
  top: -20px;
  transform: rotate(15deg);
  animation-duration: 0.3s;
}

.button-parrot .parrot:nth-child(3) {
  font: 14px/1 "Margarine", sans-serif;
  top: -50px;
  left: 15px;
  transform: rotate(10deg);
  animation-duration: 1s;
}

.button-parrot .parrot:nth-child(4) {
  font: 15px/1 "Margarine", sans-serif;
  top: -60px;
  left: 95px;
  transform: rotate(2deg);
  animation-duration: 0.7s;
}

.button-parrot .parrot:nth-child(5) {
  font: 14px/1 "Margarine", sans-serif;
  top: 60px;
  left: 105px;
  transform: rotate(-20deg);
  animation-duration: 0.8s;
}

.button-parrot .parrot:nth-child(6) {
  font: 12px/1 "Margarine", sans-serif;
  top: 60px;
  left: 5px;
  transform: rotate(10deg);
  animation-duration: 1.2s;
}

.button-parrot button:hover .parrot:before {
  content: "Do it!";
  width: 70px;
}

@keyframes blink {
  25%, 75% {
    color: transparent;
  }

  40%, 60% {
    color: black;
  }
}

#acercade{

    position: relative;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;

}

#redes{
    position: relative;
  display: flex;
  justify-content: center;
  align-items: center;

}
.acerca {
    display: flex;
  justify-content: center;
  align-items: center;
}
.box {
    background-color: rgba(242, 242, 242, 0.5);
  padding: 300px;
  border-radius: 20px;
  margin: 0 10px;
  display: inline-block;
}

.box2 {
    background-color: rgba(242, 242, 242, 0.5);
  padding: 60px;
  border-radius: 20px;
  margin: 0 10px;
  display: inline-block;
}

h2 {
  font-size: 20px;
  font-weight: bold;
  margin-bottom: 10px;
}

p {
  font-size: 16px;
  line-height: 1.5;
}

    </style>
</head>

<body class="">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid ps-2 pe-0">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ url('/') }}">
                            Social Pet's
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center me-2 active" aria-current="page"
                                        href="#acercade">
                                        <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                        Acerca de
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link me-2" href="#servicios">
                                        <i class="fas fa-hand-holding-medical opacity-6 text-dark me-1"></i>
                                        Servicios
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="#especialidades">
                                        <i class="fas fa-user-md opacity-6 text-dark me-1"></i>
                                        Especialidades
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="#redes">
                                        <i class="fas fa-bone opacity-6 text-dark me-1"></i>
                                        Nuestras redes
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link me-2" href="#contacto">

                                        <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                        Contacto
                                    </a>
                                </li>
                            </ul>
                            {{-- <ul class="navbar-nav d-lg-block d-none">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/product/material-dashboard"
                                    class="btn btn-sm mb-0 me-1 bg-gradient-dark">Acceder</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav d-lg-block d-none">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/product/material-dashboard"
                                    class="btn btn-sm mb-0 me-1 bg-gradient-dark">Registrarse</a>
                            </li>
                        </ul> --}}
                            @if (Route::has('login'))

                                @auth
                                    <a href="{{ url('/home') }}" class="btn btn-sm mb-0 me-1 bg-gradient-dark"
                                        style="background: #3D413E;">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-sm mb-0 me-1 bg-gradient-dark"
                                        style="background: #3D413E;">Login</a>

                                    @if (Route::has('register'))
                                        {{-- <a href="{{ route('register') }}"
                                        class="btn btn-sm mb-0 me-1 bg-gradient-dark">Registrarse</a> --}}
                                    @endif
                                @endauth

                            @endif
                        </div>

                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>

    <header id="content-header">
        {{-- <h2 id="title" style="font-size:80px; color:black; margin-top:50px;">Social Pet's</h2> --}}
        <div class="contenedor-imagen" style=" margin-top:60px;">
            <img src="{{ asset('images/social.jpg') }}">
        </div>
        <div class="fila">
            <div class="columna">
                <img class="image"src="https://www.diarioveterinario.com/images/showid2/5314848?w=900">
            </div>
            <div class="columna">
                <img class="image" src="https://www.lolimsa.com.pe/wp-content/uploads/2022/03/veterinaria-programa2.jpg">
            </div>
            <div class="columna">
                <img class="image" src="https://cdn.euroinnova.edu.es/img/subidasEditor/fotolia_39639815_subscription_monthly_m-1611921719.webp">
            </div>
            <div class="columna">
                <img class="image" src="https://universidadeuropea.com/resources/media/images/salidas-veterinaria-1200x630_oti17Ra.original.jpg">
            </div>

        </div>
        <div class="contenedor-imagen">
            <img src="{{ asset('images/plan.jpg') }}">
        </div>
        <div class="form-content">
            <div class="">
                <img src="{{ asset('images/principal abajo.jpg') }}">
            </div>
            <div class="item button-parrot" style="--bg-color: #2c3e50">
                <button id="afiliate-btn" >Afiliate Aqui!
                  <div class="parrot"></div>
                  <div class="parrot"></div>
                  <div class="parrot"></div>
                  <div class="parrot"></div>
                  <div class="parrot"></div>
                  <div class="parrot"></div>
                </button>
              </div>
              <script>document.getElementById('afiliate-btn').addEventListener('click', function() {
                window.location.href = "{{ route('register') }}";
              });
              </script>
        </div>
    </header>
    <section id="acercade">
        <div class="acerca">
        <div class="box">
            <h2 style="color:#000">Misión</h2>
            <p style="color:#000">Nuestra misión en Veterinaria Social Pets es proporcionar
                atención veterinaria de alta calidad y accesible a animales de compañía en situaciones
                 de vulnerabilidad y a sus familias. Buscamos promover el bienestar animal y brindar
                 apoyo a comunidades desfavorecidas, donde el acceso a servicios veterinarios de
                  calidad es limitado. A través de nuestro compromiso con la responsabilidad social,
                  nos esforzamos por mejorar la salud y calidad de vida de los animales, fomentando
                   la conciencia y educación en temas de cuidado animal.</p>
          </div>

          <div class="box">
            <h2 style="color:#000">Visión</h2>
            <p style="color:#000">Nuestra visión en Veterinaria Social Pets es ser una organización
                líder y referente en el campo de la atención veterinaria social. Aspiramos a expandir
                nuestra red de clínicas y profesionales veterinarios comprometidos para llegar a más
                comunidades necesitadas en todo el país. Buscamos generar un impacto positivo y duradero
                en la salud y el bienestar de los animales de compañía, promoviendo una sociedad más
                compasiva y consciente hacia ellos. A través de nuestra labor, deseamos contribuir a
                la construcción de un mundo en el que todos los animales tengan acceso a la atención
                veterinaria que merecen, independientemente de su situación socioeconómica.</p>
          </div>
        </div>
    </section>

    <section id="servicios" style="height: 1020px; display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <div class="contenedor-imagen">
          <img src="{{ asset('images/SERVICIOS2.jpg') }}">
          <div style="background-color: white; width: 100%; text-align: center;">
            <p style="font-family: fantasy; color: black; padding: 20px; font-size: 30px;">
              LOS MEJORES SERVICIOS, PARA EL ENGRIDO DEL HOGAR, AL ALCANCE DE TUS MANOS
            </p>
          </div>
        </div>
        <div class="image-container" style="display: flex; justify-content: center; gap: 20px;">
          <img src="{{ asset('images/baño1.jpg') }}" alt="Imagen 1" class="circular-image">
          <img src="{{ asset('images/emer.jpg') }}" alt="Imagen 2" class="circular-image">
          <img src="{{ asset('images/hospi.jpg') }}" alt="Imagen 3" class="circular-image">
          <img src="{{ asset('images/labo.jpg') }}" alt="Imagen 4" class="circular-image">
        </div>
      </section>




    <section id="especialidades">
        <div class="slide">
            <div class="slide-inner">
                <input class="slide-open" type="radio" id="slide-1" name="slide" aria-hidden="true"
                    hidden="" checked="checked">
                <div class="slide-item">
                    <img src="{{ asset('images/ESPECIALIDADES.jpg') }}">
                </div>
                <input class="slide-open" type="radio" id="slide-2" name="slide" aria-hidden="true"
                    hidden="">
                <div class="slide-item">
                    <img src="{{ asset('images/NEUROLOGIA.jpg') }}">
                </div>
                <input class="slide-open" type="radio" id="slide-3" name="slide" aria-hidden="true"
                    hidden="">
                <div class="slide-item">
                    <img src="{{ asset('images/CARDIOLOGIA.PNG') }}">
                </div>
                <input class="slide-open" type="radio" id="slide-4" name="slide" aria-hidden="true"
                    hidden="">
                <div class="slide-item">
                    <img src="{{ asset('images/DERMATOLOGIA.jpg') }}">
                </div>
                <input class="slide-open" type="radio" id="slide-5" name="slide" aria-hidden="true"
                    hidden="">
                <div class="slide-item">
                    <img src="{{ asset('images/GERIATRIA.jpg') }}">
                </div>
                <input class="slide-open" type="radio" id="slide-6" name="slide" aria-hidden="true"
                    hidden="">
                <div class="slide-item">
                    <img src="{{ asset('images/NUTRICION.jpg') }}">
                </div>
                <input class="slide-open" type="radio" id="slide-7" name="slide" aria-hidden="true"
                    hidden="">
                <div class="slide-item">
                    <img src="{{ asset('images/IMAGENOLOGIA.jpg') }}">
                </div>
                <input class="slide-open" type="radio" id="slide-8" name="slide" aria-hidden="true"
                    hidden="">
                <div class="slide-item">
                    <img src="{{ asset('images/ODONTOLOGIA.jpg') }}">
                </div>
                <input class="slide-open" type="radio" id="slide-9" name="slide" aria-hidden="true"
                    hidden="">
                <div class="slide-item">
                    <img src="{{ asset('images/CIRUGIA.jpg') }}">
                </div>
                <input class="slide-open" type="radio" id="slide-10" name="slide" aria-hidden="true"
                    hidden="">
                <div class="slide-item">
                    <img src="{{ asset('images/TRAUMATOLOGIA.jpg') }}">
                </div>
                <input class="slide-open" type="radio" id="slide-11" name="slide" aria-hidden="true"
                    hidden="">
                <div class="slide-item">
                    <img src="{{ asset('images/FELINA.JPG') }}">
                </div>
                <input class="slide-open" type="radio" id="slide-12" name="slide" aria-hidden="true"
                    hidden="">
                <div class="slide-item">
                    <img src="{{ asset('images/OFTA.jpg') }}">
                </div>

                <label for="slide-11" class="slide-control prev control-1">‹</label>
                <label for="slide-2" class="slide-control next control-1">›</label>
                <label for="slide-1" class="slide-control prev control-2">‹</label>
                <label for="slide-3" class="slide-control next control-2">›</label>
                <label for="slide-2" class="slide-control prev control-3">‹</label>
                <label for="slide-4" class="slide-control next control-3">›</label>
                <label for="slide-3" class="slide-control prev control-4">‹</label>
                <label for="slide-5" class="slide-control next control-4">›</label>
                <label for="slide-4" class="slide-control prev control-5">‹</label>
                <label for="slide-6" class="slide-control next control-5">›</label>
                <label for="slide-5" class="slide-control prev control-6">‹</label>
                <label for="slide-7" class="slide-control next control-6">›</label>
                <label for="slide-6" class="slide-control prev control-7">‹</label>
                <label for="slide-8" class="slide-control next control-7">›</label>
                <label for="slide-7" class="slide-control prev control-8">‹</label>
                <label for="slide-9" class="slide-control next control-8">›</label>
                <label for="slide-8" class="slide-control prev control-9">‹</label>
                <label for="slide-10" class="slide-control next control-9">›</label>
                <label for="slide-9" class="slide-control prev control-10">‹</label>
                <label for="slide-11" class="slide-control next control-10">›</label>
                <label for="slide-10" class="slide-control prev control-11">‹</label>
                <label for="slide-12" class="slide-control next control-11">›</label>
                <label for="slide-11" class="slide-control prev control-12">‹</label>
                <label for="slide-1" class="slide-control next control-12">›</label>



                <ol class="slide-indicador">
                    <li>
                        <label for="slide-1" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-2" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-3" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-4" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-5" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-6" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-7" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-8" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-9" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-10" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-11" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-12" class="slide-circulo">•</label>
                    </li>

                </ol>
            </div>
        </div>
    </section>

    <section id="redes" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <div class="contenedor-imagen" style=" margin-top:60px;">
            <img src="{{ asset('images/redes.jpg') }}">
        </div>
        <div class="acerca" style="margin-top: 50px;">

            <div class="box2">
                <h2 style="color:#000;font-size:30px">DATOS</h2>
                <p style="color:#000;font-size:20px" >DISTRITO: San Juan de Lurigancho

                    </p>
                    <p style="color:#000; font-size:20px">
                        HORARIO DE ATENCIÓN: Lunes - Domingo / 24 horas

                    </p>
                    <p style="color:#000; font-size:20px">
                            CORREO: petSocial@gmail.com
                    </p>
              </div>

              <div class="box2">
                <h2 style="color:#000;font-size:20px">REDES</h2>
                <p style="color:#000">FACEBOOK: PETsocial_OFICIAL</p>
                <p style="color:#000">    INSTAGRAM: @petSocial</p>
                <p style="color:#000">    TWITTER: PetSocial</p>
                <p style="color:#000">    TIKTOK: @petSocial </p>
              </div>
            </div>
    </section>
    <section id="contacto" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <!--Section heading-->

        <!--Section description-->
        <div style="display: flex; justify-content: center; align-items: flex-start;">
    <div class="row">
        <h1 class="font-weight-bold text-center my-4" style="color:#000; font-size:50px">Contactanos</h1>
        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="" style="color:#000">Nombre</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="" style="color:#000">Tu email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="" style="color:#000"> Tema</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message" style="color:#000">Tu mensaje</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();" >Enviar</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i style="color:#000" class="fas fa-map-marker-alt fa-2x"></i>
                    <p style="color:#000">San Juan de Lurigancho</p>
                </li>

                <li><i style="color:#000" class="fas fa-phone mt-4 fa-2x"></i>
                    <p style="color:#000">+51 999 999 999</p>
                </li>

                <li><i style="color:#000" class="fas fa-envelope mt-4 fa-2x"></i>
                    <p style="color:#000">petSocial@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>
    <div class="row" >
    <iframe style="margin-left:100px"src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3902.755443006611!2d-77.01659896040292!3d-11.99141669049185!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cf8b7ba1a56f%3A0xcca4e2b91072c82a!2sVeterinaria%20Social%20Pets!5e0!3m2!1ses!2spe!4v1688457506480!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
    </section>

    <footer id="dk-footer" class="dk-footer">
        <div class="container">

            <div class="row">

                <div class="col-md-12 col-lg-4">

                    <div class="dk-footer-box-info">
                        <a href="#" class="footer-logo">
                            <h1>Social Pet's</h1>
                        </a>
                        <p class="footer-info-text">
                            Reference site about Lorem Ipsum, giving information on its origins, as well as a random
                            Lipsum generator.
                        </p>
                        <div class="footer-social-link">
                            <h3>Siguenos en</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>San Juan de Lurigancho</h3>
                                    <p>Av. Canto Grande 2354</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>922 988 125</h3>
                                    <p>Llamanos</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Useful Links</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Projects</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Team</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#">Contact us</a>
                                    </li>
                                    <li>
                                        <a href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a href="#">Testimonials</a>
                                    </li>
                                    <li>
                                        <a href="#">Faq</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                    <h3>Suscribete</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <p>
                                    <!-- Don’t miss to subscribe to our new feeds, kindly fill the form below. -->
                                    Únete para conocer más de nosotros
                                </p>
                                <form action="#">
                                    <div class="form-row">
                                        <div class="col dk-footer-form">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                            <button type="submit">
                                                <i class="fa fa-send"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- End form -->
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2023</span>
                        <div class="">
                            Social Pets v{{ Illuminate\Foundation\Application::VERSION }}
                        </div>
                    </div>
                    <!-- End Col -->
                    <div class="col-md-6">
                        <div class="copyright-menu">
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link " href="#servicios">
                                        <i class="fas fa-hand-holding-medical"></i>
                                        Servicios
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">
                                        <i class="fas fa-user-md "></i>
                                        Especialidades
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">
                                        <i class="fas fa-user-circle "></i>
                                        Contacto
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End col -->
                </div>

                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
        <!-- End Copyright -->
        <!-- Back to top -->
        <div id="back-to-top" class="back-to-top">
            <a href="/" class="btn btn-dark" title="Back to Top" style="display: block;">
                <i class="	fas fa-angle-double-up"></i>
            </a>
        </div>

        <!-- End Back to top -->
    </footer>


    @yield('content')
    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/material-dashboard.min.js?v=3.0.0') }}"></script>
</body>

</html>
