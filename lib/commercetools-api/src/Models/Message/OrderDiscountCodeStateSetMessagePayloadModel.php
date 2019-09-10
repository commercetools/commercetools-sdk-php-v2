<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\DiscountCode\DiscountCodeReference;
use Commercetools\Api\Models\DiscountCode\DiscountCodeReferenceModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class OrderDiscountCodeStateSetMessagePayloadModel extends JsonObjectModel implements OrderDiscountCodeStateSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderDiscountCodeStateSet';

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
    protected $oldState;

    /**
     * @var ?string
     */
    protected $state;

    public function __construct(
        string $type = null,
        DiscountCodeReference $discountCode = null,
        string $oldState = null,
        string $state = null
    ) {
        $this->type = $type;
        $this->discountCode = $discountCode;
        $this->oldState = $oldState;
        $this->state = $state;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MessagePayload::FIELD_TYPE);
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
            $data = $this->raw(OrderDiscountCodeStateSetMessagePayload::FIELD_DISCOUNT_CODE);
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
    public function getOldState()
    {
        if (is_null($this->oldState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderDiscountCodeStateSetMessagePayload::FIELD_OLD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->oldState = (string) $data;
        }

        return $this->oldState;
    }

    /**
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(OrderDiscountCodeStateSetMessagePayload::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setDiscountCode(?DiscountCodeReference $discountCode): void
    {
        $this->discountCode = $discountCode;
    }

    public function setOldState(?string $oldState): void
    {
        $this->oldState = $oldState;
    }

    public function setState(?string $state): void
    {
        $this->state = $state;
    }
}
