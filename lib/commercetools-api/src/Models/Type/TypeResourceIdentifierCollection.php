<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<TypeResourceIdentifier>
 * @method TypeResourceIdentifier current()
 * @method TypeResourceIdentifier at($offset)
 */
class TypeResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert TypeResourceIdentifier $value
     * @psalm-param TypeResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypeResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypeResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypeResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?TypeResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypeResourceIdentifier $data */
                $data = TypeResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
