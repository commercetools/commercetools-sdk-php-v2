<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderDiscountCodeStateSetMessagePayloadModel extends JsonObjectModel implements OrderDiscountCodeStateSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderDiscountCodeStateSet';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?DiscountCodeReference
     */
    protected $discountCode;

    /**
     * @var ?string
     */
    protected $state;

    /**
     * @var ?string
     */
    protected $oldState;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?DiscountCodeReference $discountCode = null,
        ?string $state = null,
        ?string $oldState = null
    ) {
        $this->discountCode = $discountCode;
        $this->state = $state;
        $this->oldState = $oldState;
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
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|DiscountCodeReference
     */
    public function getDiscountCode()
    {
        if (is_null($this->discountCode)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DISCOUNT_CODE);
            if (is_null($data)) {
                return null;
            }

            $this->discountCode = DiscountCodeReferenceModel::of($data);
        }

        return $this->discountCode;
    }

    /**
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    /**
     * @return null|string
     */
    public function getOldState()
    {
        if (is_null($this->oldState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->oldState = (string) $data;
        }

        return $this->oldState;
    }


    /**
     * @param ?DiscountCodeReference $discountCode
     */
    public function setDiscountCode(?DiscountCodeReference $discountCode): void
    {
        $this->discountCode = $discountCode;
    }

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?string $oldState
     */
    public function setOldState(?string $oldState): void
    {
        $this->oldState = $oldState;
    }
}
