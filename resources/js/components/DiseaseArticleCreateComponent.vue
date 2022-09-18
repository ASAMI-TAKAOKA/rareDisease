<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form v-on:submit.prevent="submit">
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">タイトル</label>
                        <input type="text" class="col-sm-9 form-control" id="title" v-model="diseaseArticleCreate.title">
                    </div>
                    <div class="form-group row">
                        <label for="body" class="col-sm-3 col-form-label">本文</label>
                        <input type="text" class="col-sm-9 form-control" id="body" v-model="diseaseArticleCreate.body">
                    </div>
                    <div class="form-group row">
                        <label for="user-name" class="col-sm-3 col-form-label">お名前</label>
                        <input type="text" class="col-sm-9 form-control" id="user-name" v-model="diseaseArticleCreate.user_name">
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
    data: function () {
        return {
            diseaseArticleCreate: {}
        }
    },
    methods: {
        submit() { // submitメソッドで、diseaseArticleCreateの中身を記事登録APIにPOST送信する処理
            axios.post('/api/diseaseArticles', this.diseaseArticleCreate)
                .then((res) => {
                    this.$router.push({name: 'disease.article.list'}); // 登録後、記事一覧ページにリダイレクト
                });
        }
    }
}
</script>