<template>
  <div class="container">
      <h3 class="title">ユーザー一覧</h3>
          <table class="table table-hover">
              <thead class="thead-light">
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">ユーザー名</th>
                  <th scope="col">ユーザー詳細</th>
              </tr>
              </thead>
              <tbody>
                  <tr v-for="(list, index) in userLists" :key="index">
                      <th scope="row">{{ list.id }}</th>
                      <td>{{ list.name }}</td>
                      <td>
                          <router-link v-bind:to="{name: 'user.show', params: {userId: list.id }}">
                              <button class="btn btn-primary">ユーザー詳細</button>
                          </router-link>
                      </td>
                  </tr>
              </tbody>
          </table>
  </div>
</template>

<script>
  export default {
      data: function () {
          return {
              userLists: []
          }
      },
      methods: {
          getUserLists() {
            axios.get('http://localhost:8000/api/users')
                  .then((res) => {
                      this.userLists = res.data;
                  })
                  .catch((error) => {
                  console.log(error)
                  })
          }
      },
      mounted() {
          this.getUserLists();
      }
  }
</script>