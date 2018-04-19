<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class MessageConfigurationCollectionModel extends JsonCollection implements MessageConfigurationCollection
{

    /**
     * @param MessageConfiguration $value
     * @return MessageConfigurationCollection
     */
    public function add($value) {
        if (!$value instanceof MessageConfiguration) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return MessageConfiguration
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof MessageConfiguration) {
            $data = $this->mapData(MessageConfiguration::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
