<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomObjectDraftModel extends JsonObjectModel implements CustomObjectDraft
{
    /**
     *
     * @var ?string
     */
    protected $container;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?mixed
     */
    protected $value;

    /**
     *
     * @var ?int
     */
    protected $version;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $container = null,
        ?string $key = null,
        $value = null,
        ?int $version = null
    ) {
        $this->container = $container;
        $this->key = $key;
        $this->value = $value;
        $this->version = $version;
    }

    /**
     * <p>Namespace to group CustomObjects.</p>
     *
     *
     * @return null|string
     */
    public function getContainer()
    {
        if (is_null($this->container)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONTAINER);
            if (is_null($data)) {
                return null;
            }
            $this->container = (string) $data;
        }

        return $this->container;
    }

    /**
     * <p>User-defined unique identifier of the CustomObject within the defined <code>container</code>.</p>
     *
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>JSON standard types Number, String, Boolean, Array, Object, and <a href="/../api/types">common API data types</a>.
     * For values of type <a href="ctp:api:type:Reference">Reference</a> the integrity of the data is not guaranteed.
     * If the referenced object is deleted, the API does not delete the corresponding reference to it and the <code>value</code> points to a non-existing object in such case.</p>
     *
     *
     * @return null|mixed
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = $data;
        }

        return $this->value;
    }

    /**
     * <p>Current version of the CustomObject.</p>
     *
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }


    /**
     * @param ?string $container
     */
    public function setContainer(?string $container): void
    {
        $this->container = $container;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }
}
