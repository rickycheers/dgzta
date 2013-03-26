<div class="container-fluid">
<h1>Cars List</h1>
</div>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <h3><th>User</th></h3>
      <h3><th>Brand</th></h3>
      <h3><th>Model</th></h3>
      <h3><th>Color</th></h3>
      <h3><th>Status</th></h3>
      <h3><th>Mileage</th></h3>
      <h3><th>Created at</th></h3>
      <h3><th>Updated at</th></h3>
    </div>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Cars as $Car): ?>
    <div class="row-fluid">
    <?php $User = UserPeer::retrieveByPk($Car->getUserId());?>
    <tr>
      <td><?php echo sprintf("%s %s ", $User->getFirstName(),$User->getLastName() )?> </td>
      <td><a href="<?php echo url_for('car/show?id='.$Car->getId()) ?>"><?php echo $Car->getBrand() ?></td>
      <td><?php echo $Car->getModel() ?></td>
      <td><?php echo $Car->getColor() ?></td>
      <td><?php echo $Car->getStatus() ?></td>
      <td><?php echo $Car->getMileage() ?></td>
      <td><?php echo $Car->getCreatedAt() ?></td>
      <td><?php echo $Car->getUpdatedAt() ?></td>
    </tr>
  </div>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('car/new') ?>" class="btn btn-primary">New Car</a>

