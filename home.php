<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title></title>
        <style type="text/css">
            .style1
            {
                width: 100%;
                border:solid 1px #000;
            }
        </style>
    </head>

    <body dir="rtl">
		<?
			require_once 'fieldCreator.php';
			echo startForm("frm1Ar","test.html","post","","","ar");
		?>
        <table border="1" cellpadding="0" cellspacing="0" class="style1">
            <tr>
                <td colspan="6">
                    <b>بيانات الشركة</b></td>
            </tr>
            <tr>
                <td colspan="3">
                    <?=createTextField("اسم الشركة بالعربية", "name_ar", true,"","ar",20,30,"","","")?></td>
                <td colspan="3">
                    <?=createTextField("الاسم التجاري بالعربية", "commercial_name_ar", true,"","ar",20,30,"","","")?></td>
            </tr>
            <tr>
                <td colspan="3">
                    <?=createTextField("اسم الشركة بالإنكليزية", "name_en", true,"","ar",20,30,"","","")?></td>
                <td colspan="3">
                    <?=createTextField("الاسم التجاري بالإنكليزية", "commercial_name_en", true,"","ar",20,30,"","","")?></td>
            </tr>
            <tr>
                <td colspan="3">
                    <?=createTextField("الشخص المسؤول بالعربية", "contact_person_ar", true,"","ar",20,30,"","","")?></td>
                <td colspan="3">
                    <?=createTextField("الفاكس", "fax", true,"TEL","ar",20,30,"","","")?></td>
            </tr>
            <tr>
                <td colspan="3">
                    <?=createTextField("الشخص المسؤول بالإنكليزية", "contact_person_en", true,"","ar",20,30,"","","")?></td>
                <td colspan="3">
                    <?=createTextField("الموبايل", "mobile", true,"TEL","ar",20,30,"","","")?></td>
            </tr>
            <tr>
                <td colspan="3">
                    <?=createTextField("المنصب/الوظيفة بالعربية", "position_ar", true,"","ar",20,30,"","","")?></td>
                <td colspan="3">
                    <?=createTextField("الهاتف", "tele", true,"TEL","ar",20,30,"","","")?></td>
            </tr>
            <tr>

                <td>
                    <?=createTextField("المنصب/الوظيفة بالإنكليزية", "position_en", true,"","ar",20,30,"","","")?></td>
                <td colspan="4">
                	<?=createTextField("البريد الإلكتروني", "mail", true,"EML","ar",0,40,"","","")?></td>
                <td>
                    <?=createTextField("المدينة", "city_id", true,"","ar",20,30,"","","")?></td>
            </tr>
            <tr>
                <td colspan="3">
                   <??></td>
                <td colspan="3">
                    <??></td>
            </tr>
            <tr>
                <td colspan="6">
                    <??></td>
            </tr>
            <tr>
                <td colspan="6">
                    <??></td>
            </tr>
            <tr>
                <td colspan="2">
                    <??></td>
                <td colspan="2">
                    <??></td>
                <td colspan="2">
                    <??></td>
            </tr>
            <tr>
                <td colspan="6">
                    <??></td>
            </tr>
            <tr>
                <td colspan="6">
                    <??></td>
            </tr>
            <tr>
                <td colspan="3">
                    <??></td>
                <td colspan="3">
                    <??></td>
            </tr>
            <tr>
                <td colspan="3">
                    <??></td>
                <td colspan="3">
                    <??></td>
            </tr>
            <tr>
                <td colspan="3">
                    <??></td>
                <td colspan="3">
                    <??></td>
            </tr>
            <tr>
                <td colspan="3">
                    <??></td>
                <td colspan="3">
                    <??></td>
            </tr>
            <tr>
                <td colspan="3">
                    <??></td>
                <td colspan="3">
                    <??></td>
            </tr>
            <tr>
                <td colspan="3">
                    <??></td>
                <td colspan="3">
                    <??></td>
            </tr>
            <tr>
                <td colspan="6">
                    <b>
                    الالتزامات المالية تجاه 
                    المؤسسات العامة</b></td>
            </tr>
            <tr>
                <td colspan="6">
                    <??></td>
            </tr>
            <tr>
                <td colspan="6">
                    <b>
                    لمحة عن الشركة
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <??></td>
            </tr>
            <tr>
                <td colspan="6">
                    <??></td>
            </tr>
            <tr>
                <td colspan="6">
                    <b>شهادات الجودة</b></td>
            </tr>
            <tr>
                <td colspan="6">
                    <??></td>
            </tr>
            <tr>
                <td colspan="6">
                    <b>خدمات الهيئة</b></td>
            </tr>
            <tr>
                <td colspan="6">
                    <??></td>
            </tr>
            <tr>
                <td colspan="6">
                    <??></td>
            </tr>
        </table>
        <?
        echo createSubmitButton("Submit", "submit","ar","Submit");
		echo finishForm('ar');
		?>
    </body>
</html>
