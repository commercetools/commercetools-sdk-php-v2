<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Types\Project\ProjectUpdateActionModel;

class ProjectChangeCurrenciesActionModel extends ProjectUpdateActionModel implements ProjectChangeCurrenciesAction {
    const DISCRIMINATOR_VALUE = 'changeCurrencies';

    /**
     * @var CurrencyCodeCollection
     */
    protected $currencies;

    /**
     * @return CurrencyCodeCollection
     */
    public function getCurrencies()
    {
        if (is_null($this->currencies)) {
            $value = $this->raw(ProjectChangeCurrenciesAction::FIELD_CURRENCIES);
            if (is_null($value)) {
                return $this->mapData(CurrencyCodeCollection::class, null);
            }
            $value = $this->mapData(CurrencyCodeCollection::class, $value);
            $this->currencies = $value;
        }
        return $this->currencies;
    }

    /**
     * @param CurrencyCodeCollection $currencies
     * @return $this
     */
    public function setCurrencies(CurrencyCodeCollection $currencies)
    {
        $this->currencies = $currencies;

        return $this;
    }

}
