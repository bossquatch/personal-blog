<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bossquatch</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 502.36 130.34"><text transform="translate(70.37 116)" style="font-size:60px;fill:#ef3b2d;font-family:OCRAStd, OCR A Std, OCR A">Bossquatch</text><path d="M373.63,322.17a5.77,5.77,0,0,0-1.19-2.46l.39.23a3.74,3.74,0,0,0-1.57-1.95c-.54-.36-1.12-.77-1.12-.77l.58,0a7.71,7.71,0,0,1-1.09-.9l.67.29a6.24,6.24,0,0,1-.86-1.12l-.23-.41a6.37,6.37,0,0,0-1.44-1.57l.32,0a4,4,0,0,0-1.21-1.21l.38-.07a6.68,6.68,0,0,0-1.5-1,1.6,1.6,0,0,1-.77-.54l.55.16c-.64-.93-2.4-1.44-2.82-1.66l-.1-.07a10,10,0,0,1-1.14-1,4.14,4.14,0,0,0-1-1.24l.44.09a4.92,4.92,0,0,0-1.56-1l-.55-.45.61.16a4.62,4.62,0,0,0-1.95-1.5s-.13.16-.19,0-.48-.26-.48-.26l-.29-.48-.22.13-.39-.64-.48-.73,0,.35a6.49,6.49,0,0,1-1.22-1.76l-.35-.73-.13-.64-.16.06a4.24,4.24,0,0,0-.64-1.34l-.12-1.18-.2.15a8.14,8.14,0,0,0-.19-.83,7.59,7.59,0,0,0-.61-.86h.36a1.6,1.6,0,0,1-.43-.56l-.71-.59.14,1.39-.67-.24.24.82.48,1.48a5.84,5.84,0,0,1,.67,4.51l-.33-.62a8.22,8.22,0,0,1-.91,4c.91-2.07.33-5.57.33-5.57a2,2,0,0,1,.53.72,4.38,4.38,0,0,0-.77-2.78,6.58,6.58,0,0,0-.38-1.63,2.87,2.87,0,0,1-.19-1.92l.67.53a8.13,8.13,0,0,1-.19-1.82s-.1-.29.19.09.52.66.67.85a5.83,5.83,0,0,0,1.42.37,5.89,5.89,0,0,1-1.53-1.66l.93.06a3.52,3.52,0,0,1-1.35-1.31l.67.13-.44-.61.73.19a15.25,15.25,0,0,1-1.34-1.4s-.13-.16.13,0a4,4,0,0,0,.92.21,7.79,7.79,0,0,1-1.39-1.44l.44-.09a2.31,2.31,0,0,1-.53-1l.33.29a3.89,3.89,0,0,0,0-2l.29.41a4.32,4.32,0,0,0-.22-2,.85.85,0,0,0,.67.26c-.2-.23-.07-.77-.07-.77l.45.38.29-.67c.06.13.09.12.09.12l.21.19.15-.36a.35.35,0,0,0,0-.33l.36.35s0-.32,0-.42a1.61,1.61,0,0,1,0-.28l.38.32a1,1,0,0,0-.08-.64l.27.06a.87.87,0,0,1,0-.49c.19-.72.07-.82.07-.82l.35.06c0-.6,0-1.23,0-1.23.21-.27,1.08-1.71,1.08-1.71a2.34,2.34,0,0,0,.74-1.48,2.71,2.71,0,0,0,1.51-1.23,1.29,1.29,0,0,0-.07-1.77s-.17-.12.09-.05a.57.57,0,0,0,.46-.07.78.78,0,0,0,.69-.17l-.26-.41a1,1,0,0,0,.53,0l-.48-.46c.14,0,.72-.22.72-.22a4.48,4.48,0,0,1-1-.19,2.2,2.2,0,0,0,.53-.14c-.51,0-.46-.36-.46-.36a.72.72,0,0,0,.12-.46h-.38a3.09,3.09,0,0,0,.09-1.43l-.14.16a4.49,4.49,0,0,0-.12-1.34.69.69,0,0,1-.19.53,1,1,0,0,0-.29-.7,2.46,2.46,0,0,0-.34-.88l-.12.45a4.11,4.11,0,0,0-.26-1.17l-.05.43a11.67,11.67,0,0,0-1-1.9,3.19,3.19,0,0,0-1.18-.69,1.81,1.81,0,0,0-.6-.89v.24a3.46,3.46,0,0,0-1.47-.81,3.26,3.26,0,0,0-1.5,0c-.23-.29-1.15-.26-1.15-.26-.83-.32-1.51.71-1.51.71l.64-.58-.67.83a1.65,1.65,0,0,0-1.21,0,1,1,0,0,1,.57.26,1.88,1.88,0,0,0-1.08.35c.44,0,.54.19.54.19a3.29,3.29,0,0,0-1.12.45l.22.25-.28,0a.28.28,0,0,1,.12.38,1.15,1.15,0,0,0-.54-.32c.35.51,0,.67,0,.67a5.46,5.46,0,0,0-1.31.8,9.76,9.76,0,0,1-2,1,9.12,9.12,0,0,0,1.28-.22,2,2,0,0,0-1.09.89,5.69,5.69,0,0,1-1.09,1.06l.61-.1a3.75,3.75,0,0,1-1.05.8.87.87,0,0,0,.57.16,2.71,2.71,0,0,1-.6.83,2.31,2.31,0,0,0,.79-.27l-.62.67.58-.1a16.22,16.22,0,0,1-1.2,1.11l.76-.29-.52,1-1.35.91c-1.1,1-1.39.67-1.39.67l-.24-.86-.24.76-.28-1-.29.86-.29-1.25-.19,1.54a5.93,5.93,0,0,0-.29-1.25,1.47,1.47,0,0,1-.33,1.54l-.39-.48-.24.67-.14-1.1a1.27,1.27,0,0,1-.53,1.15l-.14-.87-.24.82-.29-.34v1.15a1.4,1.4,0,0,0-.82-.43l-.14.82c-.05-.43-.67-.82-.67-.82l.14,1c-.72-1.25-1.1-1.29-1.1-1.29a3.86,3.86,0,0,1,.67,2l-1.1-.1.29.44c-.91,0-1.2-.34-1.2-.34l.43.62a1.5,1.5,0,0,1-1.1-.57l.28.57-.76-.19c.24.58,1.34,1.15,1.34,1.15-1,.24-1.3-.19-1.3-.19.05.58.82.91.82.91v.39c-.29.14-.53.71-.53.71l-.48.72-.81.48.86.05a15.51,15.51,0,0,1-1.53,1.1l.86-.09c-.34,1-.29,1-.29,1l-1.15.86c-1.2,1.49-1.92,1.58-1.92,1.58a10.63,10.63,0,0,0,1.3-.05,6,6,0,0,0-1.3,1.92c-.67.77-2.63,3.36-2.63,3.36a11.91,11.91,0,0,1-2.69,2.4l1.1-.44-1.24,1.35a6.43,6.43,0,0,1-1.73,1.2,3.59,3.59,0,0,0,.91-.15c-1.58,1.44-2.35,4.61-2.35,4.61l-.77,1.77a15.09,15.09,0,0,1-1.34,1.77l.67-.28L313,306.11l-.72,1.77a2.75,2.75,0,0,0-1.06,1.49L311,310c-.91.38-1.63,1.92-1.63,1.92.38-.62,2.4-1.73,1.58-1.2a6,6,0,0,0-1.43,2.45c-.86,1.83-1.44,2.21-1.59,2.28l.91-.37a6.41,6.41,0,0,1-1.63,1.49l.77-.1-1,.63a3,3,0,0,0,1.15-.34l-.82.67-.62.44c-.39.09-2.35.86-2.35.86l1.05,0a8.39,8.39,0,0,1-2.11,1.06l.67-.1a2.32,2.32,0,0,1-1,.48l.33.29-.62-.05h-.18c-1.35.13-1.35.61-1.35.61a3.85,3.85,0,0,0-1,.34.86.86,0,0,0-.77-.72l-.19-.48c-.15-.62-.39-.43-.39-.43l0-.34a.37.37,0,0,0-.63-.24c.19-.77-.19-.86-.19-.86-.38-.05-.72.72-.72.72a1.36,1.36,0,0,0-.43.77,1.41,1.41,0,0,0,0,1.05,2.64,2.64,0,0,0,.53,1.49c-.82.33.62.67.62.67l.43.38a12.61,12.61,0,0,0,1.9.63c-.62.48-.36.43-.36.43a.9.9,0,0,0,.62-.19,2.08,2.08,0,0,1-.77,1.19l.63.1a4.32,4.32,0,0,1-1.16,1.34,3.9,3.9,0,0,0,1.44-.43L300,327a1.89,1.89,0,0,0,1.1-.15c-.24.77-1.39,1-1.39,1a3.56,3.56,0,0,0,2.4-.86,2.11,2.11,0,0,1-1.2,1.29,6.28,6.28,0,0,0,2.3-.46l-.57.42c1.23,0,1.63-.37,1.76-.59l-.23.63a3.68,3.68,0,0,0,1.68-2,2.63,2.63,0,0,1-.81,2,3.79,3.79,0,0,0,1.58-2.25,4.59,4.59,0,0,1-.19,1.68l.48-.58.19.67a2.15,2.15,0,0,1,.91-1.58l-.34,1.2c.86-.79.92-1.31.89-1.52l.26,1,.34-1.29.24,1.43a3.16,3.16,0,0,1,.43-1.48l.1,1a7.16,7.16,0,0,1,.52-1.78,3.78,3.78,0,0,0,.15,1.44l.24-1.1.14.67.39-1,.14.34c-.14-.34.33-1.59.33-1.59l.15.92.29-.92.35-.75a4,4,0,0,0,.16,1.19,12.1,12.1,0,0,1,.22-1.54l.16.77a1.68,1.68,0,0,1,.54-1.09v.45l.45-.58.26.29a9.19,9.19,0,0,0,.38-1.85l.19.54.23-.8V321a6.58,6.58,0,0,0,.41-1.21l0,.8.47-1.12-.25,1.53a3.12,3.12,0,0,0,.48-1.6l.13.42a5.86,5.86,0,0,0,.44-1.76l.1.35c.16-.44.32-1,.32-1l0,.67a3.52,3.52,0,0,0,.6-1.28,6.44,6.44,0,0,1-.22,1.17,5.53,5.53,0,0,0,.7-1.39l-.06.89a3.45,3.45,0,0,0,.54-1.72,9.6,9.6,0,0,1,.26,1.4,10.51,10.51,0,0,0,.35-2.36l.26.8a7.18,7.18,0,0,0,.32-1.41l.28,1s.13-1.25.23-1.6l.19.67a8,8,0,0,1,.29-2.07l.25.54.13-.9.29.58.16-.7a2.92,2.92,0,0,0,.57.22,3.6,3.6,0,0,1-.35-2.56l.19,1,.32-1.88.39.32a1.77,1.77,0,0,1,.61-2s.95-.73,1-1.4c0,0,.16-.9.64-1a2.82,2.82,0,0,0-.26.59c.62.14.58.41.58.41l.44-1.09.52.6.38-2.07.55,1.4.47-1.34.58,1.22c.38-.19.89-1.79.89-1.79l.26.83.45-.77.44.58a1.63,1.63,0,0,0,.45-1.22l.45.51a2.44,2.44,0,0,0-.06-1.27l.64.44.19-.57.64.38.12-.45.71.26a7.09,7.09,0,0,0,.38-2.69,5.48,5.48,0,0,1,1,1.22l.45-.64-.32,1.79a6.82,6.82,0,0,0-.77-1.6,3.93,3.93,0,0,1-.83,2.52l-.37-.52v1.13l-.82-.92c.2.47-.26,1.12-.26,1.12,0-.77-.38-.79-.38-.79a1.85,1.85,0,0,1-.29,1.44l-.36-.72c-.26,1.15-.53,1.1-.62,1.27s-.41-.57-.41-.57l-.44,1.09-.32-.89a3.72,3.72,0,0,1-.83,1.53l-.64-1.15a3.56,3.56,0,0,1-.32,1.41l-.51-1a14.11,14.11,0,0,1-.39,1.6l-.56-.91a3.43,3.43,0,0,1-.71,1.48,1.23,1.23,0,0,0-.44-1,.91.91,0,0,0,0,.3,2,2,0,0,1-1.09,1.6s-1,.61-.38,2.2l-.58-.25A6.58,6.58,0,0,0,323,311l-.51-.24a13.15,13.15,0,0,0,.69,1.71l-1-.35-.28,1-.26-.23-.13.58-.33-.44a12.35,12.35,0,0,0,.09,2.53l-.54-.85-.16,1.28-.32-.62-.37,1.09-.19-.27a2.31,2.31,0,0,1-.58,1.5l-.2-.58a3.1,3.1,0,0,1-.79,1.15l0-.38-.57.66-.23,1.08a7.31,7.31,0,0,0-.2,2.45l-.24,1.1a3.79,3.79,0,0,1-.86,1.73l.77-.48-.43.81.43-.09c-.29.67-.63,1.29-.63,1.29l.48.1a4.6,4.6,0,0,1-1,1.24l.57,0c0,.86-1.05,1.39-1.05,1.39l.72-.15a3.91,3.91,0,0,0-.53,1.39,4.69,4.69,0,0,1-.53,1.83l.43-.39a9.11,9.11,0,0,0-.43,2.06,9.06,9.06,0,0,1-.09,3,9.43,9.43,0,0,0,.09,2.83,8.33,8.33,0,0,1-.33,1.63l.48-.53a18,18,0,0,1-.53,3.21l.57-.33c-.09,2-.52,2.39-.52,2.39l.72-.38-.1.86-.29,1a6.76,6.76,0,0,1-1.29,1.87l.81-.53-.48.72a4.5,4.5,0,0,1-2,1.15,5,5,0,0,1,.81,0l-1.24,1.06c-1.16.91-3.41,6-3.41,6-.77,1.44-2.35,3.88-2.35,3.88l.48-.33a27.72,27.72,0,0,1-1.77,3.79c-1.06,1.92-1.54,2.11-1.54,2.11l-1.44.91c-2,1.58-1.53,4.46-1.53,4.46a1.59,1.59,0,0,1,.57-1.2,7,7,0,0,0-.24,2l.39-.38.05,1.25c0-.67.81-1.25.81-1.25a2,2,0,0,0,0,1.34,3.44,3.44,0,0,1,.72-1.63c-.48.53,0,2.26,0,2.26a4.68,4.68,0,0,1,.43-1.35,3.84,3.84,0,0,0,.29,1.49c-.1-.24.34-1,.34-1l.14.67V375c0-.15.62-.82.62-.82s.29-.33.19,0a2.75,2.75,0,0,0,.2,1.11l0,.19a3.67,3.67,0,0,1,.39-1l.24.58c.29-.58,1.44-.63,1.44-.63l-.72.39s-1,0,.19,0,1.34-.63,1.34-.63a1.1,1.1,0,0,0,.43,1l.67-.24-.67.91.87-.38-.34.38c1.15-.19,1.25-.57,1.25-.57l.19.33.67,0-.14.48s-.44.14.19.09a5.38,5.38,0,0,0,1.58-.57l.05.28a2.29,2.29,0,0,0,1.05-.52,4.39,4.39,0,0,0,.24.43l.72-.34.29.39.77.09.67.05c.33,0,.67-.43.67-.43l.05.38c.56-.07.61-.37.59-.53l.08.39.14.43a1.71,1.71,0,0,0,1.49-.77c0,.34,1,.58,1,.58l.38-.53a6,6,0,0,0,1.15-.19l-.14-.48a1.31,1.31,0,0,0,.86.62l.05-.48.72.05a2.11,2.11,0,0,1-.59-1c.11.19.54.08.54.08a2,2,0,0,1-.43-.91c-.43-1.15-1.2-.86-2-.82h-.19a15.68,15.68,0,0,1-2.54-.44,7.64,7.64,0,0,0-1.15-.43c-2.49-.57-2.78-1.77-2.78-1.77l-.14-1.54.67.39c-.39-.34,0-1.2,0-1.2-.09.81.82,1.29.82,1.29-.29-.29-.29-1.72-.29-1.72l1.06.33a1.75,1.75,0,0,1-.34-1.44c0,.63.82,1.11.82,1.11-.44-.34-.58-2-.58-2l1,.67a2.77,2.77,0,0,1-.29-1.58c0,.72,1.06,1.39,1.06,1.39l-.2-.62.91.43a2.8,2.8,0,0,1-.86-2.16,1.51,1.51,0,0,0,1.06.86,2.48,2.48,0,0,1-.72-2.06c.57.24,1,2.21,1,2.21a19.45,19.45,0,0,0-.39-2.61,1.68,1.68,0,0,0,1,.93c-.48-.43-.53-1.73-.53-1.73l.53,1-.13-1c.14.57,1.09.82,1.09.82a2.18,2.18,0,0,1-.43-1.54c.52.77.86.63.86.63a1.66,1.66,0,0,1-.48-1.78l.77,1.15-.39-1.34.82,1.87a6.44,6.44,0,0,0-.48-2.49l.86,1.67c-.2-.78-.62-2.25-.62-2.25l.67,1.06-.38-1.59a6.7,6.7,0,0,0,1.05,1.73L322,357a2.73,2.73,0,0,0,1,1.15,3.5,3.5,0,0,1-.86-2.26c-.05.53,1.44,1.44,1.44,1.44-1.54-1.25-1-3.69-1-2.73s1.15,1.44,1.15,1.44c-.62-.48-.62-2.07-.62-2.07-.05.44.72.77.72.77a2.37,2.37,0,0,1-.29-1.44,3.41,3.41,0,0,0,.68,1.34,5.47,5.47,0,0,1-.3-1.72c0,.57,1.15,1.39,1.15,1.39a2.06,2.06,0,0,1-.72-2.11l.34,1a2.44,2.44,0,0,1,.33-1.54c.15.68,1.15,1.4,1.15,1.4a5.13,5.13,0,0,1-.43-1.92,2.47,2.47,0,0,0,1.11,1.48c-1-.86-.53-2.68-.53-2.68a3.15,3.15,0,0,0,.77,1.34l-.58-1.87.8,1.39a14.65,14.65,0,0,1-.56-2.83,3.49,3.49,0,0,0,.63.95,4.23,4.23,0,0,1-.39-1.38l.91.86a5,5,0,0,1-.68-2,2.25,2.25,0,0,0,.54.94c-.29-.29-.24-1.63-.24-1.63l.33.77a3.36,3.36,0,0,0-.14-1.61l.29.69c0-.13,0-.31,0-.51l-.65-.78v.24c-.68-.34-1.39-2.21-1.39-2.21l-.15.48a8.43,8.43,0,0,1-1.2-2.59l-.43-.43c-3-3-2.92-4.94-2.92-4.94a11.06,11.06,0,0,0,3.16,4.27l.62.67a6.06,6.06,0,0,0,.82,2l.33-.53a7.68,7.68,0,0,0,1.06,2.45l.14-.87a2.81,2.81,0,0,0,.55,1.45c0-.4-.07-.73-.07-.73l.39,1.06.28,1a4.73,4.73,0,0,1,.48-1.67c0,.38.29,2.39.29,2.39l.1-1.34.14,1.2.1-1,.24.43.05,1.29.38-.81a3,3,0,0,0,.19,1.72l.19-1.63c0,.34.19,2,.19,2l.34-1.83c.05.44.24,1.3.24,1.3a3.08,3.08,0,0,1,.24-1.44l.24,1.68.62-1.06a11,11,0,0,0,0,2.83l.34-1.68a3.31,3.31,0,0,0,.48,1.73,4.64,4.64,0,0,1,.14-2.49,9.49,9.49,0,0,0,.29,2.06,3.88,3.88,0,0,1,.29-1.49,7.18,7.18,0,0,0,.33,2.21,4.09,4.09,0,0,1,.39-1.78l-.1.58a8.3,8.3,0,0,0,.43,2.25,7.27,7.27,0,0,1,.1-2.2l.14.48.24.43.19,1.39.29-1.34.1,1.24a4.34,4.34,0,0,0,.24-1c0-.67.05,2,.05,2,.71-.67.43-2.44.43-2.44a8.4,8.4,0,0,1,.24,3.07l.28-1.63.24,1.63a11.71,11.71,0,0,0,.15-2.45,2.68,2.68,0,0,1,.24,1.92l.33-.39a3.69,3.69,0,0,1,0,1.64c.33-.2.47-1.11.47-1.11l.24-1.05.2,1,.28-.91a7,7,0,0,1,.05,1.72,1.51,1.51,0,0,0,.5-1.27l.17,1.42.34-.63a24.06,24.06,0,0,1-.19,3.31l.52-1.15a8,8,0,0,1-.33,2.83l.53-.43a5.32,5.32,0,0,1-.1,1.63,9,9,0,0,0-.48,2.92,3.34,3.34,0,0,1-.38,2c.19.05,1-1,.62-.48a.75.75,0,0,0-.08.18,13.19,13.19,0,0,0-.16,2.84l.48-.14a14,14,0,0,0-.1,3.69l.34-.14a1.82,1.82,0,0,1-.1,1.48l.44-.38c.48.81-.29,2.92-.29,2.92.43-.14.86-1.39.86-1.39a2.36,2.36,0,0,1-.86,2c.91-.05,1-.43,1-.43l-.33,1.05c-.67.58-.24,2.11-.24,2.11a2.28,2.28,0,0,1-.43,1.11c1.05,0,1.24-.29,1.24-.29a.68.68,0,0,0,.72.91c-.19-.62,1.25-.1,1.25-.1.91.1.38.34.38.34a11.5,11.5,0,0,1,2.06-.34l-.47.43a5,5,0,0,0,2.25-.19l0,.43c.58,0,2-1.39,2-1.39s.52-.48.24,0a.77.77,0,0,0-.13.7,9.07,9.07,0,0,1,1.57.25,4.19,4.19,0,0,0,2,.63c-.48-.58,1.1-.72,1.1-.72,1.25,0,1,.67,1,.67a8.69,8.69,0,0,0,2.4-.58,2.85,2.85,0,0,0,1.77.68c-1-.34-.19-.82-.19-.82a4.06,4.06,0,0,0,1.92.72l0-.67a2.87,2.87,0,0,0,2,.43c-.58-.19-.53-1-.53-1a1.09,1.09,0,0,0,.64-.24,2.54,2.54,0,0,0,.61-.24c-.34-.14-.67-.77-.67-.77l.43.1a1.22,1.22,0,0,0-.53-.86,2.05,2.05,0,0,0-.67-1.06,1.1,1.1,0,0,0-1.49-.86,4.59,4.59,0,0,1-1.72,0l-1.83-.14a1.71,1.71,0,0,0-.86-.24l.34-.29c-.77,0-1-.29-1-.29l.14-.24a1.16,1.16,0,0,0-1,0l.43-.29a3.83,3.83,0,0,0-1.48.1c-1.25.24-1.38-.27-1.38-.27a3.68,3.68,0,0,1-1.63-1.67.91.91,0,0,0,.67.32c-.64-.6-.51-2.07-.51-2.07.16.32,1.41.86,1.41.86a3.56,3.56,0,0,1-1.44-2s1.79.54.77.12a.52.52,0,0,1-.13-.06c-.91-.56-1.06-2.81-1.06-2.81a1.21,1.21,0,0,0,.48.51,5.2,5.2,0,0,1-.64-2.16l.53.86a25.82,25.82,0,0,1-.24-3.5l.53.48c-.29-.86-.62-2.06-.62-2.06l.48.43a7,7,0,0,1-.44-2.3l.34.67a9.8,9.8,0,0,0-.62-3.79l.43.24a7.16,7.16,0,0,1-.39-2.68l.2,1,.33-.82.19.72a9.86,9.86,0,0,0-.52-3.59,9.53,9.53,0,0,1,.67,1.05,9.92,9.92,0,0,0-1.58-4.75l.47.34a14,14,0,0,0-2-3,45.5,45.5,0,0,1-3.5-5.18l.81.77-.52-1.2a4,4,0,0,1-.72-1.54l.52.39a3.55,3.55,0,0,0-1.43-2.21c-1.11-.48-1.2-1-1.2-1l1,.24a5,5,0,0,1-1.25-2,6,6,0,0,0-2-3,2.6,2.6,0,0,1-1.58-1.73l.53.05a3.39,3.39,0,0,1-.63-1.39l.68.19c-.58-.53-.34-2.11-.34-2.11a2.3,2.3,0,0,0,.58.81,3.44,3.44,0,0,1-.24-1.67l.14.57.33-1.58a5.54,5.54,0,0,0,.72-3.55l.15.48.33-.48v.81l.29-.67c.43,1.35.1,1.59.1,1.59s-.34.81.19-.05a7,7,0,0,0,.43-2.93l.38,1-.19-1.63.43.72,0-2.92.09.86a5.51,5.51,0,0,0,.29-2.69,3.62,3.62,0,0,1,.48.72l.1-1.63.33,1.15a5.61,5.61,0,0,0,.19-2.35l.15.72.33.82.29-1.06.34,1.11.43-.87.24.77a5.59,5.59,0,0,0,.24-1.58c.09.24.33,1.05.33,1.05l.39-1.2.09,1.11a4.19,4.19,0,0,0,.39-2c.52.67,0,2.5,0,2.5a4.3,4.3,0,0,0,.82-2.35l.05.81h.33l-.14.91.48-.29a5.5,5.5,0,0,0-.1,1.49c.29-.81.48-.86.48-.86v1a2.25,2.25,0,0,0,.05,1.24h.48l-.19.87.43-.44-.19,1.35.57-.91-.09.76.43-.62-.39.86a2,2,0,0,0,.82-.86l-.19,1.1a5.94,5.94,0,0,0,.88-1.16v1.56a7.68,7.68,0,0,1,.73-1.28,6.37,6.37,0,0,0,.13,1.47,12,12,0,0,1,.35-1.43l0,1.34.42-1.12s.22-.22.13,0a7.26,7.26,0,0,0,.13,1.6l.38-.9a3.5,3.5,0,0,0,.19,1.63,4.8,4.8,0,0,1,.55-.8,3.94,3.94,0,0,0,.22,1.28l.22-1a6,6,0,0,0,.13,1.44l.25-.65a4.12,4.12,0,0,0,.1,1.22,2.79,2.79,0,0,1,.55-.89l.12-.29a3.69,3.69,0,0,0-.06,1.09c0-.35.54-.9.54-.9V318l.35-.48a7.88,7.88,0,0,0,.26,1.15,2.05,2.05,0,0,1,.19-.83c0,.23.32.55.32.55a1.62,1.62,0,0,1,.16-.87,4.82,4.82,0,0,0,.45,1l.22-.68a3.45,3.45,0,0,0,.42,1.06.42.42,0,0,1,.13-.35l.28,0,.2.54.25-.48c0,.22.55.83.55.83a.61.61,0,0,1,.31-.51,5.78,5.78,0,0,0,.39,1,1.47,1.47,0,0,1,.19-.73l.32,1c-.1-.38.42-.77.42-.77l.28.23.23-.42a5.71,5.71,0,0,0,.32,1.28l.22-.67.15,1.1a2.49,2.49,0,0,1,.3-.85,5.87,5.87,0,0,0,.27,1.84,3.26,3.26,0,0,1,.18-1.13,5.12,5.12,0,0,0,.38,1.15,1.54,1.54,0,0,1,.54-1.51l.35.68.1,1.27a11.63,11.63,0,0,0,.1,1.19c.19.51.28.48.28.48.8.06.64-1.44.64-1.44l.1-1V321l.22-.1a2.11,2.11,0,0,0,.64,1.06l.35.57c-.19.39.48,1.7.48,1.7l.1.32a5.51,5.51,0,0,0-.22,1.24l-.23.74c-.25.93.16,1.21.16,1.21.71.2.9-.83.9-.83a7.31,7.31,0,0,0,.32-1.47,6.47,6.47,0,0,0,.22-1.56l.38.67-.06.64v1a5.24,5.24,0,0,0-.19.67,2,2,0,0,0-.39,1.06c.36.64,1-.2,1-.2a1.51,1.51,0,0,0,.41-.67,1.71,1.71,0,0,0,.32-.83c.42-.35.64-1.72.64-1.72a6.27,6.27,0,0,0,.1-1.92,3.84,3.84,0,0,1,.38.51l.06-.83.29.41-.25-.89Zm-20.34-46.72h.89l.73.08c.65,1.05-.56,1.22-.56,1.22l-.41-.09A1.35,1.35,0,0,1,353.29,275.45Zm-3.45-1.89c2.84,0,2,1.54,2,1.54-.57.41-1.3-.16-1.3-.16A1.32,1.32,0,0,1,349.84,273.56Z" transform="translate(-296.63 -263)" style="fill:#ef3b2d"/></svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://www.bossquatch.com" class="underline text-gray-900 dark:text-white">You found me</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    If you were trying to find this page, great job!  If you just happened upon it, keep moving - nothing to see here.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://www.linkedin.com/in/douglas-cockerham" class="underline text-gray-900 dark:text-white">Who am I?</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    No one really.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://foxnews.com/" class="underline text-gray-900 dark:text-white">My Team</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <iframe width="420" height="230" src="https://www.youtube.com/embed/9tOlTDS10gI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Here I am! <small>(crushing it in 1995)</small></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <img src="/images/me.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 259.59 405.24" width="24"><polygon points="196.59 402.24 176.59 382.24 176.59 183.76 172.87 187.48 158.72 193.34 140.86 193.34 140.86 260.53 135 274.68 115 294.68 100.86 300.53 83 300.53 83 382.24 63 402.24 23 402.24 3 382.24 3 260.53 8.86 246.39 28.86 226.39 43 220.53 60.86 220.53 60.86 153.34 66.72 139.2 86.72 119.2 100.86 113.34 118.72 113.34 118.72 43 124.58 28.86 144.58 8.86 158.72 3 216.59 3 230.73 8.86 250.73 28.86 256.59 43 256.59 382.24 236.59 402.24 196.59 402.24" style="fill:none;stroke:#a0aec0;stroke-miterlimit:10;stroke-width:6px"/><polygon points="236.59 382.24 196.59 382.24 196.59 63 178.72 63 178.72 153.34 158.72 173.34 120.86 173.34 120.86 260.53 100.86 280.53 63 280.53 63 382.24 23 382.24 23 260.53 43 240.53 80.86 240.53 80.86 153.34 100.86 133.34 138.72 133.34 138.72 43 158.72 23 216.59 23 236.59 43 236.59 382.24" style="fill:none;stroke:#a0aec0;stroke-miterlimit:10;stroke-width:6px"/><polyline points="216.59 382.24 216.59 43 158.72 43 158.72 153.34 100.86 153.34 100.86 260.53 43 260.53 43 382.24" style="fill:none;stroke:#a0aec0;stroke-miterlimit:10;stroke-width:6px"/></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">My thoughts on going back to the office</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <iframe width="420" height="230" src="https://www.youtube.com/embed/1Npo0cmp-VY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 158.29 200.7" width="24"><rect x="20.06" width="18.95" height="200.7" style="fill:#a0aec0"/><polyline points="20.06 40.02 0 40.02 0 21.06 20.06 21.06" style="fill:#a0aec0"/><polyline points="39.02 21.06 158.29 21.06 158.29 40.02 39.02 40.02" style="fill:#a0aec0"/><rect x="48.18" y="46.78" width="101.09" height="67.84" rx="5.65" style="fill:#a0aec0"/></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">This space for rent</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <img src="/images/rent.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/pcdoug" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
{{--                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>--}}
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width=".5" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><defs><style>.cls-1{fill:none;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}.cls-1,.cls-2{font-size:6px;font-family:Belgium;}.cls-2,.cls-3{fill:#231f20;}.cls-3{stroke-miterlimit:10;stroke-width:0.5px;}</style></defs><rect class="cls-1" x="1" y="1" width="15.72" height="15.72"/><text class="cls-2" transform="translate(7.57 7.5)">14</text><line class="cls-3" x1="4.55" y1="9.74" x2="14.78" y2="9.74"/><line class="cls-3" x1="4.55" y1="11.22" x2="14.78" y2="11.22"/><line class="cls-3" x1="4.55" y1="12.7" x2="14.78" y2="12.7"/><line class="cls-3" x1="4.55" y1="14.18" x2="14.78" y2="14.18"/></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-500">A typical day goes something like this:</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/rJGhA2vLdA4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/TKQyPfN6s88" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pebaBnA6PTY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <iframe width="560" height="315" src="/images/patrick_eating.gif" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/YDXduFEjiQk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/II1x9ptMZag" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/FiG-ZfnYkl0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/NmPhaG1ud38" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
