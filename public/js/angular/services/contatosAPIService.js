angular.module('listaTelefonica').factory('contatosAPI', function ($http) {
	var _getContatos = function () {
		return $http.get('http://localhost:8000/service/client');
	};

	var _getContato = function (contato) {
		return $http.get('http://localhost:8000/service/client/'+ contato +'', contato);
	};

	var _saveContato = function (contato) {
		return $http.post('http://localhost:8000/service/client', contato);
	};

	var _deleteContato = function (contato) {
		return $http.delete('http://localhost:8000/service/client/'+ contato.id +'', contato);
	};

	return {
		getContatos: _getContatos,
		getContato: _getContato,
		saveContato: _saveContato,
		deleteContato: _deleteContato
	};
});
