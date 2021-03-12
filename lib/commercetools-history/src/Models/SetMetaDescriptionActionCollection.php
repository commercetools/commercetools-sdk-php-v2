<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetMetaDescriptionAction>
 * @method SetMetaDescriptionAction current()
 * @method SetMetaDescriptionAction at($offset)
 */
class SetMetaDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetMetaDescriptionAction $value
     * @psalm-param SetMetaDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMetaDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMetaDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMetaDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetMetaDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetMetaDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
