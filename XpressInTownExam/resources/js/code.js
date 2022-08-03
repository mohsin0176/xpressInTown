var app =new Vue({
	el:"#body",
	data:
	{
     	alldata:[],
     	msg_add:'',
		form1:
		{
		log:'',
		date:'',
		status:'',
		duration:''
		},
		form2:
		{
		phone:'',
		from:'',
		to:''
		}
	},
	created:
	{
	app.searchalldata();
	}
	methods:
	{
	add_data:function(){
	axios.post('/add-data',{}).then( function(res){ 
									 app.msg_add=res.data.msg; 
									 alert('app.msg_add'); 
									 app.msg_add=''; 
												  }
								    );
						},

	searchdata:function(){
	app.alldata=null;
    axios.post('/search-data',{action:'search',phone:app.form2.phone,from:app.form2.from,to:app.form2.to}).then(function(res){ app.alldata=res.data;});
	},

	searchalldata:function(){
    axios.get('/searchall-data',{action:'searchall'}).then(function(res){ app.alldata=res.data;});
	}
	
	}
	
});


 

