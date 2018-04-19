<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Types\Type\CustomFields;
use Commercetools\Builder\CustomerGroupUpdateBuilder;
use Commercetools\Types\Common\Resource;

interface CustomerGroup extends Resource
{
    const FIELD_KEY = 'key';
    const FIELD_NAME = 'name';
    const FIELD_CUSTOM = 'custom';

    /**
     * @return string
     */
    public function getKey();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return CustomFields
     */
    public function getCustom();

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key);

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom);

    /**
     * @return CustomerGroupUpdateBuilder
     */
    public function update();
}
