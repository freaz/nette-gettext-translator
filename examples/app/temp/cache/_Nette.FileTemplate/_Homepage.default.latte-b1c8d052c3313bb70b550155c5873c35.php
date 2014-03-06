<?php //netteCache[01]000421a:2:{s:4:"time";s:21:"0.77217400 1394104599";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:106:"/Users/freaz/Programming/webdev/nette-gettext-translator/examples/app/app/templates/Homepage/default.latte";i:2;i:1394104598;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2014-02-08";}}}?><?php

// source file: /Users/freaz/Programming/webdev/nette-gettext-translator/examples/app/app/templates/Homepage/default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '3wt51hxmab')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb2651e8f5b5_content')) { function _lb2651e8f5b5_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <p>
        <h2>Latte</h2>
        Normal gettext traslation: <?php echo Nette\Templating\Helpers::escapeHtml($template->translate('cat'), ENT_NOQUOTES) ?>.
        <br>
        Plural translation: 1 <?php echo Nette\Templating\Helpers::escapeHtml($template->translate('dog'), ENT_NOQUOTES) ?>
, 2 <?php echo Nette\Templating\Helpers::escapeHtml($template->translate('dog', 2), ENT_NOQUOTES) ?>
, 3 <?php echo Nette\Templating\Helpers::escapeHtml($template->translate('dog', 3), ENT_NOQUOTES) ?>
, 4 <?php echo Nette\Templating\Helpers::escapeHtml($template->translate('dog', 4), ENT_NOQUOTES) ?>
, 5 <?php echo Nette\Templating\Helpers::escapeHtml($template->translate('dog', 5), ENT_NOQUOTES) ?>.
        <br>
        With placeholders: <?php echo Nette\Templating\Helpers::escapeHtml($placeholded1, ENT_NOQUOTES) ?>

        <br>
        With not replaced placeholders: <?php echo Nette\Templating\Helpers::escapeHtml($placeholded2, ENT_NOQUOTES) ?>

    </p>

    <p>
        <h2>Form</h2>
<?php $_ctrl = $_control->getComponent("exampleForm"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->redrawControl(NULL, FALSE); $_ctrl->render() ?>
    </p>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 