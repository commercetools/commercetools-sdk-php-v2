<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObjectModel;

final class CartDiscountValueRelativeModel extends JsonObjectModel implements CartDiscountValueRelative
{
    const DISCRIMINATOR_VALUE = 'relative';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?int
     */
    protected $permyriad;

    public function __construct(
        string $type = null,
        int $permyriad = null
    ) {
        $this->type = $type;
        $this->permyriad = $permyriad;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountValue::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|int
     */
    public function getPermyriad()
    {
        if (is_null($this->permyriad)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(CartDiscountValueRelative::FIELD_PERMYRIAD);
            if (is_null($data)) {
                return null;
            }
            $this->permyriad = (int) $data;
        }

        return $this->permyriad;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setPermyriad(?int $permyriad): void
    {
        $this->permyriad = $permyriad;
    }
}
