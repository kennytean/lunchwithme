<?php

class HomeController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

    public function actionSubmitForm() {
        //echo "Works!";
        if(isset($_POST['email'])) {
            //echo "TTooo!";
            $luncher = new Luncher();
            $luncher->email = $_POST['email'];
            $luncher->occation_id = 1;
            $luncher->created_at = time();
            if (!$luncher->save()) {
                echo "<pre>Failed";print_r($luncher->getErrors());
            }
            else {
                echo "Thank you! We will send your match on the lunch date morning..";
            }
        }
        else {
            echo "Please re-enter your email address!";
        }
        //echo $_POST['email'];
    }

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}