function main(){

    const app = new Vue({
        el: '#app',
        data: {
            list: [],

        },
        created() {       
            this.getData('../PHP/API'); 
        },
        methods:{
            getData(url){
                axios.get(url)
                .then(res =>{
                    console.log(res.data);
                    this.list = res.data;
                })
                .catch(err =>{
                    console.log(err, 'Error');
                })
            }
        }
    });

}


