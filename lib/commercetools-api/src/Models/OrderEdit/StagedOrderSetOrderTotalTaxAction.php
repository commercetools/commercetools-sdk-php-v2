<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\TaxPortionDraftCollection;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetOrderTotalTaxAction extends StagedOrderUpdateAction
{
    public const FIELD_EXTERNAL_TOTAL_GROSS = 'externalTotalGross';
    public const FIELD_EXTERNAL_TAX_PORTIONS = 'externalTaxPortions';

    /**
     * @return null|Money
     */
    public function getExternalTotalGross();

    /**
     * @return null|TaxPortionDraftCollection
     */
    public function getExternalTaxPortions();

    public function setExternalTotalGross(?Money $externalTotalGross): void;

    public function setExternalTaxPortions(?TaxPortionDraftCollection $externalTaxPortions): void;
}
