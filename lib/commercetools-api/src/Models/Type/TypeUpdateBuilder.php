<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TypeUpdate>
 */
final class TypeUpdateBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?TypeUpdateActionCollection
     */
    private $actions;

    /**
     * <p>Expected version of the type on which the changes should be applied.
     * If the expected version does not match the actual version, a 409 Conflict will be returned.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>Update actions to be performed on the Type.</p>
     *
     * @return null|TypeUpdateActionCollection
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
     * @param ?TypeUpdateActionCollection $actions
     * @return $this
     */
    public function withActions(?TypeUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }


    public function build(): TypeUpdate
    {
        return new TypeUpdateModel(
            $this->version,
            $this->actions
        );
    }

    public static function of(): TypeUpdateBuilder
    {
        return new self();
    }
}
