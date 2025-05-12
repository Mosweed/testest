import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('search-input');
        const form = document.getElementById('search-form');
        let timeout = null;

        input.addEventListener('input', function () {
            clearTimeout(timeout);
            timeout = setTimeout(() => {
                form.submit();
            }, 200); // 500ms debounce
        });
    });
