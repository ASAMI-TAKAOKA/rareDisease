<template>
  <div class="container">
      <h3 class="title">詳細</h3>
          <div class="row justify-content-center">
              <div class="col-sm-6">
                  <form>
                      <div class="form-group row border-bottom">
                          <label for="user-id" class="col-sm-3 col-form-label">ID</label>
                          <input type="text" class="col-sm-9 form-control-plaintext" readonly id="user-id" v-model="userShow.id">
                      </div>
                      <div class="form-group row border-bottom">
                          <label for="user-name" class="col-sm-3 col-form-label">ユーザー名</label>
                          <input type="text" class="col-sm-9 form-control-plaintext" readonly id="user-name" v-model="userShow.name">
                      </div>
                      <div class="form-group row border-bottom">
                          <label for="profile" class="col-sm-3 col-form-label">プロフィール</label>
                          <input type="text" class="col-sm-9 form-control-plaintext" readonly id="prifile" value="prifile">
                      </div>
                  </form>
              </div>
          </div>
  </div>
</template>

<script>
    export default {
      props: {
      // propsで親コンポーネント（app.js）から受け取ってきたuserId。value="userId"とすることで初期表示に使用できる。
      userId: {
      type: Number
      }
      },
      data: function () {
          return {
              userShow: {}
          }
      },
      methods: {
          getUserShow() {
              axios.get('/api/users/' + this.userId)
                  .then((res) => {
                      this.userShow = res.data;
                  });
          }
      },
      mounted() {
          this.getUserShow();
      }
    }
</script>