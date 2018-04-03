<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Common\ResourceModel;

use Commercetools\Builder\StateUpdateBuilder;
use Commercetools\Types\Common\LocalizedString;
use Commercetools\Types\Common\Resource;

class StateModel extends ResourceModel implements State {
    /**
     * @var string
     */
    protected $key;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var LocalizedString
     */
    protected $name;
    /**
     * @var LocalizedString
     */
    protected $description;
    /**
     * @var mixed
     */
    protected $initial;
    /**
     * @var mixed
     */
    protected $builtIn;
    /**
     * @var array
     */
    protected $roles;
    /**
     * @var StateReferenceCollection
     */
    protected $transitions;

    /**
     * @return string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            $value = $this->raw(State::FIELD_KEY);
            $value = (string)$value;
            $this->key = $value;
        }
        return $this->key;
    }
    /**
     * @return string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            $value = $this->raw(State::FIELD_TYPE);
            $value = (string)$value;
            $this->type = $value;
        }
        return $this->type;
    }
    /**
     * @return LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            $value = $this->raw(State::FIELD_NAME);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->name = $value;
        }
        return $this->name;
    }
    /**
     * @return LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            $value = $this->raw(State::FIELD_DESCRIPTION);
            if (is_null($value)) {
                return $this->mapData(LocalizedString::class, null);
            }
            $value = $this->mapData(LocalizedString::class, $value);

            $this->description = $value;
        }
        return $this->description;
    }
    /**
     * @return mixed
     */
    public function getInitial()
    {
        if (is_null($this->initial)) {
            $value = $this->raw(State::FIELD_INITIAL);
            $this->initial = $value;
        }
        return $this->initial;
    }
    /**
     * @return mixed
     */
    public function getBuiltIn()
    {
        if (is_null($this->builtIn)) {
            $value = $this->raw(State::FIELD_BUILT_IN);
            $this->builtIn = $value;
        }
        return $this->builtIn;
    }
    /**
     * @return array
     */
    public function getRoles()
    {
        if (is_null($this->roles)) {
            $value = $this->raw(State::FIELD_ROLES);
            $value = (array)$value;
            $this->roles = $value;
        }
        return $this->roles;
    }
    /**
     * @return StateReferenceCollection
     */
    public function getTransitions()
    {
        if (is_null($this->transitions)) {
            $value = $this->raw(State::FIELD_TRANSITIONS);
            if (is_null($value)) {
                return $this->mapData(StateReferenceCollection::class, null);
            }
            $value = $this->mapData(StateReferenceCollection::class, $value);
            $this->transitions = $value;
        }
        return $this->transitions;
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
     * @param string $type
     * @return $this
     */
    public function setType(string $type)
    {
        $this->type = (string)$type;

        return $this;
    }
    /**
     * @param LocalizedString $name
     * @return $this
     */
    public function setName(LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }
    /**
     * @param LocalizedString $description
     * @return $this
     */
    public function setDescription(LocalizedString $description)
    {
        $this->description = $description;

        return $this;
    }
    /**
     * @param $initial
     * @return $this
     */
    public function setInitial($initial)
    {
        $this->initial = $initial;

        return $this;
    }
    /**
     * @param $builtIn
     * @return $this
     */
    public function setBuiltIn($builtIn)
    {
        $this->builtIn = $builtIn;

        return $this;
    }
    /**
     * @param array $roles
     * @return $this
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;

        return $this;
    }
    /**
     * @param StateReferenceCollection $transitions
     * @return $this
     */
    public function setTransitions(StateReferenceCollection $transitions)
    {
        $this->transitions = $transitions;

        return $this;
    }


    /**
     * @return StateUpdateBuilder
     */
    public function update()
    {
        $builder = new StateUpdateBuilder();
        $builder->setMapper($this->getMapper());
        $builder->with($this);
        return $builder;
    }
}
