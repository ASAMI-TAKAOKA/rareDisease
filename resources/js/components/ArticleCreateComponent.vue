<template>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-sm-6">
                  <form>
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
      export default {}
  </script>