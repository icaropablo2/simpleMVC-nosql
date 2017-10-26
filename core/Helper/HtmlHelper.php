<?php
class HtmlHelper extends Helper{
	
	public function url($string = ''){
		return 'http://localhost/nodb/' . $this->slugfy($string);
	}

	public function link($string = ''){
		return 'http://localhost/nodb/webroot/' . $string;
	}

	public function image($file_name, $options = []){

		$default = [
			'class' => '',
			'alt' => '',
			'id' => '',
			'src' => $this->link("img/{$file_name}"),
		];

		$options = array_merge($default, $options);

		$html = "<img src='{$options['src']}' id='{$options['id']}' alt='{$options['alt']}' class='{$options['class']}' />";

		return $html;

	}

}
?>