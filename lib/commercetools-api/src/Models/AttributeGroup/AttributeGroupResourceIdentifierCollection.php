<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<AttributeGroupResourceIdentifier>
 * @method AttributeGroupResourceIdentifier current()
 * @method AttributeGroupResourceIdentifier end()
 * @method AttributeGroupResourceIdentifier at($offset)
 */
class AttributeGroupResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert AttributeGroupResourceIdentifier $value
     * @psalm-param AttributeGroupResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeGroupResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeGroupResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeGroupResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeGroupResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeGroupResourceIdentifier $data */
                $data = AttributeGroupResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
