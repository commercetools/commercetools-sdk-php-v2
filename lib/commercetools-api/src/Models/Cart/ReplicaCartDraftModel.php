<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;


final class ReplicaCartDraftModel extends JsonObjectModel implements ReplicaCartDraft
{
    
    public function __construct(
        JsonObject $reference = null
    ) {
        $this->reference = $reference;
        
    }

    /**
     * @var ?JsonObject
     */
    protected $reference;

    /**
     *
     * @return JsonObject|null
     */
    final public function getReference()
    {
       if (is_null($this->reference)) {
           /** @psalm-var ?stdClass $data */
           $data = $this->raw(ReplicaCartDraft::FIELD_REFERENCE);
           if (is_null($data)) {
               return null;
           }
           $this->reference = JsonObjectModel::of($data);
       }
       return $this->reference;
    }
    final public function setReference(?JsonObject $reference): void
    {
        $this->reference = $reference;
    }
    
}