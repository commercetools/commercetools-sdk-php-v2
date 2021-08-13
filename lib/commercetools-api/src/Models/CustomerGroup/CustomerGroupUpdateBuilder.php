<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerGroupUpdate>
 */
final class CustomerGroupUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?CustomerGroupUpdateActionCollection
     */
    private $actions;

    /**
     * <p>Expected version of the customer group on which the changes should be applied.
     * If the expected version does not match the actual version, a 409 Conflict
     * will be returned.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>List of update actions to be performed on the customer group.</p>
     *
     * @return null|CustomerGroupUpdateActionCollection
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
     * @param ?CustomerGroupUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?CustomerGroupUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): CustomerGroupUpdate
    {
        return new CustomerGroupUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): CustomerGroupUpdateBuilder
    {
        return new self();
    }
}
