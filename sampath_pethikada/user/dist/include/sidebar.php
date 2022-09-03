<?php $year=date("Y"); ?>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
   
  
    <li class="nav-item">
      <a class="nav-link" href="index.php">
      <div class="btn btn-md btn-gradient-light">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
        </div>
      </a>
    </li>
     

    <li class="nav-item">
    <?php echo "<a class='nav-link' href='population.php?type=0&&year=$year'>
   <span class='menu-title'>ජනගහනය</span>
   <i class='mdi mdi-account-multiple menu-icon'></i>
    </a>"; ?>
    </li>
      
    <li class="nav-item">
    <?php echo "<a class='nav-link' href='job.php?type=0&&year=$year'>
    <span class='menu-title'>රැකියා</span>
    <i class='mdi mdi-book-open-page-variant menu-icon'></i>
    </a>"; ?>
    </li>

    <li class="nav-item">
    <?php echo "<a class='nav-link' href='house_unit.php?type=0&&year=$year'>
    <span class='menu-title'>නිවාස ඒකක</span>
    <i class='mdi mdi-home-modern menu-icon'></i>
    </a>"; ?>
    </li>

    <li class="nav-item">
    <?php echo "<a class='nav-link' href='education.php?type=0&&year=$year'>
    <span class='menu-title'>අධ්‍යාපන</span>
    <i class='mdi mdi-school menu-icon'></i>
    </a>"; ?>
    </li>  

    <li class="nav-item">
    <?php echo "<a class='nav-link' href='religious.php?type=0&&year=$year'>
    <span class='menu-title'>ආගමික</span>
    <i class='mdi mdi-brightness-5 menu-icon'></i>
    </a>"; ?>
    </li>

    <li class="nav-item"> 
    <?php echo "<a class='nav-link' href='agri.php?type=0&&year=$year'>
    <span class='menu-title'>කෘෂිකාර්මික</span>
    <i class='mdi mdi-gate menu-icon'></i>
    </a>"; ?>
    </li>

    <li class="nav-item"> 
    <?php echo "<a class='nav-link' href='health.php?type=0&&year=$year'>
    <span class='menu-title'>සෞඛ්‍ය</span>
    <i class='mdi mdi-stethoscope menu-icon'></i>
    </a>"; ?>
    </li>

    <li class="nav-item"> 
    <?php echo "<a class='nav-link' href='social_service.php?type=0&&year=$year'>
    <span class='menu-title'>සමාජ සේවා</span>
    <i class='mdi mdi-voice menu-icon'></i>
    </a>"; ?>
    </li>

    <li class="nav-item"> 
    <?php echo "<a class='nav-link' href='industries.php?type=0&&year=$year'>
    <span class='menu-title'>කර්මාන්ත හා වෙළද</span>
    <i class='mdi mdi-truck-delivery menu-icon'></i>
    </a>"; ?>
    </li>

    <li class="nav-item"> 
    <?php echo "<a class='nav-link' href='communication.php?type=0&&year=$year'>
    <span class='menu-title'>ප්‍රවාහන හා සන්නිවේදන</span>
    <i class='mdi mdi-wifi menu-icon'></i>
    </a>"; ?>
    </li>

    <li class="nav-item"> 
    <?php echo "<a class='nav-link' href='other.php?type=0&&year=$year'>
    <span class='menu-title'>විවිධ තොරතුරු</span>
    <i class='mdi mdi-receipt menu-icon'></i>
    </a>"; ?>
    </li>

    <li class="nav-item"> 
    <?php echo "<a class='nav-link' href='tourism.php?type=0&&year=$year'>
    <span class='menu-title'>සංචාරක</span>
    <i class='mdi mdi-image-filter-hdr menu-icon'></i>
    </a>"; ?>
    </li>

  </ul>
</nav>