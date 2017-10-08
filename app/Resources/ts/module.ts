import {appComponent} from "./app.component";
import IAngularStatic = angular.IAngularStatic;


declare const angular:angular.IAngularStatic;


export const appModule = angular
    .module('appModule',[
        'ngMaterial',
        tasksModule.name

    ])
    .component('app',appComponent);

