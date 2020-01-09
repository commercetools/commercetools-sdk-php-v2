<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObjectModel;

final class CartDiscountChangeRequiresDiscountCodeActionModel extends JsonObjectModel implements CartDiscountChangeRequiresDiscountCodeAction
{
    const DISCRIMINATOR_VALUE = 'changeRequiresDiscountCode';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?bool
     */
    protected $requiresDiscountCode;

    public function __construct(
        bool $requiresDiscountCode = null
    ) {
        $this->requiresDiscountCode = $requiresDiscountCode;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|bool
     */
    public function getRequiresDiscountCode()
    {
        if (is_null($this->requiresDiscountCode)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(CartDiscountChangeRequiresDiscountCodeAction::FIELD_REQUIRES_DISCOUNT_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->requiresDiscountCode = (bool) $data;
        }

        return $this->requiresDiscountCode;
    }

    public function setRequiresDiscountCode(?bool $requiresDiscountCode): void
    {
        $this->requiresDiscountCode = $requiresDiscountCode;
    }
}
