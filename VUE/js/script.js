

    const app = new Vue({
        el: '#app',
        data: {
            title:'',
            author:'',
            year:'',
            genre:'',
            list: [],
        },
        created() {       
            this.getData(); 
        },
        methods:{
            getData(){

                url='../PHP/API?';
                year = this.year ? '&year='+this.year : ''; 
                genre = this.genre ? '&genre='+this.genre : '';
                title = this.title ? '&title='+this.title : ''; 
                author = this.author ? '&author='+this.author : ''; 
                console.log(url);
                axios.get(url+year+genre+author+title)
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

