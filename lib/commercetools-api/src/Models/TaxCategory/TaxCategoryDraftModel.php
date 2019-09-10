<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\TaxCategory;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class TaxCategoryDraftModel extends JsonObjectModel implements TaxCategoryDraft
{
    
    public function __construct(
        TaxRateDraftCollection $rates = null,
        string $name = null,
        string $description = null,
        string $key = null
    ) {
        $this->rates = $rates;
        $this->name = $name;
        $this->description = $description;
        $this->key = $key;
        
    }

    /**
     * @var ?TaxRateDraftCollection
     */
    protected $rates;
    
    /**
     * @var ?string
     */
    protected $name;
    
    /**
     * @var ?string
     */
    protected $description;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return TaxRateDraftCollection|null
     */
    final public function getRates()
    {
       if (is_null($this->rates)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(TaxCategoryDraft::FIELD_RATES);
           if (is_null($data)) {
               return null;
           }
           $this->rates = TaxRateDraftCollection::fromArray($data);
       }
       return $this->rates;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(TaxCategoryDraft::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->name = (string)$data;
       }
       return $this->name;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getDescription()
    {
       if (is_null($this->description)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(TaxCategoryDraft::FIELD_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           $this->description = (string)$data;
       }
       return $this->description;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(TaxCategoryDraft::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setRates(?TaxRateDraftCollection $rates): void
    {
        $this->rates = $rates;
    }
    
    final public function setName(?string $name): void
    {
        $this->name = $name;
    }
    
    final public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
}