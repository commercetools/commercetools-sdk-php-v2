<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of AttributeGroupUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method AttributeGroupUpdateAction current()
 * @method AttributeGroupUpdateAction end()
 * @method AttributeGroupUpdateAction at($offset)
 */
class AttributeGroupUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeGroupUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeGroupUpdateAction) {
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
        return function (?int $index): ?AttributeGroupUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = AttributeGroupUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
