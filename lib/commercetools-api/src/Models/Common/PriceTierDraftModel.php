<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class PriceTierDraftModel extends JsonObjectModel implements PriceTierDraft
{
    /**
     * @var ?Money
     */
    protected $value;

    /**
     * @var ?int
     */
    protected $minimumQuantity;

    public function __construct(
        Money $value = null,
        int $minimumQuantity = null
    ) {
        $this->value = $value;
        $this->minimumQuantity = $minimumQuantity;
    }

    /**
     * @return null|Money
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceTierDraft::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }

            $this->value = MoneyModel::of($data);
        }

        return $this->value;
    }

    /**
     * @return null|int
     */
    public function getMinimumQuantity()
    {
        if (is_null($this->minimumQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(PriceTierDraft::FIELD_MINIMUM_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->minimumQuantity = (int) $data;
        }

        return $this->minimumQuantity;
    }

    public function setValue(?Money $value): void
    {
        $this->value = $value;
    }

    public function setMinimumQuantity(?int $minimumQuantity): void
    {
        $this->minimumQuantity = $minimumQuantity;
    }
}
