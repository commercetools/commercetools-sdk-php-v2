<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecurringOrderUpdate>
 */
final class RecurringOrderUpdateBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?RecurringOrderUpdateActionCollection
     */
    private $actions;

    /**
     * <p>Expected version of the RecurringOrder on which the changes should be applied.
     * If the expected version does not match the actual version, a <a href="ctp:api:type:ConcurrentModificationError">ConcurrentModification</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the RecurringOrder.</p>
     *

     * @return null|RecurringOrderUpdateActionCollection
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
     * @param ?RecurringOrderUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?RecurringOrderUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): RecurringOrderUpdate
    {
        return new RecurringOrderUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): RecurringOrderUpdateBuilder
    {
        return new self();
    }
}
