<!-- //requete AJAX

$('document').ready(APIRest);

	function APIRest(){

	     $.ajax({

	     	method:'GET',
	   	 	url:"https://jsonplaceholder.typicode.com/posts/1",
		 	complete: function(xhr,status){
			if (status=="success"){
				console.log(xhr.responseJSON)
			}
		}
	 })

	

	function Ajout(){ 
		var d = {
		 	"title":"Titre",
		 	"body": "Contenu long+++++",
				}
		   	

		$.ajax({
	    method:'POST',
	    contentType:'application/json',
	    data:JSON.stringify(d),


			url:"https://jsonplaceholder.typicode.com/posts/1/+id",
			complete: function(xhr,status){
				if (status=="success"){
				console.log(xhr.responseJSON)
				}
			}
		})
	}
	$('body').append('<button>click </button>')
	$('button').click(Ajout);

	function Suppr(){ 
		var d = {
		 	"title":"Titre",
		 	"body": "Contenu long+++++",
				}
		   	

		$.ajax({
	    method:'DELETE',
	    contentType:'application/json',
	    data:JSON.stringify(d),


			url:"https://jsonplaceholder.typicode.com/posts/1/+id",
			complete: function(xhr,status){
				if (status=="success"){
				console.log(xhr.responseJSON)
				}
			}
		})
	}
	$('body').append('<button>delete</button>')
	$('button').click(Suppr);

	function misAjour(){ 
		var d = {
		 	"title":"Titre",
		 	"body": "Contenu long+++++",
				}
		   	

		$.ajax({
	    method:'PUT',
	    contentType:'application/json',
	    data:JSON.stringify(d),


			url:"https://jsonplaceholder.typicode.com/posts/1/+id",
			complete: function(xhr,status){
				if (status=="success"){
				console.log(xhr.responseJSON)
				}
			}
		})
	}
	$('body').append('<button>Ajout</button>')
	$('body').append('<button>Suppr</button>')
	$('body').append('<button>misAjour</button>')
	

	$('#add').click(Ajout);
	$('#update').click(Suppr);
	$('#misAjour').click(misAjour);
} -->