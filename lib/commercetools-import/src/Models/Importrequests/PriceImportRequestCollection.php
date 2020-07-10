<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importrequests;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<PriceImportRequest>
 * @method PriceImportRequest current()
 * @method PriceImportRequest at($offset)
 */
class PriceImportRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert PriceImportRequest $value
     * @psalm-param PriceImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PriceImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof PriceImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PriceImportRequest
     */
    protected function mapper()
    {
        return function (int $index): ?PriceImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PriceImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
