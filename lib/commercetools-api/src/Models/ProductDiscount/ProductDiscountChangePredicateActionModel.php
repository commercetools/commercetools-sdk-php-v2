<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductDiscount;

use Commercetools\Base\JsonObjectModel;

final class ProductDiscountChangePredicateActionModel extends JsonObjectModel implements ProductDiscountChangePredicateAction
{
    const DISCRIMINATOR_VALUE = 'changePredicate';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $predicate;

    public function __construct(
        string $predicate = null
    ) {
        $this->predicate = $predicate;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductDiscountUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>A valid ProductDiscount Predicate.</p>.
     *
     * @return null|string
     */
    public function getPredicate()
    {
        if (is_null($this->predicate)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductDiscountChangePredicateAction::FIELD_PREDICATE);
            if (is_null($data)) {
                return null;
            }
            $this->predicate = (string) $data;
        }

        return $this->predicate;
    }

    public function setPredicate(?string $predicate): void
    {
        $this->predicate = $predicate;
    }
}
