<html>
  <head></head>
  <body>
  <center><font face="Times New Roman" size="7" color="Black"<b><b>Market</b></b></td></font></center>
  <form name="frm1" action="insert_prod.php" method="POST">
    <table border="0" align="center">
      <tr>
        <td align=center ><font face="Times New Roman" size="4" color="black"<b><b>Codigo producto: <font></font></b></b></td></font>
        <td align=center> <input type="text" name="codprod" placeholder="Ingrese codigo" required onkeyup = "this.value=this.value.toUpperCase()" /></td>
      </tr>
      <tr>
        <td align=center ><font face="Times New Roman" size="4" color="black"<b><b>Nombre producto: <font></font></b></b></td></font>
        <td align=center> <input type="text" name="nomprod" placeholder="Ingrese nombre" required onkeyup = "this.value=this.value.toUpperCase()" /></td>
      </tr>
      <tr>
        <td align=center ><font face="Times New Roman" size="4" color="black"<b><b>Cantidad: <font></font></b></b></td></font>
        <td align=center> <input type="text" name="cantprod" placeholder="Ingrese cantidad" required onkeyup = "this.value=this.value.toUpperCase()" /></td>
      </tr>
      <tr>
        <td align=center><font face="Times New Roman" size="4" color="black"<b><b>Estado: <font></font></b></b></td></font>
        <td><select name="estprod">
<option value="0">...</option>
 <option value="1">Habilitado</option>
 <option value="2">Desabilitado</option>
</table>
<br><br>
<center><input type="submit" value="Registrar"></center>
</form>
</body>
</html>
