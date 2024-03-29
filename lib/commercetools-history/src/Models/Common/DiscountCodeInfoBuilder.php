<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountCodeInfo>
 */
final class DiscountCodeInfoBuilder implements Builder
{
    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $discountCode;

    /**

     * @var ?string
     */
    private $state;

    /**

     * @return null|Reference
     */
    public function getDiscountCode()
    {
        return $this->discountCode instanceof ReferenceBuilder ? $this->discountCode->build() : $this->discountCode;
    }

    /**

     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param ?Reference $discountCode
     * @return $this
     */
    public function withDiscountCode(?Reference $discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    /**
     * @param ?string $state
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @deprecated use withDiscountCode() instead
     * @return $this
     */
    public function withDiscountCodeBuilder(?ReferenceBuilder $discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    public function build(): DiscountCodeInfo
    {
        return new DiscountCodeInfoModel(
            $this->discountCode instanceof ReferenceBuilder ? $this->discountCode->build() : $this->discountCode,
            $this->state
        );
    }

    public static function of(): DiscountCodeInfoBuilder
    {
        return new self();
    }
}
