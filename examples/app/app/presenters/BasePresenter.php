<?php

namespace App\Presenters;

use GettextTranslator\Gettext;
use Nette;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    /**
     * @var Nette\Localization\ITranslator
     */
    protected $translator;

    /**
     * @param GettextTranslator\Gettext
     */
    public function injectTranslator(Gettext $translator)
    {
        $this->translator = $translator;
    }

    public function beforeRender()
    {
        $this->template->setTranslator($this->translator);
    }
}
