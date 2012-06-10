<?php
class topiccast extends WidgetHandler
{

	function proc($args)
	{
		$tpl_path = sprintf('%sskins/%s', $this->widget_path, $args->skin);
		$tpl_file = 'skin';
		$oTemplate = &TemplateHandler::getInstance();

		$_output = array();
		$_output[] = '<div class="topiccast-container topiccast-skin-'.$args->skin.'">';
		$_output[] = $oTemplate->compile($tpl_path, $tpl_file);
		$_output[] = '</div>';

		return implode('', $_output);
	}
}
