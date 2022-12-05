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
 * @implements Builder<DiscountCodeUpdate>
 */
final class DiscountCodeUpdateBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?DiscountCodeUpdateActionCollection
     */
    private $actions;

    /**
     * <p>Expected version of the DiscountCode on which the changes should be applied.
     * If the expected version does not match the actual version, a <a href="ctp:api:type:ConcurrentModificationError">ConcurrentModification</a> error is returned.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the DiscountCode.</p>
     *

     * @return null|DiscountCodeUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?DiscountCodeUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?DiscountCodeUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): DiscountCodeUpdate
    {
        return new DiscountCodeUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): DiscountCodeUpdateBuilder
    {
        return new self();
    }
}
