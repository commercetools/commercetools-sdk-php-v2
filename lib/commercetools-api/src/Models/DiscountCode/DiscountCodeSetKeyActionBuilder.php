<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountCodeSetKeyAction>
 */
final class DiscountCodeSetKeyActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $key;

    /**
     * <p>Unique value to set.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }


    public function build(): DiscountCodeSetKeyAction
    {
        return new DiscountCodeSetKeyActionModel(
            $this->key
        );
    }

    public static function of(): DiscountCodeSetKeyActionBuilder
    {
        return new self();
    }
}
