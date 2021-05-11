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
 * @template T of ImageSearchConfigUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T at($offset)
 * @method ImageSearchConfigUpdateAction current()
 * @method ImageSearchConfigUpdateAction at($offset)
 */
class ImageSearchConfigUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
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
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (int $index): ?ImageSearchConfigUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ImageSearchConfigUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
