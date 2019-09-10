<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<TypeDraft>
 */
final class TypeDraftBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $name;
    
    /**
     * @var ?FieldDefinitionCollection
     */
    protected $fieldDefinitions;
    
    /**
     * @var ?LocalizedStringBuilder|LocalizedString
     */
    protected $description;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?array
     */
    protected $resourceTypeIds;

    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       return ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name);
    }
    
    /**
     *
     * @return FieldDefinitionCollection|null
     */
    final public function getFieldDefinitions()
    {
       return $this->fieldDefinitions;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getDescription()
    {
       return ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description);
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
    }
    
    /**
     *
     * @return array|null
     */
    final public function getResourceTypeIds()
    {
       return $this->resourceTypeIds;
    }
    /**
     * @return $this
     */
    final public function withName(?LocalizedString $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFieldDefinitions(?FieldDefinitionCollection $fieldDefinitions)
    {
        $this->fieldDefinitions = $fieldDefinitions;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDescription(?LocalizedString $description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withResourceTypeIds(?array $resourceTypeIds)
    {
        $this->resourceTypeIds = $resourceTypeIds;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDescriptionBuilder(?LocalizedStringBuilder $description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    public function build(): TypeDraft {
        return new TypeDraftModel(
            ($this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name),
            $this->fieldDefinitions,
            ($this->description instanceof LocalizedStringBuilder ? $this->description->build() : $this->description),
            $this->key,
            $this->resourceTypeIds
        );
    }
    
    public static function of(): TypeDraftBuilder
    {
        return new self();
    }
}