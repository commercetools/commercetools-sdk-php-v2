<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Category;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;

final class CategorySetMetaDescriptionActionModel extends JsonObjectModel implements CategorySetMetaDescriptionAction
{
    const DISCRIMINATOR_VALUE = 'setMetaDescription';
    public function __construct(
        string $action = null,
        LocalizedString $metaDescription = null
    ) {
        $this->action = $action;
        $this->metaDescription = $metaDescription;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?LocalizedString
     */
    protected $metaDescription;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CategoryUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getMetaDescription()
    {
       if (is_null($this->metaDescription)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CategorySetMetaDescriptionAction::FIELD_META_DESCRIPTION);
           if (is_null($data)) {
               return null;
           }
           
           $this->metaDescription = LocalizedStringModel::of($data);
       }
       return $this->metaDescription;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setMetaDescription(?LocalizedString $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }
    
}