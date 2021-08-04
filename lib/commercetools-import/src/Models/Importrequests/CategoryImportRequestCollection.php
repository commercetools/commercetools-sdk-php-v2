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
 * @extends ImportRequestCollection<CategoryImportRequest>
 * @method CategoryImportRequest current()
 * @method CategoryImportRequest at($offset)
 */
class CategoryImportRequestCollection extends ImportRequestCollection
{
    /**
     * @psalm-assert CategoryImportRequest $value
     * @psalm-param CategoryImportRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CategoryImportRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof CategoryImportRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CategoryImportRequest
     */
    protected function mapper()
    {
        return function (?int $index): ?CategoryImportRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CategoryImportRequest $data */
                $data = CategoryImportRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
