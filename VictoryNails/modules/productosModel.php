<?php
function get_productos(){
    
    $conect= mysqli_connect("localhost","root","","victory nails");
    $conect->set_charset("utf8");
    $sql= "SELECT * FROM `productos`";
    $getUs= mysqli_query($conect,$sql);
    $i=0;
    if($getUs->num_rows>0){
            while($row = mysqli_fetch_array($getUs)){
              
         ?>
          <div class="col">
            <div class="card h-100">

                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="<?php echo $row["img"]?>" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(148, 148, 148, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center"><?php echo $row["nombre"]?></h5>
                    <div class="pad-bt"> <a href="#!" class="btn btn-outline-danger ">Comprar ahora</a></div>
                </div>
            </div>
        </div>
   
     <!-- <div class="card-footer text-muted text-center">
      <form action='verCuarto.php' method='POST'>
        <input type='hidden' value="<?php echo $row["id_cuarto"];?>" name='id_cuarto'>
        <input type='hidden' value='vercuarto' name='valor'>
        <input type="submit"value="Ver más" class="btn btn-outline-primary">
      </form>
      </div>
            -->
    
    <?php
            
            }
        }   
    }


    ?>