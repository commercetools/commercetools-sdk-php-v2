<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductTypeChangeEnumKeyActionModel extends JsonObjectModel implements ProductTypeChangeEnumKeyAction
{
    public const DISCRIMINATOR_VALUE = 'changeEnumKey';
    /**

     * @var ?string
     */
    protected $action;

    /**

     * @var ?string
     */
    protected $attributeName;

    /**

     * @var ?string
     */
    protected $key;

    /**

     * @var ?string
     */
    protected $newKey;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $attributeName = null,
        ?string $key = null,
        ?string $newKey = null
    ) {
        $this->attributeName = $attributeName;
        $this->key = $key;
        $this->newKey = $newKey;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Name of the AttributeDefinition to update.</p>
     *

     * @return null|string
     */
    public function getAttributeName()
    {
        if (is_null($this->attributeName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ATTRIBUTE_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->attributeName = (string) $data;
        }

        return $this->attributeName;
    }

    /**
     * <p>Existing key to be changed.</p>
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
     * <p>New key to be set.</p>
     *

     * @return null|string
     */
    public function getNewKey()
    {
        if (is_null($this->newKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NEW_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->newKey = (string) $data;
        }

        return $this->newKey;
    }


    /**
     * @param ?string $attributeName
     */
    public function setAttributeName(?string $attributeName): void
    {
        $this->attributeName = $attributeName;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $newKey
     */
    public function setNewKey(?string $newKey): void
    {
        $this->newKey = $newKey;
    }
}
