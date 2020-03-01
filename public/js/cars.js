//(function(){
    var carsVue= new Vue({
        el : "#carapp",
        data : {
            make : 0,
            makes : '',
            model : 0,
            models : '',
            car : 0,
            cars : ''
        },
        mounted: function(){
            this.getMake();
        },
        methods : {
            getMake : function(){
                this.getCars();
                fetch('show').then((response) => {
                    response.json().then((data) => {
                        this.makes = data;
                        this.model = 0;
                        this.models = "";
                    });
                });
            },
            getCars:function(){
                url = "show";
                
                if(this.model && this.model!== 0){
                    url = url + "/model/" + this.model;
                } else if(this.make){
                    url = url + "/" + this.make;
                }
                fetch(url).then((response) => {
                    console.log(url);
                    response.json().then((data) => {
                        this.cars = data;
                    });
                });
            },
            getMakeModel : function(){
                this.model = 0;
                this.getCars();
                var url = 'show/' + this.make;
                fetch(url).then((response) => {
                    response.json().then((data) => {
                        this.models = data;
                    });
                });
            }
            
        }
    });
    //carsVue.getMake();
//})();