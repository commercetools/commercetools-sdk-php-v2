<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<CustomObjectDraft>
 */
final class CustomObjectDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $container;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?JsonObject
     */
    private $value;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @return null|string
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return null|JsonObject
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    public function withContainer(?string $container)
    {
        $this->container = $container;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?JsonObject $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    public function build(): CustomObjectDraft
    {
        return new CustomObjectDraftModel(
            $this->container,
            $this->version,
            $this->value,
            $this->key
        );
    }

    public static function of(): CustomObjectDraftBuilder
    {
        return new self();
    }
}
