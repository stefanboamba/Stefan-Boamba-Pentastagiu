<?php require_once 'calcul.php';?>
<form method="post">
<table align="center">
    
    <tr>
        <td>Intodu primul operand</td>
        <td><input type="number" step="0.01" name="operand1"></td>
    </tr>
    
    <tr>
        <td>Intodu operatorul (+,-,*,/)</td>
        <td><input type="text" name="operator"></td>
    </tr>

    <tr>
        <td>Intodu al doilea operand</td>
        <td><input type="number" step="0.01" name="operand2"></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="                =                "></td>
    </tr>
    <tr>
        <td>Rezultatul:</td>
        <td>
            <?php calcul($_POST['operand1'],$_POST['operand2'],$_POST['operator']);?>
        </td>
    </tr>
</table>
</form>