<!DOCTYPE html>
<html lang="en">
    <?php include "includes/Header.php"; ?>
<body>
<header>
    <?php include "includes/navbar.php"; ?>
</header>

 <main>

<div class="Achtergrondcontainer">


 <div id="htmlforms">
  <div class="Formsitems">
<br><br>
<form action="bestevaer.php" method="GET">
<center>
<table class="FormTable">
    <tr>
        <td colspan="3" style="text-align:center;">
            <h1 id="TextForms">Lading Calculator </h1>
        </td>
    </tr>    
    <tr>
        <td></td>
        <td></td>
        <td rowspan="7">
            <div class="myresult">
                <div class="ResultDingetje" id="SchipNaam">*Naam boot*</div>
                <div class="ResultDingetje" id="Seizoen">*Seizoen*</div>
                <div class="ResultDingetje" id="resultaat">*Resultaat*</div>
            </div>
        </td>
    </tr>    
    <tr>
        <td class="labelTD">
            <label class="LabelForms"> Schepen:</label>
        </td>
        <td>
            <select name="schip" id="SchipOi">
                <option value="NSANGELA">NSANGELA</option>
                <option value="LUCKYSTAR">LUCKYSTAR</option>
                <option value="SABRINA">SABRINA</option>
                <option value="HERMES">HERMES</option>
                <option value="TRIUMPHIV">TRIUMPHIV</option>
            </select> 
        </td>    
    </tr>
    <tr>
        <td class="labelTD">
            <label class="LabelForms">Gewicht: (TON)</label>
        </td>    
        <td>
            <input type="text" id="Gewichtbox" name="gewicht">
        </td>    
    </tr>
    <tr>
        <td class="labelTD">
            <label class="LabelForms"> Groote lading: (M3)</label>
        </td>    
        <td>
            <input type="text" id="ladingid" name="lading">
        </td>    
    </tr>
    <tr>
        <td class="labelTD">
            <label class="LabelForms"> Lading die je al hebt:(M3)</label>
        </td>    
        <td>
            <input type="text" id="LadingOpditmomentMomentID" name="ladingOpditmoment">
        </td>    
    </tr>
    <tr>
        <td class="labelTD">
            <label class="LabelForms"> Seizoen:</label>
        </td>    
        <td>
            <select name="seizoenen" id="Seizoenen">
                <option value="lente"> Lente</option>
                <option value="zomer">Zomer</option>
                <option value="herfst">Herfst</option>
                <option value="winter">Winter</option>
            </select>
        </td>    
    </tr>
    <tr>
        <td class="labelTD">
            <label class="LabelForms"> Wat voor water:</label>
        </td>    
        <td>
            <select name="zoutZoet" id="Watersoort"> 
                <option value="zout">Zoet</option>
                <option value="zout">Zout</option>
            </select>
        </td>    
    </tr>
    <tr>
        <td colspan="3" class="td-center">
            <br><br>
            <input name="submit" type="button" id="BerekenButton" onclick="senddata()" value="Gewicht Berekenen"> 
        </td>
    </tr>    
</table>
</form>
</div>
</div>
    
    
    <a href="https://www.myshiptracking.com/vessels/ns-angela-mmsi-214182759-imo-9071076"><img src="image/NS_ANGELASchip.jpg" class="schepenFotos" alt="NSANGELA" width="325" height="275"></a>
    <a href="https://www.myshiptracking.com/vessels/lucky-star-mmsi-214182775-imo-0"><img src="image/LUCKY_STARSchip.jpg" class="schepenFotos" alt="NSANGELA" width="325" height="275"></a>
    <a href="https://www.myshiptracking.com/vessels/sabrina-mmsi-636013067-imo-0"><img src="image/SABRINASchip.jpg" class="schepenFotos" alt="NSANGELA" width="325" height="275"></a>
    <a href="https://www.myshiptracking.com/vessels/hermes-mmsi-214182786-imo-0"><img src="image/HermsSchip.jpg" class="schepenFotos" alt="NSANGELA" width="325" height="275"></a>
    <a href="https://www.myshiptracking.com/vessels/triumph-iv-mmsi-214182719-imo-0"><img src="image/TRIUMPHIVSchip.jpg" class="schepenFotos" alt="NSANGELA" width="325" height="275"></a>
   
 </div>

 



 </main>


 <footer>
 </footer>

 
</body>
</html>