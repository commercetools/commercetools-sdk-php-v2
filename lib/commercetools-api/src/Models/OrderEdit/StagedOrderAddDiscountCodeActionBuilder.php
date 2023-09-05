<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * <p><code>code</code> of a <a href="ctp:api:type:DiscountCode">DiscountCode</a>.</p>
     *

     * @return null|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param ?string $code
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
