
import IComponentOptions = angular.IComponentOptions;



class PostsComponent {
    private title: string;
   
    private content:string;
 
    constructor(private $mdDialog: any) {  }

    public create(){
        console.log("Then fire confirm Task");
    }
     
    public update(){
    }

    public delete(){
    }

  

}


export const postsComponent: IComponentOptions = {
    controller: TasksComponent,
    template: `
    <div>
        <h1>Hello {{pos.name}}</h1>
        {{vm.message}}
        
        <a href src="" ng-click="vm.create()">create a post</a>
    </div>
    `,
    controllerAs:"vm"
   
};

   