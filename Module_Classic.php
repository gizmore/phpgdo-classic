<?php
namespace GDO\Classic;

use GDO\Core\GDO_Module;

/**
 * Install this module to load the classic css theme.
 * 
 * @author gizmore
 * @version 7.0.0
 * @since 6.1.0
 */
final class Module_Classic extends GDO_Module
{
	public int $priority = 99;
	
	public function onIncludeScripts() : void
	{
		$this->addCSS('css/classic.css');
	}
	
}
