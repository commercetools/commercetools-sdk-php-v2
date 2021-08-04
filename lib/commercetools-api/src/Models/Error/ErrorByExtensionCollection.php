<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ErrorByExtension>
 * @method ErrorByExtension current()
 * @method ErrorByExtension end()
 * @method ErrorByExtension at($offset)
 */
class ErrorByExtensionCollection extends MapperSequence
{
    /**
     * @psalm-assert ErrorByExtension $value
     * @psalm-param ErrorByExtension|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ErrorByExtensionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ErrorByExtension) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ErrorByExtension
     */
    protected function mapper()
    {
        return function (?int $index): ?ErrorByExtension {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ErrorByExtension $data */
                $data = ErrorByExtensionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
