/**
 * Check if input is date 
 */
function isDate(data)
{
	var pattern=/^\d{1,2}\/\d{1,2}\/\d{4}$/;
	return (data.search(pattern)>=0);
}

/**
 * Check if input is human name 
 */
function isHumanName(data)
{
	var pattern=/^\s*([A-Za-z]{2,4}\.?\s*)?(['\-A-Za-z]+\s*){1,2}([A-Za-z]+\.?\s*)?(['\-A-Za-z]+\s*){1,2}(([jJsSrR]{2}\.)|([XIV]{1,6}))?\s*$/;

	return (data.search(pattern)>=0);
}

/**
 * Check if input is number 
 */
function isNumber(data)
{
	return Number(data);
}

/**
 * Check if input is E-Mail
 */
function isEMail(data)
{
	var pattern=/^\b[A-Za-z]+[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b$/;
	return (data.search(pattern)>=0);
}

/**
 * Check if input is site URL
 */
function isURL(data)
{
	var pattern=/(https|http):\/\/([_a-z\d\-]+(\.[_a-z\d\-]+)+)(([_a-z\d\-\\\.\/]+[_a-z\d\-\\\/])+)*/;
	return (data.search(pattern)>=0);
}
/**
 * Formas Validator 
 * @returns {Boolean} true if form is valid and false if not
 */
function validate(frmId,lang)
{
	//Check required fields
	var reqs=getElementsByClassName("required","",document.getElementById(frmId));
	var isOK=true;
	for (var i=0;i<reqs.length;i=i+1)
	{
		if(reqs[i].value=="")
		{
			isOK=false;
			reqs[i].style.border="1px #f00 solid";
		}
		else
		{
			reqs[i].style.border="1px #000 solid";
		}
	}
	if(!isOK)
	{
		return false;
	}
	//Check types
	//HumanName
	var huns=getElementsByClassName("HumanName","",document.getElementById(frmId));

	for (var i=0;i<huns.length;i=i+1)
	{
		if((huns[i].value!="")&&(!isHumanName(huns[i].value)))
		{
			isOK=false;
			huns[i].style.border="1px #f00 solid";
			document.getElementById("err"+huns[i].id).innerHTML=(lang=='en')?"Name format is incorrect!":"ØªÙ†Ø³ÙŠÙ‚ Ø§Ù„Ø§Ø³Ù… ØºÙŠØ± ØµØ­ÙŠØ­!";
			document.getElementById("err"+huns[i].id).style.visibility="visible";
		}
		else
		{
			huns[i].style.border="1px #000 solid";
			document.getElementById("err"+huns[i].id).style.visibility="hidden";
		}
	}

	//Number
	//Phone
	var tel=getElementsByClassName("Phone","",document.getElementById(frmId));

	for (var i=0;i<tel.length;i=i+1)
	{
		if((tel[i].value!="")&&(!isNumber(tel[i].value)))
		{
			isOK=false;
			tel[i].style.border="1px #f00 solid";
			document.getElementById("err"+tel[i].id).innerHTML=(lang=='en')?"Phone number format is incorrect!":"ØªÙ†Ø³ÙŠÙ‚ Ø±Ù‚Ù… Ø§Ù„Ù‡Ø§ØªÙ� ØºÙŠØ± ØµØ­ÙŠØ­!";
			document.getElementById("err"+tel[i].id).style.visibility="visible";
		}
		else
		{
			tel[i].style.border="1px #000 solid";
			document.getElementById("err"+tel[i].id).style.visibility="hidden";
		}
	}

	//Mobile
	var mob=getElementsByClassName("Mobile","",document.getElementById(frmId));

	for (var i=0;i<mob.length;i=i+1)
	{
		if((mob[i].value!="")&&(!isNumber(mob[i].value)))
		{
			isOK=false;
			mob[i].style.border="1px #f00 solid";
			document.getElementById("err"+mob[i].id).innerHTML=(lang=='en')?"Phone number format is incorrect!":"ØªÙ†Ø³ÙŠÙ‚ Ø±Ù‚Ù… Ø§Ù„Ù‡Ø§ØªÙ� ØºÙŠØ± ØµØ­ÙŠØ­!";
			document.getElementById("err"+mob[i].id).style.visibility="visible";
		}
		else
		{
			mob[i].style.border="1px #000 solid";
			document.getElementById("err"+mob[i].id).style.visibility="hidden";
		}
	}
	
	//EMail
	var eml=getElementsByClassName("EMail","",document.getElementById(frmId));

	for (var i=0;i<eml.length;i=i+1)
	{
		if((eml[i].value!="")&&(!isEMail(eml[i].value)))
		{
			isOK=false;
			eml[i].style.border="1px #f00 solid";
			document.getElementById("err"+eml[i].id).innerHTML=(lang=='en')?"E-Mail address format is incorrect!":"ØªÙ†Ø³ÙŠÙ‚ Ø§Ù„Ø¨Ø±ÙŠØ¯ Ø§Ù„Ø¥Ù„ÙƒØªØ±ÙˆÙ†ÙŠ ØºÙŠØ± ØµØ­ÙŠØ­!";
			document.getElementById("err"+eml[i].id).style.visibility="visible";
		}
		else
		{
			eml[i].style.border="1px #000 solid";
			document.getElementById("err"+eml[i].id).style.visibility="hidden";
		}
	}
	
	//Site
	var url=getElementsByClassName("Site","",document.getElementById(frmId));

	for (var i=0;i<url.length;i=i+1)
	{
		if((url[i].value!="")&&(!isURL(url[i].value)))
		{
			isOK=false;
			url[i].style.border="1px #f00 solid";
			document.getElementById("err"+url[i].id).innerHTML=(lang=='en')?"Website address format is incorrect!":"ØªÙ†Ø³ÙŠÙ‚ Ø¹Ù†ÙˆØ§Ù† Ø§Ù„Ù…ÙˆÙ‚Ø¹ Ø§Ù„Ø¥Ù„ÙƒØªØ±ÙˆÙ†ÙŠ ØºÙŠØ± ØµØ­ÙŠØ­!";
			document.getElementById("err"+url[i].id).style.visibility="visible";
		}
		else
		{
			url[i].style.border="1px #000 solid";
			document.getElementById("err"+url[i].id).style.visibility="hidden";
		}
	}
	
	//Date
	var dat=getElementsByClassName("Date","",document.getElementById(frmId));

	for (var i=0;i<dat.length;i=i+1)
	{
		if(!isDate(dat[i].value))
		{
			isOK=false;
			dat[i].style.border="1px #f00 solid";
			document.getElementById("err"+dat[i].id).innerHTML=(lang=='en')?"Date format is incorrect!":"ØªÙ†Ø³ÙŠÙ‚ Ø§Ù„ØªØ§Ø±ÙŠØ® ØºÙŠØ± ØµØ­ÙŠØ­!";
			document.getElementById("err"+dat[i].id).style.visibility="visible";
		}
		else
		{
			dat[i].style.border="1px #000 solid";
			document.getElementById("err"+dat[i].id).style.visibility="hidden";
		}
	}
	
	return isOK;
}