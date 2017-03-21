/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

'use strict'
var examApp = angular.module('examApp',[]);
examApp.controller('getQuestions',['$scope',function($scope){
        $scope.exam = {
            question1: 'Are you a good programmer?',
            answerA: 'Of course',
            answerB: 'I am the very best',
            answerC: 'I taught those who teach you, and I\'m humble too!'
        };
}]);
