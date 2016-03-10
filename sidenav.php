<ul id="slide-out" class="side-nav fixed">
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class=<?php echo '"collapsible-header'; if ($page == 'index' || $page == 'adddsp' || $page == 'editdsp' || $page == 'deletedsp') echo ' active"'; else echo '"'; ?>>Manage DSPs</a>
          <div class="collapsible-body">
            <ul>
              <li<?php if ($page == 'adddsp') echo ' class="active"'; ?>><a href="./adddsp.php";>Add DSP</a></li>
              <li<?php if ($page == 'editdsp') echo ' class="active"'; ?>><a href="./editdsp.php">Edit/View DSP</a></li>
              <li<?php if ($page == 'deletedsp') echo ' class="active"'; ?>><a href="./deletedsp.php">Delete DSP</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
    <li<?php if ($page == 'adddss') echo ' class="active"'; ?>>
      <a href="./adddss.php">Add DSS</a>
    </li>
    <li<?php if ($page == 'viewtransaction') echo ' class="active"'; ?>>
      <a href="./viewtransaction.php">View Transactions</a>
    </li>
  </ul>
  </nav>
<br>
