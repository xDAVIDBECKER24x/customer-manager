<template>
  <div class="container my-5">
    <div class="card">
      <div class="card-header">
        <h4>Clients
          <RouterLink to="/client/create" class="btn btn-primary float-end">Add Client</RouterLink>
        </h4>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nome</th>
              <th>CPF</th>
              <th>Telefone</th>
              <th>Email</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody v-if="this.clients.length > 0">
            <tr v-for="(client, index) in this.clients" :key="index">
              <td>{{ client.name }}</td>
              <td>{{ client.cpf }}</td>
              <td>{{ client.phone }}</td>
              <td>{{ client.mail }}</td>
              <td>{{ client.status }}</td>
              <td >
                <RouterLink to="/" class=" mx-1 btn btn-success">Edit</RouterLink>
                <button type="button" class="mx-1 btn btn-danger">Delete</button>
              </td>
            </tr>
          </tbody>
          <tbody v-else>
            <tr>
              <td colspan="6">Loading...</td>
            </tr>
          </tbody>

        </table>

      </div>
    </div>
  </div>
</template>
<script>
import clientsData from "../data/clients.json"
export default {
  name: 'clients',
  data() {
    return {
      clients: []
    }
  },
  mounted() {
    this.getClients();
  },
  methods: {
    getClients() {
      this.clients = clientsData.data;
      console.log(this.clients);
    }
  }
}
</script>
