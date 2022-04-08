$(document).ready(function(){
 
    $('#comment_form').on('submit', function(event){
     event.preventDefault();
     var form_data = $(this).serialize();
     $.ajax({
      url:"modeleComments/db.php",
      method:"POST",
      data:form_data,
      dataType:"JSON",
      success:function(data)
      {
       if(data.error != '')
       {
        $('#comment_form')[0].reset();
        $('#comment_message').html(data.error);
        $('#id').val('0');
        load_comment();
       }
      }
     })
    });
   
    load_comment();
   
    function load_comment()
    {
     $.ajax({
      url:"modeleComments/comment.php",
      method:"POST",
      success:function(data)
      {
       $('#display_comment').html(data);
      }
     })
    }
   
    $(document).on('click', '.repondre', function(){
     var id = $(this).attr("id");
     $('#id').val(id);
     $('#comment_content').focus();
    });
    
   });