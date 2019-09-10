<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObjectModel;

final class CartDiscountChangeSortOrderActionModel extends JsonObjectModel implements CartDiscountChangeSortOrderAction
{
    const DISCRIMINATOR_VALUE = 'changeSortOrder';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $sortOrder;

    public function __construct(
        string $action = null,
        string $sortOrder = null
    ) {
        $this->action = $action;
        $this->sortOrder = $sortOrder;
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
     * @return null|string
     */
    public function getSortOrder()
    {
        if (is_null($this->sortOrder)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountChangeSortOrderAction::FIELD_SORT_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->sortOrder = (string) $data;
        }

        return $this->sortOrder;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setSortOrder(?string $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }
}
