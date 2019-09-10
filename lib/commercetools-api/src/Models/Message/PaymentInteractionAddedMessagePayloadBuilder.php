<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;

/**
 * @implements Builder<PaymentInteractionAddedMessagePayload>
 */
final class PaymentInteractionAddedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?CustomFieldsBuilder|CustomFields
     */
    protected $interaction;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getInteraction()
    {
       return ($this->interaction instanceof CustomFieldsBuilder ? $this->interaction->build() : $this->interaction);
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withInteraction(?CustomFields $interaction)
    {
        $this->interaction = $interaction;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withInteractionBuilder(?CustomFieldsBuilder $interaction)
    {
        $this->interaction = $interaction;
        
        return $this;
    }
    
    public function build(): PaymentInteractionAddedMessagePayload {
        return new PaymentInteractionAddedMessagePayloadModel(
            $this->type,
            ($this->interaction instanceof CustomFieldsBuilder ? $this->interaction->build() : $this->interaction)
        );
    }
    
    public static function of(): PaymentInteractionAddedMessagePayloadBuilder
    {
        return new self();
    }
}