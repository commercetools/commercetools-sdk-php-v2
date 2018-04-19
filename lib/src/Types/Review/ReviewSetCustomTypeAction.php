<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Review;

use Commercetools\Types\Common\ResourceIdentifier;

interface ReviewSetCustomTypeAction extends ReviewUpdateAction
{
    const FIELD_FIELDS = 'fields';
    const FIELD_TYPE = 'type';

    /**
     * @return string
     */
    public function getFields();

    /**
     * @return ResourceIdentifier
     */
    public function getType();

    /**
     * @param string $fields
     * @return $this
     */
    public function setFields(string $fields);

    /**
     * @param ResourceIdentifier $type
     * @return $this
     */
    public function setType(ResourceIdentifier $type);

}
