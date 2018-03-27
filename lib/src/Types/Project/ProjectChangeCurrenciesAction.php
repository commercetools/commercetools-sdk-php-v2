<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

interface ProjectChangeCurrenciesAction extends ProjectUpdateAction {
    const FIELD_CURRENCIES = 'currencies';

    /**
     * @return array
     */
    public function getCurrencies();

    /**
     * @param array $currencies
     * @return $this
     */
    public function setCurrencies(array $currencies);

}
