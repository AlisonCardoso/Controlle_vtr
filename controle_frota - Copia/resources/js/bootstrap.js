   
   
//importar o framework bootstrap
import 'bootstrap';

//importar o jquery
import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

// importat o select 2
import select2 from 'select2';
select2();

//importar o swet alert
import Swal from 'sweetalert2';
window.Swal = Swal;
// importando axios
import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
