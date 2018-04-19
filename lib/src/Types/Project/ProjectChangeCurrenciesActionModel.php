<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Project\ProjectUpdateActionModel;

class ProjectChangeCurrenciesActionModel extends ProjectUpdateActionModel implements ProjectChangeCurrenciesAction
{
    const DISCRIMINATOR_VALUE = 'changeCurrencies';

    /**
     * @var array
     */
    protected $currencies;

    /**
     * @return array
     */
    public function getCurrencies()
    {
        if (is_null($this->currencies)) {
            $value = $this->raw(ProjectChangeCurrenciesAction::FIELD_CURRENCIES);
            $value = (array)$value;
            $this->currencies = $value;
        }
        return $this->currencies;
    }

    /**
     * @param array $currencies
     * @return $this
     */
    public function setCurrencies(array $currencies)
    {
        $this->currencies = $currencies;

        return $this;
    }

}
