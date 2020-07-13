<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProjectChangeCurrenciesAction extends ProjectUpdateAction
{
    public const FIELD_CURRENCIES = 'currencies';

    /**
     * <p>A three-digit currency code as per currency code.</p>
     *
     * @return null|array
     */
    public function getCurrencies();

    /**
     * @param ?array $currencies
     */
    public function setCurrencies(?array $currencies): void;
}
