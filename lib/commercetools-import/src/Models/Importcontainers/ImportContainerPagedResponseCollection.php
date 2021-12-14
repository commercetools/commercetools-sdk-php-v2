<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImportContainerPagedResponse>
 * @method ImportContainerPagedResponse current()
 * @method ImportContainerPagedResponse end()
 * @method ImportContainerPagedResponse at($offset)
 */
class ImportContainerPagedResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ImportContainerPagedResponse $value
     * @psalm-param ImportContainerPagedResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImportContainerPagedResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImportContainerPagedResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImportContainerPagedResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ImportContainerPagedResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImportContainerPagedResponse $data */
                $data = ImportContainerPagedResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
