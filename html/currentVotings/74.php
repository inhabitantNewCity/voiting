<!DOCTYPE html>
<html>
 <head>
 
  <title>Variants of voiting</title>
 </head>
 <body>
     

 <form name="test" method="post" action="input1.php">

     <fieldset>
    <canvas id='draw' width='240' height='200' style='border:1px solid;'></canvas> 
<script>
var canvas=document.getElementById("draw")
var x=canvas.getContext("2d");
/* Создаем градиент */
var grad = x.createLinearGradient(0,0,0,150);
/* Добавляем точки цветового перехода */
grad.addColorStop(0.0,'black');
grad.addColorStop(1.0,'white');
/* Устанавливаем получившийся градиент как свойство заливки */ 
x.fillStyle=grad;
/* Рисуем фигиру, к которой будет применен созданный градиент */
x.fillRect(20,20,200,200);
</script>
  <p><b>Choose of variants:</b><Br>
   <input type="radio" name="voit" value="one"> dfghjkl<Br>
   <input type="radio" name="voit" value="two"> fghjkl<Br>
   <input type="radio" name="voit" value="three"> dfghjklwewe<Br>
  </p>
</fieldset>

  <p><input type="submit" value="Submit">
      <input type="reset" value="Resalt">
   <input type="reset" value="Cancel"></p>
 
 </form>

 </body>  
</html>l"></p>
 
 </form>

 </body>  
</html>