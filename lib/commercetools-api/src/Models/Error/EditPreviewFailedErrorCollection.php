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
 * @extends MapperSequence<EditPreviewFailedError>
 * @method EditPreviewFailedError current()
 * @method EditPreviewFailedError at($offset)
 */
class EditPreviewFailedErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert EditPreviewFailedError $value
     * @psalm-param EditPreviewFailedError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return EditPreviewFailedErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof EditPreviewFailedError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?EditPreviewFailedError
     */
    protected function mapper()
    {
        return function (int $index): ?EditPreviewFailedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = EditPreviewFailedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
