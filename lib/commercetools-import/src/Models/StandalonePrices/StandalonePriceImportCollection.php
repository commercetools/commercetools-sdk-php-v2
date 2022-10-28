<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\StandalonePrices;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Common\ImportResourceCollection;
use stdClass;

/**
 * @extends ImportResourceCollection<StandalonePriceImport>
 * @method StandalonePriceImport current()
 * @method StandalonePriceImport end()
 * @method StandalonePriceImport at($offset)
 */
class StandalonePriceImportCollection extends ImportResourceCollection
{
    /**
     * @psalm-assert StandalonePriceImport $value
     * @psalm-param StandalonePriceImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceImport
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceImport $data */
                $data = StandalonePriceImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
