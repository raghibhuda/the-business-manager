(function($){
   var singleProjectUI;
   var getProjectDetails;
   var assignProject;
   var createTask;
   var assignTask;
   var deleteTask;

   singleProjectUI = function(project,employees,assingedEmployees,tasks){
       console.log(project);
       console.log(employees);
       console.log(assingedEmployees);
       console.log(tasks);
       var projectViewHTML = '';
       projectViewHTML +=    '<div class="row">';
       projectViewHTML +=        '<div class="col-lg-4">';
       projectViewHTML +=           '<div class="card">';
       projectViewHTML +=               '<div class="card-header">';
       projectViewHTML +=                   '<h4>'+project.name+'</h4>';
       projectViewHTML +=               '</div>';
       projectViewHTML +=               '<div class="card-body">;'
       projectViewHTML +=                   '<p>'+project.description+'</p>';
       projectViewHTML +=               '</div>';
       projectViewHTML +=           '</div>';
       projectViewHTML +=       '</div>';
       projectViewHTML +=       '<div class="col-lg-4">';
       projectViewHTML +=           '<div class="card">';
       projectViewHTML +=               '<div class="card-header">';
       projectViewHTML +=                   '<h3>Deadline</h3>';
       projectViewHTML +=               '</div>';
       projectViewHTML +=               '<div class="card-body">';
       if(project.deadline !=null){
            projectViewHTML +=              '<p>'+project.deadline+'</p>';
        }else{
            projectViewHTML +=              '<p>Not assinged create a deadline</p>';
            // projectViewHTML +=              '<button class="btn btn-outline-info"><i class="fa fa-calendar" aria-hidden="true"></i></button>';
            projectViewHTML +=              '<input type="text" name="daterange" id="dateRange"/>';
        }
       projectViewHTML +=               '</div>';
       projectViewHTML +=           '</div>';
       projectViewHTML +=       '</div>';
       projectViewHTML +=       '<div class="col-lg-4">';
       projectViewHTML +=           '<div class="card">';
       projectViewHTML +=               '<div class="card-header">';
       projectViewHTML +=                   '<h3>Total Xp</h3>';
       projectViewHTML +=               '</div>';
       projectViewHTML +=               '<div class="card-body">';
       projectViewHTML +=                   '<p>'+project.totalxp+'</p>';
       projectViewHTML +=               '</div>';
       projectViewHTML +=           '</div>';
       projectViewHTML +=       '</div>';
       projectViewHTML +=   '</div>';
       projectViewHTML +=   '<div class="row">';
       projectViewHTML +=       '<div class="col-lg-4 p-t-20">';
       projectViewHTML +=           '<div class="card">';
       projectViewHTML +=               '<div class="card-header">';
       projectViewHTML +=                   '<h3>Assign employee</h3>';
       projectViewHTML +=                   '<div class="dropdown pull-right p-r-10">';
       projectViewHTML +=                       '<button class="btn btn-outline-success dropdown-toggle" type="button" id="employeeDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-account-add"></i></button>';
       projectViewHTML +=                           '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
       for(var j = 0 ; j < employees.length; j++){
            projectViewHTML +=                          '<li class="dropdown-item employee-list" data-employeeid="'+employees[j].id+'" data-projectid="'+project.id+'">'+employees[j].name+'</li>';
        }
       projectViewHTML +=                           '</div>';
       projectViewHTML +=                       '</div>';
       projectViewHTML +=                   '</div>';
       projectViewHTML +=               '<div class="card-body">';
       projectViewHTML +=                   '<p>Assign multiple employee on a project</p>';
       if(assingedEmployees.length ==0){
            projectViewHTML +=               '<li>Not Assaigned yet</li>';
       }else{
           for(var k=0;k < assingedEmployees.length;k++){
            projectViewHTML +=               '<li>'+assingedEmployees[k].name+'</li>';
           }
       }
       projectViewHTML +=               '</div>';
       projectViewHTML +=           '</div>';
       projectViewHTML +=       '</div>';
       projectViewHTML +=       '<div class="col-lg-8 p-t-20">';
       projectViewHTML +=           '<div class="card">';
       projectViewHTML +=               '<div class="card-header">';
       projectViewHTML +=                   '<h3>Tasks of '+project.name+'</h3>';
       projectViewHTML +=               '</div>'
       projectViewHTML +=               '<div class="card-body">';
       projectViewHTML +=                   '<div class="form-group">';
       projectViewHTML +=                       '<label for="your_name">Add a task</label>';
       projectViewHTML +=                       '<input type="text" name="name" id="taskName" placeholder="Task Name"/>';
       projectViewHTML +=                       '<button id="addTask" class="btn btn-outline-primary"  data-id="'+project.id+'"><i class="fa fa-plus" aria-hidden="true"></i></button>';
       projectViewHTML +=                   '</div>';
       projectViewHTML +=                   '<div>';
       if(tasks.length == 0){
            projectViewHTML +=                     '<p>Create Tasks first</p>';
       }else{
            projectViewHTML +=                   '<table class="table table-condensed text-center">';
            projectViewHTML +=                         '<thead class="thead-dark">';
            projectViewHTML +=                               '<tr>';
            projectViewHTML +=                                   '<td>Priority</td>';
            projectViewHTML +=                                   '<td>Name</td>';
            projectViewHTML +=                                   '<td>Employee</td>';
            projectViewHTML +=                                   '<td>Action</td>';
            projectViewHTML +=                               '</tr>';
            projectViewHTML +=                           '</thead>';
            projectViewHTML +=                           '<tbody>';
            for(var t = 0 ;t<tasks.length;t++){
                projectViewHTML +=                               '<tr>';
                projectViewHTML +=                                   '<td>'+tasks[t].priority+'</td>';
                projectViewHTML +=                                   '<td>'+tasks[t].name+'</td>';
                if(tasks[t].user == null){
                    projectViewHTML +=                               '<td>Not Assinged yet</td>';
                }else{
                    projectViewHTML +=                               '<td>'+tasks[t].user['name']+'</td>';
                }
                projectViewHTML +=                                   '<td>';
                projectViewHTML +=                                       '<button type="button" class="btn btn-outline-info edit-task" data-edittaskid><i class="zmdi zmdi-edit"></i></button>';
                // projectViewHTML +=                                       '<button type="button" class="btn btn-outline-danger delete-task" data-deletetaskid="'+tasks[t].id+'"><i class="zmdi zmdi-delete"></i></button>';
                
                projectViewHTML +=                                          '<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModalCenter">';
                projectViewHTML +=                                              '<i class="zmdi zmdi-delete"></i>';
                projectViewHTML +=                                         ' </button>';
                projectViewHTML +=                                          '<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">';
                projectViewHTML +=                                              '<div class="modal-dialog modal-dialog-centered" role="document">';
                projectViewHTML +=                                                  '<div class="modal-content">';
                projectViewHTML +=                                                      '<div class="modal-header">';
                projectViewHTML +=                                                          '<h5 class="modal-title" id="exampleModalCenterTitle">Delete the task</h5>';
                projectViewHTML +=                                                          '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                projectViewHTML +=                                                              '<span aria-hidden="true">&times;</span>';
                projectViewHTML +=                                                          '</button>';
                projectViewHTML +=                                                      '</div>';
                projectViewHTML +=                                                      '<div class="modal-body">';
                // projectViewHTML +=                                                          tasks[t].name;
                projectViewHTML +=                                                      '</div>';
                projectViewHTML +=                                                      '<div class="modal-footer">';
                projectViewHTML +=                                                          '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
                projectViewHTML +=                                                          '<button type="button" class="btn btn-danger delete-task" data-deletetaskid="'+tasks[t].id+'" data-id="'+project.id+'" data-dismiss="modal">Delete</button>';
                projectViewHTML +=                                                      '</div>';
                projectViewHTML +=                                                  '</div>';
                projectViewHTML +=                                              '</div>';
                projectViewHTML +=                                          '</div>';
                projectViewHTML +=                                       '<div class="dropdown pull-right p-r-10">';
                projectViewHTML +=                                           '<button class="btn btn-outline-success dropdown-toggle" type="button" id="employeeDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-account-add"></i></button>';
                projectViewHTML +=                                               '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
                for(var j = 0 ; j < assingedEmployees.length; j++){
                    projectViewHTML +=                          '                   <li class="dropdown-item task-employee-list" data-taskemployeeid="'+assingedEmployees[j].id+'" data-taskid="'+tasks[t].id+'"  data-id="'+project.id+'">'+assingedEmployees[j].name+'</li>';
                }
                projectViewHTML +=                                           '</div>';
                projectViewHTML +=                                       '</div>'; 
                projectViewHTML +=                                       '<div class="dropdown pull-right p-r-10">';
                projectViewHTML +=                                           '<button class="btn btn-outline-success dropdown-toggle" type="button" id="employeeDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-flag"></i></button>';
                projectViewHTML +=                                               '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
                projectViewHTML +=                                                  '<li class="dropdown-item priority-item" value="3" data-id="'+tasks[t].id+'">High</li>';
                projectViewHTML +=                                                  '<li class="dropdown-item priority-item" value="2" data-id="'+tasks[t].id+'">Medium</li>';
                projectViewHTML +=                                                  '<li class="dropdown-item priority-item" value="2" data-id="'+tasks[t].id+'">Low</li>';
                projectViewHTML +=                                              '</div>';
                projectViewHTML +=                                       '</div>';        
                projectViewHTML +=                                   '</td>';
                projectViewHTML +=                               '</tr>';
            }
            projectViewHTML +=                           '</tbody>';
            projectViewHTML +=                       '</table>';
       }
       projectViewHTML +=                   '</div>';
       projectViewHTML +=               '</div>';
       projectViewHTML +=           '</div>';
       projectViewHTML +=       '</div>';
       projectViewHTML +=   '</div>';
       
       $('#singleProject').html(projectViewHTML);
    
    }

    getProjectDetails=function(projectID){
        $.ajax({
            method: 'get',
            url: '/home/company/project/'+projectID,
            data:{
                'id':projectID
            }
        }).done(function(data) {
            console.log(data);
            singleProjectUI(data.project,data.employees,data.assingedEmployees,data.tasks);
        }).fail(function(error) {
            console.log(error);
        });
        
    }

    

    assignProject = function(projectID,employeeID){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method:'post',
            url:'/home/company/assign-project',
            data:{
                'projectID':projectID,
                'employeeID':employeeID,
            }
        }).done(function(data){
            console.log(data.assingedEmployees);
        }).fail(function(error){
            console.log(error);
        })
    }

    createTask = function(projectID){
        var taskName = $('#taskName').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method:'post',
            url:'/home/company/create-task',
            data:{
                'id': projectID,
                'name':taskName,
            }

        }).done(function(data){
            console.log(data);
            $('#taskName').val('');
        }).fail(function(error){
            console.log(error);
        });
    }

    assignTask = function(taskID,employeeID,projectID,){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method:'post',
            url:'/home/company/assign-task',
            data:{
                'taskID': taskID,
                'employeeID':employeeID,
                'id': projectID,
            }

        }).done(function(data){
            console.log(data);
            getProjectDetails(projectID);
        }).fail(function(error){
            console.log(error);
        });

    }

    deleteTask = function (taskID,projectID){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method:'delete',
            url:'/home/company/delete-task',
            data:{
                'taskID':taskID,
                'id': projectID,
            }           
        }).done(function(data){
            console.log(data);
            getProjectDetails(projectID);
            
        }).fail(function(error){
            console.log(error);
        })
    }
    

    


    $(document).ready(function(){
        $(document).on('click', '#addTask' ,function(){
            var projectID  = $(this).data('id');
            createTask(projectID);
            getProjectDetails(projectID);
        });
        $(document).on('click','.projectID',function(){
            var projectID = $(this).data('id');
            getProjectDetails(projectID);
        });

        $(document).on('click','.employee-list',function(){
            var projectID = $(this).data('projectid');
            var employeeID = $(this).data('employeeid');
            assignProject(projectID,employeeID);
            getProjectDetails(projectID);

        });
        // Task assign to project employees
        $(document).on('click','.task-employee-list',function(){
            var employeeID  = $(this).data('taskemployeeid');
            var taskID = $(this).data('taskid');
            var projectID = $(this).data('id');
            assignTask(taskID,employeeID,projectID,);
            
        });

        $(document).on('click','.delete-task',function(){
            var taskID = $(this).data('deletetaskid');
            var projectID = $(this).data('id');
            deleteTask(taskID,projectID);
            
        });

        $('input[name="daterange"]').daterangepicker();
        var value = $('#dateRange').val();
        console.log(value);
        
    });

    
    
    
}(jQuery));