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
final class VariantSkuSetMessagePayloadModel extends JsonObjectModel implements VariantSkuSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'VariantSkuSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $sku;

    /**
     *
     * @var ?string
     */
    protected $oldSku;

    /**
     *
     * @var ?bool
     */
    protected $staged;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $sku = null,
        ?string $oldSku = null,
        ?bool $staged = null,
        ?string $type = null
    ) {
        $this->sku = $sku;
        $this->oldSku = $oldSku;
        $this->staged = $staged;
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
     * <p>The SKU that was set on the Variant.</p>
     *
     *
     * @return null|string
     */
    public function getSku()
    {
        if (is_null($this->sku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->sku = (string) $data;
        }

        return $this->sku;
    }

    /**
     * <p>The previous SKU of the Variant.</p>
     *
     *
     * @return null|string
     */
    public function getOldSku()
    {
        if (is_null($this->oldSku)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_SKU);
            if (is_null($data)) {
                return null;
            }
            $this->oldSku = (string) $data;
        }

        return $this->oldSku;
    }

    /**
     * <p>Whether the update was only applied to the staged Variant.</p>
     *
     *
     * @return null|bool
     */
    public function getStaged()
    {
        if (is_null($this->staged)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_STAGED);
            if (is_null($data)) {
                return null;
            }
            $this->staged = (bool) $data;
        }

        return $this->staged;
    }


    /**
     * @param ?string $sku
     */
    public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @param ?string $oldSku
     */
    public function setOldSku(?string $oldSku): void
    {
        $this->oldSku = $oldSku;
    }

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
}
