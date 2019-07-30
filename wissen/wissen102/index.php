<?php
	// =================================================================================================================================================================
	// ========================================================== SLUG
	// =================================================================================================================================================================

	$motiv = "grundsatzfragen";

	// =================================================================================================================================================================
	// ========================================================== GRADIENT
	// =================================================================================================================================================================

	$gradient_r_von = 0;
	$gradient_r_bis = 237;
	$gradient_g_von = 109;
	$gradient_g_bis = 51;
	$gradient_b_von = 176;
	$gradient_b_bis = 118;

	// 006db0 = 0 109 176
	// ed3376 = 237 51 118

	// =================================================================================================================================================================
	// ========================================================== VARIABLEN FÜR TEXTE
	// =================================================================================================================================================================

	// ========================================================== VARIABLEN FÜR TEMPLATE_INTRO
	// ====================================================================================================================
	$template_intro_videorsc			= '../wissen_components/media/a.mp4';
	$template_intro_text				= '<h2 class="sans">503.125</h2>
										<h2 class="serif">Franken</h2>
										<h2 class="sans">würde ein Glas Honig kosten, wenn Bienen den Basler Mindestlohn bekämen.</h2>';
										  

	// ========================================================== VARIABLEN FÜR TEMPLATE_STORY
	// ====================================================================================================================
	$template_story_text				= 'Bienen haben viele Probleme. Aber das Geschäft summt brummt. Unsere Basler Bienen zählen zu den fleissigsten Honigproduzentinnen der Schweiz. Wären die Bienen aus anderen Kantonen motivierter, wenn sie wüssten, dass Schweizer/-innen bereit sind, bis zu 30% mehr für regionale Produkte zu zahlen?';

	// ========================================================== VARIABLEN FÜR KURS1
	// ====================================================================================================================
	$template_kurs1_hcolor 				= '#006db0';
	$template_kurs1_headline 			= 'Wir und das Tier';
	$template_kurs1_subheadline 		= 'Hier steht eine Subline';
	$template_kurs1_beschreibungstext 	= 'Ob als geliebte Haustiere, gejagte Schädlinge oder verwertbare Nutztiere: In der Basler Stadtgesellschaft hatten Tiere unterschiedliche Funktionen. Ein Rundgang durch das Staatsarchiv beleuchtet das wechselhafte Verhältnis zwischen Mensch und Tier durch die Geschichte.';
	$template_kurs1_info1 				= 'Kurs-Nr.: K 140 3080<br/>Kurspreis.: CHF 25.00<br/>';
	$template_kurs1_info2 				= 'Kursstart: 13.11.2019';

	// ========================================================== VARIABLEN FÜR KURS2
	// ====================================================================================================================
	$template_kurs2_hcolor 				= '#ed3376';
	$template_kurs2_headline 			= 'Steuererklärung leicht gemacht';
	$template_kurs2_subheadline 		= 'Hier steht eine Subline';
	$template_kurs2_beschreibungstext 	= 'Als unselbständig Erwerbende/-r oder Rentner/-in können Sie nach dem Kurs die eigene Steuererklärung richtig ausfüllen und die vorgesehenen Abzüge optimal ausnützen. Der Kurs eignet sich v.a. für Teilnehmende aus dem Kt. Basel-Landschaft, die Erkenntnisse sind gut auf andere Kantone übertragbar.';
	$template_kurs2_info1 				= 'Kurs-Nr.: K 140 4810<br/>Kurspreis: CHF 86.00';
	$template_kurs2_info2 				= 'Kursstart: 12.03.2020, 3-mal';

	// ========================================================== VARIABLEN FÜR ABSPANN
	// ====================================================================================================================
	$template_abspann_claim				= 'Man kann nie wissen,<br />wann Wissen was nützt';
	$template_abspann_text 				= '100 Jahre Volkshochschule beider Basel. In dieser Zeit hat sich viel verändert. Vor allem die Geschwindigkeit, in der diese Veränderung passiert. Eines ist aber gleichgeblieben: Die Magie des Wissens. Da, wo neues Wissen entsteht und sich Gedanken neu verknüpfen, entstehen auch neue Wege. Wissen verändert Blickwinkel, verbindet Menschen und macht wortwörtlich Unmögliches möglich. Wir arbeiten für das Glücksgefühl, das wir spüren, wenn Wissen entsteht. Und das mit der gleichen Leidenschaft, wie unsere Gründer vor 100 Jahren.';

	// =================================================================================================================================================================
	// ========================================================== INCLUDE / MARKUP
	// =================================================================================================================================================================



	include("../wissen_components/components/header.php");
	include("../wissen_components/components/preloader.php"); 

	include("../wissen_components/components/template.php");

	include("../wissen_components/components/footer.php") 
?>