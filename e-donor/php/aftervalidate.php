<?php include 'connection.php'; ?>
<?php include 'navbar.php'; ?>
<div class="container" >
	<div class="row">
		<div class="">
			<form class="form" method="post" action="aftervalidate.php">
				<h4 class="text-center">Part 2</h4>
				<p class="text-center">(Continuation)</p>
				<p>Welcome, Please finish the rest of the regisration. </p>
				<hr>
        <!-- Errors go here-->
        <?php include 'errors.php'; ?>
        <!-- -->
	<div class="hiddenElements">
    <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control" placeholder="Please fill in your Name here" value="<?php echo $name; ?>">
    </div>
    <div class="form-group">
      <label>Weight</label>
      <input type="number" name="weight" class="form-control" placeholder="Please Re-Enter your Weight here" value="<?php echo $weight; ?>">
    </div>

		<div class="form-group">
			<label>Select Blood Type</label>
			<select class="form-control" id="selectBloodType" name="bloodType">
				<option name = "bloodTypeOption" value="default">*Select Your Blood Type*</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
			</select>
		</div>

		<div class="form-group">
  <label for="continent">Select County</label>
  <select class="form-control" name="county" id="continent" onchange="countryChange(this);">
    <option value="empty">*Select County*</option>
    <option value="MOMBASA">001 MOMBASA</option>
    <option value="KWALE">002 KWALE</option>
    <option value="KILIFI">003 KILIFI</option>
    <option value="TANA RIVER">004 TANA RIVER</option>
    <option value="LAMU">005 LAMU</option>
    <option value="TAITA TAVETA">006 TAITA TAVETA</option>
    <option value="GARISSA">007 GARISSA </option>
    <option value="WAJIR">008 WAJIR</option>
    <option value="MANDERA">009 MANDERA</option>
    <option value="MARSABIT"> 010 MARSABIT</option>
    <option value="ISIOLO"> 011 ISIOLO</option>
    <option value="MERU"> 012 MERU</option>
    <option value="THARAKA NITHI"> 013 THARAKA NITHI</option>
    <option value="EMBU"> 014 EMBU</option>
    <option value="KITUI"> 015 KITUI</option>
    <option value="MACHAKOS"> 016 MACHAKOS</option>
    <option value="MAKUENI"> 017 MAKUENI</option>
    <option value="NYANDARUA"> 018 NYANDARUA</option>
    <option value="NYERI"> 019 NYERI</option>
    <option value="KIRINYAGA"> 020 KIRINYAGA</option>
    <option value="MURANG'A"> 021 MURANG'A</option>
    <option value="KIAMBU"> 022 KIAMBU</option>
    <option value="TURKANA"> 023 TURKANA</option>
    <option value="WEST POKOT"> 024 WEST POKOT</option>
    <option value="SAMBURU"> 025 SAMBURU</option>
    <option value="TRANS-NZOIA"> 026 TRANS-NZOIA</option>
    <option value="UASIN GISHU"> 027 UASIN GISHU</option>
    <option value="ELGEYO MARAKWET"> 028 ELGEYO MARAKWET</option>
    <option value="NANDI"> 029 NANDI</option>
    <option value="BARINGO"> 030 BARINGO</option>
    <option value="LAIKIPIA"> 031 LAIKIPIA</option>
    <option value="NAKURU"> 032 NAKURU</option>
    <option value="NAROK"> 033 NAROK</option>
    <option value="KAJIADO"> 034 KAJIADO</option>
    <option value="KERICHO"> 035 KERICHO</option>
    <option value="BOMET"> 036 BOMET</option>
    <option value="KAKAMEGA"> 037 KAKAMEGA</option>
    <option value="VIHIGA"> 038 VIHIGA</option>
    <option value="BUNGOMA"> 039 BUNGOMA</option>
    <option value="BUSIA"> 040 BUSIA</option>
    <option value="SIAYA"> 041 SIAYA</option>
    <option value="KISUMU"> 042 KISUMU</option>
    <option value="HOMA BAY"> 043 HOMA BAY</option>
    <option value="MIGORI"> 044 MIGORI</option>
    <option value="KISII"> 045 KISII</option>
    <option value="NYAMIRA"> 046 NYAMIRA</option>
    <option value="NAIROBI"> 047 NAROBI</option>
  </select>
  </div>
  <div class="form-group">
  	<label for="country">Select Sub-County</label>
  	<select class="form-control" name="subcounty" id="subcounty">
    	<option value="0">*Please Select Your County To Access This Option*</option>
  	</select>
  </div>
  <div class="form-group">
  	<label>Enter Phone Number</label>
  	<input type="text" name="phone" class="form-control" id="phone" placeholder="*Please Enter your phone number*" value="<?php echo $phone; ?>">
  </div>
  <div class="form-group">
  	<label>Enter National ID Number</label>
  	<input type="text" name="idno" class="form-control" id="idno" placeholder="*Please Enter your National ID Number*" value="<?php echo $idno; ?>">
  </div>
  <div class="form-group">
    <label>Choose a Username</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="*Please Choose a Username*" value="<?php echo $username; ?>">
  </div>
  <div class="form-group">
  	<label>Enter Password</label>
  	<input type="password" name="password1" class="form-control" id="password1" value="<?php echo $password1; ?>" placeholder="Please Enter a Password">
  </div>
  <div class="form-group">
  	<label>Confirm Password</label>
  	<input type="password" name="password2" class="form-control" id="password2" placeholder="Please Re-Enter Password">
  </div>
  <div class="form-group">
  	<input type="submit" name="submit" value="Submit"  class="btn btn-info btn-lg" />
  </div>	
</div>
</form>
		</div>
	</div>
</div>



<script>
			//<![CDATA[ 
 // array of possible countries in the same order as they appear in the country selection list 
 var countryLists = new Array() 
 countryLists["empty"] = ["*Please Select Your County To Access This Option*"]; 
 countryLists["MOMBASA"] = ["MOMBASA ISLAND","CHANGAMWE","LIKONI","KISAUNI"]; 
 countryLists["KWALE"] = ["KINANGO","KUBO","MATUGA","MSAMBWENI","SAMBURU","SHIMBA HILLS"]; 
 countryLists["KILIFI"] = ["GANZE","KILIFI NORTH","MAGARINI","RABAI"]; 
 countryLists["TANA RIVER"]= ["BANGALE","BURA","GALOLE","GARSEM","KIPINI","MADOGO","WENJE"]; 
 countryLists["LAMU"] = ["AMU","FAZA","HINDI","KIUNGA","KIZINGITINI","MPEKETONI","WITU"];
 countryLists["TAITA TAVETA"] = ["VOI","MWATATE","WUNDANYI","TAVETA"];
 countryLists["GARISSA"] = ["FAFI","GARISSA","IJARA","LAG DERA","BALAMBALA","DADAAB","HULUGHO"];
 countryLists["WAJIR"] = ["WAJIR EAST","WAJIR NORTH","WAJIR SOUTH","WAJIR WEST","ELDAS","TARBAJ"];
 countryLists["MANDERA"] = ["ASHABITO","BANISA","CENTRAL","DANDU","EL WAK","FINO","HARERI","KHALALIO","KOTULO","LAFEY","LIBEHIA","MALKAMARI","RAHAMU DIMTU","RAHAMU","SHIMBIR-FATUMA","TAKABA","WARANKARA","SALA","KILIWERI"];
 countryLists["MARSABIT"] = ["MARSABIT CENTRAL","GADAMOJI","LAISAMIS","LOIYANGALANI","MAIKONA","NORTH HORR"];
 countryLists["ISIOLO"] = ["CENTRAL","GARBA TULA","KINNA","MERTI","OLDONYIRO","SERICHO"];
 countryLists["MERU"] = ["SOUTH IMENTI","NORHT IMENTI","TIGANIA EAST","TIGANIA WEST","IGEMBE SOUTH","CENTRAL IMENTI","IGEMBE CENTRAL", "IGEMBE NORTH"];
 countryLists["THARAKA NITHI"] = ["MAARA","CHUKA/IGAMBANG'OMBE","THARAKA"];
 countryLists["EMBU"] = ["EMBU WEST", "EMBU EAST","EMBU NORTH","MBEERE SOUTH","MBEERE NORTH"];
 countryLists["KITUI"] = ["KITUI RURAL", "KITUI SOUTH ", "KITUI EAST ","KITUI WEST","MWINGI NORTH","MWINGI CENRAL ", "MWINGI NORTH"];
 countryLists["MACHAKOS"] = ["MASINGA", "YATTA", "KANGUNDO", "MATUNGULU","KATHIANI","MAVOKO","MACHAKOS TOWN","MWALA"];
 countryLists["MAKUENI"] = ["MAKUENI","KAITI","KILOME","KIBWEZI EAST", "KIBWEZI WEST", "MBOONI"];
 countryLists["NYANDARUA"] = ["KIPIPIRI","NDARAGUA","NORTH KINANGOP","OL JORO OROK","OL KALOU","SOUTH KINANGOP"];
 countryLists["NYERI"]= ["MATHIRA EAST","MATHIRA WEST","KIENI EAST","KIENI WEST","NYERI TOWN","MUKURWEINI", "OTHAYA","TETU"];
 countryLists["KIRINYAGA"] = ["MWEA","GICHUGU","NDIA","KIRINYAGA CENTRAL"];
 countryLists["MURANG'A"] = ["KANGEMA","KIHARU","MATHIOYA","KIGUMO","KANDARA","MARAGWA","GATANGA"];
 countryLists["KIAMBU"] = ["LIMURU","KIKUYU","KABETE LARI", "GATUNDU SOUTH","GATUNDU NORTH ", "GITHUNGURI","KIAMBU","KIAMBAA","RUIRU","JUJA","THIKA TOWN"];
 countryLists["TURKANA"] = ["TURKANA SOUTH","TURKANA EAST", "TURKANA CENTRAL", "TURKANA WEST","LOIMA"];
 countryLists["WEST POKOT"] = ["KACHELIBA","KAPENGURIA","SIGOR","POKOT SOUTH",];
 countryLists["SAMBURU"] = ["SAMBURU WEST","SAMBURU EAST","SAMBURU NORTH"];
 countryLists["TRANS-NZOIA"] = ["CHERANGANY","SABOTI","KWANZA","KIMININ","ENDEBESS"];
 countryLists["UASIN GISHU"] = ["SOY","TURBO","MOIBEN","AINABKOI","KAPSERET","KESSES"];
 countryLists["ELGEYO MARAKWET"] = ["KEIYO NORTH","MARAKWET EAST","MARAKWET WEST","KEIYO SOUTH"];
 countryLists["NANDI"] = ["NANDI EAST","TINDERET","NANDI CENTRAL","NANDI SOUTH","NANDI NORTH"];
 countryLists["BARINGO"] = ["BARINGO CENTRAL","TIATI","ELDAMA RAVINE","BARINGO SOUTH","BARINGO NORTH","MOGOTIO"];
 countryLists["LAIKIPIA"] = ["LAIKIPIA EAST","LAIKIPIA NORTH"," LAIKIPIA CENTRAL","LAIKIPIA WEST", "NYAHURURU"];
 countryLists["NAKURU"] = ["NAKURU TOWN EAST","NAKURU TOWN WEST","NJORO","MOLO","GILGIL","NAIVASHA","KURESOI NORTH","KURESOI SOUTH","RONGAI","SUBUKIA","BAHATI"];
 countryLists["NAROK"] = ["TRANSMARA WEST","TRANSMARA EAST","NAROK NORTH","NAROK SOUTH","NAROK WEST","NAROK EAST"];
 countryLists["KAJIADO"] =["KAJIADO CENTRAL","KAJIADO NORTH","LOITOKITOK","ISINYA","MASHUURU",];
 countryLists["KERICHO"]= ["AINAMOI","BELGUT","BURETI","KIPKELION EAST", "KIPKELION WEST", "SIGOWET-SOIN"];
 countryLists["BOMET"] = ["BOMET CENTRAL","BOMET EAST","CHEPALUNGU","SOTIK","KONOIN",];
 countryLists["KAKAMEGA"] = ["BUTERE","KHWISERO","KAKAMEGA CENTRAL","NAVAKHOLO","KAKAMEGA EAST","KAKAMEGA NORTH","MATETE","KAKAMEGA SOUTH","LIKUYANI","LUGARI","MATUNGU","MUMIAS"];
 countryLists["VIHIGA"] = ["EMUHAYA","SABATIA","LUWANDA","HAMISI","VIHIGA"];
 countryLists["BUNGOMA"] = ["BUMULA","KANDUYI","SIRISIA","KABUCHAI","KIMILILI","TONGAREN","WEBUYE EAST","WEBUYE WEST","MOUNT ELGON"];
 countryLists["BUSIA"] = ["BUSIA","FUNYULA","NAMBALE","BUTULA","TESO NORTH","TESO SOUTH"];
 countryLists["SIAYA"] = ["ALEGO","BONDO","GEM","LARIEDA","UGENYA","UGUJA",];
 countryLists["KISUMU"] =["KISUMU WEST","KISUMU CENTRAL ","KISUMU EAST"," SEME"," MUHORONI", "NYANDO","NYAKACH"];
 countryLists["HOMA BAY"] = ["KASIPUL","KABONDO KASIPUL","KARACHUONYO","RANGWE","HOMA BAY TOWN","NDHIWA","SUBA SOUTH","SUBA NORTH"];
 countryLists["MIGORI"] = ["SUNA EAST","SUNA WEST","KURIA WEST","KURIA EAST","URIRI","NYATIKE","AWENDO","RONGO"];
 countryLists["KISII"] = ["KISII TOWN","KEUMBU","MARANI","MASABA","MOSOCHO","SUNEKA",];
 countryLists["NYAMIRA"] = ["MANGA","NYAMIRA SOUTH","NYAMIRA NORTH","MASABA NORTH","BORABU"];
  countryLists["NAIROBI"] = ["DAGORETTI SOUTH","EMBAKASI CENTRAL","EMBAKASI EAST","EMBAKASI NORTH","EMBAKASI SOUTH","EMBAKASI WEST","KAMUKUNJI","KASARANI","KIBRA","LANGATA","MAKADARA","ROYSAMBU","RUARAKA","STAREHE","WESTLANDS"];

 /* CountryChange() is called from the onchange event of a select element. 

 coun

 * param selectObj - the select object which fired the on change event. 
 */ 
 function countryChange(selectObj) { 
 // get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
 var which = selectObj.options[idx].value; 
 // use the selected option value to retrieve the list of items from the countryLists array 
 cList = countryLists[which]; 
 // get the country select element via its known id 
 var cSelect = document.getElementById("subcounty"); 
 // remove the current options from the country select 
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 // create new options 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i];  // assumes option string and value are the same 
 newOption.text=cList[i]; 
 // add the new option 
 try { 
 cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE 
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 } 
//]]>
		</script>