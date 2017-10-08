import {postsComponent} from "./posts.component";

import IAngularStatic = angular.IAngularStatic;


declare const angular:angular.IAngularStatic;


export const postsModule = angular
    .module('postsModule',[
        'ngMaterial'
        
    ])
    .component('posts',postsComponent);

