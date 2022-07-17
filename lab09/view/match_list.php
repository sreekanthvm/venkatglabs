<?php include 'header.php'; ?>
<table class="table table-hover">
    <caption> <h1> Matches List</h1></caption>
    <thead>
    <tr>
        <th scope = "col" > Name </th>
        <th scope = "col" > Match Type </th>
        <th scope = "col" > Match Year </th>
        <th scope = "col" > Match Place </th>
        <th scope = "col" > Score </th>
        <th scope = "col" > Update </th>
        <th scope = "col" > Delete </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($matches as $match): ?>
    <tr>
        <td> <?php echo $match['Name']; ?> </td>
        <td> <?php echo $match['MatchType']; ?> </td>
        <td> <?php echo $match['MatchYear']; ?> </td>
        <td> <?php echo $match['MatchPlace']; ?> </td>
        <td> <?php echo $match['Score']; ?> </td>
        <td> <form action="." method="post">
                <input type="hidden" name="action" value="view-update-match">
                <input type="hidden" name="ID" value="<?php echo $match['ID'];?>">
                <input type="submit" class="btn btn-secondary" value="Update" aria-label="Update <?php echo $match['Name'];?>">
            </form>
        </td>
        <td>
            <form action="." method="post">
                <input type="hidden" name="action" value="delete-match">
                <input type="hidden" name="ID" value="<?php echo $match['ID'];?>">
                <input type="submit" class="btn btn-secondary" value="Delete" aria-label="Delete <?php echo $match['Name'];?>">
            </form>
        </td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
<div class="form-group text-center">
    <form action="." method="post" class="btn-group">
        <input type="hidden" name="action" value="view-add-match">
    <input type="submit" class="btn btn-secondary" value="Add Match">
    </form>
    <form action="." method="post" class="btn-group">
        <input type="hidden" name="action" value="clear-message">
        <input type="submit" class="btn btn-secondary" value="Clear Message">
    </form>
</div>
<?php include 'footer.php'; ?>
