<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\DiscountCode\DiscountCode;
use Commercetools\Api\Models\DiscountCode\DiscountCodeBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountCodeCreatedMessagePayload>
 */
final class DiscountCodeCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|DiscountCode|DiscountCodeBuilder
     */
    private $discountCode;

    /**
     * <p>The <a href="ctp:api:type:DiscountCode">Discount Code</a> that was created.</p>
     *

     * @return null|DiscountCode
     */
    public function getDiscountCode()
    {
        return $this->discountCode instanceof DiscountCodeBuilder ? $this->discountCode->build() : $this->discountCode;
    }

    /**
     * @param ?DiscountCode $discountCode
     * @return $this
     */
    public function withDiscountCode(?DiscountCode $discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    /**
     * @deprecated use withDiscountCode() instead
     * @return $this
     */
    public function withDiscountCodeBuilder(?DiscountCodeBuilder $discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    public function build(): DiscountCodeCreatedMessagePayload
    {
        return new DiscountCodeCreatedMessagePayloadModel(
            $this->discountCode instanceof DiscountCodeBuilder ? $this->discountCode->build() : $this->discountCode
        );
    }

    public static function of(): DiscountCodeCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
