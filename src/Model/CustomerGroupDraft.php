<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CustomerGroupDraft extends JsonObject {
    protected $groupName;

    /**
     * @return string
     */
    public function getGroupName(): string
    {
        if (is_null($this->groupName)) {
            $value = $this->raw('groupName');
            if (!is_null($value)) {
                $this->groupName = (string)$value;
            } else {
                return '';
            }
        }
        return $this->groupName;
    }
                
}
