<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>

</head>

<body onload="">
			<?php
			require_once 'fieldCreator.php';
			echo startForm("frm1En","test.html","post");
			echo createTextField("First Name", "fname", true,"","en",10,20,"","","First name is required");
			echo createTextField("Last Name", "lname", true,"HUN","en",10,20,"","","Last name is required");
			echo createRadioList("Gender", "gen", true, "Male;Female","Male","en",true);
			echo createTextField("Birthday", "bday", true,"DAT","en",10,20,"d/m/yy","","Date is required");
			
			echo createTextArea("Address", "adrs",true, true, "en",5,35,"","","Address is required");
			
			echo createTextField("Tel", "tel", true,"TEL","en",15,20,"","","Phone is required");
			echo createTextField("Mobile", "mob", true,"MOB","en",15,20,"","","Mobile is required");
			echo createTextField("E-Mail", "email", true,"EML","en",300,30,"","","E-Mail is required");
			echo createTextField("Website", "ws", false,"URL","en",1000,40);
			echo createComboBox("Payment Method", "pMethod", true, "Master Card;Visa Card;E-Card;Check;Cash", "1;2;3;4;5","3");
			
			echo createCheckList("Interested in", "interests", true, "News;Sports;Computers;Mobile","News","en",false);
			echo createSubmitButton("Submit", "Submit");
			echo finishForm("en");

			echo startForm("frm1Ar","test.html","post","","","ar");
			echo createTextField("الاسم الأول", "fname", true,"HUN","ar",10,20,"","","First name is required");
			echo createTextField("الاسم الثاني", "lname", true,"HUN","ar",10,20,"","","Last name is required");
			echo createRadioList("الجنس", "gen", true, "ذكر;أنثى","ذكر","ar",true);
			echo createTextField("تاريخ الميلاد", "bday", true,"DAT","ar",10,20,"d/m/yy","","Date is required");
			
			echo createTextArea("العنوان", "adrs",true, true, "ar",5,35,"","","Address is required");
			
			echo createTextField("هاتف", "tel", true,"TEL","ar",15,20,"","","Phone is required");
			echo createTextField("موبايل", "mob", true,"MOB","ar",15,20,"","","Mobile is required");
			echo createTextField("البريد الإلكتروني", "email", true,"EML","ar",300,30,"","","E-Mail is required");
			echo createTextField("الموقع الإلكتروني", "ws", false,"URL","ar",1000,40);
			echo createComboBox("طريقة الدفع", "pMethod", true, "ماستر;فيزا;شيك;كاش", "1;2;3;4","3","ar");
			
			echo createCheckList("مهتم بـ ", "interests", true, "أخبار;رياضة;حواسيب;موبايل","أخبار","ar",false);
			echo createSubmitButton("حفظ", "Submit");
			echo finishForm('ar');
			?>

</body>
</html>