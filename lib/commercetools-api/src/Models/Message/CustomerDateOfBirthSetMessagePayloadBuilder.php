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
use DateTimeImmutable;

/**
 * @implements Builder<CustomerDateOfBirthSetMessagePayload>
 */
final class CustomerDateOfBirthSetMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $dateOfBirth;

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
     * @return DateTimeImmutable|null
     */
    final public function getDateOfBirth()
    {
       return $this->dateOfBirth;
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
    final public function withDateOfBirth(?DateTimeImmutable $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
        
        return $this;
    }
    
    public function build(): CustomerDateOfBirthSetMessagePayload {
        return new CustomerDateOfBirthSetMessagePayloadModel(
            $this->type,
            $this->dateOfBirth
        );
    }
    
    public static function of(): CustomerDateOfBirthSetMessagePayloadBuilder
    {
        return new self();
    }
}