<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Label;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomObjectLabel>
 */
final class CustomObjectLabelBuilder implements Builder
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
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
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


    public function build(): CustomObjectLabel
    {
        return new CustomObjectLabelModel(
            $this->key,
            $this->container
        );
    }

    public static function of(): CustomObjectLabelBuilder
    {
        return new self();
    }
}
