<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountsConfiguration>
 */
final class DiscountsConfigurationBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $discountCombinationMode;

    /**
     * <p>Indicates how Product Discounts and Cart Discounts should be combined. Default value is <code>Stacking</code>.</p>
     *

     * @return null|string
     */
    public function getDiscountCombinationMode()
    {
        return $this->discountCombinationMode;
    }

    /**
     * @param ?string $discountCombinationMode
     * @return $this
     */
    public function withDiscountCombinationMode(?string $discountCombinationMode)
    {
        $this->discountCombinationMode = $discountCombinationMode;

        return $this;
    }


    public function build(): DiscountsConfiguration
    {
        return new DiscountsConfigurationModel(
            $this->discountCombinationMode
        );
    }

    public static function of(): DiscountsConfigurationBuilder
    {
        return new self();
    }
}
