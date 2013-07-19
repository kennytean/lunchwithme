<?php

class ProcessController extends Controller
{
	public $email_subject = "Lunch Appointment";
	public $email_template = "Hi {{ME}},<br/><br/>Your lunch appointment for today is approaching.. Your lunch partner will be {{YOU}}..<br/>We wish you have an awesome lunch..<br/><br/>Sincerely,<br/>Lunchwith.ME";

//    public function ProcessController()
//    {
//    }

	public function actionIndex()
	{
		// get data from database
		// $array = $this->search();
		$array = Luncher::model()->findAll();

		// match them
		if ($matches = $this->matching($array)) {
			// populate email msg
			if ($emails = $this->populateEmail($matches)) {
				$results = $this->sendEmail($emails);
				echo json_encode($results);
				exit;
			}
			echo "error in populating emails";
			exit;
		}
		echo "error in matching person";
		exit;
		//$this->render('index');
	}

	private function sendEmail($emails)
    {
        // $message = new YiiMailMessage;
           //this points to the file test.php inside the view path
        // $message->view = "test";
        // $sid                 = 1;
        // $criteria            = new CDbCriteria();
        // $criteria->condition = "studentID=".$sid."";            
        // $studModel1          = Student::model()->findByPk($sid);        
        // $params              = array('myMail'=>$studModel1);
        // $message->subject    = 'My TestSubject';
        // $message->setBody($params, 'text/html');                
        // $message->addTo('yourmail@domain.com');
        // $message->from = 'admin@lunchwith.me';   
        // Yii::app()->mail->send($message);       
        if (count($emails) > 0) {
            echo "<pre>emails: ";
            print_r($emails);
            echo "</pre>";
//            foreach ($emails as $email) {
//                if(mail($email['to'], $this->email_subject, $email['msg'])) {
//                    $results[] = true;
//                }
//                else {
//                    $results[] = false;
//                }
//            }
//            return $results;
        } else {
            return false;
        }
    }

 //    private function search() {
 //        $criteria=new CDbCriteria;
 //        $criteria->with = array('phones');
 //        $criteria->compare('t.id', $this->id, true);
 //        $hp = is_string($this->hasPhone)
 //                ? (($hp = trim($this->hasPhone)) === ''
 //                    ? null
 //                    : !preg_match('/^(?:no|0)$/iu', $hp)
 //                )
 //                : null;
 //        if ($hp !== null)
 //            $criteria->addCondition(
 //                'phones.person_id is ' . ($hp ? 'not' : '') . ' null'
 //            );
 //        return new CActiveDataProvider($this, array('criteria' => $criteria));
 //    }

	private function populateEmail($matches)
	{
		if (is_array($matches)) {
			$email = array();
			foreach ($matches as $match) {
				if (count($match) >= 2) {
					// more than 2 person for lunch
					for ($i = 0; $i < count($match); $i++) {
						$me = $match[$i]->email;
						foreach ($match as $person) {
							if ($person->email != $me) {
								$you_array[] = $person->email;
							}
						}
						$you = implode(', ', $you_array);
                        $email_settings['to'] = $me;
                        $email_settings['msg'] = str_replace("{{ME}}", $me, $this->email_template);
                        $email_settings['msg'] = str_replace("{{YOU}}", $you, $email_settings['msg']);
                        $email[] = $email_settings;
                        unset($you_array);
                        unset($me);
					}
				}
				// else if (count($match) == 2) {
				// 	// 2 person for lunch
				// 	$me = $match[0]->email;
				// 	$you = $match[1]->email;
				// 	$email_settings['to'] = $address;
				// 	$email_settings['msg'] = str_replace("{{ME}}", $me, $this->email_template);
				// 	$email_settings['msg'] = str_replace("{{YOU}}", $you, $this->email_template);
				// }
				else {
					$error_match[] = $match;
				}
			}

			return $email;
		}

		return false;
	}

	private function matching($array)
	{
		if (is_array($array) && count($array) > 1) {
			// randomize array
			// $random_array = shuffle($array);
			$loop_count = floor(count($array)/2);
			// 0 is even, 1 is odd
			$single_match = count($array) % 2;
			// initialize variable
			$process_array = $array;
			$matching_array = array();
			for ($i = 0; $i < $loop_count; $i++) {
				$rand_keys = array_rand($process_array, 2);
				$matching_array[$i][] = $array[$rand_keys[0]];
				$matching_array[$i][] = $array[$rand_keys[1]];
				// remove matched user from array
				unset($process_array[$rand_keys[0]]);
				unset($process_array[$rand_keys[1]]);
			}

			// fit the single as
			if ($single_match && $matching_array) {
				// by this time process_array left only 1
                $matching_array[0] = array_merge($matching_array[0], $process_array);
			}

			return $matching_array;
		}

		return false;
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