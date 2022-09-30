<?php
namespace GDO\Classic;

use GDO\Core\GDO_Module;
use GDO\UI\GDT_Page;
use GDO\UI\GDT_Link;
use GDO\Core\Application;

/**
 * Install this module to load the classic css theme.
 * 
 * @author gizmore
 * @version 7.0.1
 * @since 6.1.0
 */
final class Module_Classic extends GDO_Module
{
	public int $priority = 50;
	
	public function onIncludeScripts() : void
	{
		global $me;
		if (Application::$INSTANCE->hasTheme('classic'))
		{
			$this->addJS('js/gdo7-classic.js');
			$this->addCSS('css/gdo7.css');
			if ($me->isSidebarEnabled())
			{
				$this->addCSS('css/gdo7-sidebar.css');
			}
			$this->addCSS('css/gdo7-classic.css');
			$this->addCSS('css/gdo7-pulse.css');
		}
	}
	
	public function onInitSidebar() : void
	{
		GDT_Page::instance()->topBar()->addField(
			GDT_Link::make('home')->text('sitename')->href(hrefDefault()));
	}
	
}
