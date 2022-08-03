<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.37/vue.cjs.min.js" integrity="sha512-4ztiRs4Iu216VkGake07ojPy+Jp5LpaRV8WgGblQIZj/6O3st4NYucCsWKZ/RWyoBgJu941+PXBFnqgVAaDPgw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <h1>500 Call Center Data Report</h1>
    <form class="submit">
        <label>Phone:</label>
        <input type="text" name="phone"  v-model="form1.log" placeholder="Enter The Phone">
        <label>Date:</label>
        <input type="date" name="date"  v-model="form1.date" placeholder="Enter Date">
        <label>Status:</label>
        <select name="status" v-model="form1.status">
        <option value="Accept">Accept</option>    
        <option value="Reject">Reject</option>
        <option value="No Response">No Response</option>
        </select>
        <label>Duration:</label>
        <input type="text" name="duration"  v-model="form1.duration" placeholder="Enter Call Duration">
        <input type="button" name="save" @click="add_data">
    </form>
    <form class="search">
         <label>Phone:</label> 
         <input type="text" name="phone" v-model="form2.phone" @change="searchdata">  
         <label>From:</label> 
         <input type="date" name="from" v-model="form2.from" @change="searchdata">
         <label>To:</label> 
         <input type="date" name="to" v-model="form2.to" @change="searchdata">
    </form>
    <div id="load">
    <table class="table">
    <thead>
    <th colspan="2">Logs</th>
    <th colspan="2">Date</th>
    <th colspan="2">Status</th>
    <th colspan="2">Duration</th>
    </thead>
    <tbody id="body">
    <tr v-for="data in alldata"><td colspan="2">{{data.log}}</td><td colspan="2">{{data.date}}</td><td colspan="2">{{data.status}}</td><td colspan="2">{{data.duration}}</td></tr>    
    </tbody>   
    </table> 
    <div class="d-flex justify-content-center">
            {{ $alldata->links() }}
    </div>   
        
    </div>
    <script type="text/javascript" src="js/code.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

  </body>
</html>
