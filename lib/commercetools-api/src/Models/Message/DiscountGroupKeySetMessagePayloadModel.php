<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DiscountGroupKeySetMessagePayloadModel extends JsonObjectModel implements DiscountGroupKeySetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'DiscountGroupKeySet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $key;

    /**
     *
     * @var ?string
     */
    protected $oldKey;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $key = null,
        ?string $oldKey = null,
        ?string $type = null
    ) {
        $this->key = $key;
        $this->oldKey = $oldKey;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p><code>key</code> value of the <a href="ctp:api:type:DiscountGroup">DiscountGroup</a> after the <a href="ctp:api:type:DiscountGroupSetKeyAction">Set Key</a> update action.</p>
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
     * <p><code>key</code> value of the <a href="ctp:api:type:DiscountGroup">DiscountGroup</a> before the <a href="ctp:api:type:DiscountGroupSetKeyAction">Set Key</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldKey()
    {
        if (is_null($this->oldKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->oldKey = (string) $data;
        }

        return $this->oldKey;
    }


    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?string $oldKey
     */
    public function setOldKey(?string $oldKey): void
    {
        $this->oldKey = $oldKey;
    }
}
