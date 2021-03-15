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
 * @extends MapperSequence<UnpublishAction>
 * @method UnpublishAction current()
 * @method UnpublishAction at($offset)
 */
class UnpublishActionCollection extends MapperSequence
{
    /**
     * @psalm-assert UnpublishAction $value
     * @psalm-param UnpublishAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return UnpublishActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof UnpublishAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?UnpublishAction
     */
    protected function mapper()
    {
        return function (int $index): ?UnpublishAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = UnpublishActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
