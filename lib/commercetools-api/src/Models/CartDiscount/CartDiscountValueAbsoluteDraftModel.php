<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Common\MoneyCollection;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartDiscountValueAbsoluteDraftModel extends JsonObjectModel implements CartDiscountValueAbsoluteDraft
{
    const DISCRIMINATOR_VALUE = 'absolute';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?MoneyCollection
     */
    protected $money;

    public function __construct(
        string $type = null,
        MoneyCollection $money = null
    ) {
        $this->type = $type;
        $this->money = $money;
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
     * @return null|MoneyCollection
     */
    public function getMoney()
    {
        if (is_null($this->money)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(CartDiscountValueAbsoluteDraft::FIELD_MONEY);
            if (is_null($data)) {
                return null;
            }
            $this->money = MoneyCollection::fromArray($data);
        }

        return $this->money;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function setMoney(?MoneyCollection $money): void
    {
        $this->money = $money;
    }
}
