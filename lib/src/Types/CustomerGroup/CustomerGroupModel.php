<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ResourceModel;

use Commercetools\Types\Type\CustomFields;
use Commercetools\Builder\CustomerGroupUpdateBuilder;
use Commercetools\Types\Common\Resource;

class CustomerGroupModel extends ResourceModel implements CustomerGroup
{
    /**
     * @var string
     */
    protected $key;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var CustomFields
     */
    protected $custom;

    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(CustomerGroup::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(CustomerGroup::FIELD_NAME);
            $value = (string)$value;
            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            $value = $this->raw(CustomerGroup::FIELD_CUSTOM);
            if (is_null($value)) {
                return $this->mapData(CustomFields::class, null);
            }
            $value = $this->mapData(CustomFields::class, $value);

            $this->custom = $value;
        }
        return $this->custom;
    }

    /**
     * @param string $key
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = (string)$key;

        return $this;
    }
    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->name = (string)$name;

        return $this;
    }
    /**
     * @param CustomFields $custom
     * @return $this
     */
    public function setCustom(CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }


    /**
     * @return CustomerGroupUpdateBuilder
     */
    public function update()
    {
        $builder = new CustomerGroupUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}
