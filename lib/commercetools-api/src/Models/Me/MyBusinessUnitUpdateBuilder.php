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
 * @implements Builder<MyBusinessUnitUpdate>
 */
final class MyBusinessUnitUpdateBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?MyBusinessUnitUpdateActionCollection
     */
    private $actions;

    /**
     * <p>Expected version of the BusinessUnit on which the changes should be applied.
     * If the expected version does not match the actual version, a <a href="ctp:api:type:ConcurrentModificationError">ConcurrentModification</a> error will be returned.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the BusinessUnit.</p>
     *

     * @return null|MyBusinessUnitUpdateActionCollection
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
     * @param ?MyBusinessUnitUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?MyBusinessUnitUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): MyBusinessUnitUpdate
    {
        return new MyBusinessUnitUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): MyBusinessUnitUpdateBuilder
    {
        return new self();
    }
}
