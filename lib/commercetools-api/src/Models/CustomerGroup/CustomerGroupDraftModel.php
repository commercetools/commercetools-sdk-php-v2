<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;

final class CustomerGroupDraftModel extends JsonObjectModel implements CustomerGroupDraft
{
    
    public function __construct(
        string $groupName = null,
        CustomFields $custom = null,
        string $key = null
    ) {
        $this->groupName = $groupName;
        $this->custom = $custom;
        $this->key = $key;
        
    }

    /**
     * @var ?string
     */
    protected $groupName;
    
    /**
     * @var ?CustomFields
     */
    protected $custom;
    
    /**
     * @var ?string
     */
    protected $key;

    /**
     *
     * @return string|null
     */
    final public function getGroupName()
    {
       if (is_null($this->groupName)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerGroupDraft::FIELD_GROUP_NAME);
           if (is_null($data)) {
               return null;
           }
           $this->groupName = (string)$data;
       }
       return $this->groupName;
    }
    
    /**
     *
     * @return CustomFields|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CustomerGroupDraft::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       if (is_null($this->key)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CustomerGroupDraft::FIELD_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->key = (string)$data;
       }
       return $this->key;
    }
    final public function setGroupName(?string $groupName): void
    {
        $this->groupName = $groupName;
    }
    
    final public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setKey(?string $key): void
    {
        $this->key = $key;
    }
    
}