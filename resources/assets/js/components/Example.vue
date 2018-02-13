<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Endpoints</div>

                    <div class="panel-body">
                        <strong> POST </strong>: /api/authenticate  
                        <pre v-html="userdata"></pre>

                        <strong> POST</strong> : /api/getuserbyemail  
                        <pre v-html="userdata"></pre>

                        <strong> POST </strong>: /api/business/id  
                        <pre v-html="business"></pre>

                        <strong> POST </strong>: /api/businessbyuser  <strong>(id 12 de w@w.com)</strong>
                        <pre v-html="businessbyuser"></pre>

                        <strong> POST </strong>: /noticesbybusiness <strong>  noticia by business</strong>
                        <pre v-html="noticesbybusiness"></pre>

                         <strong> POST </strong>: /pushbybusiness <strong>  notificaciones by business</strong>
                        <pre v-html="pushbybusiness"></pre>

                         <strong> POST </strong>: /register <strong>  notificaciones by business</strong>
                            <p> 
                            <strong> parametros : </strong> 
                            name
                            email
                            password
                            mercadoid
                            </p>
                        <pre v-html="register"></pre>

                         <strong> POST </strong>: /profile <strong>  carga de imagen de usuario</strong>
                        <pre v-html="profile"></pre>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                userdata: '',
                userbyemail: '',
                data: {
                    email:'tabitha54@example.net',
                    password:'secret'
                },
                email:'daphney52@example.net',
                id:1,
                business:'',
                businessbyuser:'',
                userid:12,
                noticesbybusiness:'',
                pushbybusiness:'',
                register: '',
                profile: ''
            }
        },
        mounted(){
            this.getAll();
            this.getByMail();
            this.showBussines();
            this.showBussinesByUser();
            this.showNoticesByBusiness();
            this.showpushbybusiness();
            this.register();
            this.profiles();
        },
        methods:{
            getAll(){
                axios.post('api/authenticate',this.data)
                    .then(response => this.userdata =response.data)
            },
            getByMail(){
                axios.post('api/getuserbyemail',this.email)
                    .then(response => this.userbyemail =response.data)
            },
            showBussines(){
                axios.post('api/business/', this.id)
                    .then(response => this.business =response.data)
            },
            showBussinesByUser(){
                axios.post('api/businessbyuser/', this.userid)
                    .then(response => this.businessbyuser =response.data)
            },
            showNoticesByBusiness(){
                axios.post('api/noticesbybusiness/', this.id)
                    .then(response => this.noticesbybusiness =response.data)
            },
            showpushbybusiness(){
                axios.post('api/pushbybusiness/', this.id)
                    .then(response => this.pushbybusiness=response.data)
            },
            register(){
                axios.post('api/register/' + this.id)
                    .then(response => this.pushbybusiness=response.data)
            },
            profiles(){
                axios.post('api/profile/', this.id)
                    .then(response => this.pushbybusiness=response.data)
            }


        }
    }
</script>
