<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Review\ReviewUpdateActionModel;

use Commercetools\Types\Common\ResourceIdentifier;

class ReviewSetCustomTypeActionModel extends ReviewUpdateActionModel implements ReviewSetCustomTypeAction {
    const DISCRIMINATOR_VALUE = 'setCustomType';

    /**
     * @var string
     */
    protected $fields;
    /**
     * @var ResourceIdentifier
     */
    protected $type;

    /**
     * @return string
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            $value = $this->raw(ReviewSetCustomTypeAction::FIELD_FIELDS);
            $value = (string)$value;
            $this->fields = $value;
        }
        return $this->fields;
    }
    /**
     * @return ResourceIdentifier
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(ReviewSetCustomTypeAction::FIELD_TYPE);
            if (is_null($value)) {
                return $this->mapData(ResourceIdentifier::class, null);
            }
            $value = $this->mapData(ResourceIdentifier::class, $value);

            $this->type = $value;
        }
        return $this->type;
    }

    /**
     * @param string $fields
     * @return $this
     */
    public function setFields(string $fields)
    {
        $this->fields = (string)$fields;

        return $this;
    }
    /**
     * @param ResourceIdentifier $type
     * @return $this
     */
    public function setType(ResourceIdentifier $type)
    {
        $this->type = $type;

        return $this;
    }

}
