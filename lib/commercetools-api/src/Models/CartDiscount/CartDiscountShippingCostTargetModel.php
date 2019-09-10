<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObjectModel;

final class CartDiscountShippingCostTargetModel extends JsonObjectModel implements CartDiscountShippingCostTarget
{
    const DISCRIMINATOR_VALUE = 'shipping';

    /**
     * @var ?string
     */
    protected $type;

    public function __construct(
        string $type = null
    ) {
        $this->type = $type;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountTarget::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }
}
