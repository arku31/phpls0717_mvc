<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('check that loftschool is still in index');
$I->amOnPage('/');
$I->fillField('text','loftschool');
$I->click('Найти');
$I->see('Школа онлайн обучения');
