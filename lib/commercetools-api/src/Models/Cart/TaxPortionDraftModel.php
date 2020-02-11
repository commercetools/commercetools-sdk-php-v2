<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;

final class TaxPortionDraftModel extends JsonObjectModel implements TaxPortionDraft
{

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?int
     */
    protected $rate;

    /**
     * @var ?Money
     */
    protected $amount;


    public function __construct(
        string $name = null,
        int $rate = null,
        Money $amount = null
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
            $data = $this->raw(TaxPortionDraft::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * @return null|int
     */
    public function getRate()
    {
        if (is_null($this->rate)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(TaxPortionDraft::FIELD_RATE);
            if (is_null($data)) {
                return null;
            }
            $this->rate = (int) $data;
        }

        return $this->rate;
    }

    /**
     * @return null|Money
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TaxPortionDraft::FIELD_AMOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->amount = MoneyModel::of($data);
        }

        return $this->amount;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setRate(?int $rate): void
    {
        $this->rate = $rate;
    }

    public function setAmount(?Money $amount): void
    {
        $this->amount = $amount;
    }



}
