<template>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                       HOLA.. PRUEBA 
                       <input type="text" v-model="dato">
                       <h1>{{dato}}</h1>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
       data() {
           return {
             dato:""  
           }
       },
    }
</script>
