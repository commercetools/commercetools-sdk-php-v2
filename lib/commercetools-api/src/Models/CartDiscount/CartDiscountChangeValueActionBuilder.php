<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CartDiscountChangeValueAction>
 */
final class CartDiscountChangeValueActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var CartDiscountValueDraft|?CartDiscountValueDraftBuilder
     */
    private $value;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|CartDiscountValueDraft
     */
    public function getValue()
    {
        return $this->value instanceof CartDiscountValueDraftBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?CartDiscountValueDraft $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValueBuilder(?CartDiscountValueDraftBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): CartDiscountChangeValueAction
    {
        return new CartDiscountChangeValueActionModel(
            $this->action,
            ($this->value instanceof CartDiscountValueDraftBuilder ? $this->value->build() : $this->value)
        );
    }

    public static function of(): CartDiscountChangeValueActionBuilder
    {
        return new self();
    }
}
