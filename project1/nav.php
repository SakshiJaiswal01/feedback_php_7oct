<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Welcome :<?php echo $sid; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="?con=feedback">Feedback<span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="?con=feedback">feedback</a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Welcome :<?php echo $sid; ?></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link active" href="logout.php">logout</a>
      </li>
    </ul>
  </div>
</nav>