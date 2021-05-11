<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends BaseResourceCollection<CustomObject>
 * @method CustomObject current()
 * @method CustomObject at($offset)
 */
class CustomObjectCollection extends BaseResourceCollection
{
    /**
     * @psalm-assert CustomObject $value
     * @psalm-param CustomObject|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomObjectCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomObject) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomObject
     */
    protected function mapper()
    {
        return function (int $index): ?CustomObject {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomObject $data */
                $data = CustomObjectModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
