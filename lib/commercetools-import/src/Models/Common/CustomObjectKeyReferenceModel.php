<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomObjectKeyReferenceModel extends JsonObjectModel implements CustomObjectKeyReference
{
    public const DISCRIMINATOR_VALUE = 'key-value-document';
    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $typeId;

    /**
     *
     * @var ?string
     */
    protected $container;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $container = null,
        ?string $typeId = null
    ) {
        $this->key = $key;
        $this->container = $container;
        $this->typeId = $typeId ?? self::DISCRIMINATOR_VALUE;
    }

    /**
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
     * <p>The type of the referenced resource.</p>
     *
     *
     * @return null|string
     */
    public function getTypeId()
    {
        if (is_null($this->typeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->typeId = (string) $data;
        }

        return $this->typeId;
    }

    /**
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
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $container
     */
    public function setContainer(?string $container): void
    {
        $this->container = $container;
    }
}
