<template>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-sm-6">
                  <form>
                      <div class="form-group row">
                          <label for="id" class="col-sm-3 col-form-label">ID</label>
                          <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id" v-bind:value="diseaseId">
                      </div>
                      <div class="form-group row">
                          <label for="title" class="col-sm-3 col-form-label">タイトル</label>
                          <input type="text" class="col-sm-9 form-control" id="title">
                      </div>
                      <div class="form-group row">
                          <label for="body" class="col-sm-3 col-form-label">本文</label>
                          <input type="text" class="col-sm-9 form-control" id="body">
                      </div>
                      <div class="form-group row">
                          <label for="user-name" class="col-sm-3 col-form-label">お名前</label>
                          <input type="text" class="col-sm-9 form-control" id="user-name">
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
            // propsで親コンポーネント（app.js）から受け取ってきたdiseaseId。value="diseaseId"とすることで初期表示に使用できる。
            diseaseId: {
            type: String
            }
          }
      }
  </script>