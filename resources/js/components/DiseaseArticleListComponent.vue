<template>
    <div class="container">
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
              <tr>
                <th scope="row">1</th>
                <td>パーキンソン病</td>
                <td>○○○○○が特徴です。</td>
                <td>高橋さん</td>
                <td>
                    <!-- `v-bind` を使った javaScript 式の書き方 -->
                    <!-- 名前を付けたルートにリンクするには、 router-link コンポーネントの to プロパティにオブジェクトを渡す。 -->
                    <!-- /diseases/1 に飛ぶ -->
                    <router-link v-bind:to="{name: 'disease.show', params: {diseaseId: 1}}"><button class="btn btn-primary">詳細</button></router-link>
                </td>
                <td>
                    <router-link v-bind:to="{name: 'article.edit', params: {diseaseId: 1}}"><button class="btn btn-success">編集</button></router-link>
                </td>
                <td>
                    <button class="btn btn-danger">削除</button>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>メニエール病</td>
                <td>○○○○○が特徴です。</td>
                <td>SUZUKIさん</td>
                <td>
                    <router-link v-bind:to="{name: 'disease.show', params: {diseaseId: 2}}"><button class="btn btn-primary">詳細</button></router-link>
                </td>
                <td>
                    <button class="btn btn-success">編集</button>
                </td>
                <td>
                    <button class="btn btn-danger">削除</button>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>副腎疲労</td>
                <td>○○○○○が特徴です。</td>
                <td>伊藤さん</td>
                <td>
                    <router-link v-bind:to="{name: 'disease.show', params: {diseaseId: 3}}"><button class="btn btn-primary">詳細</button></router-link>
                </td>
                <td>
                    <button class="btn btn-success">編集</button>
                </td>
                <td>
                    <button class="btn btn-danger">削除</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {}
</script>