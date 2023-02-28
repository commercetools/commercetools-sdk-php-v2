<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyCartUpdate>
 */
final class MyCartUpdateBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?MyCartUpdateActionCollection
     */
    private $actions;

    /**
     * <p>Expected version of the Cart on which the changes apply.
     * If it does not match the actual version, a <a href="/../api/errors#409-conflict">409 Conflict</a> error is returned.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the Cart.</p>
     *

     * @return null|MyCartUpdateActionCollection
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
     * @param ?MyCartUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?MyCartUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): MyCartUpdate
    {
        return new MyCartUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): MyCartUpdateBuilder
    {
        return new self();
    }
}
