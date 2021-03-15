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
 * @extends MapperSequence<SetAnonymousIdAction>
 * @method SetAnonymousIdAction current()
 * @method SetAnonymousIdAction at($offset)
 */
class SetAnonymousIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetAnonymousIdAction $value
     * @psalm-param SetAnonymousIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAnonymousIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAnonymousIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAnonymousIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetAnonymousIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetAnonymousIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
