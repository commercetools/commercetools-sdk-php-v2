<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Types\Message\MessageCollectionModel;

use Commercetools\Exception\InvalidArgumentException;

class ProductRevertedStagedChangesMessageCollectionModel extends MessageCollectionModel implements ProductRevertedStagedChangesMessageCollection
{

    /**
     * @param ProductRevertedStagedChangesMessage $value
     * @return ProductRevertedStagedChangesMessageCollection
     */
    public function add($value) {
        if (!$value instanceof ProductRevertedStagedChangesMessage) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductRevertedStagedChangesMessage
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductRevertedStagedChangesMessage) {
            $data = $this->mapData(ProductRevertedStagedChangesMessage::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
