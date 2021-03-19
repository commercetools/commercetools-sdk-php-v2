<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ChangeValueGiftLineItemChangeValueModel extends JsonObjectModel implements ChangeValueGiftLineItemChangeValue
{
    public const DISCRIMINATOR_VALUE = 'giftLineItem';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?Reference
     */
    protected $product;

    /**
     * @var ?int
     */
    protected $variantId;

    /**
     * @var ?Reference
     */
    protected $supplyChannel;

    /**
     * @var ?Reference
     */
    protected $distributionChannel;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Reference $product = null,
        ?int $variantId = null,
        ?Reference $supplyChannel = null,
        ?Reference $distributionChannel = null
    ) {
        $this->product = $product;
        $this->variantId = $variantId;
        $this->supplyChannel = $supplyChannel;
        $this->distributionChannel = $distributionChannel;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
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
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|Reference
     */
    public function getProduct()
    {
        if (is_null($this->product)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PRODUCT);
            if (is_null($data)) {
                return null;
            }

            $this->product =  ReferenceModel::of($data);
        }

        return $this->product;
    }

    /**
     * @return null|int
     */
    public function getVariantId()
    {
        if (is_null($this->variantId)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VARIANT_ID);
            if (is_null($data)) {
                return null;
            }
            $this->variantId =  (int) $data;
        }

        return $this->variantId;
    }

    /**
     * @return null|Reference
     */
    public function getSupplyChannel()
    {
        if (is_null($this->supplyChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SUPPLY_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->supplyChannel =  ReferenceModel::of($data);
        }

        return $this->supplyChannel;
    }

    /**
     * @return null|Reference
     */
    public function getDistributionChannel()
    {
        if (is_null($this->distributionChannel)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISTRIBUTION_CHANNEL);
            if (is_null($data)) {
                return null;
            }

            $this->distributionChannel =  ReferenceModel::of($data);
        }

        return $this->distributionChannel;
    }


    /**
     * @param ?Reference $product
     */
    public function setProduct(?Reference $product): void
    {
        $this->product = $product;
    }

    /**
     * @param ?int $variantId
     */
    public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }

    /**
     * @param ?Reference $supplyChannel
     */
    public function setSupplyChannel(?Reference $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }

    /**
     * @param ?Reference $distributionChannel
     */
    public function setDistributionChannel(?Reference $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }



}
