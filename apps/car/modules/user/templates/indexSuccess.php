<h1>Family Member List</h1>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>First name</th>
      <th>Last name</th>
      <th>Number of cars</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Users as $User): ?>
    <tr>
      <td> <a href="<?php echo url_for('user/show?id='.$User->getId()) ?>"><?php echo $User->getFirstName() ?></td>
      <td><?php echo $User->getLastName() ?></td>
      <td><?php echo $User->countCars() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('user/new') ?>"  class="btn btn-primary">New member</a>
