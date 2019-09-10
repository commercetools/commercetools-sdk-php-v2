<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductRevertedStagedChangesMessage>
 * @method ProductRevertedStagedChangesMessage current()
 * @method ProductRevertedStagedChangesMessage at($offset)
 */
class ProductRevertedStagedChangesMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductRevertedStagedChangesMessage $value
     * @psalm-param ProductRevertedStagedChangesMessage|stdClass $value
     * @return ProductRevertedStagedChangesMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ProductRevertedStagedChangesMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductRevertedStagedChangesMessage
     */
    protected function mapper()
    {
        return function(int $index): ?ProductRevertedStagedChangesMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductRevertedStagedChangesMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}