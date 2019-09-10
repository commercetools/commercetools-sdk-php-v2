<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TransactionDraft>
 * @method TransactionDraft current()
 * @method TransactionDraft at($offset)
 */
class TransactionDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert TransactionDraft $value
     * @psalm-param TransactionDraft|stdClass $value
     * @return TransactionDraftCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof TransactionDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TransactionDraft
     */
    protected function mapper()
    {
        return function(int $index): ?TransactionDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = TransactionDraftModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}