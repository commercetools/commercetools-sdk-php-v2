<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\LocalizedString;

class StateDraftModel extends JsonObjectModel implements StateDraft {
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
     * @var StateRoleEnumCollection
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
            $value = $this->raw(StateDraft::FIELD_KEY);
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
            $value = $this->raw(StateDraft::FIELD_TYPE);
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
            $value = $this->raw(StateDraft::FIELD_NAME);
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
            $value = $this->raw(StateDraft::FIELD_DESCRIPTION);
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
            $value = $this->raw(StateDraft::FIELD_INITIAL);
            $this->initial = $value;
        }
        return $this->initial;
    }
    /**
     * @return StateRoleEnumCollection
     */
    public function getRoles()
    {
        if (is_null($this->roles)) {
            $value = $this->raw(StateDraft::FIELD_ROLES);
            if (is_null($value)) {
                return $this->mapData(StateRoleEnumCollection::class, null);
            }
            $value = $this->mapData(StateRoleEnumCollection::class, $value);
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
            $value = $this->raw(StateDraft::FIELD_TRANSITIONS);
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
     * @param StateRoleEnumCollection $roles
     * @return $this
     */
    public function setRoles(StateRoleEnumCollection $roles)
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

}
