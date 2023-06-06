import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
//import swal from 'sweetalert2';
import swal from 'sweetalert';

//window.Swal = swal;
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
