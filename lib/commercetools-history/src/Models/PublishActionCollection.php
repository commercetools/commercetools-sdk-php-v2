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
 * @extends MapperSequence<PublishAction>
 * @method PublishAction current()
 * @method PublishAction at($offset)
 */
class PublishActionCollection extends MapperSequence
{
    /**
     * @psalm-assert PublishAction $value
     * @psalm-param PublishAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PublishActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof PublishAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PublishAction
     */
    protected function mapper()
    {
        return function (int $index): ?PublishAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PublishActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
