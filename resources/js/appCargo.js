new Vue({
	el: '#crud',
	created: function() {
		this.getdescripcions();
	},
	data: {
		descripcions: [],
		pagination: {
			'total': 0,
            'current_page': 0,
            'per_page': 0,
            'last_page': 0,
            'from': 0,
            'to': 0
		},
		newdescripcion: '',
		filldescripcion: {'id': '', 'descripcion': ''},
		errors: '',
		offset: 3,
	},
	computed: {
		isActived: function() {
			return this.pagination.current_page;
		},
		pagesNumber: function() {
			if(!this.pagination.to){
				return [];
			}

			var from = this.pagination.current_page - this.offset; 
			if(from < 1){
				from = 1;
			}

			var to = from + (this.offset * 2); 
			if(to >= this.pagination.last_page){
				to = this.pagination.last_page;
			}

			var pagesArray = [];
			while(from <= to){
				pagesArray.push(from);
				from++;
			}
			return pagesArray;
		}
	},
	methods: {
		getdescripcions: function(page) {
			var urldescripcions = 'cargos?page='+page;
			axios.get(urldescripcions).then(response => {
				this.descripcions = response.data.cargos.data,
				this.pagination = response.data.pagination
			});
		},
		editdescripcion: function(descripcion) {
			this.filldescripcion.id   = descripcion.id;
			this.filldescripcion.descripcion = descripcion.descripcion;
			$('#edit').modal('show');
		},
		updatedescripcion: function(id) {
			var url = 'cargos/' + id;
			axios.put(url, this.filldescripcion).then(response => {
				this.getdescripcions();
				this.filldescripcion = {'id': '', 'descripcion': ''};
				this.errors	  = [];
				$('#edit').modal('hide');
				toastr.success('Tarea actualizada con éxito');
			}).catch(error => {
				this.errors = 'Corrija para poder editar con éxito'
			});
		},
		deletedescripcion: function(descripcion) {
			var url = 'cargos/' + descripcion.id;
			axios.delete(url).then(response => { //eliminamos
				this.getdescripcions(); //listamos
				toastr.success('Eliminado correctamente'); //mensaje
			});
		},
		createdescripcion: function() {
			var url = 'cargos';
			axios.post(url, {
				descripcion: this.newdescripcion
			}).then(response => {
				this.getdescripcions();
				this.newdescripcion = '';
				this.errors = [];
				$('#create').modal('hide');
				toastr.success('Nueva tarea creada con éxito');
			}).catch(error => {
				this.errors = 'Corrija para poder crear con éxito'
			});
		},
		changePage: function(page) {
			this.pagination.current_page = page;
			this.getdescripcions(page);
		}
	}
});

