<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use DateTimeImmutable;
use DateTimeImmutableModel;

final class CustomerDateOfBirthSetMessagePayloadModel extends JsonObjectModel implements CustomerDateOfBirthSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'CustomerDateOfBirthSet';
    public function __construct(
        string $type = null,
        DateTimeImmutable $dateOfBirth = null
    ) {
        $this->type = $type;
        $this->dateOfBirth = $dateOfBirth;
        
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
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MessagePayload::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getDateOfBirth()
    {
       if (is_null($this->dateOfBirth)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerDateOfBirthSetMessagePayload::FIELD_DATE_OF_BIRTH);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->dateOfBirth = $data;
       }
       return $this->dateOfBirth;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setDateOfBirth(?DateTimeImmutable $dateOfBirth): void
    {
        $this->dateOfBirth = $dateOfBirth;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[CustomerDateOfBirthSetMessagePayload::FIELD_DATE_OF_BIRTH]) && $data[CustomerDateOfBirthSetMessagePayload::FIELD_DATE_OF_BIRTH] instanceof \DateTimeImmutable) {
           $data[CustomerDateOfBirthSetMessagePayload::FIELD_DATE_OF_BIRTH] = $data[CustomerDateOfBirthSetMessagePayload::FIELD_DATE_OF_BIRTH]->format('Y-m-d');
        }
        return (object)$data;
    }
    
}