<?php
require('conexiones.php');
class Querys{

    var $menu ="";
    var $sql ="";
    public function ___construct(){
        $this ->menu=$menu;
        $this -> sql = $sql;   
        
 
    }  
    public function MenuPartes(){
        
         $conex = new Conexiones();
    
          $this ->  sql = "SELECT titulo,img,precio,detalle FROM menu;";
            $result = $conex->conecta()->query($this->sql);
            
            while($rows = $result->fetch(PDO::FETCH_ASSOC)){        
                
                $this->menu .= '<li>
                <div class = "productoBorder">
                    <img  class="productoImagen" src='.$rows["img"].'>
                    <h3  class="productoTitulo"  >'.$rows["titulo"].'</h3>
                    <h3 class="productoPrecio"  >'.$rows["precio"].'</h3>
                    <button class="productoButton" >'."Agrega al carrito".'</button>
                    <br>
                    
                    <button id="productoDetalleButton" >'."Detalle".'</button>
                    <br>
                    <p id= "detalles">'.$rows["detalle"].'</p>
                    <br>
                </div>  
            </li>';
            }
            return $this->menu;
        }

}





?>