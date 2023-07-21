$(function() {

    $('.btn-link[aria-expanded="true"]').closest('.accordion-item').addClass('active');
  $('.collapse').on('show.bs.collapse', function () {
	  $(this).closest('.accordion-item').addClass('active');
	});

  $('.collapse').on('hidden.bs.collapse', function () {
	  $(this).closest('.accordion-item').removeClass('active');
	});

    

});

document.getElementById('cpf').addEventListener('input', function (e) {
	var target = e.target;
	var input = target.value.replace(/\D/g, '').substring(0, 11);
	var len = input.length;

	if (len > 3 && len < 7) {
		input = input.replace(/(\d{3})(\d)/, "$1.$2");
	} else if (len > 6 && len < 10) {
		input = input.replace(/(\d{3})(\d{3})(\d)/, "$1.$2.$3");
	} else if (len > 9) {
		input = input.replace(/(\d{3})(\d{3})(\d{3})(\d)/, "$1.$2.$3-$4");
	}

	target.value = input;
});