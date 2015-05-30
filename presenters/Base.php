<?php
	namespace Sample\Presenters ;
	use Presenter ;

	class Base extends Presenter {

		static $styles = array();

		static $scripts = array();

		static $includes = array();


		static function build(){
			parent::build();

		}
	}
?>