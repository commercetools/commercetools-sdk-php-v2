<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Project;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CartClassificationType>
 * @method CartClassificationType current()
 * @method CartClassificationType at($offset)
 */
class CartClassificationTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert CartClassificationType $value
     * @psalm-param CartClassificationType|stdClass $value
     * @return CartClassificationTypeCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CartClassificationType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CartClassificationType
     */
    protected function mapper()
    {
        return function(int $index): ?CartClassificationType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CartClassificationTypeModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}