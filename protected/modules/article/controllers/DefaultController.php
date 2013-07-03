<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
            //var_dump(SiteStructure::model()->roots()->findAll());
            
            $siteStructure = new SiteStructure();
            
            $this->render('index',array('SiteStructure' => $siteStructure));
	}
}