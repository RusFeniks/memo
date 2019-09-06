<?php

class Memo
{
	protected $Id;
	protected $Text;
	protected $Color;
	protected $Date;

	public function __construct($text, $color = '#ffffcc')
	{
		$this->Text = $text;
		$this->Color = $color;

		$this->Date = date("Y-m-d H:i:s");
	}

	public function draw()
	{
		global $settings;

		echo "<div class='$settings[memoClass]' style='background-color: $this->Color;'>$this->Text</div>\n";
	}
}

?>