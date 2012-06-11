<?php
class topiccast extends WidgetHandler
{
	function proc($args)
	{
		$oTopicfluxModel = &getModel('topicflux');

		// cast 정보
		$castInfo = $oTopicfluxModel->getCastInfo($args->cast_id);
		debugPrint($castInfo);

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
