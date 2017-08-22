/**
 * Created by JIL on 14/08/2017.
 */
;(function () {
    var url = "/groups";

    function ucaps(str) {
        str = str.toLowerCase().split(' ');                // will split the string delimited by space into an array of words

        for(var i = 0; i < str.length; i++){               // str.length holds the number of occurrences of the array...
            str[i] = str[i].split('');                    // splits the array occurrence into an array of letters
            str[i][0] = str[i][0].toUpperCase();          // converts the first occurrence of the array to uppercase
            str[i] = str[i].join('');                     // converts the array of letters back into a word.
        }
        return str.join(' ');                              //  converts the array of words back to a sentence.
    }
   
    // This funciton is used to groups
    var groups = function() {
        var state = $('#state').val();

        // groups page editing
        //get groupid
        $('#editg').on('click', function(){
            alert($(this).data('id'));

            $.get(url + '/' + task_id, function (data) {
                //success data
                console.log(data);
                $('#task_id').val(data.id);
                $('#task').val(data.task);
                $('#description').val(data.description);
                $('#btn-save').val("update");

                $('#myModal').modal('show');
            });
            
            $('#g-name').val('');
            $('#g-desc').html('');
            // $("#cafeId").val($(this).data('id'));
        });




        //display modal form for task editing
        // $('#savegroup').on('click' ,function(){
        //     var task_id = $(this).val();
        //
        //     $.get(url + '/' + task_id, function (data) {
        //         //success data
        //         console.log(data);
        //         $('#task_id').val(data.id);
        //         $('#task').val(data.task);
        //         $('#description').val(data.description);
        //         $('#btn-save').val("update");
        //
        //         $('#myModal').modal('show');
        //     })
        // });

        //create new task / update existing task
        $("#savegroup").on('click' , function (e) {
            var groupid = $('#groupid').val();
            var groupname = $('#name').val();
            var groupdescription = $('#desc').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            e.preventDefault();

            var formData = {
                groupid: groupid,
                groupname: groupname,
                groupdescription: groupdescription,
            };

            //used to determine the http verb to use [add=POST], [update=PUT]
            var type = "POST"; //for creating new resource
            var my_url = url;

            if (state == "update"){
                type = "PUT"; //for updating existing resource
                my_url += '/' + groupid;
            }

            console.log(formData);

           $.ajax({

                type: type,
                url: my_url,
                data: formData,
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    // alert(data.groupname+ ' ' + data.groupdescription);
                    if (state == "update"){
                        $('#groupname').html(ucaps(data.groupname));
                        $('#groupdescription').html(data.groupdescription);
                    }else{

                    }


                    // var task = '<tr id="task' + data.id + '"><td>' + data.id + '</td><td>' + data.task + '</td><td>' + data.description + '</td><td>' + data.created_at + '</td>';
                    // task += '<td><button class="btn btn-warning btn-xs btn-detail open-modal" value="' + data.id + '">Edit</button>';
                    // task += '<button class="btn btn-danger btn-xs btn-delete delete-task" value="' + data.id + '">Delete</button></td></tr>';
                    //
                    // if (state == "add"){ //if user added a new record
                    //     $('#tasks-list').append(task);
                    // }else{ //if user updated an existing record
                    //
                    //     $("#task" + task_id).replaceWith( task );
                    // }
                    //
                    // $('#frmTasks').trigger("reset");

                    $('#addGroup').modal('hide')
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    };



    // group functions
    var alertme = function() {

    };


    // Document on load.
    $(function(){
        console.log('ajfkajskfajsf');
        groups();
    });
}());
