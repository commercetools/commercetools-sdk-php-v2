<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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

     * @var ?string
     */
    private $key;

    /**

     * @var null|mixed|mixed
     */
    private $value;

    /**

     * @var ?int
     */
    private $version;

    /**
     * <p>Namespace to group CustomObjects.</p>
     *

     * @return null|string
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * <p>User-defined unique identifier of the CustomObject within the defined <code>container</code>.</p>
     *

     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>Can be any JSON standard type, such as number, string, boolean, array, object, or a <a href="/../api/types">common API data type</a>.</p>
     * <ul>
     * <li>Fields within <code>value</code> that have <code>null</code> values <strong>are not saved</strong>.</li>
     * <li>For values of type <a href="ctp:api:type:Reference">Reference</a> the integrity of the data is not guaranteed. If the referenced object is deleted, the API does not delete the corresponding reference to it and the <code>value</code> points to a non-existing object in such case.</li>
     * </ul>
     *

     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * <p>Current version of the CustomObject.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
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
     * @param mixed $value
     * @return $this
     */
    public function withValue($value)
    {
        $this->value = $value;

        return $this;
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


    public function build(): CustomObjectDraft
    {
        return new CustomObjectDraftModel(
            $this->container,
            $this->key,
            $this->value,
            $this->version
        );
    }

    public static function of(): CustomObjectDraftBuilder
    {
        return new self();
    }
}
