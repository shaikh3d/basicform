<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<title>Online Membership Form</title>
</head>
<body>
<form><h1>Online Membership Form</h1>
<h3>Please complete all required fields</h3>
</form>

<form method = "post" action = "dbconnection.php" autocomplete="on">

<table style="width:100%">
 <tr>
    <td><?php echo "" . date("l, d-M-Y"); ?></td>
    <td><?php print date('h:i:s A'); ?></td>
  </tr>
  <tr>
    <td>First Name:</td>
    <td><input type="text" name="firstname" placeholder="First Name" required /></td>
  </tr>
  <tr>
    <td>Last Name:</td>
    <td><input type="text" name="lastname" placeholder="Last Name" required /></td>
  </tr>
<tr>
    <td>Father Name:</td>
    <td><input type="text" name="fathername" placeholder="Father Name" /></td>
  </tr>

<tr>
    <td>CNIC Number:</td>
    <td><input type="text" name="cnic" maxlength="13" placeholder="xxxxx-xxxxxxx-x" /></td>
</tr>
<tr>
    <td>Date of Birth:</td>
    <td><input type="date" name="dob" /></td>
</tr>
<tr>
    <td>Gender:</td>
    <td>
    Male<input type="radio" name="gender" value="male" checked><br>
    Female<input type="radio" name="gender" value="female"></td>
    </tr>
<tr>
    <td>Contact Number:</td>
    <td><input type="tel" name="contactno" placeholder="Land Line Number" /></td>
</tr>
<tr>
    <td>Mobile Number:</td>
    <td><input type="tel" name="cellno" maxlength="11" placeholder="0300-1234567" /></td>
</tr>
<tr>
    <td>Email Address:</td>
    <td><input type="email" name="email" placeholder="abc@gmail.com" /></td>
</tr>
  
<tr>
    <td>Employment Type:</td>
    <td>
    <select name="employment">
  <option value=""></option>
  <option value="Government">Government</option>
  <option value="Private">Private</option>
  <option value="Business">Business</option>
  <option value="Student">Student</option>
  <option value="Unemployeed">Unemployed</option>
</select>
    </td>
    <tr>
    <td>Profession Type:</td>
    <td>
    <select name="profession">
  <option value=""></option>
  <option value="Education">Education</option>
  <option value="Medical">Medical</option>
  <option value="Engineering">Engineering</option>
  <option value="Information Technology">Information Technology</option>
  <option value="Other">Other</option>
</select>
    </td>
</tr>

<tr>
    <td>Home Address:</td>
    <td><input type="text" name="homeaddress" placeholder="Home Address" /></td>
</tr>

<tr>
    <td>Province:</td>
    <td><select name="province">
    <option value=""></option>
  <option value="sindh">Sindh</option>
  <option value="punjab">Punjab</option>
  <option value="kpk">Khyber Pakhtun Khwa</option>
  <option value="balochistan">Balochistan</option>
  <option value="fata">FATA</option>
  <option value="federal area">Federal Area</option>
</select></td>
</tr>

<tr>
    <td>City:</td>
    <td><select name="city">
<option value=""></option>
<option value="Karachi">Karachi</option>
<option value="Lahore">Lahore</option>
<option value="Islamabad">Islamabad</option>
<option value="Hyderabad">Hyderabad</option>
<option value="Faisalabad">Faisalabad</option>
<option value="Rawalpindi">Rawalpindi</option>
<option value="Multan">Multan</option>
<option value="Gujranwala">Gujranwala</option>
<option value="Peshawar">Peshawar</option>
<option value="Quetta">Quetta</option>
<option value="Sargodha">Sargodha</option>
<option value="Sialkot">Sialkot</option>
<option value="Bahawalpur">Bahawalpur</option>
<option value="Sukkur">Sukkur</option>
<option value="Jhang">Jhang</option>
<option value="Shekhupura">Shekhupura</option>
<option value="Mardan">Mardan</option>
<option value="Gujrat">Gujrat</option>
<option value="Larkana">Larkana</option>
<option value="Kasur">Kasur</option>
<option value="Rahim Yar Khan">Rahim Yar Khan</option>
<option value="Sahiwal">Sahiwal</option>
<option value="Okara">Okara</option>
<option value="Wah Cantonment">Wah Cantonment</option>
<option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
<option value="Mingora">Mingora</option>
<option value="Mirpur Khas">Mirpur Khas</option>
<option value="Chiniot">Chiniot</option>
<option value="Nawabshah">Nawabshah</option>
<option value="Kamoke">Kamoke</option>
<option value="Burewala">Burewala</option>
<option value="Jhelum">Jhelum</option>
<option value="Sadiqabad">Sadiqabad</option>
<option value="Khanewal">Khanewal</option>
<option value="Hafizabad">Hafizabad</option>
<option value="Kohat">Kohat</option>
<option value="Jacobabad">Jacobabad</option>
<option value="Shikarpur">Shikarpur</option>
<option value="Muzaffargarh">Muzaffargarh</option>
<option value="Khanpur">Khanpur</option>
<option value="Gojra">Gojra</option>
<option value="Bahawalnagar">Bahawalnagar</option>
<option value="Abbottabad">Abbottabad</option>
<option value="Muridke">Muridke</option>
<option value="Pakpattan">Pakpattan</option>
<option value="Khuzdar">Khuzdar</option>
<option value="Jaranwala">Jaranwala</option>
<option value="Chishtian">Chishtian</option>
<option value="Daska">Daska</option>
<option value="Mandi Bahauddin">Mandi Bahauddin</option>
<option value="Ahmadpur East">Ahmadpur East</option>
<option value="Kamalia">Kamalia</option>
<option value="Tando Adam">Tando Adam</option>
<option value="Khairpur">Khairpur</option>
<option value="Dera Ismail Khan">Dera Ismail Khan</option>
<option value="Vehari">Vehari</option>
<option value="Nowshera">Nowshera</option>
<option value="Dadu">Dadu</option>
<option value="Wazirabad">Wazirabad</option>
<option value="Khushab">Khushab</option>
<option value="Charsada">Charsada</option>
<option value="Swabi">Swabi</option>
<option value="Chakwal">Chakwal</option>
<option value="Mianwali">Mianwali</option>
<option value="Tando Allahyar">Tando Allahyar</option>
<option value="Kot Adu">Kot Adu</option>
<option value="Turbat">Turbat</option>
<option value="Other">Other</option>
</select>
</td>
</tr>

<tr>
    <td>District:</td>
    <td><select name="district">
  <option value=""></option>
  <option value="Karachi Central">Karachi Central</option>
  <option value="Karachi East">Karachi East</option>
  <option value="Karachi West">Karachi West</option>
  <option value="Karachi South">Karachi South</option>
  <option value="Malir">Malir</option>
  <option value="Korangi">Korangi</option>
  <option value="Badin">Badin</option>
  <option value="Dadu">Dadu</option>
  <option value="Ghotki">Ghotki</option>
  <option value="Hyderabad">Hyderabad</option>  
  <option value="Jacobabad">Jacobabad</option>  
  <option value="Jamshoro">Jamshoro</option>  
  <option value="Kashmore">Kashmore</option>  
  <option value="Khairpur">Khairpur</option>
  <option value="Larkana">Larkana</option>
  <option value="Matiari">Matiari</option>
  <option value="Mirpur Khas">Mirpur Khas</option>
  <option value="Naushahro Firoze">Naushahro Firoze</option>
  <option value="Shaheed Benazir Abad">Shaheed Benazir Abad</option>  
  <option value="Qambar Shahdadkot">Qambar Shahdadkot</option>  
  <option value="Sanghar">Sanghar</option>  
  <option value="Shikarpur">Shikarpur</option>  
  <option value="Sukkur">Sukkur</option>
  <option value="Tando Allahyar">Tando Allahyar</option>
  <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
  <option value="Tharparkar">Tharparkar</option>
  <option value="Thatta">Thatta</option>
  <option value="Umerkot">Umerkot</option>  
  <option value="Sujawal">Sujawal</option>  
  <option value="Attock">Attock</option>  
  <option value="Bahawalnagar">Bahawalnagar</option>  
  <option value="Bahawalpur">Bahawalpur</option>  
  <option value="Bhakkar">Bhakkar</option>  
  <option value="Chakwal">Chakwal</option>  
  <option value="Chiniot">Chiniot</option>  
  <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>  
  <option value="Faisalabad">Faisalabad</option>  
  <option value="Gujranwala">Gujranwala</option>  
  <option value="Gujrat">Gujrat</option>  
  <option value="Hafizabad">Hafizabad</option>  
  <option value="Jhang">Jhang</option>  
  <option value="Jhelum">Jhelum</option>  
  <option value="Kasur">Kasur</option>  
  <option value="Khanewal">Khanewal</option>  
  <option value="Khushab">Khushab</option>  
  <option value="Lahore">Lahore</option>  
  <option value="Layyah">Layyah</option>  
  <option value="Lodhran">Lodhran</option>  
  <option value="Mandi Bahauddin">Mandi Bahauddin</option>  
  <option value="Mianwali">Mianwali</option>  
  <option value="Multan">Multan</option>  
  <option value="Muzaffargarh">Muzaffargarh</option>  
  <option value="Narowal">Narowal</option>  
  <option value="Nankana Sahib">Nankana Sahib</option>  
  <option value="Okara">Okara</option>  
  <option value="Pakpattan">Pakpattan</option>  
  <option value="Rahim Yar Khan">Rahim Yar Khan</option>  
  <option value="Rajanpur">Rajanpur</option>  
  <option value="Rawalpindi">Rawalpindi</option>  
  <option value="Sahiwal">Sahiwal</option>  
  <option value="Sargodha">Sargodha</option>   
  <option value="Sheikhupura">Sheikhupura</option>  
  <option value="Sialkot">Sialkot</option>  
  <option value="Toba Tek Singh">Toba Tek Singh</option>  
  <option value="Vehari">Vehari</option> 
  <option value="Other">Other</option>
    
  </select>
</td>
</tr>

<tr>
    <td>Country:</td>
    <td><select name="country">
  <option value="Pakistan">Pakistan</option>
  <option value="UK">UK</option>
  <option value="UAE">United Arab Emirates</option>
  <option value="KSA">Saudi Arabia</option>
  <option value="Other">Other</option>
</select></td>
</tr>

<tr>
    <td>Volunteer Time:</td>
    <td>
    <input type="radio" name="volunteertime" value="Full Time">Full Time
	<input type="radio" name="volunteertime" value="Part Time">Part Time
	</td>
</tr>

<tr>
<td><h2>Social Media</h2></td>
</tr>


	<tr>
    <td>Facebook ID:</td>
    <td><input type="text" name="facebookid" placeholder="facebook ID"/></td>
  </tr>
  <tr>
    <td>Twitter ID:</td>
    <td><input type="text" name="twitterid" placeholder="twitter ID"/></td>
  </tr>
  <tr>
    <td>WhatsApp Number:</td>
    <td><input type="text" name="whatsappnumber" placeholder="Cell Number"/></td>
  </tr>
<tr>
<td></td>
-->
<td><input type="submit" name="submit" value="Submit"></td>
</tr>

</table>
</form>

</body>
<footer></footer>
</html>