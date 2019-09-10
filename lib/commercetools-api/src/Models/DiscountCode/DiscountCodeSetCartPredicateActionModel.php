<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObjectModel;

final class DiscountCodeSetCartPredicateActionModel extends JsonObjectModel implements DiscountCodeSetCartPredicateAction
{
    const DISCRIMINATOR_VALUE = 'setCartPredicate';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $cartPredicate;

    public function __construct(
        string $action = null,
        string $cartPredicate = null
    ) {
        $this->action = $action;
        $this->cartPredicate = $cartPredicate;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DiscountCodeUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getCartPredicate()
    {
        if (is_null($this->cartPredicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(DiscountCodeSetCartPredicateAction::FIELD_CART_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->cartPredicate = (string) $data;
        }

        return $this->cartPredicate;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setCartPredicate(?string $cartPredicate): void
    {
        $this->cartPredicate = $cartPredicate;
    }
}
