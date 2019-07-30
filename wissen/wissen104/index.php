<?php
	// =================================================================================================================================================================
	// ========================================================== SLUG
	// =================================================================================================================================================================

	$motiv = "grundsatzfragen";

	// =================================================================================================================================================================
	// ========================================================== GRADIENT
	// =================================================================================================================================================================

	$gradient_r_von = 140;
	$gradient_r_bis = 219;
	$gradient_g_von = 63;
	$gradient_g_bis = 87;
	$gradient_b_von = 135;
	$gradient_b_bis = 51;

	// 8c3f87 = 140 63 135
	// db5733 = 219 87 51

	$responsive_v_img = '../wissen_components/img/v104.jpg';

	// =================================================================================================================================================================
	// ========================================================== VARIABLEN FÜR TEXTE
	// =================================================================================================================================================================

	// ========================================================== VARIABLEN FÜR TEMPLATE_INTRO
	// ====================================================================================================================
	$template_intro_videorsc			= '../wissen_components/media/a.mp4';
	$template_intro_text				= '<h2 class="sans">Verwechsle</h2>
										<h2 class="serif">Kopffrei&shy;machen</h2>
										<h2 class="sans">nicht mit Kopfleerlassen.</h2>';
										  

	// ========================================================== VARIABLEN FÜR TEMPLATE_STORY
	// ====================================================================================================================
	$template_story_text				= '2015 behauptete eine Studie, unsere Aufmerksamkeitsspanne wäre auf 8 Sekunden gesunken. Das war für viele schockierend. Aber zum Glück nur kurz. Denn sofort waren wir mit anderen Studien beschäftigt, die das Gegenteil behaupteten. Nichts ist schwarz-weiss. Zeit darüber nachzudenken.';

	// ========================================================== VARIABLEN FÜR KURS1
	// ====================================================================================================================
	$template_kurs1_hcolor 				= '#8c3f87';
	$template_kurs1_headline 			= 'Psychologische Phänomene';
	$template_kurs1_subheadline 		= 'Hier steht eine Subline';
	$template_kurs1_beschreibungstext 	= 'Der Kurs bietet anregende Einblicke in die faszinierende Welt der Psychologie. Anhand klassischer Experimente der Psychologie und bekannter Effekte, die Ihnen im Alltag immer wieder begegnen, behandelt der Kurs grundlegende Themen verständlich, unterhaltsam und anschaulich. Sie erfahren, durch welche Phänomene das Denken, Handeln und Fühlen des Menschen beeinflusst werden.';
	$template_kurs1_info1 				= 'Kurs-Nr.: K 120 2030<br/>Kurspreis.: CHF 126.00<br/>';
	$template_kurs1_info2 				= 'Kursstart: 13.01.2020, 5-mal';

	// ========================================================== VARIABLEN FÜR KURS2
	// ====================================================================================================================
	$template_kurs2_hcolor 				= '#db5733';
	$template_kurs2_headline 			= 'Philosophieren in Tweets';
	$template_kurs2_subheadline 		= 'Hier steht eine Subline';
	$template_kurs2_beschreibungstext 	= 'Philosophen schreiben dicke Bücher? Das stimmt nicht immer. Nietzsche gilt nicht nur als Schlüsselfigur an der Wende zur philosophischen Moderne, sondern auch als Meister der Kürze und Konzentration. Wir lernen ihn, seine Philosophie und diese Form des Denkens in funkelnden Textjuwelen anhand von Beispielen aus seinen Schriften \'Jenseits von Gut und Böse\' und \'Götzendämmerung\' kennen. ';
	$template_kurs2_info1 				= 'Kurs-Nr.: K 140 1060<br/>Kurspreis: CHF 103.00';
	$template_kurs2_info2 				= 'Kursstart: 18.01.2020';

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