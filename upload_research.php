<form method="post" action="online_submission.php" enctype="multipart/form-data">
    
        
        <label> Track :  </label> 
            <select name="track" class="form-control" required="required">
                <option value="">Please selected</option>
                <option value="Science and Technology">Science and Technology</option>
                <option value="AI and Machine Learning">AI and Machine Learning</option>
                <option value="Economics">Economics</option>
                <option value="Business">Business</option>
            </select><br>
        
        
        <label>Title : </label> <br>
        
        <textarea name="title" class="form-control" rows="4" cols="50" required="required"></textarea> <br>
        
        
        
        <label>Upload Research File : </label> <br>
        
        <input type="file" name="file" class="form-control" required="required">
        
        <hr>
    
        <input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit" ><br>
        <input type='reset' class="btn btn-outline-primary btn-block" value='clear'>
   
    
    </form>