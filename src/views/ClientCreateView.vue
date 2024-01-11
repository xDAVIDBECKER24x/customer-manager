<template>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h4>Add Clients</h4>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="">Nome</label>
                    <input type="text" v-model="model.client.name" class="form-control" name="" id="">
                </div>
                <div class="mb-3">
                    <label for="">CPF</label>
                    <input type="text" v-model="model.client.cpf" class="form-control" name="" id="">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="text" v-model="model.client.mail" class="form-control" name="" id="">
                </div>
                <div class="mb-3">
                    <label for="">Telefone</label>
                    <input type="text" v-model="model.client.phone" class="form-control" name="" id="">
                </div>
                <div class="mb-3">
                    <label for="">Status</label>

                    <select class="form-select" v-model="model.client.status" aria-label="Ativo">
                        <option value="Ativo">Ativo</option>
                        <option value="Desativado">Desativado</option>

                    </select>

                </div>
                <div class="mb3">
                    <button type="button" @click="saveClient" class="btn btn-primary">Save</button>
                </div>

            </div>
        </div>


    </div>
</template>
<script>

import axios from 'axios';
export default {
    name: 'clientCreate',
    data() {
        return {
            model: {
                client: {
                    name: "",
                    cpf: "",
                    mail: "",
                    phone: "",
                    status: "",
                }
            }
        }
    },
    methods: {
        async saveClient() {
            try {
                const response = await axios.post('http://localhost:8000/updateClient.php', {
                    message: JSON.stringify(this.model.client)
                });
                console.log("Client added sucessfully");
            } catch (error) {
                console.error(error);
            }
            this.$router.push('/') 

        },

    },
}
</script>