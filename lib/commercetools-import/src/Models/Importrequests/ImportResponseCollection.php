<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImportResponse>
 * @method ImportResponse current()
 * @method ImportResponse end()
 * @method ImportResponse at($offset)
 */
class ImportResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportResponse $value
     * @psalm-param ImportResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportResponse $data */
                $data = ImportResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
