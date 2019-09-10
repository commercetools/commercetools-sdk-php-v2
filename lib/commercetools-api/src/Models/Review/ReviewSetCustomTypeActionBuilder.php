<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\FieldContainerBuilder;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierBuilder;

/**
 * @implements Builder<ReviewSetCustomTypeAction>
 */
final class ReviewSetCustomTypeActionBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?FieldContainerBuilder|FieldContainer
     */
    protected $fields;
    
    /**
     * @var ?TypeResourceIdentifierBuilder|TypeResourceIdentifier
     */
    protected $type;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       return $this->action;
    }
    
    /**
     *
     * @return FieldContainer|null
     */
    final public function getFields()
    {
       return ($this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields);
    }
    
    /**
     *
     * @return TypeResourceIdentifier|null
     */
    final public function getType()
    {
       return ($this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type);
    }
    /**
     * @return $this
     */
    final public function withAction(?string $action)
    {
        $this->action = $action;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withFields(?FieldContainer $fields)
    {
        $this->fields = $fields;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withType(?TypeResourceIdentifier $type)
    {
        $this->type = $type;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withFieldsBuilder(?FieldContainerBuilder $fields)
    {
        $this->fields = $fields;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withTypeBuilder(?TypeResourceIdentifierBuilder $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    public function build(): ReviewSetCustomTypeAction {
        return new ReviewSetCustomTypeActionModel(
            $this->action,
            ($this->fields instanceof FieldContainerBuilder ? $this->fields->build() : $this->fields),
            ($this->type instanceof TypeResourceIdentifierBuilder ? $this->type->build() : $this->type)
        );
    }
    
    public static function of(): ReviewSetCustomTypeActionBuilder
    {
        return new self();
    }
}