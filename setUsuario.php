	<?
	public function init(){
		$this->setUsuarioOrigem();
	}
	
	public function setUsuarioOrigem(){
		$model = Usuario::model()->findByPk(Yii::app()->user->id);
		$this->d_nome  = $model->nome;
		$this->d_local = $model->nome_local;
		$this->d_andar = $model->andar;
		$this->d_baia  = $model->baia;
		$this->d_ramal = $model->ramal;
		$this->d_area  = $model->area;
		$this->d_email = $model->email;

	}
?>