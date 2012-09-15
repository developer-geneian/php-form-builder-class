<?php
session_start();
error_reporting(E_ALL);
include("../PFBC/Form.php");

if(isset($_POST["form"])) {
	Form::isValid($_POST["form"]);
	header("Location: " . $_SERVER["PHP_SELF"]);
	exit();	
}

include("../header.php");

?>
<div class="page-header">
	<h1>Form Elements</h1>
</div>

<p>PFBC has support for 32 form elements: Button, Captcha, Checkbox, Checksort, CKEditor, 
Color, Country, Date, DateTimeLocal, DateTime, Email, File, Hidden, HTML, jQueryUIDate, Month,
Number, Password, Phone, Radio, Range, Search, Select, Sort, State, Textarea, Textbox, Time,
TinyMCE, Url, Week, YesNo.</p>

<p><span class="label label-important">Important</span> In each of the example forms provided, you'll
notice that the form's prevent property is set to an array containing "bootstrap" and "jQuery".  This prevents
the css/js include files from being loaded a second time by PFBC as they're already being included in a header
file (header.php).  If your system already includes jQuery or bootstrap, it's recommended that you edit the prevent
property in PFBC/Form.php so you don't have to set it (the prevent property) each time you create a form.</p>

<?php
$options = array("Option #1", "Option #2", "Option #3");
$form = new Form("form-elements");
$form->configure(array(
	"prevent" => array("bootstrap", "jQuery")
));
$form->addElement(new Element_Hidden("form", "form-elements"));
$form->addElement(new Element_HTML('<legend>Standard</legend>'));
$form->addElement(new Element_Textbox("Textbox:", "Textbox"));
$form->addElement(new Element_Password("Password:", "Password"));
$form->addElement(new Element_File("File:", "File"));
$form->addElement(new Element_Textarea("Textarea:", "Textarea"));
$form->addElement(new Element_Select("Select:", "Select", $options));
$form->addElement(new Element_Radio("Radio Buttons:", "RadioButtons", $options));
$form->addElement(new Element_Checkbox("Checkboxes:", "Checkboxes", $options));
$form->addElement(new Element_HTML('<legend>HTML5</legend>'));
$form->addElement(new Element_Phone("Phone:", "Phone"));
$form->addElement(new Element_Search("Search:", "Search"));
$form->addElement(new Element_Url("Url:", "Url"));
$form->addElement(new Element_Email("Email:", "Email"));
$form->addElement(new Element_Date("Date:", "Date"));
$form->addElement(new Element_DateTime("DateTime:", "DateTime"));
$form->addElement(new Element_DateTimeLocal("DateTime-Local:", "DateTimeLocal"));
$form->addElement(new Element_Month("Month:", "Month"));
$form->addElement(new Element_Week("Week:", "Week"));
$form->addElement(new Element_Time("Time:", "Time"));
$form->addElement(new Element_Number("Number:", "Number"));
$form->addElement(new Element_Range("Range:", "Range"));
$form->addElement(new Element_Color("Color:", "Color"));
$form->addElement(new Element_HTML('<legend>jQuery UI</legend>'));
$form->addElement(new Element_jQueryUIDate("Date:", "jQueryUIDate"));
$form->addElement(new Element_Checksort("Checksort:", "Checksort", $options));
$form->addElement(new Element_Sort("Sort:", "Sort", $options));
$form->addElement(new Element_HTML('<legend>WYSIWYG Editor</legend>'));
$form->addElement(new Element_TinyMCE("TinyMCE:", "TinyMCE"));
$form->addElement(new Element_CKEditor("CKEditor:", "CKEditor"));
$form->addElement(new Element_HTML('<legend>Custom/Other</legend>'));
$form->addElement(new Element_State("State:", "State"));
$form->addElement(new Element_Country("Country:", "Country"));
$form->addElement(new Element_YesNo("Yes/No:", "YesNo"));
$form->addElement(new Element_Captcha("Captcha:"));
$form->addElement(new Element_Button);
$form->addElement(new Element_Button("Cancel", "button", array(
	"onclick" => "history.go(-1);"
)));
$form->render();

echo '<pre>', highlight_string('<?php
$options = array("Option #1", "Option #2", "Option #3");
$form = new Form("form-elements");
$form->configure(array(
	"prevent" => array("bootstrap", "jQuery")
));
$form->addElement(new Element_Hidden("form", "form-elements"));
$form->addElement(new Element_HTML(\'<legend>Standard</legend>\'));
$form->addElement(new Element_Textbox("Textbox:", "Textbox"));
$form->addElement(new Element_Password("Password:", "Password"));
$form->addElement(new Element_File("File:", "File"));
$form->addElement(new Element_Textarea("Textarea:", "Textarea"));
$form->addElement(new Element_Select("Select:", "Select", $options));
$form->addElement(new Element_Radio("Radio Buttons:", "RadioButtons", $options));
$form->addElement(new Element_Checkbox("Checkboxes:", "Checkboxes", $options));
$form->addElement(new Element_HTML(\'<legend>HTML5</legend>\'));
$form->addElement(new Element_Phone("Phone:", "Phone"));
$form->addElement(new Element_Search("Search:", "Search"));
$form->addElement(new Element_Url("Url:", "Url"));
$form->addElement(new Element_Email("Email:", "Email"));
$form->addElement(new Element_Date("Date:", "Date"));
$form->addElement(new Element_DateTime("DateTime:", "DateTime"));
$form->addElement(new Element_DateTimeLocal("DateTime-Local:", "DateTimeLocal"));
$form->addElement(new Element_Month("Month:", "Month"));
$form->addElement(new Element_Week("Week:", "Week"));
$form->addElement(new Element_Time("Time:", "Time"));
$form->addElement(new Element_Number("Number:", "Number"));
$form->addElement(new Element_Range("Range:", "Range"));
$form->addElement(new Element_Color("Color:", "Color"));
$form->addElement(new Element_HTML(\'<legend>jQuery UI</legend>\'));
$form->addElement(new Element_jQueryUIDate("Date:", "jQueryUIDate"));
$form->addElement(new Element_Checksort("Checksort:", "Checksort", $options));
$form->addElement(new Element_Sort("Sort:", "Sort", $options));
$form->addElement(new Element_HTML(\'<legend>WYSIWYG Editor</legend>\'));
$form->addElement(new Element_TinyMCE("TinyMCE:", "TinyMCE"));
$form->addElement(new Element_CKEditor("CKEditor:", "CKEditor"));
$form->addElement(new Element_HTML(\'<legend>Custom/Other</legend>\'));
$form->addElement(new Element_State("State:", "State"));
$form->addElement(new Element_Country("Country:", "Country"));
$form->addElement(new Element_YesNo("Yes/No:", "YesNo"));
$form->addElement(new Element_Captcha("Captcha:"));
$form->addElement(new Element_Button);
$form->addElement(new Element_Button("Cancel", "button", array(
	"onclick" => "history.go(-1);"
)));
$form->render();
?>', true), '</pre>';

include("../footer.php");
