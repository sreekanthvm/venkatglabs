<?php include 'header.php'; ?>
<h1 class="text-center"> Add Match</h1>
<form action="." method="post" class="col-lg-6 mx-auto">
      <hr>
        <div class="form-group">
            <label for="match-name"> Name</label>
            <input type="text" class="form-control" name="match-name" id="match-name" placeholder="Name"
            value="<?php if (!is_null($name)) echo $name; ?>" autofocus>
        </div>
        <div class="form-group">
            <label for="match-type">Match Type</label>
            <select class="custom-select" name="match-type" id="match-type">
                <option value="choose"> Specify Class</option>
                <option value="TEST"<?php if($matchType === 'TEST') echo ' selected'; ?>>TEST</option>
                <option value="ODI"<?php if($matchType === 'ODI') echo ' selected'; ?>>ODI</option>
                <option value="T20"<?php if($matchType === 'T20') echo ' selected'; ?>>T20</option>
            </select>

            </div>
        <div class="form-group">
            <label for="match-year">Match Year</label>
            <input type="text" class="form-control" name="match-year" id="match-year" placeholder="Match Year"
                   value="<?php if (!is_null($matchYear)) echo $matchYear; ?>" >

        </div>
        <div class="form-group">
            <label for="match-place" >Match Place</label>
            <input type="text" class="form-control" name="match-place" id="match-place" placeholder="Match Place"
                   value="<?php if (!is_null($matchPlace)) echo $matchPlace; ?>" >
        </div>
        <div class="form-group">
            <label for="score" >Score</label>
            <input type="text" class="form-control" name="score" id="score" placeholder="Score"
                   value="<?php if (!is_null($score)) echo $score; ?>" >
        </div>
        
        <div class="form-group text-center">
            <input type="hidden" name="action" value="add-match">
            <input type="submit" class="btn btn-secondary" value="Add Match">
            <a href="." class="btn btn-secondary"> Cancel</a>
        </div>
</form>
<?php include 'footer.php';?>
