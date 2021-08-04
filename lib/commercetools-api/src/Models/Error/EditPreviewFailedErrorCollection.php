<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<EditPreviewFailedError>
 * @method EditPreviewFailedError current()
 * @method EditPreviewFailedError at($offset)
 */
class EditPreviewFailedErrorCollection extends ErrorObjectCollection
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
        return function (?int $index): ?EditPreviewFailedError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var EditPreviewFailedError $data */
                $data = EditPreviewFailedErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
