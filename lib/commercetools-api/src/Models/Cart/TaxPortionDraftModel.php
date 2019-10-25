<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\TypedMoneyDraft;
use Commercetools\Api\Models\Common\TypedMoneyDraftModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class TaxPortionDraftModel extends JsonObjectModel implements TaxPortionDraft
{
    /**
     * @var ?TypedMoneyDraft
     */
    protected $amount;

    /**
     * @var ?int
     */
    protected $rate;

    /**
     * @var ?string
     */
    protected $name;

    public function __construct(
        TypedMoneyDraft $amount = null,
        int $rate = null,
        string $name = null
    ) {
        $this->amount = $amount;
        $this->rate = $rate;
        $this->name = $name;
    }

    /**
     * @return null|TypedMoneyDraft
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(TaxPortionDraft::FIELD_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $className = TypedMoneyDraftModel::resolveDiscriminatorClass($data);
            $this->amount = $className::of($data);
        }

        return $this->amount;
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

    public function setAmount(?TypedMoneyDraft $amount): void
    {
        $this->amount = $amount;
    }

    public function setRate(?int $rate): void
    {
        $this->rate = $rate;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}
