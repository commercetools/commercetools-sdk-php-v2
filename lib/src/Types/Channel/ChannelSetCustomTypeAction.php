<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\Type\TypeReference;

interface ChannelSetCustomTypeAction extends ChannelUpdateAction
{
    const FIELD_TYPE = 'type';
    const FIELD_FIELDS = 'fields';

    /**
     * @return TypeReference
     */
    public function getType();

    /**
     * @return object
     */
    public function getFields();

    /**
     * @param TypeReference $type
     * @return $this
     */
    public function setType(TypeReference $type);

    /**
     * @param object $fields
     * @return $this
     */
    public function setFields($fields);

}
