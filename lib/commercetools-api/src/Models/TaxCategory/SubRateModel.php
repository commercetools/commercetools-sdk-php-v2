<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\JsonObjectModel;

final class SubRateModel extends JsonObjectModel implements SubRate
{
    /**
     * @var ?int
     */
    protected $amount;

    /**
     * @var ?string
     */
    protected $name;

    public function __construct(
        int $amount = null,
        string $name = null
    ) {
        $this->amount = $amount;
        $this->name = $name;
    }

    /**
     * @return null|int
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(SubRate::FIELD_AMOUNT);
            if (is_null($data)) {
                return null;
            }
            $this->amount = (int) $data;
        }

        return $this->amount;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(SubRate::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}
