<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<InheritedAssociate>
 * @method InheritedAssociate current()
 * @method InheritedAssociate end()
 * @method InheritedAssociate at($offset)
 */
class InheritedAssociateCollection extends MapperSequence
{
    /**
     * @psalm-assert InheritedAssociate $value
     * @psalm-param InheritedAssociate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return InheritedAssociateCollection
     */
    public function add($value)
    {
        if (!$value instanceof InheritedAssociate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InheritedAssociate
     */
    protected function mapper()
    {
        return function (?int $index): ?InheritedAssociate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var InheritedAssociate $data */
                $data = InheritedAssociateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
