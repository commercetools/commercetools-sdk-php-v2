<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearchConfig;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImageSearchConfigUpdateAction>
 * @method ImageSearchConfigUpdateAction current()
 * @method ImageSearchConfigUpdateAction at($offset)
 */
class ImageSearchConfigUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ImageSearchConfigUpdateAction $value
     * @psalm-param ImageSearchConfigUpdateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImageSearchConfigUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImageSearchConfigUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImageSearchConfigUpdateAction
     */
    protected function mapper()
    {
        return function (int $index): ?ImageSearchConfigUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ImageSearchConfigUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
