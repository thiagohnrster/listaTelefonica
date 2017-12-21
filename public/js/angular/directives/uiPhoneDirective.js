angular.module('listaTelefonica').directive('uiPhone', function() {
	return {
		require: 'ngModel',
		link: function(scope, element, attrs, ctrl) {
			var _formatPhone = function(phone) {
				phone = phone.replace(/\D/g, '');
				phone = phone.replace(/^(\d{2})(\d)/g, '($1) $2');
				phone = phone.replace(/(\d)(\d{4})$/, '$1-$2');
				
				return phone;
			};
			
			element.bind('keyup', function(e) {
				ctrl.$setViewValue(_formatPhone(ctrl.$viewValue));
				ctrl.$render();
			});
		}
	}
});