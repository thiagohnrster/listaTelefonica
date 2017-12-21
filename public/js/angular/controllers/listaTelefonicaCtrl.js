angular.module('listaTelefonica').controller('listaTelefonicaCtrl', function($scope, contatos, contatosAPI) {
    $scope.app = 'Contatos';
    $scope.contatos = contatos.data;
    
    $scope.apagarContatos = function(contatos) {
        $scope.contatos = contatos.filter(function (contato) {
            if(!contato.selected) {
                return contato;
            }
                
            contatosAPI.deleteContato(contato).then(function (data) {
                delete $scope.contato;
                $scope.contatosForm.$setPristine();
                console.log(data);
            }, function (error) {
                $scope.error = 'Não foi possível apagar contato.';
                console.log(error);
            });
        });
    };

    $scope.isContatoSelecionado = function(contatos) {
        return contatos.some(function (contato) {
            return contato.selected
        });
    };

    $scope.sortBy = function (campo) {
        $scope.sortingStandards = campo;
        $scope.sortingDirection = !$scope.sortingDirection;
    };

    $scope.toggleClass = function() {
        $('.panel-heading .icon').toggleClass('glyphicon-triangle-bottom glyphicon-triangle-top');
    };
});