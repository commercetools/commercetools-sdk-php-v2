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

final class OrderDiscountCodeAddedMessagePayloadModel extends JsonObjectModel implements OrderDiscountCodeAddedMessagePayload
{
    const DISCRIMINATOR_VALUE = 'OrderDiscountCodeAdded';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?DiscountCodeReference
     */
    protected $discountCode;

    public function __construct(
        string $type = null,
        DiscountCodeReference $discountCode = null
    ) {
        $this->type = $type;
        $this->discountCode = $discountCode;
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
            $data = $this->raw(OrderDiscountCodeAddedMessagePayload::FIELD_DISCOUNT_CODE);
            if (is_null($data)) {
                return null;
            }

            $this->discountCode = DiscountCodeReferenceModel::of($data);
        }

        return $this->discountCode;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setDiscountCode(?DiscountCodeReference $discountCode): void
    {
        $this->discountCode = $discountCode;
    }
}
