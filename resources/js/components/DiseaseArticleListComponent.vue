<template>
    <div class="container">
        <h3 class="title">希少疾患一覧</h3>
        <router-link v-bind:to="{name: 'disease.article.create'}">
        <button class="btn btn-success">希少疾患に関する新規記事を投稿する</button>
        </router-link>
            <table class="table table-hover">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">病名</th>
                    <th scope="col">概要</th>
                    <th scope="col">ユーザー名</th>
                    <th scope="col">詳細</th>
                    <th scope="col">編集</th>
                    <th scope="col">削除</th>
                </tr>
                </thead>
                <tbody>
                    <tr v-for="(list, index) in diseaseArticleLists" :key="index">
                        <th scope="row">{{ list.id }}</th>
                        <td>{{ list.title }}</td>
                        <td>{{ list.body }}</td>
                        <td>{{ list.user_name }}</td>
                        <td>
                            <router-link v-bind:to="{name: 'disease.article.show', params: {diseaseArticleId: list.id }}">
                                <button class="btn btn-primary">詳細</button>
                            </router-link>
                        </td>
                        <td>
                            <router-link v-bind:to="{name: 'disease.article.edit', params: {diseaseArticleId: list.id }}">
                                <button class="btn btn-success">編集</button>
                            </router-link>
                        </td>
                        <td>
                            <button class="btn btn-danger" v-on:click="deleteDiseaseArticle(list.id)">削除</button>
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
                diseaseArticleLists: []
            }
        },
        methods: {
            getDiseaseArticleLists() {
                axios.get('/api/diseaseArticles')
                // axios.get('/api/users')
                    .then((res) => {
                        this.diseaseArticleLists = res.data;
                    });
            },
            deleteDiseaseArticle(id) {
                axios.delete('/api/diseaseArticles/' + id)
                    .then((res) => {
                        this.getDiseaseArticleLists(); // 削除完了したら、getDiseaseArticleListsメソッドを呼んで記事一覧を再読み込み。
                    });
            },
        },
        mounted() {
            this.getDiseaseArticleLists();
        }
    }
</script>