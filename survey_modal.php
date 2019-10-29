<?php

//survey_modal.php
//Written by: Shahid Tarar
        
?>        



  <!-- Survey Modal  starts here-->
<div id="SurveyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Add/Update Survey info!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" >
        <p>
            <form method="post" action="#" id="Survey_form">
            <div class="row register-form">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="E_Firstname">First Name</label>
                                            <input type="text" class="form-control" placeholder="Förnamn *" id="E_Firstname" value="" Required/>
                                            <small id="firstnameHelp" class="form-text text-muted">* First name is mandatory</small>
                                        </div>
                                        
                                      <div class="form-group">
                                          <label for="E_Surname">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Efternamn *" id="E_Surname" value="" Required/>
                                            <small id="lastNameHelp" class="form-text text-muted">*Last name is mandatory</small>
                                        </div> 
                                      
                                       
                                         <div class="form-group">
                                             <label for="E_Email">E-Mail</label>
                                            <input type="email" class="form-control" placeholder="E-post " value="" id="E_Email" />
                                        </div> 
                                        
                                        <div class="form-group">
                                            <label for="E_Address">Address</label>
                                            <input type="text" minlength="7" maxlength="100" name="txtEAddress" class="form-control" placeholder="Hemadress "  id="E_Address" value="" />
                                        </div>
                                        

                                        
                                    </div> 
                
                                     <input type="hidden"  id="E_Eid" value="" />
                                    <div class="col-md-10">
                                        

                                        
                                        <button type="submit" class="btn btn-danger" >Save Data</button> <span id="msgbox_survey_form" style="display:none"></span>
                                    </div>
                                    
                                    
                                </div>
        
            </form>
        </p>
      </div>
        
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>

  </div>
</div>

<!-- Survey Modal ends here -->



