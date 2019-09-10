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


final class ProductRevertedStagedChangesMessagePayloadModel extends JsonObjectModel implements ProductRevertedStagedChangesMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ProductRevertedStagedChanges';
    public function __construct(
        string $type = null,
        array $removedImageUrls = null
    ) {
        $this->type = $type;
        $this->removedImageUrls = $removedImageUrls;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?array
     */
    protected $removedImageUrls;

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
     * @return array|null
     */
    final public function getRemovedImageUrls()
    {
       if (is_null($this->removedImageUrls)) {
           /** @psalm-var ?array<int, mixed> $data */
           $data = $this->raw(ProductRevertedStagedChangesMessagePayload::FIELD_REMOVED_IMAGE_URLS);
           if (is_null($data)) {
               return null;
           }
           $this->removedImageUrls = $data;
       }
       return $this->removedImageUrls;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setRemovedImageUrls(?array $removedImageUrls): void
    {
        $this->removedImageUrls = $removedImageUrls;
    }
    
}