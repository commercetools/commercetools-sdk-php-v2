<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoney;
use Commercetools\Api\Models\Common\TypedMoneyModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class TaxPortionModel extends JsonObjectModel implements TaxPortion
{
    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?float
     */
    protected $rate;

    /**
     * @var ?TypedMoney
     */
    protected $amount;


    public function __construct(
        string $name = null,
        float $rate = null,
        TypedMoney $amount = null
    ) {
        $this->name = $name;
        $this->rate = $rate;
        $this->amount = $amount;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>A number in the range [0..1]</p>
     *
     * @return null|float
     */
    public function getRate()
    {
        if (is_null($this->rate)) {
            /** @psalm-var ?float $data */
            $data = $this->raw(self::FIELD_RATE);
            if (is_null($data)) {
                return null;
            }
            $this->rate = (float) $data;
        }

        return $this->rate;
    }

    /**
     * @return null|TypedMoney
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_AMOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->amount = TypedMoneyModel::of($data);
        }

        return $this->amount;
    }


    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setRate(?float $rate): void
    {
        $this->rate = $rate;
    }

    public function setAmount(?TypedMoney $amount): void
    {
        $this->amount = $amount;
    }
}
