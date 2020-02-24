<div class="fixed bottom-0 flex w-full h-12 whitespace-no-wrap lg:hidden">
    <a href="#"
        class="flex items-center justify-center w-full px-2 text-gray-100 bg-green-700 border-2 border-green-900 hover:text-gray-900">
        Mercado energético en directo
    </a>
</div>

<div class="fixed flex-col justify-center hidden lg:flex center-y">
    <a href="#"
        class="flex items-center justify-center w-16 h-16 px-2 text-gray-100 bg-green-700 border-2 border-b border-l-0 border-green-900 rounded-t rounded-tl-none hover:text-gray-900">
        Mercado energético en directo
    </a>
    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}&display=popup"
        class="flex items-center justify-center w-16 h-16 text-gray-100 bg-green-700 border-2 border-t-0 border-b border-l-0 border-green-900 hover:text-gray-200 hover:bg-green-700 hover:text-gray-900"
        onclick="event.preventDefault(); window.open('https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}&display=popup', '_blank', 'toolbar=0,location=0,menubar=0')"
        aria-label="Facebook">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310" class="w-5 h-5 fill-current">
            <path
                d="M81.703 165.106h33.981V305a5 5 0 005 5H178.3a5 5 0 005-5V165.765h39.064a5 5 0 004.967-4.429l5.933-51.502a5 5 0 00-4.966-5.572h-44.996V71.978c0-9.732 5.24-14.667 15.576-14.667h29.42a5 5 0 005-5V5.037a5 5 0 00-5-5h-40.545A39.746 39.746 0 00185.896 0c-7.035 0-31.488 1.381-50.804 19.151-21.402 19.692-18.427 43.27-17.716 47.358v37.752H81.703a5 5 0 00-5 5v50.844a5 5 0 005 5.001z" />
        </svg>
    </a>
    <a target="_blank"
        href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ Helpers::encoded_page_title() }}"
        class="flex items-center justify-center w-16 h-16 text-gray-100 bg-green-700 border-2 border-t-0 border-b border-l-0 border-green-900 hover:text-gray-200 hover:text-gray-900"
        aria-label="Twitter"
        onclick="event.preventDefault(); window.open('https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ Helpers::encoded_page_title() }}', '_blank', 'toolbar=0,location=0,menubar=0')">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 310" class="w-5 h-5 fill-current">
            <path
                d="M302.973 57.388a117.512 117.512 0 01-14.993 5.463 66.276 66.276 0 0013.494-23.73 5 5 0 00-7.313-5.824 117.994 117.994 0 01-34.878 13.783c-12.381-12.098-29.197-18.983-46.581-18.983-36.695 0-66.549 29.853-66.549 66.547 0 2.89.183 5.764.545 8.598C101.163 99.244 58.83 76.863 29.76 41.204a5.001 5.001 0 00-8.196.642c-5.896 10.117-9.013 21.688-9.013 33.461 0 16.035 5.725 31.249 15.838 43.137a56.37 56.37 0 01-8.907-3.977 5 5 0 00-7.427 4.257c-.007.295-.007.59-.007.889 0 23.935 12.882 45.484 32.577 57.229a57.372 57.372 0 01-5.063-.735 4.998 4.998 0 00-5.699 6.437c7.29 22.76 26.059 39.501 48.749 44.605-18.819 11.787-40.34 17.961-62.932 17.961a120.4 120.4 0 01-14.095-.826 5 5 0 00-3.286 9.174c29.023 18.609 62.582 28.445 97.047 28.445 67.754 0 110.139-31.95 133.764-58.753 29.46-33.421 46.356-77.658 46.356-121.367 0-1.826-.028-3.67-.084-5.508 11.623-8.757 21.63-19.355 29.773-31.536a5 5 0 00-6.182-7.351z" />
        </svg>
    </a>
    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ request()->fullUrl() }}&title={{ Helpers::encoded_page_title() }}"
        class="flex items-center justify-center w-16 h-16 text-gray-100 bg-green-700 border-2 border-t-0 border-b border-l-0 border-green-900 hover:text-gray-200 hover:text-gray-900"
        onclick="event.preventDefault(); window.open('https://www.linkedin.com/shareArticle?mini=true&url={{ request()->fullUrl() }}&title={{ Helpers::encoded_page_title() }}', '_blank', 'toolbar=0,location=0,menubar=0')"
        aria-label="LinkedIn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 455 455" class="w-5 h-5 fill-current">
            <g fill-rule="evenodd" clip-rule="evenodd">
                <path d="M246.4 204.35v-.665c-.136.223-.324.446-.442.665h.442z" />
                <path
                    d="M0 0v455h455V0H0zm141.522 378.002H74.016V174.906h67.506v203.096zm-33.753-230.816h-.446C84.678 147.186 70 131.585 70 112.085c0-19.928 15.107-35.087 38.211-35.087 23.109 0 37.31 15.159 37.752 35.087 0 19.5-14.643 35.101-38.194 35.101zM385 378.002h-67.524V269.345c0-27.291-9.756-45.92-34.195-45.92-18.664 0-29.755 12.543-34.641 24.693-1.776 4.34-2.24 10.373-2.24 16.459v113.426h-67.537s.905-184.043 0-203.096H246.4v28.779c8.973-13.807 24.986-33.547 60.856-33.547 44.437 0 77.744 29.02 77.744 91.398v116.465z" />
            </g>
        </svg>
    </a>
</div>