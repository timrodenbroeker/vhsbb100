<?php
	// =================================================================================================================================================================
	// ========================================================== SLUG
	// =================================================================================================================================================================

	$motiv = "grundsatzfragen";

	// =================================================================================================================================================================
	// ========================================================== GRADIENT
	// =================================================================================================================================================================

	$gradient_r_von = 13;
	$gradient_r_bis = 0;
	$gradient_g_von = 99;
	$gradient_g_bis = 152;
	$gradient_b_von = 169;
	$gradient_b_bis = 79;

	// 0d63a9 = 13 99 169
	// 00984f = 0 152 79

	$responsive_v_img = '../wissen_components/img/v101.jpg';

	// =================================================================================================================================================================
	// ========================================================== VARIABLEN FÜR TEXTE
	// =================================================================================================================================================================

	// ========================================================== VARIABLEN FÜR TEMPLATE_INTRO
	// ====================================================================================================================
	$template_intro_videorsc			= '../wissen_components/media/a.mp4';
	$template_intro_text				= '<h2 class="sans">Ist der prinzipielle Wert von</h2>
										<h2 class="serif">Grundsatz&shy;fragen</h2>
										<h2 class="sans">nicht grundsätzlich eine Frage der Prinzipien?</h2>';

	// ========================================================== VARIABLEN FÜR TEMPLATE_STORY
	// ====================================================================================================================
	$template_story_text				= 'Die Digitalisierung krempelt unser Wertesystem um. Laut Experten kommunizieren wir bald mehr mit Künstlichen Intelligenzen, als mit Menschen. Die Maschinen lernen. Und wir? Wir sollten unsere eigene Intelligenz nutzen und darüber diskutieren.';

	// ========================================================== VARIABLEN FÜR KURS1
	// ====================================================================================================================
	$template_kurs1_hcolor 				= '#00984F';
	$template_kurs1_headline 			= 'Roboter & Ethik';
	$template_kurs1_subheadline 		= 'Hier steht eine Subline';
	$template_kurs1_beschreibungstext 	= 'Die Digitalisierung ermöglicht individualisierte Preise, personalisierte Werbung und Medizin, den Einsatz von Robotern in vielen Arbeitsbereichen, selbstfahrende Autos und Drohnen, Stimm- und Gesichtserkennung. Welche Herausforderungen stellen diese Neuerungen an die Gesellschaft? Wo gibt es Wertekonflikte? Wie sehen die rechtlichen Grundlagen aus? An drei Abenden werden die verschiedenen Aspekte beleuchtet und diskutiert.';
	$template_kurs1_info1 				= 'Kurs-Nr.: K 140 5030<br/>Kurspreis.: CHF 76.00<br/>';
	$template_kurs1_info2 				= 'Kursstart: 13.01.2020, 3-mal';

	// ========================================================== VARIABLEN FÜR KURS2
	// ====================================================================================================================
	$template_kurs2_hcolor 				= '#0D63A9';
	$template_kurs2_headline 			= 'Schweizerdeutsch Konversation';
	$template_kurs2_subheadline 		= 'Hier steht eine Subline';
	$template_kurs2_beschreibungstext 	= 'Die Fähigkeit sich zu miteinander zu verständigen ist die Grundlage jeder Gesellschaft. In Schweizerdeutsch Konversation praktizieren und verfeinern wir das, was Sie im Kurs <a href="https://www.vhsbb.ch/kursprogramm/deutsch-schweizer-dialekt-232873" target="_blank">\'Schweizerdeutsch verstehen\'</a> gelernt haben. Wir versuchen, uns in Alltagssituationen korrekt auszudrücken und beschäftigen uns mit Historischem und Kulturellem in und um Basel. Offen für alle, die Schweizerdeutsch schon verstehen und praktizieren wollen.';
	$template_kurs2_info1 				= 'Kurs-Nr.: S 134 005<br/>Kurspreis: CHF 459.00';
	$template_kurs2_info2 				= 'Kursstart: 24.10.2019, 17-mal';

	// ========================================================== VARIABLEN FÜR ABSPANN
	// ====================================================================================================================
	$template_abspann_claim				= 'Man kann nie wissen,<br />wann Wissen was nützt';
	$template_abspann_text 				= '100 Jahre Volkshochschule beider Basel. In dieser Zeit hat sich viel verändert. Vor allem die Geschwindigkeit, in der diese Veränderung passiert. Eines ist aber gleichgeblieben: Die Magie des Wissens. Da, wo neues Wissen entsteht und sich Gedanken neu verknüpfen, entstehen auch neue Wege. Wissen verändert Blickwinkel, verbindet Menschen und macht wortwörtlich Unmögliches möglich. Wir arbeiten für das Glücksgefühl, das wir spüren, wenn Wissen entsteht. Und das mit der gleichen Leidenschaft, wie unsere Gründer vor 100 Jahren.';

	// =================================================================================================================================================================
	// ========================================================== INCLUDE / MARKUP
	// =================================================================================================================================================================



	include("../wissen_components/components/header.php");

	?>

	<style>
		#preloader {
			background: rgb(131, 58, 180);
			background: linear-gradient(0deg, <?php echo $template_kurs1_hcolor; ?> 0%,  <?php echo $template_kurs2_hcolor; ?> 100%);
		}
	</style>

	<?php 
	include("../wissen_components/components/preloader.php"); 

	include("../wissen_components/components/template.php");

	include("../wissen_components/components/footer.php") 
?>