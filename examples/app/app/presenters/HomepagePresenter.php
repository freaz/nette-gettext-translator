<?php

namespace App\Presenters;

use Nette;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

    public function renderDefault()
    {
        $this->template->placeholded1 = $this->translator->translate("%s drunk %d beer", 5, "Standa", 5);
        $this->template->placeholded2 = $this->translator->translate("%s drunk %d beer", 5);
        $this->template->placeholded3 = $this->translator->translate("%s is drunk", 1, "Standa");
    }

    public function createComponentExampleForm()
    {
        $form = new Nette\Application\UI\Form();
        $form->setTranslator($this->translator);

        $form->addText('fname', 'First name');
        $form->addText('lname', 'Last name');

        return $form;
    }
}
