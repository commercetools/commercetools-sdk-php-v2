<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\DiscountCode;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use DateTimeImmutable;
use DateTimeImmutableModel;

final class DiscountCodeSetValidUntilActionModel extends JsonObjectModel implements DiscountCodeSetValidUntilAction
{
    const DISCRIMINATOR_VALUE = 'setValidUntil';
    public function __construct(
        string $action = null,
        DateTimeImmutable $validUntil = null
    ) {
        $this->action = $action;
        $this->validUntil = $validUntil;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?DateTimeImmutable
     */
    protected $validUntil;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(DiscountCodeUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return DateTimeImmutable|null
     */
    final public function getValidUntil()
    {
       if (is_null($this->validUntil)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(DiscountCodeSetValidUntilAction::FIELD_VALID_UNTIL);
           if (is_null($data)) {
               return null;
           }
           $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
           if ($data === false) {
               return null;
           }
           $this->validUntil = $data;
       }
       return $this->validUntil;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setValidUntil(?DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }
    public function jsonSerialize() {
        $data = $this->toArray();
        if (isset($data[DiscountCodeSetValidUntilAction::FIELD_VALID_UNTIL]) && $data[DiscountCodeSetValidUntilAction::FIELD_VALID_UNTIL] instanceof \DateTimeImmutable) {
           $data[DiscountCodeSetValidUntilAction::FIELD_VALID_UNTIL] = $data[DiscountCodeSetValidUntilAction::FIELD_VALID_UNTIL]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object)$data;
    }
    
}