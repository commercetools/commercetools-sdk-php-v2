<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\ResourceIdentifier;
use Commercetools\Api\Models\Common\ResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ChannelResourceIdentifierModel extends JsonObjectModel implements ChannelResourceIdentifier
{
    public const DISCRIMINATOR_VALUE = 'channel';
    /**
     *
     * @var ?string
     */
    protected $typeId;

    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?string
     */
    protected $key;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?string $key = null,
        ?string $typeId = null
    ) {
        $this->id = $id;
        $this->key = $key;
        $this->typeId = $typeId ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>Type of referenced resource. If given, it must match the expected <a href="ctp:api:type:ReferenceTypeId">ReferenceTypeId</a> of the referenced resource.</p>
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
     * <p>Unique identifier of the referenced <a href="ctp:api:type:Channel">Channel</a>. Either <code>id</code> or <code>key</code> is required.</p>
     *
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>User-defined unique identifier of the referenced <a href="ctp:api:type:Channel">Channel</a>. Either <code>id</code> or <code>key</code> is required.</p>
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
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}
