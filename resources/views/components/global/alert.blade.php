<div class="container mx-auto">

    @if(session()->has('dark'))
        <div id="alert" class="mt-2 bg-gray-100 border border-gray-200 text-sm text-gray-800 rounded-lg p-4 flex justify-between items-center" role="alert" tabindex="-1" aria-labelledby="hs-soft-color-dark-label">
            <span id="hs-soft-color-dark-label" class="font-bold w-full break-words min-w-0">{{ session('dark') }}</span>
            <button type="button" class="ml-4 text-teal-800 hover:text-teal-900 focus:outline-none flex-shrink-0" aria-label="Close" onclick="this.parentElement.remove();">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    @if(session()->has('primary'))
        <div id="alert" class="mt-2 bg-blue-50 border border-blue-200 text-sm text-blue-600 rounded-lg p-4 flex justify-between items-center" role="alert" tabindex="-1" aria-labelledby="hs-soft-color-primary-label">
            <span id="hs-soft-color-primary-label" class="font-bold w-full break-words min-w-0">{{ session('primary') }}</span>
            <button type="button" class="ml-4 text-teal-800 hover:text-teal-900 focus:outline-none flex-shrink-0" aria-label="Close" onclick="this.parentElement.remove();">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    @if(session()->has('secondary'))
        <div id="alert" class="mt-2 bg-gray-50 border border-gray-200 text-sm text-gray-600 rounded-lg p-4 flex justify-between items-center" role="alert" tabindex="-1" aria-labelledby="hs-soft-color-secondary-label">
            <span id="hs-soft-color-secondary-label" class="font-bold w-full break-words min-w-0">{{ session('secondary') }}</span>
            <button type="button" class="ml-4 text-teal-800 hover:text-teal-900 focus:outline-none flex-shrink-0" aria-label="Close" onclick="this.parentElement.remove();">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    @if(session()->has('info'))
        <div id="alert" class="mt-2 bg-blue-100 border border-blue-200 text-sm text-blue-800 rounded-lg p-4 flex justify-between items-center" role="alert" tabindex="-1" aria-labelledby="hs-soft-color-info-label">
            <span id="hs-soft-color-info-label" class="font-bold w-full break-words min-w-0">{{ session('info') }}</span>
            <button type="button" class="ml-4 text-teal-800 hover:text-teal-900 focus:outline-none flex-shrink-0" aria-label="Close" onclick="this.parentElement.remove();">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    @if(session()->has('success'))
        <div id="alert" class="mt-2 bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 flex justify-between items-center" role="alert" tabindex="-1" aria-labelledby="hs-soft-color-success-label">
            <span id="hs-soft-color-success-label" class="font-bold w-full break-words min-w-0">{{ session('success') }}</span>
            <button type="button" class="ml-4 text-teal-800 hover:text-teal-900 focus:outline-none flex-shrink-0" aria-label="Close" onclick="this.parentElement.remove();">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    @if(session()->has('danger'))
        <div id="alert" class="mt-2 bg-red-100 border border-red-200 text-sm text-red-800 rounded-lg p-4 flex justify-between items-center" role="alert" tabindex="-1" aria-labelledby="hs-soft-color-danger-label">
            <span id="hs-soft-color-danger-label" class="font-bold w-full break-words min-w-0">{{ session('danger') }}</span>
            <button type="button" class="ml-4 text-teal-800 hover:text-teal-900 focus:outline-none flex-shrink-0" aria-label="Close" onclick="this.parentElement.remove();">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    @if(session()->has('warning'))
        <div id="alert" class="mt-2 bg-yellow-100 border border-yellow-200 text-sm text-yellow-800 rounded-lg p-4 flex justify-between items-center" role="alert" tabindex="-1" aria-labelledby="hs-soft-color-warning-label">
            <span id="hs-soft-color-warning-label" class="font-bold w-full break-words min-w-0">{{ session('warning') }}</span>
            <button type="button" class="ml-4 text-teal-800 hover:text-teal-900 focus:outline-none flex-shrink-0" aria-label="Close" onclick="this.parentElement.remove();">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    @if(session()->has('light'))
        <div id="alert" class="mt-2 bg-white/10 border border-white/10 text-sm text-white rounded-lg p-4 flex justify-between items-center" role="alert" tabindex="-1" aria-labelledby="hs-soft-color-light-label">
            <span id="hs-soft-color-light-label" class="font-bold w-full break-words min-w-0">{{ session('light') }}</span>
            <button type="button" class="ml-4 text-teal-800 hover:text-teal-900 focus:outline-none flex-shrink-0" aria-label="Close" onclick="this.parentElement.remove();">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const alert = document.getElementById('alert');
            setTimeout(function() {
                if (alert) {
                    alert.remove();
                }
            }, 5000);
        });
    </script>

</div>
