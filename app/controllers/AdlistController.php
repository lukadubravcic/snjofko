<?php

class AdlistController extends BaseController
{

	private $_AREAS = [
				'Bjelogorsko-bilogorska',
				'Brodsko-posavska',
				'Dubrovacko-neretvanska',
				'Istarska',
				'Karlovacka',
				'Koprivnicko-krizevacka',
				'Krapinsko-zagorska',			
				'Licko-Senjska',		
				'Medimurska',
				'Osjecko-baranjska',			
				'Pozesko-slavonska',
				'Primorsko-goranska',
				'Sisacko-moslavacka',		
				'Splitsko-dalmatinska',
				'Sibensko-kninska',	
				'Varazdinska',	
				'Viroviticko-podravska',	
				'Vukovarsko-srijemska',
				'Zadarska',
				'Grad Zagreb',
				'Zagrebačka'
	];

	public function onConstruct()
	{
		parent::initialize();
	}

	public function indexAction()
	{
		// $ads = Ad::find();		
	}



}



// Bjelogorsko-bilogorska
// Brodsko-posavska
// Dubrovačko-neretvanska
// Istarska
// Karlovačka
// Koprivničko-križevačka
// Krapinsko-zagorska
// Ličko-Senjska
// Međimurska
// Osječko-baranjska
// Požeško-slavonska
// Primorsko-goranska
// Sisačko-moslavačka
// Splitsko-dalmatinska
// Šibensko-kninska
// Varaždinska
// Virovitičko-podravska
// Vukovarsko-srijemska
// Zadarska
// Grad Zagreb
// Zagrebačka
