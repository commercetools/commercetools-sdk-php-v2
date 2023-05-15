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
 * @extends ImportRequestCollection<TypeImportRequest>
 * @method TypeImportRequest current()
 * @method TypeImportRequest end()
 * @method TypeImportRequest at($offset)
 */
class TypeImportRequestCollection extends ImportRequestCollection
{
    /**
     * @psalm-assert TypeImportRequest $value
     * @psalm-param TypeImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeImportRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?TypeImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeImportRequest $data */
                $data = TypeImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
