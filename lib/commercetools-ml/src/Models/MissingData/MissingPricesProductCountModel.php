<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MissingPricesProductCountModel extends JsonObjectModel implements MissingPricesProductCount
{
    /**
     *
     * @var ?int
     */
    protected $total;

    /**
     *
     * @var ?int
     */
    protected $missingPrices;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?int $total = null,
        ?int $missingPrices = null
    ) {
        $this->total = $total;
        $this->missingPrices = $missingPrices;
    }

    /**
     *
     * @return null|int
     */
    public function getTotal()
    {
        if (is_null($this->total)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_TOTAL);
            if (is_null($data)) {
                return null;
            }
            $this->total = (int) $data;
        }

        return $this->total;
    }

    /**
     *
     * @return null|int
     */
    public function getMissingPrices()
    {
        if (is_null($this->missingPrices)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_MISSING_PRICES);
            if (is_null($data)) {
                return null;
            }
            $this->missingPrices = (int) $data;
        }

        return $this->missingPrices;
    }


    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void
    {
        $this->total = $total;
    }

    /**
     * @param ?int $missingPrices
     */
    public function setMissingPrices(?int $missingPrices): void
    {
        $this->missingPrices = $missingPrices;
    }
}
