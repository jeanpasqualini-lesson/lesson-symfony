(function () {
    'use strict';

    var app = angular.module('app', [
        'appController',
        'appService'
    ]);

    app.l = 1;

    var service = angular.module('appService', ['ngResource']);

    service.service('todoStorage', ['$resource', function ($resource) {
        return $resource('/api/v1/tasks/:id.json', {}, {
            get: {method: 'GET', params: {}, isArray: true},
            post: {method: 'POST', params: {}, isArray: true},
            put: {method: 'PUT', params: {}, isArray: true},
            delete: {method: 'DELETE', params: {}, isArray: true}
        });
    }]);

    var controller = angular.module('appController', []);
//
    controller.controller('PhoneListCtrl', ['$scope', 'todoStorage', function ($scope, todoStorage) {

        $scope.tasks = todoStorage.get();
        $scope.editedTask = null;

        var tasks = $scope.tasks;

        $scope.orderProp = 'age';

        $scope.addTodo = function () {
            var newTodo = $scope.newTodo.trim();
            if (newTodo.length === 0) { return; }

            var task = {
                'text': newTodo,
                'enabled': false
            };

            tasks.push(task);

            $scope.newTodo = '';

            todoStorage.post(task);
        };

        $scope.removeTodo = function (task) {

            tasks.splice(tasks.indexOf(task), 1);

            todoStorage.delete(task);
        };

        $scope.editTodo = function (todo) {
            $scope.editedTask = todo;
        };

        $scope.doneEditing = function (todo) {
            todoStorage.put(todo);
        };
    }]);

}());

