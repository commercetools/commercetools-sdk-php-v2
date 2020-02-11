<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class PriceTierModel extends JsonObjectModel implements PriceTier
{
    /**
     * @var ?int
     */
    protected $minimumQuantity;

    /**
     * @var ?TypedMoney
     */
    protected $value;


    public function __construct(
        int $minimumQuantity = null,
        TypedMoney $value = null
    ) {
        $this->minimumQuantity = $minimumQuantity;
        $this->value = $value;
    }

    /**
     * @return null|int
     */
    public function getMinimumQuantity()
    {
        if (is_null($this->minimumQuantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(PriceTier::FIELD_MINIMUM_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->minimumQuantity = (int) $data;
        }

        return $this->minimumQuantity;
    }

    /**
     * @return null|TypedMoney
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PriceTier::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyModel::resolveDiscriminatorClass($data);
            $this->value = $className::of($data);
        }

        return $this->value;
    }

    public function setMinimumQuantity(?int $minimumQuantity): void
    {
        $this->minimumQuantity = $minimumQuantity;
    }

    public function setValue(?TypedMoney $value): void
    {
        $this->value = $value;
    }
}
