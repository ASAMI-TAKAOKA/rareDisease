<template>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-sm-6">
                  <form>
                      <div class="form-group row border-bottom">
                          <label for="disease-id" class="col-sm-3 col-form-label">ID</label>
                          <input type="text" class="col-sm-9 form-control-plaintext" readonly id="disease-id" v-model="diseaseArticleShow.id">
                      </div>
                      <div class="form-group row border-bottom">
                          <label for="disease-name" class="col-sm-3 col-form-label">病名</label>
                          <input type="text" class="col-sm-9 form-control-plaintext" readonly id="disease-name" v-model="diseaseArticleShow.title">
                      </div>
                      <div class="form-group row border-bottom">
                          <label for="summary" class="col-sm-3 col-form-label">概要</label>
                          <input type="text" class="col-sm-9 form-control-plaintext" readonly id="summary" v-model="diseaseArticleShow.body">
                      </div>
                      <div class="form-group row border-bottom">
                          <label for="user-name" class="col-sm-3 col-form-label">ユーザー名</label>
                          <input type="text" class="col-sm-9 form-control-plaintext" readonly id="user-name" v-model="diseaseArticleShow.user_name">
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </template>
  
  <script>
      export default {
        props: {
        // propsで親コンポーネント（app.js）から受け取ってきたdiseaseArticleId。value="diseaseArticleId"とすることで初期表示に使用できる。
        diseaseArticleId: {
        type: Number
        }
        },
        data: function () {
            return {
                diseaseArticleShow: {}
            }
        },
        methods: {
            getDiseaseArticleShow() {
                axios.get('/api/diseaseArticles/' + this.diseaseArticleId)
                    .then((res) => {
                        this.diseaseArticleShow = res.data;
                    });
            }
        },
        mounted() {
            this.getDiseaseArticleShow();
        }
      }
  </script>