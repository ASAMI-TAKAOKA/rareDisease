 <template>
     <div class="container-fluid bg-dark mb-3">
	         <div class="container">
		             <nav class="navbar navbar-dark">
			                 <span class="navbar-brand mb-0 h1">Rare Disease</span>
			                 <div>
														 <router-link v-bind:to="{name: 'disease.article.create'}"><button class="btn btn-success">希少疾患に関する記事の新規投稿</button></router-link>
				                     <button class="btn btn-success">ログイン</button>
				                     <button class="btn btn-success">会員登録</button>
			                 </div>
		             </nav>
	         </div>
     </div>
 </template>
 
 <script>
	     export default {}
 </script>