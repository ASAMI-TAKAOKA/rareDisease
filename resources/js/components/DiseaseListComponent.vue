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
                <td>ああああああああ</td>
                <td>高橋</td>
                <td>
                    <button class="btn btn-primary">詳細</button>
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
                <td>メニエール病</td>
                <td>いいいいいい</td>
                <td>SUZUKI</td>
                <td>
                    <button class="btn btn-primary">詳細</button>
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
                <td>ううううう</td>
                <td>伊藤</td>
                <td>
                    <button class="btn btn-primary">詳細</button>
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