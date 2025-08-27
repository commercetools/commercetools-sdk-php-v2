<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DiscountGroupIsActiveSetMessagePayload>
 */
final class DiscountGroupIsActiveSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $isActive;

    /**

     * @var ?bool
     */
    private $oldIsActive;

    /**
     * <p><code>isActive</code> value of the <a href="ctp:api:type:DiscountGroup">DiscountGroup</a> after the <a href="ctp:api:type:DiscountGroupSetIsActiveAction">Set IsActive</a> update action.</p>
     *

     * @return null|bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * <p><code>isActive</code> value of the <a href="ctp:api:type:DiscountGroup">DiscountGroup</a> before the <a href="ctp:api:type:DiscountGroupSetIsActiveAction">Set IsActive</a> update action.</p>
     *

     * @return null|bool
     */
    public function getOldIsActive()
    {
        return $this->oldIsActive;
    }

    /**
     * @param ?bool $isActive
     * @return $this
     */
    public function withIsActive(?bool $isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @param ?bool $oldIsActive
     * @return $this
     */
    public function withOldIsActive(?bool $oldIsActive)
    {
        $this->oldIsActive = $oldIsActive;

        return $this;
    }


    public function build(): DiscountGroupIsActiveSetMessagePayload
    {
        return new DiscountGroupIsActiveSetMessagePayloadModel(
            $this->isActive,
            $this->oldIsActive
        );
    }

    public static function of(): DiscountGroupIsActiveSetMessagePayloadBuilder
    {
        return new self();
    }
}
