<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Common;

use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;


/**
 * @internal
 */
final class CustomerKeyReferenceModel extends JsonObjectModel implements CustomerKeyReference
{
    public const DISCRIMINATOR_VALUE = 'customer';
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $typeId;


    public function __construct(
        string $key = null
    ) {
        $this->key = $key;
        $this->typeId = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(KeyReference::FIELD_KEY);
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
     * @return null|string
     */
    public function getTypeId()
    {
        if (is_null($this->typeId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(KeyReference::FIELD_TYPE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->typeId = (string) $data;
        }

        return $this->typeId;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }



}
