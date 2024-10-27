<?php
 include("./include/authentication.php");
 include("./include/header.php");
 include("./include/sidebar.php");
 include("./include/topbar.php");
?>

<div class="card--container">

<h3 class="main--title"> Accounts </h3>

<ul class="box-info">
  <li>
    <i class='bx bxs-group' ></i>
    <span class="text">
      <h3>1020</h3>
      <p>Staff</p>
    </span>
  </li>
  <li>
    <i class='bx bxs-group' ></i>
    <span class="text">
      <h3>1020</h3>
      <p>Faculty</p>
    </span>
  </li>
  <li>
    <i class='bx bxs-group' ></i>
    <span class="text">
      <h3>1020</h3>
      <p>HR</p>
    </span>
  </li>

</ul>
</div>

<div class="table-data">
              <div class="order">
                <!-- insert calendar here -->
                 <div class="hero">
                  <div class="calendar">
                    <div class="left-calendar">
                      <p id="date">21</p>
                      <p id="day">Saturday</p>
      
                    </div>
                    <div class="right-calendar">
                      <p id="month">September</p>
                      <p id="year">2024</p>
      
                    </div>
                  </div>
                  <div class="academic-info">
                    <h1>Academic Information</h1>
                    <div class="semester-details">
                      <p><strong>Current Semester:</strong> <span id="currentSemester"></span></p>
                      <p><strong>School Year:</strong> <span id="schoolYear"></span></p>
                    </div>
                  </div>
                 </div>
              </div>

              <div class="todo">
                <div class="head">
                  <h3>Todos</h3>
                  <i class='bx bx-plus' ></i>
                  <i class='bx bx-filter' ></i>
                </div>
                <ul class="todo-list">
                  <li class="completed">
                    <p>Todo List</p>
                    <i class='bx bx-dots-vertical-rounded' ></i>
                  </li>
                  <li class="completed">
                    <p>Todo List</p>
                    <i class='bx bx-dots-vertical-rounded' ></i>
                  </li>
                  <li class="not-completed">
                    <p>Todo List</p>
                    <i class='bx bx-dots-vertical-rounded' ></i>
                  </li>
                  <li class="completed">
                    <p>Todo List</p>
                    <i class='bx bx-dots-vertical-rounded' ></i>
                  </li>
                  <li class="not-completed">
                    <p>Todo List</p>
                    <i class='bx bx-dots-vertical-rounded' ></i>
                  </li>
                </ul>
              </div>
            </div>

            
<?php
 include("./include/footer.php");
?>