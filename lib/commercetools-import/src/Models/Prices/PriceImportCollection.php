<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Prices;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PriceImport>
 * @method PriceImport current()
 * @method PriceImport at($offset)
 */
class PriceImportCollection extends MapperSequence
{
    /**
     * @psalm-assert PriceImport $value
     * @psalm-param PriceImport|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PriceImportCollection
     */
    public function add($value)
    {
        if (!$value instanceof PriceImport) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PriceImport
     */
    protected function mapper()
    {
        return function (int $index): ?PriceImport {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PriceImportModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
