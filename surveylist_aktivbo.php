<?php

/*
surveylist_aktivbo.php
written by: Shahid Tarar
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>AktivBo Survey </title>
  <meta http-equiv="content-type" content="text/html" charset="ISO-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
        .messagebox_erf{
                position:absolute;
                width:auto;
                margin-left:5px;
                border:1px solid #c93;
                background:#ffc;
                padding:3px;
        }
        .messageboxok_erf{
                position:absolute;
                width:auto;
                margin-left:5px;
                border:1px solid #349534;
                background:#C9FFCA;
                padding:3px;
                font-weight:bold;
                color:#008000;

        }
        .messageboxerror_erf{
                position:absolute;
                width:auto;
                margin-left:5px;
                border:1px solid #CC0000;
                background:#F7CBCA;
                padding:3px;
                font-weight:bold;
                color:#CC0000;
}
  </style>
  <script language="javascript">
      
      
      function AddSurvey(){
        
        $('#SurveyModal').modal('show');
        
        
        
    }
      function deleteRecord(id){
        var checkResponse =  confirm('Are you sure to delete record?');
        if(checkResponse == true){
          //alert(id);
           $.post("aktivbo.inc.php",{ eeid:(id),action:("delete")
                                    ,rand:Math.random() } ,function(data)
                                {
                                                    data = data.trim();  
                                                    if(data=='yes')
                                                    {
                                                          $("#msgbox_delete_button").fadeTo(200,0.1,function()  //start fading the messagebox
                                                          {

                                                            $(this).html('Deleting record...').addClass('messageboxok_erf').fadeTo(900,1,
                                                              function()
                                                            {
                                                               document.location.reload();
                                                            });

                                                          });
                                                    }

                                                    

                                                    else if(data=='No')
                                                    {
                                                          $("#msgbox_delete_button").fadeTo(200,0.1,function() //start fading the messagebox
                                                          {

                                                            $(this).html('Couldnt delete it for some reason...').addClass('messageboxerror_erf').fadeTo(900,1);
                                                          });
                                                    }



                                                    else
                                                    {
                                                          $("#msgbox_delete_button").fadeTo(200,0.1,function() //start fading the messagebox
                                                          {

                                                            $(this).html('Something went wrong ('+data+')...').addClass('messageboxerror_erf').fadeTo(900,1);
                                                          });
                                                    }

                                          });
          
        }else{
        return false;
        }
      }

    function fetch_survey_values(s_id){
        
        //alert(s_id);
        
        $.post("aktivbo.inc.php",{ eeid:(s_id),action:("fetch")
                                    ,rand:Math.random() } ,function(data)
                                {
                                                                       // alert(data);
                                           
                                    
                                          if(data!="")
                                          {
                                                data = data.trim();
                                                data = data.split("-");
                                                        //alert((data[4]));
                                                     $("#E_Firstname").val(data[0]);
                                                     $("#E_Surname").val(data[1]);
                                                     
                                                     $("#E_Address").val(data[2]);
                                                     
                                                     $("#E_Email").val(data[3]);
                                                    
                                                     $("#E_Eid").val(data[4]);
                                                   
                                                   

                                            }

                                });
        //$('#SurveyModal').modal('toggle');
        $('#SurveyModal').modal('show');
        //$('#SurveyModal').modal('hide');
        
    }
    
    $(document).ready(function()
        {
                      $("#Survey_form").submit(function()

                            {

                                          $("#msgbox_survey_form").removeClass().addClass('messagebox_erf').text('Synchronizing to database....').fadeIn(1000);
                                          
                                          resp_id=$('#E_Eid').val();
                                          if(resp_id!='')
                                          {   e_eid_value=resp_id;
                                              action_value='update';
                                          }
                                          else if(resp_id=='')
                                          {   e_eid_value=0;
                                              action_value='insert';
                                          }
                                           
                                           //alert(e_eid_value);

                                          $.post("aktivbo.inc.php",{ efirstname:$('#E_Firstname').val(),esurname:$('#E_Surname').val(),eaddress:$('#E_Address').val(),eemail:$('#E_Email').val(),eeid:(e_eid_value),action:(action_value) 
                                              ,rand:Math.random() } ,function(data)
                                                {
                                                     data = data.trim(); 
                                                   
                                                        //alert(data);
                                                    if(data=='yes')
                                                    {
                                                          $("#msgbox_survey_form").fadeTo(200,0.1,function()  //start fading the messagebox
                                                          {

                                                            $(this).html('Saving data...').addClass('messageboxok_erf').fadeTo(900,1,
                                                              function()
                                                            {
                                                               document.location.reload();
                                                            });

                                                          });
                                                    }

                                                    

                                                    else if(data=='No')
                                                    {
                                                          $("#msgbox_survey_form").fadeTo(200,0.1,function() //start fading the messagebox
                                                          {

                                                            $(this).html('Please check data...').addClass('messageboxerror_erf').fadeTo(900,1);
                                                          });
                                                    }



                                                    else
                                                    {
                                                          $("#msgbox_survey_form").fadeTo(200,0.1,function() //start fading the messagebox
                                                          {

                                                            $(this).html('Something went wrong ('+data+')...').addClass('messageboxerror_erf').fadeTo(900,1);
                                                          });
                                                    }

                                          });



                                 return false;

                            });



     

          });
    </script>

</head>
<body>


  <?php
  
                        require_once( 'survey_modal.php');
                        require_once( 'aktivbo.inc.php');
  
  ?>  

<!--Main Page-->
    <div class="card">
  <div class="card-header"> AktivBo Survey</div>
  <div class="card-body">
    <h5 class="card-title">List of surveys completed</h5>
    <p class="card-text">Go through the list and perform actions</p>
<td><button type="button" class="btn btn-success" onclick="AddSurvey();">Add New Survey</button></td>

                        <table class="table table-hover">
                        <thead>
                        <tr class="bg-info">

<!--                          <th >Sr. #</th>-->
                          <th >RepondentID </th>


                          <th >First Namn</th>
                          <th >Last Name</th>
                          <th >Address</th>

                          <th >Email</th>
                          <th >Update</th>
                          <th >Delete<span id="msgbox_delete_button" style="display:none"></span></th>

                        </thead>

                        </tr>
                        
                        <?php
                        
                       
                        $SurveyInfo=new Aktivbo();
                        
                         $SurveyData = $SurveyInfo->select_all();
 
                      
                        ?>
                        <?php
                        
                            #var $cnt=0;
                            if(mysqli_num_rows($SurveyData)>0)
                            {
                                    while($row = mysqli_fetch_array($SurveyData)){ ?>

                                       <tr>
       <!--                                 <td><?php echo ++$cnt;?></td>-->
                                        <td><?php echo $row["RespondentID"];?></td>   

                                        <td><?php echo utf8_decode($row["FirstName"]);?></td> 

                                        <td><?php echo utf8_decode($row["LastName"]);?></td> 

                                        <td><?php echo utf8_decode($row["Address"]);?></td> 

                                        <td><?php echo utf8_decode($row["E_mail"]);?></td> 

       <!--                                 <td><a href="#" class="btn btn-primary">Update</a></td>-->

                                           <td><button type="button" class="btn btn-primary" onclick="fetch_survey_values(<?php echo $row["RespondentID"];?>);">Update</button></td>

                                           <td><button type="button" class="btn btn-danger" onclick="deleteRecord(<?php echo $row["RespondentID"];?>);">Delete</button></td> <!--<span id="msgbox_delete_button" style="display:none">-->

                                       </tr>    

                                   <?php } 
                                       
                             } else {?>
                                 
                                       <tr><td colspan="7"> No record found!!!</td></tr>  
                                 
                             <?php } ?>         


                       </table>

  </div>
</div>
          
          
          
       

</body>
</html>
