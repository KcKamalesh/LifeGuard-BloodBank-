<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>LifeGuard</title>
    <link rel="stylesheet" href="home.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/
font-awesome.min.css">
   </head>
<body>
<form action="insert1.php" method="post"> 
  <nav>
    <div class="nav-content">
      <div class="logo">
        <a href="home.php"><i class="fa fa-heartbeat"></i>LifeGuard</a>
      </div>
      <ul class="nav-links">
        <li><a href="home.php"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="donor.php"><i class="fa fa-user-plus"></i>Donor Registration</a></li>
        <li><a href="donorlist.php"><i class="fa fa-users"></i>Donors</a></li>
        <li><a href="search.php"><i class="fa fa-search"></i>Search Donors</a></li>
        <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
      </ul>
    </div>
  </nav>
  <section class="home"></section>
  <div class="text">
    <p><h3>Important information about blood donation</h3>
              <ul>
              <li>There is no substitute for human blood.</li>
              <li>Vital fluid that flows through the body is blood.</li>
              <li>The human body has an average of 5 liters of blood.</li>
              <li>Only 350 ml is taken during blood donation.</li>
              <li>Blood donated by one person can save 3 lives.</li>
              <li>Donor blood is divided into red blood cells, white blood cells, and platelets.</li>
              <li>Three of the patients who receive these separately are saved.</li>
             </ul><br><br>

     <section>
      <div class="row">
        <div class="column">
          <div class="card">
            <div class="icon">
              <i class="fa fa-check-square-o"></i>
            </div>
            <h3>Who can donate blood?</h3>
            <p>
              <ul>
                <li>Anyone between the ages of 18 and 60 can donate blood.</li>
        
                <li>Their weight should not be less than 45 kg.</li>
        
                <li>Men can donate blood once in 3 months and women once in 4 months.</li>
        
                <li>Body temperature should not exceed 37.5 degrees Celsius.</li>
               
              </ul>
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon">
              <i class="fa fa-ban"></i>
            </div>
            <h3>Who should not donate blood?</h3>
            <p>
             <ul>
                <li>People with typhoid and malaria should not donate blood for up to six months after receiving treatment.</li>
        
                <li>It is wrong for alcoholics to donate blood for the next 24 hours.</li>
        
                <li>Blood should not be donated for up to 5 days after menstruation and pregnant and lactating women should not donate blood for up to one year.</li>
        
                <li>Do not take blood from people infected with HIV or jaundice.</li>

                <li>People with heart disease, tuberculosis, epilepsy, mental illness, and cancer should not always donate blood.</li>
               
              </ul>
            </p>
          </div>
        </div>
         <div class="column">
          <div class="card">
            <div class="icon">
              <i class="fa fa-support"></i>
            </div>
            <h3>Benefits of Blood Donors</h3>
            <p>
              <ul>
                <li>Donating blood will not only protect the welfare of others but also help to improve self-interest.</li>
                <li>Donating blood is the equivalent of loading fresh blood into the body naturally.</li>
                <li>Various current studies have found that regular blood donors are less likely to have a heart attack.</li>
                <li>Blood donation is used to control and maintain a balanced hemoglobin level (heart attack).</li>
                <li>Blood pressure (hemoglobin) is maintained evenly by donating blood.  This avoids various diseases.</li>
                </ul>   
            </p>
          </div>
        </div>
      </div>
    </section>
</div>


  <script>
  let nav = document.querySelector("nav");
    window.onscroll = function() {
      if(document.documentElement.scrollTop > 20){
        nav.classList.add("sticky");
      }else {
        nav.classList.remove("sticky");
      }
    }
  </script>
</form>
</body>
</html>
