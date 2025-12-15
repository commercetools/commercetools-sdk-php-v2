<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<StandalonePriceSetPriceTiersChange>
 * @method StandalonePriceSetPriceTiersChange current()
 * @method StandalonePriceSetPriceTiersChange end()
 * @method StandalonePriceSetPriceTiersChange at($offset)
 */
class StandalonePriceSetPriceTiersChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert StandalonePriceSetPriceTiersChange $value
     * @psalm-param StandalonePriceSetPriceTiersChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceSetPriceTiersChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceSetPriceTiersChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceSetPriceTiersChange
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceSetPriceTiersChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceSetPriceTiersChange $data */
                $data = StandalonePriceSetPriceTiersChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
