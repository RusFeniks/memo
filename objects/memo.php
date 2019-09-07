<?php

class Memo
{

	public static $Array = [];

	protected $Id;
	protected $Title;
	protected $Text;
	protected $Color;
	protected $Date;

	public static function Add($id = null, $title, $text = '', $color = null, $date = null)
	{
		global $settings;
		$id = $id ? $id : sizeof(Memo::$Array) + 1;
		$color = $color ? $color : $settings['memoColor'];

		Memo::$Array[$id] = new Memo($id, $title, $text, $color, $date);
	}

	public static function Draw()
	{
		global $settings;
		foreach (Memo::$Array as $memo) {
			$memo->ldraw($settings[memoClass]);
		}
	}

	private function __construct($id, $title, $text, $color, $date)
	{
		$this->Id = $id;
		$this->Title = $title;
		$this->Text = $text;
		$this->Color = $color;
		$this->Date = $date;
	}

	private function ldraw($class)
	{
		echo "<div class='$class' style='background-color: $this->Color;'>";
		echo "<div class='header'><div class='title'>$this->Title</div><div class='options'><a href='delete.php/?id=$this->Id'>[x]</a></div></div>";
		echo "<div class='text'>$this->Text</div>";
		echo "<div class='info'>[$this->Id] $this->Date</div>";
		echo "</div>\n";
	}
}

?>