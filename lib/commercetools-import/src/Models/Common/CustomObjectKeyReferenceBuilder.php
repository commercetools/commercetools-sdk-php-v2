<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomObjectKeyReference>
 */
final class CustomObjectKeyReferenceBuilder implements Builder
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
     * <p>User-defined unique identifier of the referenced CustomObject.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>The <code>container</code> of the referenced CustomObject.</p>
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


    public function build(): CustomObjectKeyReference
    {
        return new CustomObjectKeyReferenceModel(
            $this->key,
            $this->container
        );
    }

    public static function of(): CustomObjectKeyReferenceBuilder
    {
        return new self();
    }
}
