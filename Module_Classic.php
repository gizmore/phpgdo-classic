<?php
namespace GDO\Classic;

use GDO\Core\GDO_Module;
use GDO\UI\GDT_Page;
use GDO\UI\GDT_Headline;

/**
 * Install this module to load the classic css theme.
 * 
 * @author gizmore
 * @version 7.0.1
 * @since 6.1.0
 */
final class Module_Classic extends GDO_Module
{
	public int $priority = 99;
	
	public function onIncludeScripts() : void
	{
		$this->addCSS('css/gdo6.css');
		$this->addCSS('css/gdo6-sidebar.css');
		$this->addCSS('css/gdo6-classic.css');
		$this->addCSS('css/gdo6-pulse.css');
		
		$this->addJS('js/gdo6-classic.js');
	}
	
	public function onInitSidebar() : void
	{
		GDT_Page::instance()->topBar()->addField(GDT_Headline::make()->level(2)->textRaw(GDO_SITENAME));
	}
	
}
