<?php include 'header.php'; ?>
<h1 class="text-center"> Update Match</h1>
<form action="." method="post" class="col-lg-6 mx-auto">
    <hr>
    <div class="form-group">
        <label> Match ID </label>
        <input type="text" class="form-control" name="ID" id="ID" value="<?php echo $match['ID'];?>" disabled>
    </div>
    <div class="form-group">
        <label for="match-name">Name</label>
        <input type="text" class="form-control" name="match-name" id="match-name" placeholder="Name"
               value="<?php echo isset($name) ? $name : $match['Name']; ?>" autofocus>
    </div>
    <div class="form-group">
            <label for="match-type">Match Type</label>
            <select class="custom-select" name="match-type" id="match-type">
            <option value="TEST"<?php if($matchType === 'TEST' || (!isset($matchType) && $match['MatchType'] === 'TEST')) echo ' selected'; ?>>TEST</option>
            <option value="ODI"<?php if($matchType === 'ODI' || (!isset($matchType) && $match['MatchType'] === 'ODI')) echo ' selected'; ?>>ODI</option>
            <option value="T20"<?php if($matchType === 'T20' || (!isset($matchType) && $match['MatchType'] === 'T20')) echo ' selected'; ?>>T20</option>
        </select>
    </div>
    <div class="form-group">
        <label for="match-year" >Match Year</label>
        <input type="text" class="form-control" name="match-year" id="match-year" placeholder="Match Year"
               value="<?php echo isset($matchYear) ? $matchYear : $match['MatchYear'];?>">
    </div>
    <div class="form-group">
        <label for="match-place" >Match Place</label>
        <input type="text" class="form-control" name="match-place" id="match-place" placeholder="Match Place"
               value="<?php echo isset($matchPlace) ?  $matchPlace : $match['MatchPlace'];?>">
    </div>
    <div class="form-group">
        <label for="score" >score</label>
        <input type="text" class="form-control" name="score" id="score" placeholder="Score"
               value="<?php echo isset($score) ?  $score : $match['Score'];?>">
    </div>
   
    <div class="form-group text-center">
        <input type="hidden" name="ID" value="<?php echo $match['ID'];?>">
        <input type="hidden" name="action" value="update-match">
        <input type="submit" class="btn btn-secondary" value="Update Match">
        <a href="." class="btn btn-secondary"> Cancel</a>
    </div>
</form>
<?php include 'footer.php';?>
