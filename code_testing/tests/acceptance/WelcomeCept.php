<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('check ya.ru');
$I->amOnPage('/');
$I->see('Найти');
