<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Please fill in the Form
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title" id="exampleModalLabel">Invitation form</h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Full Name</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="FullName">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Email address</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Number of People Accompanying You </label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1-4</option>
      <option>4-6</option>
      <option>6-8</option>
      <option>8-10</option>
      <option>10-12</option>
    </select>
  </div><div class="form-group">
    <label for="exampleFormControlSelect2">Manu Options </label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>chicken</option>
      <option>Beef</option>
      <option>Pork</option>
    </select>
  </div>
          <div>
            <h2>Extras</h2>
          <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
          <label for="vehicle1"> Sit in the Smoking area</label><br>
          <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
          <label for="vehicle2"> Sit near the children play area</label><br>
          <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
          <label for="vehicle3"> Do you want access to bar area</label><br>
          <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
          <label for="vehicle3"> Are you going to bring your own Beverages</label><br><br>
          </div>
  

  <div>
    <h1>Vaccinated</h1>
    <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html">Yes</label><br>
  <input type="radio" id="html" name="fav_language" value="HTML">
  <label for="html">No</label><br>
  </div>
  
</form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
                            
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
    <div class="main-content">

            <div class="page-content">
                 

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0"></h4>                

                </div>
            </div>
        </div>
                 <div>
                 <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <title>Bootstrap Table with Add and Delete Row Feature</title>
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
                <style>
                body {
                    color: #404E67;
                    background: #F5F7FA;
                    font-family: 'Open Sans', sans-serif;
                }
                .table-wrapper {
                    width: 700px;
                    margin: 30px auto;
                    background: #fff;
                    padding: 20px;	
                    box-shadow: 0 1px 1px rgba(0,0,0,.05);
                }
                .table-title {
                    padding-bottom: 10px;
                    margin: 0 0 10px;
                }
                .table-title h2 {
                    margin: 6px 0 0;
                    font-size: 22px;
                }
                .table-title .add-new {
                    float: right;
                    height: 30px;
                    font-weight: bold;
                    font-size: 12px;
                    text-shadow: none;
                    min-width: 100px;
                    border-radius: 50px;
                    line-height: 13px;
                }
                .table-title .add-new i {
                    margin-right: 4px;
                }
                table.table {
                    table-layout: fixed;
                }
                table.table tr th, table.table tr td {
                    border-color: #e9e9e9;
                }
                table.table th i {
                    font-size: 13px;
                    margin: 0 5px;
                    cursor: pointer;
                }
                table.table th:last-child {
                    width: 100px;
                }
                table.table td a {
                    cursor: pointer;
                    display: inline-block;
                    margin: 0 5px;
                    min-width: 24px;
                }    
                table.table td a.add {
                    color: #27C46B;
                }
                table.table td a.edit {
                    color: #FFC107;
                }
                table.table td a.delete {
                    color: #E34724;
                }
                table.table td i {
                    font-size: 19px;
                }
                table.table td a.add i {
                    font-size: 24px;
                    margin-right: -1px;
                    position: relative;
                    top: 3px;
                }    
                table.table .form-control {
                    height: 32px;
                    line-height: 32px;
                    box-shadow: none;
                    border-radius: 2px;
                }
                table.table .form-control.error {
                    border-color: #f50000;
                }
                table.table td .add {
                    display: none;
                }
                </style>
                <script>
                $(document).ready(function(){
                  $('[data-toggle="tooltip"]').tooltip();
                  var actions = $("table td:last-child").html();
                  // Append table with add row form on add new button click
                    $(".add-new").click(function(){
                    $(this).attr("disabled", "disabled");
                    var index = $("table tbody tr:last-child").index();
                        var row = '<tr>' +
                            '<td><input type="text" class="form-control" name="name" id="name"></td>' +
                            '<td><input type="text" class="form-control" name="department" id="department"></td>' +
                            '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
                      '<td>' + actions + '</td>' +
                        '</tr>';
                      $("table").append(row);		
                    $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                        $('[data-toggle="tooltip"]').tooltip();
                    });
                  // Add row on add button click
                  $(document).on("click", ".add", function(){
                    var empty = false;
                    var input = $(this).parents("tr").find('input[type="text"]');
                        input.each(function(){
                      if(!$(this).val()){
                        $(this).addClass("error");
                        empty = true;
                      } else{
                                $(this).removeClass("error");
                            }
                    });
                    $(this).parents("tr").find(".error").first().focus();
                    if(!empty){
                      input.each(function(){
                        $(this).parent("td").html($(this).val());
                      });			
                      $(this).parents("tr").find(".add, .edit").toggle();
                      $(".add-new").removeAttr("disabled");
                    }		
                    });
                  // Edit row on edit button click
                  $(document).on("click", ".edit", function(){		
                        $(this).parents("tr").find("td:not(:last-child)").each(function(){
                      $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
                    });		
                    $(this).parents("tr").find(".add, .edit").toggle();
                    $(".add-new").attr("disabled", "disabled");
                    });
                  // Delete row on delete button click
                  $(document).on("click", ".delete", function(){
                        $(this).parents("tr").remove();
                    $(".add-new").removeAttr("disabled");
                    });
                });
                </script>
                </head>
                <body>
                <div class="container-lg">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-8"><h2>Employee <b>Details</b></h2></div>
                                    <div class="col-sm-4">
                                        <!-- <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button> -->
                                    </div>
                                </div>
                            </div>
                            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
                                </div>
        <!-- end page title -->
       
    </div> <!-- container-fluid -->
</div>

    </div>
</x-app-layout>

