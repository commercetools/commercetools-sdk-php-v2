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
 * @implements Builder<ContainerAndKey>
 */
final class ContainerAndKeyBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
     */
    private $container;

    /**
     * <p>User-defined identifier that is unique within the given container.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Namespace to group Custom Objects.</p>
     *
     * @return null|string
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $container
     * @return $this
     */
    public function withContainer(?string $container)
    {
        $this->container = $container;

        return $this;
    }


    public function build(): ContainerAndKey
    {
        return new ContainerAndKeyModel(
            $this->key,
            $this->container
        );
    }

    public static function of(): ContainerAndKeyBuilder
    {
        return new self();
    }
}
