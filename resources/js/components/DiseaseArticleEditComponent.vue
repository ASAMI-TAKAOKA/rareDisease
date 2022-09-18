<template>
      <div class="container">
        <h3 class="title">編集</h3>
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <form v-on:submit.prevent="submit">
                        <div class="form-group row">
                            <label for="id" class="col-sm-3 col-form-label">ID</label>
                            <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id" v-model="diseaseArticleEdit.id">
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-sm-3 col-form-label">タイトル</label>
                            <input type="text" class="col-sm-9 form-control" id="title" v-model="diseaseArticleEdit.title">
                        </div>
                        <div class="form-group row">
                            <label for="body" class="col-sm-3 col-form-label">本文</label>
                            <input type="text" class="col-sm-9 form-control" id="body" v-model="diseaseArticleEdit.body">
                        </div>
                        <div class="form-group row">
                            <label for="user-name" class="col-sm-3 col-form-label">お名前</label>
                            <input type="text" class="col-sm-9 form-control" id="user-name" v-model="diseaseArticleEdit.user_name">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">送信</button>
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
                diseaseArticleEdit: {}
            }
        },
        methods: {
            getDiseaseArticleEdit() {
                axios.get('/api/diseaseArticles/' + this.diseaseArticleId)
                    .then((res) => {
                        this.diseaseArticleEdit = res.data;
                    });
            },
            submit() {
                axios.put('/api/diseaseArticles/' + this.diseaseArticleId, this.diseaseArticleEdit)
                    .then((res) => {
                        this.$router.push({name: 'disease.article.list'})
                    });
            }
        },
        mounted() {
            this.getDiseaseArticleEdit();
        }
    }
  </script>