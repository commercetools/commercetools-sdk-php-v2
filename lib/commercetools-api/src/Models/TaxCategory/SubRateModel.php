<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class SubRateModel extends JsonObjectModel implements SubRate
{
    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?int
     */
    protected $amount;


    public function __construct(
        string $name = null,
        int $amount = null
    ) {
        $this->name = $name;
        $this->amount = $amount;
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

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }
}
