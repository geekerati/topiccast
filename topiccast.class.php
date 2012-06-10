<?php
class topiccast extends WidgetHandler
{

	function proc($args)
	{
		$tpl_path = sprintf('%stpl', $this->widget_path);
		$tpl_file = 'skin';
		$oTemplate = &TemplateHandler::getInstance();
		return $oTemplate->compile($tpl_path, $tpl_file);
	}
}
