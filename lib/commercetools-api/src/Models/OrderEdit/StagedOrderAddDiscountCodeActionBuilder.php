<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;

/**
 * @implements Builder<StagedOrderAddDiscountCodeAction>
 */
final class StagedOrderAddDiscountCodeActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $code;

    /**
     * @return null|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return $this
     */
    public function withCode(?string $code)
    {
        $this->code = $code;

        return $this;
    }


    public function build(): StagedOrderAddDiscountCodeAction
    {
        return new StagedOrderAddDiscountCodeActionModel(
            $this->code
        );
    }

    public static function of(): StagedOrderAddDiscountCodeActionBuilder
    {
        return new self();
    }
}
