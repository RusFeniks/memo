<?php

class Memo
{
	protected $Title;
	protected $Text;
	protected $Color;
	protected $Date;

	public function __construct($title, $text = '', $color = null)
	{
		global $settings;

		$this->Title = $title;
		$this->Text = $text;
		$this->Color = $color ? $color : $settings['memoColor'];

		$this->Date = date("Y-m-d H:i:s");
	}

	public function draw()
	{
		global $settings;

		echo "<div class='$settings[memoClass]' style='background-color: $this->Color;'>";
		echo "<div class='title' style='background-color: $this->Color;'>$this->Title<hr/></div>";
		echo $this->Text;
		echo "</div>\n";
	}
}

?>