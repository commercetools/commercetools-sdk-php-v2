<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyCartAddDiscountCodeAction>
 */
final class MyCartAddDiscountCodeActionBuilder implements Builder
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


    public function build(): MyCartAddDiscountCodeAction
    {
        return new MyCartAddDiscountCodeActionModel(
            $this->code
        );
    }

    public static function of(): MyCartAddDiscountCodeActionBuilder
    {
        return new self();
    }
}
