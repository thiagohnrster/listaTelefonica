angular.module('listaTelefonica').controller('novoContatoCtrl', function($scope, $http, $location, contatosAPI) {
    $scope.app = 'Novo Contato';
    
    $scope.adicionarContato = function(contato) {
        if(!contato.name) {
            $('#ctrlNome').addClass('has-error');
            alert('Preencha o nome');
            return false;
        } else if(!contato.address) {
            $('#ctrlNome').removeClass('has-error');
            $('#ctrlAddress').removeClass('has-error');
            $('#ctrlAddress').addClass('has-error');
            alert('Preencha o endereço');
            return false;
        } else if(!contato.telefone) {
            $('#ctrlAddress').removeClass('has-error');
            $('#ctrlTelefone').addClass('has-error');
            alert('Preencha o telefone');
            return false;
        }
                        
        $('.form-group').removeClass('has-error');
                
        contatosAPI.saveContato(contato).then(function (data) {
            contato.data = new Date();
            delete $scope.contato;
            $scope.novoContatoForm.$setPristine();
            $location.path('/contatos');
            console.log(data);
        }, function (error) {
            $scope.error = 'Não foi possível salvar contato.';
            console.log(error);
        });    
    };
});