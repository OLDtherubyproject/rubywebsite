import * as $ from 'jquery';
import swal from 'sweetalert2';

export default (function () {
    $(document).ready(function() {
    	$('#group_id').select2({
  		theme: "bootstrap"
	});
	$('#account_id').select2({
  		theme: "bootstrap"
	});
    });
}())
