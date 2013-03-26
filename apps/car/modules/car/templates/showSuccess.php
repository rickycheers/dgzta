<?php $User = UserPeer::retrieveByPk($Car->getUserId());?>
<table class="table table-striped table-hover">
  <tbody>
    <tr>
      <th>User:</th>
      <td><?php echo sprintf("%s %s ", $User->getFirstName(),$User->getLastName() )?></td>
    </tr>
    <tr>
      <th>Brand:</th>
      <td><?php echo $Car->getBrand() ?></td>
    </tr>
    <tr>
      <th>Model:</th>
      <td><?php echo $Car->getModel() ?></td>
    </tr>
    <tr>
      <th>Color:</th>
      <td><?php echo $Car->getColor() ?></td>
    </tr>
    <tr>
      <th>Status:</th>
      <td><?php echo $Car->getStatus() ?></td>
    </tr>
    <tr>
      <th>Mileage:</th>
      <td><?php echo $Car->getMileage() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $Car->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $Car->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>
<?php $User = UserPeer::retrieveByPk($Car->getUserId());?>

<hr />

<a class="btn btn-primary" href="<?php echo url_for('car/edit?id='.$Car->getId()) ?>">Edit</a>
&nbsp;
<a class="btn btn-primary" href="<?php echo url_for('car/index') ?>">List</a>
