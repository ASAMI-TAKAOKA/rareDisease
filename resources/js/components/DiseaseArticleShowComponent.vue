<template>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-sm-6">
                  <form>
                      <div class="form-group row border-bottom">
                          <label for="disease-id" class="col-sm-3 col-form-label">ID</label>
                          <input type="text" class="col-sm-9 form-control-plaintext" readonly id="disease-id" v-bind:value="diseaseId">
                      </div>
                      <div class="form-group row border-bottom">
                          <label for="disease-name" class="col-sm-3 col-form-label">病名</label>
                          <input type="text" class="col-sm-9 form-control-plaintext" readonly id="disease-name" value="〇〇病">
                      </div>
                      <div class="form-group row border-bottom">
                          <label for="summary" class="col-sm-3 col-form-label">概要</label>
                          <input type="text" class="col-sm-9 form-control-plaintext" readonly id="summary" value="〇〇〇〇〇〇です。">
                      </div>
                      <div class="form-group row border-bottom">
                          <label for="user-name" class="col-sm-3 col-form-label">ユーザー名</label>
                          <input type="text" class="col-sm-9 form-control-plaintext" readonly id="user-name" value="高橋">
                      </div>
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