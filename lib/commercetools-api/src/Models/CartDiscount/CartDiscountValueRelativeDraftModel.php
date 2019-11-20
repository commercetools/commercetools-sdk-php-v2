<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObjectModel;

final class CartDiscountValueRelativeDraftModel extends JsonObjectModel implements CartDiscountValueRelativeDraft
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
        int $permyriad = null
    ) {
        $this->permyriad = $permyriad;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountValueDraft::FIELD_TYPE);
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
            $data = $this->raw(CartDiscountValueRelativeDraft::FIELD_PERMYRIAD);
            if (is_null($data)) {
                return null;
            }
            $this->permyriad = (int) $data;
        }

        return $this->permyriad;
    }

    public function setPermyriad(?int $permyriad): void
    {
        $this->permyriad = $permyriad;
    }
}
