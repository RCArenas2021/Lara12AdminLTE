// Configuración base para Axios
// Última modificación: 26-07-2025 por ChatGPT
import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
