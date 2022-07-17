<?php include 'header.php'; ?>
    <h1 class="text-center">Delete Match</h1>
    <h2 class="text-center"><?php echo 'Do you really want to delete ' . $match['Name'] . '?';?></h2>
    <form action="." method="post" class="col-lg-6 mx-auto">
        <hr>
        <dl>
            <dt> Match ID:</dt>
            <dd><?php echo $match['ID']; ?></dd>
            <dt>Name:</dt>
            <dd><?php echo $match['Name']; ?></dd>
            <dt>Match Type:</dt>
            <dd><?php echo $match['MatchType']; ?></dd>
            <dt>Match Year:</dt>
            <dd><?php echo $match['MatchYear']; ?></dd>
            <dt>Match Place:</dt>
            <dd><?php echo $match['MatchPlace']; ?></dd>
            <dt>Score:</dt>
            <dd><?php echo $match['Score']; ?></dd>
        </dl>
        <div class="form-group text-center">
            <input type="hidden" name="ID" value="<?php echo $match['ID']; ?>">
            <input type="hidden" name="action" value="delete-matches">
            <input type="submit" class="btn btn-secondary" value="Yes, Delete Match">
            <a href="." class="btn btn-secondary">No, Do Not Delete Match</a>
        </div>
    </form>
<?php include "footer.php"; ?>