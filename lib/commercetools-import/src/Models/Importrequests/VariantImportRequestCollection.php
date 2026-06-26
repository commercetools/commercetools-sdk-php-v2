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
 * @extends ImportRequestCollection<VariantImportRequest>
 * @method VariantImportRequest current()
 * @method VariantImportRequest end()
 * @method VariantImportRequest at($offset)
 */
class VariantImportRequestCollection extends ImportRequestCollection
{
    /**
     * @psalm-assert VariantImportRequest $value
     * @psalm-param VariantImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantImportRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantImportRequest $data */
                $data = VariantImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
