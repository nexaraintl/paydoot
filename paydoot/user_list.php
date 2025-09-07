<?php 
   include("header.php");
?>
      <div class="contents">
          <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 mb-30">
                  <div class="card mt-30">
                     <div class="card-body">

                        <div class="userDatatable adv-table-table global-shadow border-light-0 w-100 adv-table">
                           <div class="table-responsive">
                              <div class="adv-table-table__header">
                                 <h4>Data Table</h4>
                                 <div class="adv-table-table__button" style="display:none;">
                                    <div class="dropdown">
                                       <a class="btn btn-primary dropdown-toggle dm-select" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Export
                                       </a>

                                       <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                          <a class="dropdown-item" href="#">copy</a>
                                          <a class="dropdown-item" href="#">csv</a>
                                          <a class="dropdown-item" href="#">print</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="filter-form-container"></div>
                              <table class="table mb-0 table-borderless adv-table" data-sorting="true" data-filter-container="#filter-form-container" data-paging-current="1" data-paging-position="right" data-paging-size="10">
                                 <thead>
                                    <tr class="userDatatable-header">
                                       <th>
                                          <span class="userDatatable-title">id</span>
                                       </th>
                                       <th>
                                          <span class="userDatatable-title">user</span>
                                       </th>
                                       <th>
                                          <span class="userDatatable-title">emaill</span>
                                       </th>
                                       <th>
                                          <span class="userDatatable-title">Mobile</span>
                                       </th>
                                       <th data-type="html" data-name='position'>
                                          <span class="userDatatable-title">Bank Name</span>
                                       </th>
                                       <th>
                                          <span class="userDatatable-title">Location</span>
                                       </th>
                                       <th data-type="html" data-name='status'>
                                          <span class="userDatatable-title">status</span>
                                       </th>
                                       <th>
                                          <span class="userDatatable-title float-end">action</span>
                                       </th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                 
                                       $sql="SELECT * FROM `user`"; 
                                       $result=mysqli_query($conn,$sql);
                                       
                                       while($row=mysqli_fetch_assoc($result))
                                       {

                                       
                                    ?>

                                    <tr>
                                       <td>
                                          <div class="userDatatable-content"><?php echo $row["id"];?></div>
                                       </td>
                                       <td>
                                          <div class="d-flex">
                                             <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                   <h6><?php echo $row["name"];?></h6>
                                                </a>
                                             </div>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             <?php echo $row["email"];?>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             <?php echo $row["mobile"];?>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             <?php echo $row["bank_name"];?>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content">
                                             <?php echo $row["branch_name"];?>
                                          </div>
                                       </td>
                                       <td>
                                          <div class="userDatatable-content d-inline-block">
                                             <?php
                                                if($row["user_status"]=="Active"){?>
                                                   <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active"><?php echo $row["user_status"];?></span>
                                             <?php }elseif($row["user_status"]=="Deactivate"){?>
                                                <span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active"><?php echo $row["user_status"];?></span>
                                             <?php
                                             }else{?>
                                             <span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active"><?php echo $row["user_status"];?></span>
                                             <?php
                                             }?>
                                          </div>
                                       </td>
                                       <td>
                                          <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                             <li>
                                                <!-- <a  class="view" id="view" name="view" data-index=<?php echo $row["id"] ?>>
                                                   <i class="uil uil-eye"></i>
                                                </a> -->
                                                <a href="view_user_data.php?id=<?php echo $row["id"] ?>" class="view" id="view">
                                                   <i class="uil uil-eye"></i>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="edit_user.php?id=<?php echo $row["id"] ?>" class="edit" id="edit">
                                                   <i class="uil uil-edit"></i>
                                                </a>
                                             </li>
                                             <li>
                                                <a  class="remove" id="remove" name="remove" data-index=<?php echo $row["id"] ?>>
                                                   <i class="uil uil-trash-alt"></i>
                                                </a>
                                             </li>
                                          </ul>
                                       </td>
                                    </tr>

                                    <?php } ?>

                                 </tbody>
                              </table>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

    
<?php 
   include("footer.php");
?>