<?php


/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'say-hello';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
 

	<?= $user["sex"]; 
		foreach($user as $key=>$value){
			$value=htmlspecialchars($value);
			echo $key."--".Html::encode($value)."<br/>";
		}
	?>
</div>
<div>
	<?= html::tag('p',$article['title'],['class'=>"btn btn-success",'title'=>'btn']);?>
</div>
