<!DOCTYPE html>
<html>

<head>

    <title>Calculadora Basica</title>
</head>
<body>
   <form action="funciones.php" method="post">
   <input type="text" name="n1" id="n1" >
   <select name="op">
       <option value="+">+</option>
       <option value="-">-</option>
       <option value="*">*</option>
       <option value="/">/</option>
       <option value="potencia">potencia</option>


   </select>   
   <input type="text" name="n2">
   <input type="submit" values="calcular" >


   </form>

</body>

</html>