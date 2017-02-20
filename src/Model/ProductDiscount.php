<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductDiscount extends Resource {
    protected $name;
    protected $description;
    protected $value;
    protected $predicate;
    protected $sortOrder;
    protected $isActive;
    protected $references;

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
     * @return ProductDiscountValue
     */
    public function getValue(): ProductDiscountValue
    {
        if (is_null($this->value)) {
            $value = $this->raw('value');
            if (!is_null($value)) {
                $this->value = Mapper::map($value, ProductDiscountValue::resolveDiscriminatorClass($value));
            } else {
                return Mapper::map([], ProductDiscountValue::class);
            }
        }
        return $this->value;
    }
                

    /**
     * @return string
     */
    public function getPredicate(): string
    {
        if (is_null($this->predicate)) {
            $value = $this->raw('predicate');
            if (!is_null($value)) {
                $this->predicate = (string)$value;
            } else {
                return '';
            }
        }
        return $this->predicate;
    }
                

    /**
     * @return string
     */
    public function getSortOrder(): string
    {
        if (is_null($this->sortOrder)) {
            $value = $this->raw('sortOrder');
            if (!is_null($value)) {
                $this->sortOrder = (string)$value;
            } else {
                return '';
            }
        }
        return $this->sortOrder;
    }
                

    /**
     * @return bool
     */
    public function getIsActive(): bool
    {
        if (is_null($this->isActive)) {
            $value = $this->raw('isActive');
            if (!is_null($value)) {
                $this->isActive = (bool)$value;
            } else {
                return false;
            }
        }
        return $this->isActive;
    }
                

    /**
     * @return ReferenceCollection
     */
    public function getReferences(): ReferenceCollection
    {
        if (is_null($this->references)) {
            $value = $this->raw('references');
            if (!is_null($value)) {
                $this->references = Mapper::map($value, ReferenceCollection::class);
            } else {
                return Mapper::map([], ReferenceCollection::class);
            }
        }
        return $this->references;
    }
                
}
