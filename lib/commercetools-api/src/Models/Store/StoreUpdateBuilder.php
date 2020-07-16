<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Store;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreUpdate>
 */
final class StoreUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?StoreUpdateActionCollection
     */
    private $actions;

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|StoreUpdateActionCollection
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
     * @param ?StoreUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?StoreUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): StoreUpdate
    {
        return new StoreUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): StoreUpdateBuilder
    {
        return new self();
    }
}
