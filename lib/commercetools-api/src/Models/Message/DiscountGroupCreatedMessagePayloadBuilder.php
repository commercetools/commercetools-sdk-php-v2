<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\DiscountGroup\DiscountGroup;
use Commercetools\Api\Models\DiscountGroup\DiscountGroupBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountGroupCreatedMessagePayload>
 */
final class DiscountGroupCreatedMessagePayloadBuilder implements Builder
{
    /**

     * @var null|DiscountGroup|DiscountGroupBuilder
     */
    private $discountGroup;

    /**
     * <p>The DiscountGroup that was created.</p>
     *

     * @return null|DiscountGroup
     */
    public function getDiscountGroup()
    {
        return $this->discountGroup instanceof DiscountGroupBuilder ? $this->discountGroup->build() : $this->discountGroup;
    }

    /**
     * @param ?DiscountGroup $discountGroup
     * @return $this
     */
    public function withDiscountGroup(?DiscountGroup $discountGroup)
    {
        $this->discountGroup = $discountGroup;

        return $this;
    }

    /**
     * @deprecated use withDiscountGroup() instead
     * @return $this
     */
    public function withDiscountGroupBuilder(?DiscountGroupBuilder $discountGroup)
    {
        $this->discountGroup = $discountGroup;

        return $this;
    }

    public function build(): DiscountGroupCreatedMessagePayload
    {
        return new DiscountGroupCreatedMessagePayloadModel(
            $this->discountGroup instanceof DiscountGroupBuilder ? $this->discountGroup->build() : $this->discountGroup
        );
    }

    public static function of(): DiscountGroupCreatedMessagePayloadBuilder
    {
        return new self();
    }
}
