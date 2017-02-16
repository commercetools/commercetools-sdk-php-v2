<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class State extends Resource {
    protected $key;
    protected $type;
    protected $name;
    protected $description;
    protected $initial;
    protected $builtIn;
    protected $roles;
    protected $transitions;

    /**
     * @return string
     */
    public function getKey(): string
    {
        if (is_null($this->key)) {
            $value = $this->raw('key');
            if (!is_null($value)) {
                $this->key = (string)$value;
            } else {
                return '';
            }
        }
        return $this->key;
    }
                

    /**
     * @return string
     */
    public function getType(): string
    {
        if (is_null($this->type)) {
            $value = $this->raw('type');
            if (!is_null($value)) {
                $this->type = (string)$value;
            } else {
                return '';
            }
        }
        return $this->type;
    }
                

    /**
     * @return LocalizedString
     */
    public function getName(): LocalizedString
    {
        if (is_null($this->name)) {
            $value = $this->raw('name');
            if (!is_null($value)) {
                $this->name = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->name;
    }
                

    /**
     * @return LocalizedString
     */
    public function getDescription(): LocalizedString
    {
        if (is_null($this->description)) {
            $value = $this->raw('description');
            if (!is_null($value)) {
                $this->description = Mapper::map($value, LocalizedString::class);
            } else {
                return Mapper::map([], LocalizedString::class);
            }
        }
        return $this->description;
    }
                

    /**
     * @return bool
     */
    public function getInitial(): bool
    {
        if (is_null($this->initial)) {
            $value = $this->raw('initial');
            if (!is_null($value)) {
                $this->initial = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->initial;
    }
                

    /**
     * @return bool
     */
    public function getBuiltIn(): bool
    {
        if (is_null($this->builtIn)) {
            $value = $this->raw('builtIn');
            if (!is_null($value)) {
                $this->builtIn = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->builtIn;
    }
                

    /**
     * @return array
     */
    public function getRoles(): array
    {
        if (is_null($this->roles)) {
            $value = $this->raw('roles');
            if (!is_null($value)) {
                $this->roles = $value;
            } else {
                return [];
            }
        }
        return $this->roles;
    }
                

    /**
     * @return StateReferenceCollection
     */
    public function getTransitions(): StateReferenceCollection
    {
        if (is_null($this->transitions)) {
            $value = $this->raw('transitions');
            if (!is_null($value)) {
                $this->transitions = Mapper::map($value, StateReferenceCollection::class);
            } else {
                return Mapper::map([], StateReferenceCollection::class);
            }
        }
        return $this->transitions;
    }
                
}
