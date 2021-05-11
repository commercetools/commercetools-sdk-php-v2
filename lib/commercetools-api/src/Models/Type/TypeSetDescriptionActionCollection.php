<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Type\TypeUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends TypeUpdateActionCollection<TypeSetDescriptionAction>
 * @method TypeSetDescriptionAction current()
 * @method TypeSetDescriptionAction at($offset)
 */
class TypeSetDescriptionActionCollection extends TypeUpdateActionCollection
{
    /**
     * @psalm-assert TypeSetDescriptionAction $value
     * @psalm-param TypeSetDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeSetDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeSetDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeSetDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?TypeSetDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeSetDescriptionAction $data */
                $data = TypeSetDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
