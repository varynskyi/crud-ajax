
$(document).ready(function(){
    fetchUser(); 
    function fetchUser()
    {
     var action = "Load";
     $.ajax({
      url : "action.php", 
      method:"POST", 
      data:{action:action}, 
      success:function(data){
       $('#result').html(data); 
      }
     });
    }
   
    $('#modal_button').click(function(){
     $('#customerModal').modal('show'); 
     $('#first_name').val(''); 
     $('#last_name').val(''); 
     $('#email').val('');
     $('#phone').val('');
     $('.modal-title').text("Create New Records"); 
     $('#action').val('Create');
    });
   
    
    $('#action').click(function(){
     var firstName = $('#first_name').val(); 
     var lastName = $('#last_name').val(); 
     var email = $('#email').val();
     var phone = $('#phone').val();
     var id = $('#customer_id').val();  
     var action = $('#action').val();  
     if(firstName != '' && lastName != '' && email != '' && phone != '') 
     {
      $.ajax({
       url : "action.php",    
       method:"POST",     
       data:{firstName:firstName, lastName:lastName, email:email, phone:phone, id:id, action:action},
       success:function(data){
        alert(data);    
        $('#customerModal').modal('hide'); 
        fetchUser();    
       }
      });
     }
     else
     {
      alert("Both Fields are Required"); 
     }
    });

    $(document).on('click', '.update', function(){
     var id = $(this).attr("id"); 
     var action = "Select";  
     $.ajax({
      url:"action.php",   
      method:"POST",   
      data:{id:id, action:action},
      dataType:"json",  
      success:function(data){
       $('#customerModal').modal('show');   
       $('.modal-title').text("Update Records");
       $('#action').val("Update");   
       $('#customer_id').val(id);    
       $('#first_name').val(data.first_name); 
       $('#last_name').val(data.last_name);  
       $('#email').val(data.email);
       $('#phone').val(data.phone);
      }
     });
    });
     
    $(document).on('click', '.delete', function(){
     var id = $(this).attr("id");
     if(confirm("Are you sure you want to remove this data?")) 
     {
      var action = "Delete"; 
      $.ajax({
       url:"action.php",   
       method:"POST",    
       data:{id:id, action:action}, 
       success:function(data)
       {
        fetchUser();   
        alert(data);    
       }
      })
     }
     else   
     {
      return false; 
     }
    });
   });