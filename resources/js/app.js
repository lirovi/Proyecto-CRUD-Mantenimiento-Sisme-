//var urlUsers = 'https://randomuser.me/api/?results=10';
		
		new Vue({
			el: '#crud',
			create: function(){
				this.getdescripcion();
			}
			data:{

				descripcion:[]

			},
			methods:{
				getdescripcion: function(){
					var urldescripcion='cargos';
					axios.get(urldescripcion).then(response=>{
						this.descripcion = response.data
					});
				}
			}
		
		});


