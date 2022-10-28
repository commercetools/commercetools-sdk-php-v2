<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Importrequests\ImportRequestCollection;
use stdClass;

/**
 * @extends ImportRequestCollection<StandalonePriceImportRequest>
 * @method StandalonePriceImportRequest current()
 * @method StandalonePriceImportRequest end()
 * @method StandalonePriceImportRequest at($offset)
 */
class StandalonePriceImportRequestCollection extends ImportRequestCollection
{
    /**
     * @psalm-assert StandalonePriceImportRequest $value
     * @psalm-param StandalonePriceImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceImportRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceImportRequest $data */
                $data = StandalonePriceImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
