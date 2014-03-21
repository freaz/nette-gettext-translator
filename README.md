# Gettext Translator

## Installation
1. Extension registration
```
extensions:
    gettextTranslator: GettextTranslator\DI\Extension
```

2. Settings block
```
gettextTranslator:
    lang: cs
    files:
        all: %appDir%/i18n/locale
```

3. Setup BasePresenter
```
namespace App\Presenters;
use Nette;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    /**
     * @inject 
     *
     * @var \GettextTranslator\Gettext
     */
    public $translator;

    public function beforeRender()
    {
        $this->template->setTranslator($this->translator);
    }
}

```

## Usage

### Presenters

```
$this->translator->translate("%s drunk %d beer", 5, "Standa", 5);
$this->translator->translate("%s drunk %d beer", 5);
$this->translator->translate("%s is drunk", 1, "Standa");
```

### Templates
```
Normal gettext traslation: {_'cat'}.
Plural translation: 1 {_'dog'}, 2 {_'dog', 2}, 3 {_'dog', 3}, 4 {_'dog', 4}, 5 {_'dog', 5}.
With placeholders: {$placeholded1}
With not replaced placeholders: {$placeholded2}
```

### Forms
```
$form = new Nette\Application\UI\Form();
$form->setTranslator($this->translator);
```