<?php namespace Franzl\LaravelRain;

use \Illuminate\View\Engines\EngineInterface;
use \Rain\Tpl;

class Engine implements EngineInterface
{
	protected $extension;

	public function __construct($extension)
	{
		$this->extension = $extension;
	}

	/**
	 * Get the evaluated contents of the view.
	 *
	 * @param  string  $path
	 * @param  array   $data
	 * @return string
	 */
	public function get($path, array $data = array())
	{

		$len = strlen($this->extension) + 1;
		$path = substr($path, 0, -$len);

		$tpl = new Tpl;
		$tpl->assign($data);
		return $tpl->draw($path, true);

	}
}